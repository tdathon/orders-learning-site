<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test Site</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
</head>

<body>
    {{-- header --}}
    <div id="header">
        <a href="/">Home</a>
        <a href="/sql">MySQL</a>
        <a href="/orders">Orders</a>
        @auth
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Log Out</button>
        </form>
        <p class="welcome">Welcome {{auth()->user()->email}}</p>
        @else
        <a href="/login" style="float:right">Log In</a>
        <a href="/register" style="float:right">Register</a>
        @endauth
    </div>
    <div class="headerspacer"></div>
    <br>
    <h1 style="text-align: center; margin-bottom:0rem">{{ $header }}</h1>
    
    <main>
    {{$slot}}
    </main>

    {{-- footer --}}
</body>
</html>