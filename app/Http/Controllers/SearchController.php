<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SearchController extends Controller
{
    public function search()
    {
        return view('backend.partials.search');
    }
}
