<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Categories::all();
        return view('admin.product.formProduct',['categories'=>$categories]);

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

        $validated = $request->validate([

            'cate_id'=>'required',
            'name'=>'required',
            'slug'=>'required',
            'small_description'=>'required',
            'description'=>'required',
            'original_price'=>'required',
            'selling_price'=>'required',
            'image'=>'required',
            'qty'=>'required',
            'tax'=>'required',
            'meta_title'=>'required',
            'meta_keywords'=>'required',
            'meta_description'=>'required',
        ]);



        if($request->hasFile('image')){

            $filenameWithExt=$request->file('image')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('image')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('image')->storeAs('public/product_image',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }
        
        Product::create([

            'cate_id'=>$request->input('cate_id'),
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'small_description'=>$request->input('small_description'),
            'description'=>$request->input('description'),
            'original_price'=>$request->input('original_price'),
            'selling_price'=>$request->input('selling_price'),
            'image'=>$fileNameToStore,
            'qty'=>$request->input('qty'),
            'tax'=>$request->input('tax'),
            'status'=>$request->input('status')==TRUE ?'1':'0',
            'trending'=>$request->input('trending')==TRUE ?'1':'0',
            'meta_title'=>$request->input('meta_title'),
            'meta_keywords'=>$request->input('meta_keywords'),
            'meta_description'=>$request->input('meta_description'),
        ]);

        session()->flash("success","Your Product has been added");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
