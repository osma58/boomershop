<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AanbiedingenController extends Controller
{
    public function index()
    {
        return view('aanbiedingen');
    }
}
