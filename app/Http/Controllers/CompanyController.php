<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
//use App\Models\Category;
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
        'company_name'=>'required',
        'company_address'=>'required',
        'mobile_number'=>'required|max:11',
        'company_image'=>'required'
        
       ]);
         if ($validation->fails())
         {
          dd($validation);
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

    public function viewPost($id)
    {
        $companypost=Company::find($id);

        return view('backend.partials.page.postview',compact('companypost'));
    }

    public function edit($p_id)
    {

        $companypost=Company::find($p_id);
       // $allCategory=Category::all();
        return view('backend.partials.page.postedit',compact('companypost'));
    }


    public function delete($id)
    {

        // Product::find($id)->delete();
        $companypost=Company::find($id);
        $companypost->delete();

        notify()->success('post Deleted successfully.');

        return redirect()->back();


    }


}


