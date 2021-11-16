<?php

namespace App\Http\Controllers;

use session;
use Illuminate\Http\Request;
use App\Usertable;
use Illuminate\Validation\Rule;

class Usercontroller extends Controller
{
    function indexReg()
    {
        return view('Register');
    }
    function index()
    {
        return view('index');
    }
    function store(Request $request)
    {
        $validator = $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'conkey' => 'required',
            'phone' => 'required',
            'phone' => Rule::unique('usertables'),
            'birthdate' => 'required',
            'email' => 'required|email',
            'email' => Rule::unique('usertables'),
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'Repass' => 'required|same:password',
            'Currency' => 'required',
            'img' => 'required|mimes:jpeg,JPEG,jpg,JPG,png,PNG|max:5120',
        ]);
        $User = new Usertable;
        $User->fname = $request->fname;
        $User->mname = $request->mname;
        $User->lname = $request->lname;
        $User->email = $request->email;
        $User->birthdate = $request->birthdate;
        $User->password = $request->password;
        $User->con_code = $request->conkey;
        $User->phone = $request->phone;
        $fileName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads/Users'), $fileName);
        $User->img = $fileName;
        $User->currency = $request->Currency;
        $User->balance = 00.00;
        $User->save();
        $request->session()->flash('complete', "The register complete....Please login now");
        return redirect('/');
    }
    public function login(Request $request)
    {
        $Users = new Usertable();
        $result = $Users->where('email', '=', $request->email)->where('password', '=', $request->pwd)->get();
        if (!empty($result['0']->user_id)) {
            session(['user_id' => $result[0]->user_id]);
            return redirect('users/usersindex');
        } else {
            $request->session()->flash('complete', "Email or Password invalid Re-login please");
            return Redirect('/');
        }
    }
    public function destroy()
    {
        session()->flush();
        return redirect('/');
    }
}
