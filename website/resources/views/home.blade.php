@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="css/taurese.css">
@endsection

@section('content')
<div class="home">
    <span style="display:block; height: 25px;"></span>
    <div class="aanbieding">
        <div class="aanbieding__content">
            <p class="title">PIZZA CHICKEN KEBAB</p>
            <h4>Tijdelijk €12,- </h4>
        </div>
    </div>

    <span style="display:block; height: 35px;"></span>
    <h2>Aanbiedingen:</h2>
    <div class="overzicht">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
</div>
@endsection
