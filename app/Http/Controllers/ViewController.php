<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function displayView($viewName)
    {
        return view($viewName);
    }
}
