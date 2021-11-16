<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usertable;
use App\bigcateTable;
use App\SubcateTable;
use App\Transactions;

class SummaryController extends Controller
{
    function index()
    {
        if (!empty(session('user_id'))) {
            $User = new Usertable;
            $cat = new bigcateTable;
            $SubcateTable = new SubcateTable;
            $Userdata = $User->where('user_id', '=', session('user_id'))->get();
            $Tra = new Transactions;
            $userTra = $Tra->where('user_id', '=', session('user_id'))->get();
            $userTraI = $Tra->where('user_id', '=', session('user_id'))->where('cat_id', '=', '1')->get();
            $userTraO = $Tra->where('user_id', '=', session('user_id'))->where('cat_id', '=', '2')->get();
            $incom = 0;
            $outcome = 0;
            $subdata = $SubcateTable->where('user_id', '=', session('user_id'))->get();
            foreach ($userTraI as $value) {
                $incom += $value['amount'];
            }
            foreach ($userTraO as $value) {
                $outcome += $value['amount'];
            }
            return view('users/Summary', [
                'data' => $Userdata,
                'userTra' => $userTra,
                'userin' => $incom,
                'userout' => $outcome,
                'subcat' => $subdata,
            ]);
        } else {
            return redirect('/');
        }
    }
}
