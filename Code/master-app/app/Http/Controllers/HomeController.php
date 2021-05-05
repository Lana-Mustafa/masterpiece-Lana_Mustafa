<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = auth()->user()->orders;
        
        $orders->transform( function( $order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;

        });
        return view('home',compact('orders'));
    }


    public function showOrder($id)
    {
        $order = Order::find($id);
        $order->cart = unserialize($order->cart);
        return view('public_site.orderDetails',compact('order'));
    }
   




}
