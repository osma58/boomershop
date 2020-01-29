<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function store()
    {

        $data = request()->validate([
            'titel' => ['required', 'string', 'max:250'],
            'photo' => ['required', 'image'],
            'prijs' => ['required', 'integer'],
        ]);

        $imgPath = request('photo')->store('pizzas', 'public');

        $p = new Product;
        $p->titel = $data['titel'];
        $p->photo = $imgPath;
        $p->prijs = $data['prijs'];

        $p->save();

        return redirect()->back();
    }
}
