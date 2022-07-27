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
        return view('home',['trending'=>$feature_products,'category'=>$category]);
    }
    

    public function category(){
        $category=Categories::where('status','0')->get();
        return view('category',['category'=>$category]);
    }
}
