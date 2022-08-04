<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cartItems=Cart::where('user_id',Auth::id())->get();
        return view('cart',['cart'=>$cartItems]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product_id=$request->input('product_id');
        $product_qty=$request->input('product_qty');

        if(Auth::check()){
            $product_check=Product::where('id',$product_id)->first();
            if($product_check){
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                    return response()->json(['status'=>'Your Product Has Been Already Added To Cart']);


                }else{

                    $cartItem=new Cart();
                    $cartItem->user_id=Auth::id();
                    $cartItem->prod_id=$product_id;
                    $cartItem->prod_qty=$product_qty;
                    $cartItem->save();
                    return response()->json(['status'=>'Your Product Has Been Added To Cart']);
                }
               
            }

        }else{
            return response()->json(['status'=>'Login To Continue']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart, Request $req)
    {
        //

        $prod_id=$req->input('product_id');
        $prod_qty=$req->input('qty');
        if(Auth::check()){
            if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()){
                $cart=Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cart->prod_id;
                $cart->prod_qty=$prod_qty;
                $cart->update();
                return response()->json(['status'=>'quantity updated']);
             
            }
        }else{
            return response()->json(['status'=>'Please Login']);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart, Request $request)
    {
        //
       

        if(Auth::check()){
            $prod_id = $request->input('cart_id');
            if(Cart::where('id',$prod_id)->where('user_id',Auth::id())->exists()){
                $cartdeleteItem=Cart::where('id',$prod_id)->where('user_id',Auth::id())->first();
                $cartdeleteItem->delete();
                return response()->json(['status'=>'Product deleted successfully from cart']);

        

            }

        }else{
            return response()->json(['status'=>'Login to Continue']);
        }

    }
}
