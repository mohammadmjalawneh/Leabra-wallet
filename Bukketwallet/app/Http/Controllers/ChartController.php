<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactions;
use Carbon\Carbon;
use DateTime;

class ChartController extends Controller
{
    function index()
    {
        if (!empty(session('user_id'))) {
            $Tra=new Transactions;
            $inoutcom=0;
            $now=new DateTime();
            $Year=$Tra->whereYear('date_ing', '=', $now->format('Y'))->where('user_id', '=', session('user_id'))->sum('amount');
            $month=$Tra->whereMonth('date_ing', '=', $now->format('m'))->where('user_id', '=', session('user_id'))->sum('amount');
            $today=$Tra->whereDay('date_ing', '=', $now->format('d'))->where('user_id', '=', session('user_id'))->sum('amount');
            return view('users/Charts', [
                'YearR'=>$Year,
                'MonthR'=>$month,
                'dayR'=>$today,
            ]);
        } else {
            return redirect('/');
        }
    }
}
