<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class OrderController extends Controller
{
    public function index() {

        return view('orders.index', [
            'header' => "Orders",
            'orders' => Order::latest()->filter(request(['name']))->get()
        ]);
    }

    public function show(Order $order){
        return view('orders.show', [
            'header' => ("Order #" . $order['id']),
            'orders' => $order
        ]);     
    }

    public function create(){
        return view('orders.create', [
            'header' => "New Order"
        ]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'id' => ['required', Rule::unique('orders', 'id')],
            'name'=> 'required',
            'item' => 'required',
            'date' => 'required',
            'subtotal' => 'required|numeric',
        ]);

        Order::create($formFields);

        return redirect('/orders');
    }

    public function edit(Order $order){
        return view('orders.edit', ['order'=>$order, 'header'=>"Edit Order"]);
    }

    public function update(Request $request, Order $order){
        $formFields = $request->validate([
            'name'=> 'required',
            'item' => 'required',
            'date' => 'required',
            'subtotal' => 'required|numeric',
        ]);

        $order->update($formFields);

        return redirect('/orders');
    }

    public function destroy(Order $order){
        $order->delete();
        return redirect('/orders');
    }
}
