<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\User;
//use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CompanyController 
{
    public function company()
    {
        $allcompany=User::all();
        return view('backend.partials.companylist',compact('allcompany'));
    }

    public function form() 
    {
       
        return view('backend.partials.companyform');

        
    }
    public function store(Request $request)
    {
      // dd($request);
       //validation
       $validation= Validator::make($request->all(),[
        'company_name'=>'required',
        'company_address'=>'required',
        'mobile_number'=>'required|max:11',
        'company_image'=>'required'
        
       ]);
         if ($validation->fails())
         {
          //dd($validation);
           flash()->error($validation->getMessageBag());
           return redirect()->back();
         
         }

         $fileName=null;
         
         if($request->hasFile('company_image'))
         {
            $file=$request->file('company_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/',$fileName);
         }
       //query column name-----input field
       User::create([
        'name'=> $request->company_name,
        'address'=> $request->company_address,
        'mobile'=> $request->mobile_number,
        'email'=>$request->company_email,
        'password'=>bcrypt($request->password),
        'role'=>'company',
        'image'=>$fileName
        
]);
      //dd($request->all());

     return redirect()->route('company.list');
    }

    public function view($p_id)
    {
        $company=User::find($p_id);

        return view('backend.partials.page.companyview',compact('company'));
    }


}


