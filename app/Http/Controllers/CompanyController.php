<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;

class CompanyController 
{
    public function company()
    {
        $allcompany=Company::paginate(5);
        return view('backend.partials.company',compact('allcompany'));
    }

    public function form() 
    {
        $allcompany=Company::all();
        return view('backend.partials.companyform',compact('allcompany'));

        
    }
    public function store(Request $request)
    {
       //dd($request->all());
       //validation
       $validation= Validator::make($request->all(),[
        'company_name'=>'required|max:30',
        'company_address'=>'required|max:20',
        'mobile_number'=>'required|max:11',
        'company_image'=>'required|file|max:1024'
       ]);
         if ($validation->fails())
         {
           notify()->error($validation->getMessageBag());
           return redirect()->back();
         }

         $fileName=null;
         
         if($request->hasFile('company_image'))
         {
            $file=$request->file('company_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/',$fileName);
         }
       //query
       Company::create([
        'name'=> $request->company_name,
        'address'=> $request->company_address,
        'mobile'=> $request->mobile_number,
        'image'=>$fileName

    ]);

    return redirect()->route('company.list');
    }
}


