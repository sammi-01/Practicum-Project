<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobpostController
{
    public function post()
    {
        return view('backcend.partials.jobpostlist');
    }
}
