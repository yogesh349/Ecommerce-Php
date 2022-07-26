@extends('layout.layout')
@section('form-category')
<div class="f-flex">
    <div class="game-outer">
        <h2 class="text-center" style="margin: 45px;">Add CD Products</h2>
            <form action="{{route('add_category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cname">Name</label>
                    <input type="text" class="form-control custom-form" id="cname"  placeholder="Enter Category Name" name="name">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">Slug</label>
                    <input type="text" class="form-control custom-form" id="slug"  placeholder="Enter Slug" name="slug">
                    @error('slug')
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
                    <label for="cname">Popular</label>
                    <input type="checkbox" name="popular" id="popular">
                    @error('popular')
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
                    <label for="cfile">Please Choose File</label>
                    <input type="file" class="form-control-file" id="image" name="image"> <br>
                    @error('image')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mt-3">
                    <label for="desc">Description</label>
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
   