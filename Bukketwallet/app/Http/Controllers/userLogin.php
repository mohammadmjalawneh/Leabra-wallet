<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usertable;

class userLogin extends Controller
{
    public function index(Request $request)
    {
        if (!empty(session('user_id'))) {
            $user = new Usertable();
            $result = $user->where('user_id', '=', session('user_id'))->get();
            return view('users/usersindex', ['user' => $result]);
        } else {
            return view('index');
        }
    }
    public function index2(Request $request)
    {
        if (!empty(session('user_id'))) {
            $user = new Usertable();
            $result = $user->where('user_id', '=', session('user_id'))->get();
            return view('users/AddSubcategory', ['user' => $result]);
        } else {
            return redirect('/');
        }
    }
}
