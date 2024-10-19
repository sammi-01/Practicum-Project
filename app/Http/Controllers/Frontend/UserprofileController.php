<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Applicant;
use App\Models\Jobseeker;
use Illuminate\Http\Request;

class UserprofileController
{
    public function userprofile()
    {
        $myApplications=Applicant::with('job')->where('user_id',auth('Jobseekerguard')->user()->id)->get();
        return view('frontend.partials.userprofile',compact('myApplications'));
    }
}
