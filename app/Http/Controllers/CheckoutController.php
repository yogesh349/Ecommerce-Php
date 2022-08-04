<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function index(){
        $cartItems=Cart::where('user_id',Auth::id())->get();
        return view("checkout",['cartItems'=>$cartItems]);
       
    }
    public function placeOrder(Request $request){
        $order=new Order();
        $order->user_id=Auth::id();
        $order->fame=$request->input('fname');
        $order->lname=$request->input('lname');
        $order->email=$request->input('email');
        $order->phone=$request->input('pnumber');
        $order->address1=$request->input('address1');
        $order->address2=$request->input('address2');
        $order->country=$request->input('country');
        $order->province=$request->input('province');
        $order->city=$request->input('city');
        $order->pincode=$request->input('pcode');
        $order->tracking_no='yogesh'.rand(1111,9999);
        $order->save();
        $cartItems=Cart::where('user_id',Auth::id())->get();
        foreach ($cartItems as $item) {
            # code...
            OrderItem::create([
                'order_id'=>$order->id,
                'prod_id'=>$item->prod_id,
                'qty'=>$item->prod_qty,
                'price'=>$item->product->selling_price,
            ]);
          
        }

        if(Auth::user()->address1==Null){
            $user=User::where('id',Auth::id())->first();

            $user->fname=$request->input('fname');
            $user->lname=$request->input('lname');
            $user->email=$request->input('email');
            $user->pnumber=$request->input('pnumber');
            $user->address1=$request->input('address1');
            $user->address2=$request->input('address2');
            $user->country=$request->input('country');
            $user->province=$request->input('province');
            $user->city=$request->input('city');
            $user->pincode=$request->input('pcode');
            $user->update();


                
        }

        
    }
}
