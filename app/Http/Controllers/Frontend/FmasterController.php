<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Company;
use App\Models\Jobpost;
use App\Models\User;

class FmasterController
{
    public function fmaster()
    {
       $alljobpost = Jobpost::all();
       $categories = Category::all();
       $companies = User::all();
       $companypost = Jobpost::all();

        return view('frontend.home',compact('alljobpost','categories','companies','companypost'));
    }


    // public function jobpost($id)
    //   {
    //     $alljobpost = Jobpost::find($id);
        
        
    //   }
  
    
}
