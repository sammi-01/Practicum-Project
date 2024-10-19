<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function category()
    {
        $category = Category::all();
        return view('frontend.partials.category',compact('category'));
    }
}
