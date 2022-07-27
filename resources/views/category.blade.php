@extends('layout.layout')
@section('title','Category')

@section('content')

<div class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($category as $item)  
                    <div class="col-md-3">
                        <a href="{{route('view-category',['slug'=>$item->slug])}}">
                        <div class="card">
                            <img src="{{asset('storage/category_file/'. $item->image)}}" alt="" width="254px" height="200px">
                            <div class="card-body">
                                <h5>{{$item->name}}</h5>
                                <span class="float-start">{{$item->selling_price}}</span>
                                <span class="float-start">{{$item->original_price}}</span>

                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
    
@endsection