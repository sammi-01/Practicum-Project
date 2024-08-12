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
       return view('frontend.jobpost',compact('jobpost'));
    }

    public function search()
    {
      $jobpost=Jobpost::where('jobtitle','LIKE','%'.request()->search_key.'%')->get();
      return view('frontend.partials.searchjob');

      
    }
}
