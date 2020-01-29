<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoppingcart;

class MandjeController extends Controller
{
    public $Shoppingcart;

    public function __construct()
    {
        $this->Shoppingcart = new Shoppingcart;
    }

    public function index()
    {
        $Shoppingcart = new Shoppingcart;

        $cart = $Shoppingcart->getCart();
        $total = $Shoppingcart->totalPrice();

        return view('winkelmandje', [
            'products' => $cart->products,
            'total' => $total
        ]);
    }

    public function store($id)
    {
        $this->Shoppingcart->addProduct($id);
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->Shoppingcart->deleteProduct($id);
        return redirect()->back();
    }
}
