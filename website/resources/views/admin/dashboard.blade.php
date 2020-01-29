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
    h1
    <form action="{{ route('admin.store') }}">
        @csrf
        @foreach ($product__inputs as $input)
        <div>
            <span>{{$input->name}}</span>
            <input type="{{ $input->name }}" @if($input->required) required @endif autocomplete="off" autofocus name="{{$input->name}}">

            @error('{{$input->}}')
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