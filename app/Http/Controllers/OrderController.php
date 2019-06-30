<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;

class OrderController extends Controller
{

    public function index(){
        $orders = ShoppingCart::all();
        return view('admin.order.index',compact('orders'));
    }

    public function getDetail($id){
        $order = ShoppingCart::find($id);
        return view('admin.order.detail',compact('order'));
    }
   
}
