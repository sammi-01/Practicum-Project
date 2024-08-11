<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController
{



    public function categoryf()
    {
        $allcategory=category::paginate(5);
        return view('backend.partials.categoryform',compact('allcategory'));
    }

    
    public function store(Request $request)
    {
       //dd($request->all());

       category::create([
        'name'=> $request->category_name,
        'Description'=> $request->category_description,
        'image'=>$fileName,

    ]);
    
        
}
}
