<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    //
    public function index(){
        $orders=Order::where('status','0')->get();
        return view('admin.order.index',['orders'=>$orders]);
    }

    public function view($id){
        $orders=Order::where('id',$id)->first();
        return view('admin.order.view',['orders'=>$orders]);

    }
    public function updateOrder(Request $request,$id){
        $orders=Order::find($id);
        $orders->status=$request->input('order_status');
        $orders->update();
        return "Yep fjdklsaf alf";
    }

    public function orderHistory(){
        $orders=Order::where('status','1')->get();
        return view('admin.order.index',['orders'=>$orders]);

    }
}
