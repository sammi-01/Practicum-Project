<?php

namespace App\Http\Controllers\Frontend;
use App\Models\seeker;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SeekersController
{
    // Validation login
    public function login(Request $request)
    {
        $validation= Validator::make($request->all(),[

          'email'=> 'required'|'email',
          'password'=>'required'
          
        ]);

        if ($validation->fails())
        {
            notify()->error($validation->getMessageBag());
        return redirect()->back();
        }
        $credeintials=$request->except('_token');
        $check=auth('Jobseekerguard')->attempt($credeintials);
        if($check)
        {
          notify()->success('Login Sucessflly');
          return redirect()->route('frontend.master');
        }
        else{
          notify()->error('Login Faild');
          return redirect()->route('frontend.master');
        }
      
        
      
  

      //query login
       Seeker::create([
        'email'=>$request->email,
        'password'=>$request->password


      ]);
      return redirect()->back();
   
    }
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
            notify()->error($validation->getMessageBag());
        return redirect()->back();
        }

     
      return redirect()->back();
     
      
   
    }

}
