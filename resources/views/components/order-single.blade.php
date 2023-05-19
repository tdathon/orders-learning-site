@props(['orders'])
<link rel="stylesheet" href="{{ URL::asset('css/orders.css') }}">
<div id="mainbody" style="margin-top: 2rem">
    <div>{{"Customer Name: ". $orders['name']}}</div>
    <div>{{"Item Name: ". $orders['item']}}</div>
    <div>{{"Date Purchased: ". $orders['date']}}</div>
    <div>{{"Subtotal: $". $orders['subtotal']}}</div>
</div>