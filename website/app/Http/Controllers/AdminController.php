<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $products = Product::all();
        $product__inputs = [
            (object) [
                'name' => 'titel',
                'type' => 'text',
                'required' => true
            ],
            (object) [
                'name' => 'photo',
                'type' => 'file',
                'required' => true
            ],
            (object) [
                'name' => 'prijs',
                'type' => 'number',
                'required' => true
            ]
        ];

        return view('admin.dashboard', [
            'products' => $products,
            'product__inputs' => $product__inputs
        ]);
    }
}
