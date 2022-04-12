@extends('master')
@section('content')

<div class="container">
<div class="row">
    <div class="col-sm-6">
        <img class=" mt-3 detail-img" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-6 mt-5">
        <a href="/">Go Back</a>
        <h2>Name : {{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h4>Category : {{$product['category']}}</h4>
        <p class="display-5 ">Description : {{$product['description']}}</p>
        <br><br>
        <form action="/add_to_cart" method="POST">
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        @csrf
        <div class="row">
            <button class="btn btn-success ml-3">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-primary ml-5" >Buy Now</button>
        <br><br>
        </div>
           
    </div>
</div>
         
</div>
@endsection

























  