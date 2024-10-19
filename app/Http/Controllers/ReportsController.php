<?php

namespace App\Http\Controllers;

use App\Models\Jobpost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReportsController extends Controller
{
    public function reports()
    {
     
        $alljobpost=Jobpost::all();
        return view('backend.partials.reports',compact('alljobpost'));

       
    }
   
    public function report_generate()
    {
        if(request()->has('from_date') && request()->has('to_date'))
        {
         $alljobpost = Jobpost::whereBetween('created_at',[request()->from_date,request()->to_date])->get();
         //$allfoster=Foster::whereDate('created_at', date('y-m-d',strtotime(request()->from_date)))->
                       //  whereDate('created_at',date('y-m-d',strtotime(request()->to_date)))->get();
       
                        //  dd($allfoster);
         
         return view('backend.partials.reports',compact('alljobpost'));
        }
       
        $alljobpost=Jobpost::all();
        return view('backend.partials.reports',compact('alljobpost'));
     }
    }

