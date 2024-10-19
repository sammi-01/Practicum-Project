<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Company;
use App\Models\Jobpost;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController
{
    public function search()
    {
       
        
        $category = Category::where('name','LIKE','%'.request()->search_key . '%')
      ->OrWhere('description','LIKE','%'.request()->search_key.'%')->get() ;
        // $jobPosts = Jobpost::where('title', 'LIKE', '%' .request()->search_key . '%')->get();

       
        return view('frontend.partials.searchjob', compact('category'));
    }
}
