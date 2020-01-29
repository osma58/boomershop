<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class ShoppingcartController extends Controller
{
    public function __construct()
    {
        if (isset($_COOKIE['shoppingCart'])) {
            $items = json_decode($_COOKIE['shoppingCart']);
        } else {
            $values = (object) [
                'id' => uniqid(),
                'items' => []
            ];
            setcookie('shoppingCart', json_encode($values), time() + (86400 * 30), "/");
        }
    }

    private function getCart()
    {
        return json_decode($_COOKIE['shoppingCart']);
    }

    private function postCart()
    {
        //
    }

    public function index()
    {
        $products = Product::all();
        return view('winkelmandje', [
            'products' => $products
        ]);
    }

    public function store($id)
    {
        $cart = $this->getCookies();

        var_dump($cart);

        return redirect()->back();
    }

    public function delete($id)
    {

        return redirect()->back();
    }
}
