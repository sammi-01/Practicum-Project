<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Models\Category;
class FmasterController
{
    public function fmaster()
    {
        $categories=Category::all();
        return view('frontend.fmaster',compact('categories'));
    }
}
