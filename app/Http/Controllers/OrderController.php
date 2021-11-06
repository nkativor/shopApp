<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Order::all();
      return view('orders.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      {
    $request->validate([
      'shipping_fullname'=>'required',
      'shipping_address'=>'required',
      'shipping_zipcode'=>'required',
      'shipping_state'=>'required',
      'shipping_phone'=>'required',
      'shipping_city'=>'required',
      'payment_method'=>'required',

    ]);
    $order = new Order();
    $order->order_number = uniqid('order_number');
    $order->order_name =  $request->input('order_name');
    $order->shipping_fullname = $request->input('shipping_fullname');
    $order->shipping_address = $request->input('shipping_address');
    $order->shipping_zipcode = $request->input('shipping_zipcode');
    $order->shipping_state = $request->input('shipping_state');
    $order->shipping_phone = $request->input('shipping_phone');
    $order->shipping_city = $request->input('shipping_city');

    if(!$request->has('billing_fullname')){
      $order->billing_fullname = $request->input('shipping_fullname');
      $order->billing_address = $request->input('shipping_address');
      $order->billing_zipcode = $request->input('shipping_zipcode');
      $order->billing_state = $request->input('shipping_state');
      $order->billing_phone = $request->input('shipping_phone');
      $order->billing_city = $request->input('shipping_city');
    }else{
      $order->billing_fullname = $request->input('billing_fullname');
      $order->billing_address = $request->input('billing_address');
      $order->billing_zipcode = $request->input('billing_zipcode');
      $order->billing_state = $request->input('billing_state');
      $order->billing_phone = $request->input('billing_phone');
      $order->billing_city = $request->input('billing_city');
    }
    $order->grand_total = \Cart::session(2)->getTotal();
    $order->item_count = \Cart::session(2)->getContent()->count();
    $order->save();

    // save order_items
        $cartItems = \Cart::session(2)->getContent();
        foreach ($cartItems as  $item) {
           $order->items()->attach($item->id,[
             'price' => $item->price,
             'quantity' => $item->quantity,
             'name' => $item->name
           ]);

        }
        //empty cart
        $cartItems = \Cart::session(2)->clear();
    }
     return redirect()->route('stripe.index');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $orders = Order::all();
      return view('orders.show')->with('orders',$orders);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      $orders = Order::all();
      return view('admin.index',compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
