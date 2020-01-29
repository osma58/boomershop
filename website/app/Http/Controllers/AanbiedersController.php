<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AanbiedersController extends Controller
{
    public function index()
    {
        return view('aanbieders');
    }
}
