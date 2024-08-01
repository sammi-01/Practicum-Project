<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Jobseeker;
use Illuminate\Support\Facades\Validator;

class JobseekersController extends Controller
{
    public function jobseekers()
    {
        $alljobseekers=Jobseeker::paginate(5);
        return view('backend.partials.jobseekers',compact('alljobseekers'));
    }

    public function form() 
    {
        Return view('backend.partials.jobseekersform');

        
    }
    //validation
    public function store(Request $request)
    {
       //dd($request->all());
      $validation=  Validator::make($request->all(),[
        'jobseekers_name'=>'required|max:20',
        'job_address'=>'required|max:30',
        'mobile_number'=>'required|max:11'
      ]);
      if($validation->fails())
      {
        notify()->error($validation->getMessageBag());
        return redirect()->back();
      }

    //query
       Jobseeker::create([
        'name'=> $request->jobseekers_name,
        'address'=> $request->job_address,
        'mobile'=> $request->mobile_number

    ]);

    return redirect()->back();
    }
}
