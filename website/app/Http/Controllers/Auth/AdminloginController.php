<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminloginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function show()
    {
        return view('admin.login');
    }

    public function login()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ], request('remember'))) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput(request()->only('email', 'remember'));
    }
}
