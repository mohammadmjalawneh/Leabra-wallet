<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class Adminlogincontroller extends Controller
{
    public function index()
    {
        return view('Admin/login');
    }
    function checklogin(Request $request)
    {
        $Admin=new Admin();
        $result=$Admin->where('email', '=', $request->email)->where('password', '=', $request->password)->get();
        if (!empty($result[0]->admin_id)) {
            session(['admin_id' => $result[0]->admin_id]);
            return redirect('Admin/index');
        } else {
            $request->session()->flash('complete', "Email or Password invalid Re-login please");
            return Redirect('/admin/login');
        }
    }
}
