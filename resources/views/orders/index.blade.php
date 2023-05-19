<x-layout :header="$header">
<head>
    <link rel="stylesheet" href="css/orders.css">
</head>

@include('partials._search')
@unless(count($orders) == 0)


<div id="ordersbox" style="margin-top: 2rem">
    <div class="topbox">ID</div>
    <div class="topbox">Customer Name</div>
    <div class="topbox">Item Name</div>
    <div class="topbox">Date</div>
    <div class="topbox">Subtotal</div>
    @foreach($orders as $order)
        <x-orders-line :order="$order"/>
        <!-- epic blade component -->
    @endforeach
</div>


@else
<p>no orders</p>
@endunless

</x-layout>