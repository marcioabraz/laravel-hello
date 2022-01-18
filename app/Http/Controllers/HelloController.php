<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Type $var = null)
    {
        return view('template');
    }

    public function act(Type $var = null)
    {
        return view('act');
    }
}
