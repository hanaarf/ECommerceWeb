<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class buyercontroller extends Controller
{
    function indexlp()
    {
        return view('autlp');
    }

    function registrationlp()
    {
        return view('autlp');
    }


    function validate_registrationlp(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required',
            'password'     =>   'required'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('registrationlp')->with('success', 'Registration Completed, now you can login');
    }

    function validate_loginlp(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentialsi = $request->only('email', 'password');

        if(Auth::attempt($credentialsi))
        {
            return redirect('/kitkat');
        }

        return redirect('loginlp')->with('success', 'Login details are not valid');
    }

    function dashboardlp()
    {
        if(Auth::check())
        {
            return view('landingpage.landing');
        }

        return redirect('loginlp')->with('success', 'you are not allowed to access');
    }

    function logoutlp()
    {
        Session::flush();

        Auth::logout();

        return Redirect('/');
    }
}
