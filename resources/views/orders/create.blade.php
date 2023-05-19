<x-layout :header="$header">
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/create.css') }}">
    </head>
    <?php $message = "test"?>
<form method="POST" action="/orders">
    <div id="mainbody">
            @csrf
            <label class="label" style="margin-top:1rem;">Order ID</label>
            <input class="textbox" type="text" name="id" placeholder="ex. 123" style="margin-top:1rem;"
            value="{{old('id')}}">
            @error('id')
                <p></p>
                <p class="errortext">{{$message}}</p>
            @enderror
            <label class="label" style="margin-top:1rem;">Customer Name</label>
            <input class="textbox" type="text" name="name" placeholder="ex. John Doe" style="margin-top:1rem;"
            value="{{old('name')}}">
            @error('name')
            <p></p>
            <p class="errortext">{{$message}}</p>
        @enderror
            <label class="label" style="margin-top:1rem;">Item Name</label>
            <input class="textbox" type="text" name="item" placeholder="ex. Antique Table" style="margin-top:1rem;"
            value="{{old('item')}}">
            @error('item')
            <p></p>
            <p class="errortext">{{$message}}</p>
        @enderror
            <label class="label" style="margin-top:1rem;">Date</label>
            <input class="textbox" type="text" name="date" placeholder="ex. 2023-05-17" style="margin-top:1rem;"
            value="{{old('date')}}">
            @error('date')
            <p></p>
            <p class="errortext">{{$message}}</p>
        @enderror
            <label class="label" style="margin-top:1rem;">Subtotal</label>
            <input class="textbox" type="text" name="subtotal" placeholder="ex. 29.99" style="margin-top:1rem;"
            value="{{old('subtotal')}}">
            @error('subtotal')
            <p></p>
            <p class="errortext">{{$message}}</p>
        @enderror
    </div>
    <div id="button">
        <input type="submit" name="" value="Submit" style="font-size:large" />
    </div>
</form>
</x-layout>