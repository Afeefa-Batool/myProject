@extends('master')
@section('content')

<div class="container custom-login" >
    
        <div class="row">
            <div class="col-lg-7">
                <img class="img-fluid img-resposive mt-3" src="https://image.wedmegood.com/resized/800X/uploads/member/545511/1554458984_WEDMEGOOD_RELIANCE_JEWELS_003.jpg" alt="">
            </div>
            <div class="col-lg-5  mt-3">
                <form class="mt-5">
                    <div class="form-group ">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
           
        </div>
    
    
</div>
@endsection