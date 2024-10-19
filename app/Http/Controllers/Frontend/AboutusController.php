<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class AboutusController
{
    public function about()
{
    return view('frontend.partials.aboutus');
}

}
