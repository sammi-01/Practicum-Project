<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthorController extends JobseekersController
{
    public function login()
    {
        return view('backend.partials.login');
    }
    public function loginprocess(Request $request)
    {
        //dd($request->all());
        $credentials=$request->except("_token");
        $check=Auth::attempt($credentials);
        //dd($check);
        if($check)
        {
            flash()->success("login successsfull");
            return redirect()->route('master.panel');
        }
        else{
             return redirect()->back();
        }
    }


    public function logout()
    {
        Auth::logout();
       # auth('seekersGuard')->logout();
        flash()->error("Logout Successful");

        return redirect()->route('login');
    }
}
