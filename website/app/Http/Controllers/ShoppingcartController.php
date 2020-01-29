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
        $product_cookie_ids = json_decode($_COOKIE['shoppingCart'])->items;
        $cart = (object) [
            'products' => []
        ];
        foreach ($product_cookie_ids as $item) {
            $class = Product::find($item->id);
            if ($class) {
                $alreadyExists = false;
                foreach ($cart->products as $p) {
                    if ($p->id == $class->id)
                        $alreadyExists = true;
                }
                if (!$alreadyExists) {
                    $product = (object) [
                        'id' => $class->id,
                        'titel' => $class->titel,
                        'price' => $class->price,
                        'quantity' => 1
                    ];
                    array_push($cart->products, $product);
                }
            }
        }
        return $cart;
    }

    private function postCart()
    {
        //
    }

    public function index()
    {
        $cart = $this->getCart();

        return view('winkelmandje', [
            // 'products' => $products
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
