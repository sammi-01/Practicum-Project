<?php

namespace App\Http\Controllers\Frontend;
use App\Models\seeker;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SeekersController
{
  
    //validation for registration

    public function register(Request $request)
    {
   
      $validation= Validator::make($request->all(),[

          'name'=> 'required',
          'email'=>'required',
          'password'=>'required|confirmed'
          

        ]);
        
        

        if ($validation->fails())
        {
            flash()->error($validation->getMessageBag());
        return redirect()->back();
        }

        //query
        Seeker::create([
       'name'=>$request->name,
       'email'=>$request->email,
       'password'=>bcrypt($request->password),


        ]);

       flash()->success("Registration Successfull");
     
      return redirect()->back();
     
      
   
    }
  // Validation login
  public function login(Request $request)
  {
   
      $validation= Validator::make($request->all(),[
    
        'email'=> 'required|email',
        'password'=>'required'
        
      ]);
      

      if ($validation->fails())
      {
          flash()->error($validation->getMessageBag());
      return redirect()->back();
      }
      $credeintials=$request->except('_token');
      $check=auth('Jobseekerguard')->attempt($credeintials);
      //dd($check);
      if($check)
      {
        flash()->success('Login Sucessflly');
        return redirect()->route('frontend.home');
      }
      else{
        flash()->error('Login Faild');
        return redirect()->route('frontend.home');
      }
    

    }

    public function logout()
    {
      // auth('customerGuard')->logout();
      // session()->forget('basket');
      // notify()->success('logout successfully');
      // return redirect()->route('frontend.home');

      auth('Jobseekerguard')->logout();
      flash()->success('Logout Successful');
      return redirect()->route('frontend.home');
    }

}
