
@extends('master')
@section('content')

<div class="custom-product">
      
                <h2 class="text-center display-4"><b>Cart List</b></h2>
                {{-- <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br> --}}
               <div class="container">
                   <div class="row">
                       <div class="jumbotron">
                        @foreach ($products as $item)
                        <div class="row search-item cart-list-devider">
                        <div class="col-sm-6">
                         <a href="detail/{{$item->id}}">
                         <img class="detail-img mb-3" src="{{$item->gallery}}" alt="">
                         </a>
                        </div>
      
      
                          <div class="col-sm-6">  
                                   
                              <p class="display-4 mt-1">Name :{{$item->name}}</p>
                              <p class="description"><b>Description :</b>{{$item->description}}</p>
                              <p class="description"><b>Category :</b>{{$item->category}}</p>
                              <p class="display-4">Price :{{$item->price}}</p>
                          <div class="row">
                              <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning ml-3" >Remove From Cart</a>      
                              <a class="btn btn-success ml-3" href="/ordernow">Order Now</a> <br> <br>
      
                          </div>
                        </div>
                        </div>  
                        @endforeach
      
                       </div>
                   </div>
               </div>
 
</div>

@endsection