<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
   		$admin=new \App\Admin;
   		$admins=$admin::all();
   		return view('admin',compact('admins'));
   }
   public function create()
   {

   }
   public function store()
   {
   	 $admin=new \App\Admin;
   	 $admin->name=request('name');
   	 $admin->price=request('price');
   	 $admin->avail=request('avail');
   	 $admin->save();
   	 return redirect('/admin');
   }
}
