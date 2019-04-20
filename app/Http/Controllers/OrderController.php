<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
   {
   		$order=new \App\Order;
   		$orders=$order::all();

   		$admin=new \App\Admin;
   		$admins=$admin::all();
   		return view('order',compact('orders','admins'));
   }
   public function create()
   {
   }
   public function store()
   {
   	 $order=new \App\Order;
   	 $order->cname=request('cname');
   	 $order->name=request('name');
   	 $order->price=request('price');
   	 $order->quant=request('quant');
   	 $order->add=request('add');
   	 $order->phone=request('phone');
   	 $order->save();
   	 return redirect('/order');
   }
}
