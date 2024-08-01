<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Jobpost;
use Illuminate\Http\Request;

class JobpostController
{
    public function jobpost()
    {
    
      $jobpost=Jobpost::all();
       return view('frontend.jobpost',compact('products'));
    }

}
