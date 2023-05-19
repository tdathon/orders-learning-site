<x-layout :header="$header">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/orders.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/order.css') }}">
</head>

<x-order-single :orders="$orders"/>

<div class="container">
    <a href="/orders/{{$orders['id']}}/edit" id="editbutton">Edit Order</a>
    <div></div>
    <form method="POST" action="/orders/{{$orders->id}}">
        @csrf
        @method('DELETE')
    <button id="deletebutton">Delete</a>
    </form>
</div>

</x-layout>