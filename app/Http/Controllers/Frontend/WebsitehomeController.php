<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class WebsitehomeController
{
    public function home()
    {
        return view('frontend.partials.websitehome');
    }
}
