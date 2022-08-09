<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function index(){
        $wishlist=Wishlist::where('user_id',Auth::id())->get();
        return view('wishlist',['wishlist'=>$wishlist]);
    }

    public function add(Request $request){
        
        if(Auth::check()){
            $prod_id=$request->input("product_id");
            if(Product::find($prod_id)){
                $wishlist= new Wishlist();
                $wishlist->prod_id=$prod_id;
                $wishlist->user_id=Auth::id();
                $wishlist->save();


                return response()->json(['status'=>'Product added to wishlist']);

            
            }else{
                return response()->json(['status'=>'Product doesnot exist']);

            }

            

        }else{
            return response()->json(['status'=>'Login To Add To WishList']);

        }

    }
   
}
