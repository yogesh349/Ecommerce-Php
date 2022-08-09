<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //

    public function index(){
        $orders=Order::where('user_id',Auth::id())->get();
        return view("order",['orders'=>$orders]);
    }

    public function view($id){
        $orders=Order::where('id',$id)->where('user_id',Auth::id())->get()->first();
        return view('OrderViewDetails',['orders'=>$orders]);

    }


}
