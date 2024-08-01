<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReportsController extends Controller
{
    public function reports()
    {
        return view('backend.partials.reports');
    }
   
}
