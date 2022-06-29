@extends('master')
@section('content')


                <h2 class="text-center order-list mb-5">Orders List</h2>
        
<div class="container">
  <div class="row">

    @foreach ($orders as $item)
    <table class="table table-bordered table-hover">
      <td class="text-center">
            <a href="detail/{{$item->id}}">
                <img class="order-img" src="{{$item->gallery}}">
                </a>
              </td>
        
        <tbody>
          <td class="text-center">>
     
            <h3 class="lead text-bold">Name : {{$item->name}}</h3>
            <h5>Delivery Status : {{$item->status}}</h5>
            <h5>Payment Status : {{$item->payment_status}}</h5>
            <h5>Payment Method : {{$item->payment_method}}</h5>
            <h5>Delivery Address : {{$item->address}}</h5>
            <h5>Price : {{$item->price}}</h5>
    
    
            
       
          </td>
        </tbody>
    </table>
    @endforeach
  </div>
</div>





@endsection

