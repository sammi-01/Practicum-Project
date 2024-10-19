<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Applicant;
use App\Models\Jobpost;
use App\Models\User;

use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplyController
{
    public function apply($p_id)
   {
  
   $applyjobpost=Jobpost::find($p_id);

    return view('frontend.partials.page.applyjob',compact('applyjobpost'));
   }
   public function applicant(Request $request,$p_id)
   {
    // dd($request->all());
       
    $validation= Validator::make($request->all(),[
        'full_name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'cover_letter' => 'required|mimes:pdf',
        'resume' => 'required|mimes:pdf' ,
        'jobpost_id'=>'required'
       ]);

       if ($validation->fails())
       {
        //dd($validation);
         flash()->error($validation->getMessageBag());
         return redirect()->back();
       
       }
       if ($request->hasFile('resume')) {
        $fileName=date('ymdhis').'.'.$request->file('resume')->getClientOriginalExtension();
           $resumePath = $request->file('resume')->storeAs('/resumes',$fileName ); 
       }

       $company=User::find($p_id);
         Applicant::create([
           'user_id' => $company->id, // The logged-in user ID
           'full_name' => $request->full_name,
           'email' => $request->email,
           'phone' => $request->phone,
           'cover_letter' => $fileName ?? '',
           'resume' => $fileName ?? '', 
           'jobpost' =>$request->jobpost_id
       ]);

      
       return redirect()->route('user.profile')->with('success', 'Your application has been submitted successfully!');
   }
//    public function applicantlist()
//     {
//         $applications = Applicant::all(); // Fetch all job applications
//         return view('frontend.partials.page.applyjoblist', compact('applications'));
//     }

   
}
