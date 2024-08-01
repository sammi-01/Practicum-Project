<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MasterController extends Controller
{
    public function master()
    {
        return view('master');
    }
}
