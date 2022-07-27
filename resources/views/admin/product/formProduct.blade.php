@extends('layout.layout')
@section('form-category')
<div class="f-flex">
    <div class="game-outer">
        <h2 class="text-center" style="margin: 45px;">Add Products</h2>
            <form action="{{route('add_product')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <select class="form-select" aria-label="Default select example" name="cate_id" id="cate_id">
                        <option value="" selected>Select a Category</option>

                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>  
                        @endforeach
                        
                    </select>
                    @error('cate_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control custom-form" id="name"  placeholder="Enter Product Name" name="name">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control custom-form" id="slug"  placeholder="Enter Slug Name" name="slug">
                    @error('slug')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="small_description">Small Description</label>
                    <input type="text" class="form-control custom-form" id="small_description"  placeholder="Enter Slug" name="small_description">
                    @error('small_description')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="original_price">Original Price</label>
                    <input type="number" name="original_price" id="original_price">
                    @error('original_price')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" name="selling_price" id="selling_price">
                    @error('selling_price')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="tax">Tax</label>
                    <input type="number" name="tax" id="tax">
                    @error('tax')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="selling_price">Quantity </label>
                    <input type="number" name="qty" id="qty">
                    @error('qty')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="cname">Status</label>
                    <input type="checkbox" name="status" id="status">
                    @error('status')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">Trending</label>
                    <input type="checkbox" name="trending" id="trending">
                    @error('trending')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">Meta Title</label>
                    <input type="text" class="form-control custom-form" id="meta_title"  placeholder="Enter Meta Title" name="meta_title">
                    @error('meta_title')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">Meta Keywords</label>
                    <input type="text" class="form-control custom-form" id="meta_keywords"  placeholder="Enter Meta Keywords" name="meta_keywords">
                    @error('meta_keywords')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mt-3">
                    <label for="desc">Meta Description</label>
                    <textarea class="form-control custom-form" id="meta_description" rows="3" name="meta_description"></textarea>
                    @error('meta_description')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  
                  <div class="form-group mt-3">
                    <label for="image">Please Choose File</label>
                    <input type="file" class="form-control-file" id="image" name="image"> <br>
                    @error('image')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mt-3">
                    <label for="description">Description</label>
                    <textarea class="form-control custom-form" id="description" rows="3" name="description"></textarea>
                    @error('description')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
    </div>
    </div>

    
@endsection
   