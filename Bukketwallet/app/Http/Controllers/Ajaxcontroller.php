<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subcateTable;

class Ajaxcontroller extends Controller
{
    function index()
    {
        return view('users/Transaction');
    }
    function getdata(Request $request)
    {
        $subcateTable=new subcateTable;
        $data=$subcateTable
        ->where('cat_id', '=', $request->id)
        ->where('user_id', '=', session('user_id'))
        ->get();
        $output='';
        foreach ($data as $value) {
            $output=$output.("<option value='".$value['sub_id']."'>".$value['sub_name']."</option>");
        }
        echo $output;
    }
}
