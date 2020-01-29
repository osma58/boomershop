<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'titel' => ['required', 'min:3', 'max:60'],
            'photo' => ['required', 'image'],
            'prijs' => ['required', 'integer'],
            'korting' => ['integer']
        ]);

        $p = new Product;
        $p->titel = $data['titel'];
        $p->photo = $data['photo'];
        $p->prijs = $data['prijs'];
        $p->korting = $data['korting'];

        $p->save();

        return redirect()->back();
    }
}
