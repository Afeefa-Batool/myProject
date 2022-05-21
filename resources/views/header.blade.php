
<?php 
use App\Http\COntrollers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}
?>
<div class="container-fluid mt-2 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="background-color: #0e0f0f !important;height:100px">
        <a class="navbar-brand" href="#">
            <img src="images/4.png" width="70" height="70" class="d-inline-block align-top ml-4" alt="">
          
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link navbar-brand" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand" href="#">Orders</a>
            </li>
            <form class="form-inline my-2 my-lg-0" action="/search">
                <input name="query" class="form-control mr-sm-2 search-box" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit" >Search</button>
              </form>
             
          {{-- </ul>
          <ul class="navbar-nav  mt-2 mt-lg-0 ml-5">
            <li class="nav-item ">
<button class="btn btn-secondary ">chatify</button>            </li>
            <li class="nav-item ">
                <a class="nav-link navbar-brand " href="#">Add to Cart </a>
              </li>
          </ul> --}}
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/cartlist">Cart Item ({{$total}})</a></li>
            @if(Session::has('user'))
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{Session::get('user')['name']}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a  href="/logout">Logout</a></li>
              </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
  
            @endif
          </ul>
        </div>
      </nav>
</div>