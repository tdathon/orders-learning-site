@props(['order'])
<link rel="stylesheet" href="css/orders.css">
<div class="idbox"><a href="/orders/{{$order['id']}}">{{$order['id']}}</a></div>
<div class="words">{{$order['name']}}</div>
<div class="words">{{$order['item']}}</div>
<div class="generic" style="text-align: center">{{$order['date']}}</div>
<div class="generic" style="text-align: center">{{"$".$order['subtotal']}}</div>