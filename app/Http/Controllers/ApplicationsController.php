<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController
{
    public function applications()
    {
        return view('backend.partials.applications');
    }
}
