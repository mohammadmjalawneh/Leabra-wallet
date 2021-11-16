<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Usertable;
use DateTime;
use App\bigcateTable;
use App\SubcateTable;
use App\Transactions;

class Transaction extends Controller
{
    function index()
    {
        if (!empty(session('user_id'))) {
            $User = new Usertable;
            $cat = new bigcateTable;
            $SubcateTable = new SubcateTable;
            $Userdata = $User->where('user_id', '=', session('user_id'))->get();
            return view('user/Transaction');
        } else {
            return redirect('/');
        }
    }

    function store(Request $request)
    {
        $vali = $request->validate([
            'catetype' => 'required',
            'subcate' => 'required',
            'amount' => 'required',
        ]);
        $Tra = new Transactions();
        $user = new Usertable();
        $now = new DateTime();
        $balance = $user->where('user_id', '=', session('user_id'))->get();
        if ($request->catetype == 1) {
            $Tra->cat_id = $request->catetype;
            $Tra->subcat_id = $request->subcate;
            $Tra->amount = $request->amount;
            $Tra->date_ing = $now->format('Y-m-d');
            $Tra->user_id = session('user_id');
            $Tra->note = $request->note;
            $Tra->save();
            $B = $balance[0]['balance'] + $request->amount;
            $user->where('user_id', session('user_id'))->update(['balance' => $B]);
            return redirect('users/Transaction');
        } else {
            if ($request->amount > $balance[0]['balance']) {
                $request->session()->flash('complete', "The balance Greater than Balance");
                return redirect('users/Transaction');
            } else {
                $Tra->cat_id = $request->catetype;
                $Tra->subcat_id = $request->subcate;
                $Tra->amount = $request->amount;
                $Tra->date_ing = $now->format('Y-m-d');
                $Tra->user_id = session('user_id');
                $Tra->note = $request->note;
                $Tra->save();
                $B = $balance[0]['balance'] - $request->amount;
                $user->where('user_id', session('user_id'))->update(['balance' => $B]);
                $request->session()->flash('complete', "The Opration  complete");
                return redirect('users/Transaction');
            }
        }
    }
}
