<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicationsController
{
    public function applications()
   {
    $applicant=Applicant::all();
         return view('backend.partials.applicationlist' ,compact('applicant'));
     }

//     public function form()
//     {
//         return view('backend.partials.applicantform');
//     }
//   public function store()
//   {
    
  }


