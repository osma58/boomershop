@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="css/winkelwagen.css">
@endsection

@section('content')
<div class="winkelmandje">
    <hr>
    <div class="contents">
        <h2>Winkelmandje</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            {{-- </tr>
            @foreach ($products as $product)
                <tr>
                    <td class="product">{{$product->name}}</td>
                    <td class="price">{{$product->price}}</td>
                    <td class="quantity"><img src="img/plus.svg">{{$product->quantity}}<img src="img/minus.svg"></tdc>
                    <td class="total">{{$product->price * $product->quantity}}</td>
                    <td><a href="{{ route('')}}"><img class="cross" src="img/cross.svg"></td>
                </tr>
            @endforeach --}}
            <tr class="last">
                <td></td>
                <td></td>
                <td></td>
                <td class="total">€12</td>
            </tr>
        </table>
    </div>
    <div class="sidebar">
        <h3>Bestelling</h3>
        <table>
            <tr class="products">
                <td class="item">Producten</td>
                <td class="price">€12,95</td>
            </tr>
            <tr class="shipping">
                <td class="item">Shipping</td>
                <td class="price">€3</td>
            </tr>
            <tr class="total">
                <td class="item">Totaal</td>
                <td class="price">€15,95</td>
            </tr>
        </table>
        <a href="">
            <button>
                Volgende
            </button>
        </a>
    </div>
</div>
@endsection