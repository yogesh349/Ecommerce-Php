@extends('layout.layout')
@section('title','Cart')
@section('cart')


    <div class="container" style="margin-top:100px;">
        <div class="card shadow">
            <div class="card-body">
                @if ($wishlist->count()>0)
                
                @else
                <h4>There are no products in the wishlist</h4>
                    
                @endif
            </div>




        </div>
    </div>
    


    
@endsection