<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class CategoryController
{
  public function category()
  {
      $allcategory= Category::all();
      
      return view('backend.partials.jcategorylist',compact('allcategory'));
  }



    public function categoryf()
    {
        $allcategory=Category::paginate(5);
       
        return view('backend.partials.categoryform',compact('allcategory'));
    }

    
    public function store(Request $request)
    {
      //  dd($request->all());
    
       
       
          //validation
          $validation= Validator::make($request->all(),[
           
           'category_name'=>'required',
           'category_description'=>'required',
        
          ]);
        
            if ($validation->fails())
            {
              flash()->error($validation->getMessageBag());
              return redirect()->back();
            }
   
           
          //query
          Category::create([
          'name'=> $request->category_name,
          'description'=> $request->category_description,
           
   
       ]);
            // dd($request->all());
   
       return redirect()->route('Category.list');
       }
      

       public function view($p_id)
       {
           $category=Category::find($p_id);
   
           return view('backend.partials.page.category',compact('category'));
       }
   
   
       public function delete($p_id)
       {
   
           // Product::find($id)->delete();
           $category=Category::find($p_id);
           $category->delete();
   
           flash()->success('Category Deleted successfully.');
   
           return redirect()->back();
   
   
       }
   
        
}

