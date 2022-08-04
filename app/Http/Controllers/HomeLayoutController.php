<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeLayoutController extends Controller
{
    //

    public function index(){
        $feature_products=Product::where('trending','1')->get();
        $category=Categories::where('popular','1')->get();
        $category=Categories::all();
        return view('home',['trending'=>$feature_products,'category'=>$category]);
    }
    

    public function category(){
        $category=Categories::where('status','0')->get();
        return view('category',['category'=>$category]);
    }

    public function product_details($slug,$id){
        $product=Product::where('id',$id)->first();
        return view('product_details',['product'=>$product]);
    }
}
