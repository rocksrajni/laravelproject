<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllorderController extends Controller
{
     public function index()
   {
   		$order=new \App\Order;
   		$orders=$order::all();

   		$admin=new \App\Admin;
   		$admins=$admin::all();
   		return view('allorders',compact('orders','admins'));
   }
}
