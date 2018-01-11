<?php

namespace App\Http\Controllers;

use App\Order;

use Illuminate\Http\Request;

use Session;

use App\Product;

use App\Cart;

use Auth;

use Carbon\Carbon;

use App\Seller;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();

        $sellers = new Seller;

        
        $orders->transform(function($order, $key)
        {
            $order->cart = unserialize($order->cart);
            return $order;
        }); 

       
        return view('orders.index',compact('orders','sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('orders.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       










       /*  $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice; 
        return view('shop.checkout', ['total'=> $total]);


        $order = new Order();
        $order->cart = serialize($cart);
        $order->table = $request->table;
        $order->name = Auth::user()->name;
        $order->user_id = Auth::user()->id;

        $order->save();*/
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return back();

    }
}
