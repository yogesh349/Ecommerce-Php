<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('admin.category.index');
    }

    public function add(){
        return view('admin.category.add');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([

            'name'=>'required',
            'slug'=>'required',
            'meta_title'=>'required',
            'meta_keywords'=>'required',
            'meta_description'=>'required',
            'image'=>'required',
            'description'=>'required',
        ]);

        if($request->hasFile('image')){

            $filenameWithExt=$request->file('image')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('image')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('image')->storeAs('public/category_file',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }

       
        Categories::create([
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'status'=>$request->input('status')==TRUE?'1':'0',
            'popular'=>$request->input('popular')==TRUE?'1':'0',
            'image'=>$fileNameToStore,
            'meta_title'=>$request->input('meta_title'),
            'meta_descrip'=>$request->input('meta_description'),
            'meta_keywords'=>$request->input('meta_keywords'),
            
      
        ]);
        session()->flash("success","Your Category has been added");
    }

    public function viewCategoryProduct($slug){

        if(Categories::where('slug',$slug)->exists()){
            $category=Categories::where('slug',$slug)->first();
            $product=Product::where('cate_id',$category->id)->get();
            return view('categoryProductView',['product'=>$product,'category'=>$category]);
            
        }else{
            return redirect('/')->with('status','Slug for category doesnot exist');
        }


    }
}
