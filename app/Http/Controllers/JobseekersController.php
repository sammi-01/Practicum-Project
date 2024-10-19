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

    // public function form() 
    // {
    //     Return view('backend.partials.jobseekersform');

        
    // }
    //validation
    public function store(Request $request)
    {
      
      $validation=  Validator::make($request->all(),[
         'name'=>'required',
         'address'=>'required',
        'mobile'=>'required'
       ]); 
       //dd($request->all());
     
       if($validation->fails())
      {
       //dd($validation) ;
         flash()->error($validation->getMessageBag());
         return redirect()->back();
      }

    //query
       Jobseeker::create([
        'name'=> $request->name,
        'address'=> $request->address,
        'mobile'=> $request->mobile

    ]);
  
    //dd($request->all());
    return redirect()->route('jobseekers.list');
    }
}
