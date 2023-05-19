<x-layout :header="$header">
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/create.css') }}">
    </head>
    <?php $message = "test"?>
<form method="POST" action="/users/login">
    <div id="mainbody">
            @csrf
            <label class="label" style="margin-top:1rem;">Email</label>
            <input class="textbox" type="text" name="email" style="margin-top:1rem;"
            value="{{old('email')}}">
            @error('email')
                <p></p>
                <p class="errortext">{{$message}}</p>
            @enderror
            <label class="label" style="margin-top:1rem;">Password</label>
            <input class="textbox" type="password" name="password"  style="margin-top:1rem;"
            value="{{old('password')}}">
            @error('password')
            <p></p>
            <p class="errortext">{{$message}}</p>
        @enderror
    </div>
    <div id="button">
        <input type="submit" name="" value="Log In" style="font-size:large" />
    </div>
</form>

<div class="loginbutton">
    <a href="/register">Don't Have an Account?</a>
</div>
</x-layout>