<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class JobseekersController
{
    
    public function jobseeker()
   {
   
    return view('frontend.partials.page.',compact('apply'));
   }
}
