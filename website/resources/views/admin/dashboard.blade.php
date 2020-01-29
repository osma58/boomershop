<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <h1>Dashboard</h1>
    <form action="{{ route('admin.store') }}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach ($product__inputs as $input)
        <div class="form__item-box">
            <span class="form__span">{{$input->name}}</span>
            <input class="form__input" type="{{ $input->type }}" @if($input->required) required @endif autocomplete="off" autofocus name="{{$input->name}}" value="{{@old($input->name)}}">

            @error($input->name)
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @endforeach

        <button type='submit'>submit</button>
    </form>
</body>
</html>