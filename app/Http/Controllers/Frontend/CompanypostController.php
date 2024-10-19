<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Company;
use App\Models\Jobpost;
use App\Models\Seeker;
use App\Models\User;
use Illuminate\Http\Request;

class CompanypostController
{
    public function companypost($p_id)
    {
        $companypost = Jobpost::find($p_id);
        

        return view('frontend.partials.page.singlecompanypost', compact('companypost'));
    }
   public function view($c_id)
   {
    $viewdetails=User::find($c_id);
    
    $viewdetails = User::where('id', $viewdetails->id)->get();

       return view('frontend.partials.page.viewdetails',compact('viewdetails'));
    
  
   
   }
   

  
}
