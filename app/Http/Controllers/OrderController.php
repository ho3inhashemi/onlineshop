<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){

        $items = \Cart::getContent();

        return view('cart.order',compact('items'));
    }


    public function orderStore(Request $request){
        $items = \Cart::getContent();


        $address = $request->address;

        $order = Order::query()->create([
            'address' => $address,
        ]);


        foreach($items as $row){
        // $orderitem = OrderItem::query()->create([
            OrderItem::query()->create([
            'order_id' => $order->id,
            'name' => $row->name ,
            'quantity' => $row->quantity,
            'price' => $row->price,
        ]);
        }

        \Cart::clear();

        return redirect()->route('home')->with('order','order recorded successfully');
        }
    }


