<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController
{
  public function category()
  {
      $allcategory=Category::paginate(5);
      return view('backend.partials.jcategorylist',compact('allcategory'));
  }



    public function categoryf()
    {
        $allcategory=Category::paginate(5);
        return view('backend.partials.categoryform');
    }

    
    public function store(Request $request)
    {
       //dd($request->all());
    
       
       
          //validation
          $validation= Validator::make($request->all(),[
           
           'category_name'=>'required|max:50',
           'category_description'=>'required|max:50',
        
          ]);
        
            if ($validation->fails())
            {
              notify()->error($validation->getMessageBag());
              return redirect()->back();
            }
   
           
          //query
          Category::create([
           'name'=> $request->category_name,
           'description'=> $request->category_description,
           
   
       ]);
            //dd($request->all());
   
       return redirect()->route('Category.list');
       }
      

    
        
}

