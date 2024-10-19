<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Category;
use App\Models\Jobpost;
use App\Models\Jobseeker;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard()
    {
        $applicant = Applicant::count();
        $companyCount=User::count();
        $categoryCount =Category::count();
        $jobpostCount=Jobpost::count();
     return view('backend.partials.dashboard',compact('applicant','companyCount','categoryCount','jobpostCount'));
    }
}
