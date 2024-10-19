<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ContactController
{
    public function contact()
    {
        return view('frontend.partials.contact');
    }
}
