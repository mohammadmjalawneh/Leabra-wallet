<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Usertable;
use App\Transactions;

class Admincontroller extends Controller
{
    function index()
    {
        if (!empty(session('admin_id'))) {
            $adminObject = new Admin;
            $usersObject = new Usertable;
            $usersInfo = $usersObject->all();
            $id = '';
            $Res = array();
            $Resf = array();
            $Tra = new Transactions;
            foreach ($usersInfo as $value) {
                $income = $Tra->where('user_id', '=', $value['user_id'])->where('cat_id', '=', '1')->sum('amount');
                $outcome = $Tra->where('user_id', '=', $value['user_id'])->where('cat_id', '=', '2')->sum('amount');
                $Res = array(
                    'user_id' => $value['user_id'],
                    'outcome' => $outcome,
                    'income' => $income
                );
                $Resf = array_merge($Resf, $Res);
            }
            $result = $adminObject->where('admin_id', '=', session('admin_id'))->get();
            return view('admin/index', [
                'admin' => $result,
                'users' => $result2,
                'Sum' => $Resf,
            ]);
        } else {
            return redirect('Admin/login');
        }
    }
    function destroy(Request $request)
    {
        session()->flush();
        return redirect('/users');
    }
}
