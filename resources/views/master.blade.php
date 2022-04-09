<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    {{ View::make( 'header')}}

    @yield('content')
    {{ View::make( 'footer')}}

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   


</body>
<style>
  /* .....carasoul slider....... */
  .banner1{
    width:100%;
    height: 100vh;
    background-image: url('images/u.png');
    background-size: cover;
    background-position: center;
}
.banner2{
    width:100%;
    height: 100vh;
 
    background-image:url('images/Untitled design.png');
    background-size: cover;
    background-position: center;
}
.banner3{
    width:100%;
    height: 100vh;
 
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(33,64,65,0.7)),url('https://images.squarespace-cdn.com/content/v1/55d7b33ee4b0e34ae6046129/1568311488913-G21930JZ9IMYSZESFM1O/White_Cherrie-Gold_Bokeh-Overlay-Cover.jpg?format=1000w');
    background-size: cover;
    background-position: center;
}
.banner4{
    width:100%;
    height: 100vh;
 
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(33,64,65,0.7)),url('https://images.squarespace-cdn.com/content/v1/55d7b33ee4b0e34ae6046129/1568311488913-G21930JZ9IMYSZESFM1O/White_Cherrie-Gold_Bokeh-Overlay-Cover.jpg?format=1000w');
    background-size: cover;
    background-position: center;
}
.banner5{
    width:100%;
    height: 100vh;
 
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(33,64,65,0.7)),url('https://images.squarespace-cdn.com/content/v1/55d7b33ee4b0e34ae6046129/1568311488913-G21930JZ9IMYSZESFM1O/White_Cherrie-Gold_Bokeh-Overlay-Cover.jpg?format=1000w');
    background-size: cover;
    background-position: center;
}

/* .....products page..... */
.text{
  overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
/* .....footer..... */
.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
       
</style>

</html>