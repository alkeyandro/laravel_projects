<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zController extends Controller
{
    public function zindex($value)
    {
        return view('zindex');
    }
}
