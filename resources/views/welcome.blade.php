<!doctype html>
<html lang="{{ config('app.locale') }}">
<title> Wash's Easy </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {
  height: 100% ;
  width:100%;
}



.header {
position: relative;
width: 100%;
height: 80px;
margin: 0 auto;
padding: 1px;

}


.footer {
position: relative;
width: 100%;
height: 180px;
margin: 0 auto;
padding: 1px;
background-color: #BEBEBE;
}

.bgimg {
background-image: url('imag/bbg.jpg');
min-height: 100%;
background-position: center;
background-size: cover;
}
.full-height {
    height: 10vh;
}
.content {
    text-align: right;
}

.title {
    font-size: 84px;

}
.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;

}
.m-b-md {
    margin-bottom: 30px;


}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}


</style>
<body>

  <div class="header" id="header">
<div class="flex-center position-ref full-height" >
  <img style="padding-right:47%" src="imag/logo.jpg";style="width:1px;height=1px">

      @if (Route::has('login'))
          <div class="top-right links" >
              @if (Auth::check())
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ url('/login') }}">Login</a>
                  <a  href="{{ url('/register') }}">Register</a>
              @endif
          </div>
      @endif

</div>
</div>

  <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

  <div class="w3-display-middle">
  <h2 ><br><br><br><br><br><br><br><br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp อยากใช้ชีวิตให้  Easyเลือก Wash’s Easy สิคะ
  </h2>

  <p class="w3-large w3-center"><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSimple laundry without coins  by application</b></p>
  </div>

  </div>

<div class="footer" id="footer" align ="center">

<p><img src="imag/lo.png">&nbsp&nbsp<b>By Wash's Easy Co.,Ltd.</b> </p>
<hr  style="width:60%">
<div align="center">
<a href="https://www.facebook.com/washeasyKK/"><img style="width:50px" src="imag/f.png"></a>&nbsp&nbsp<img style="width:50px" src="imag/in.png">
&nbsp&nbsp<img style="width:50px" src="imag/link.png">&nbsp&nbsp<img style="width:50px" src="imag/t.png">

  <div><br>
<p><b>CONTACT US</b> &nbsp&nbsp<i class="material-icons">&#xe0af;</i>
 43/3 Moo 8 T.Pasak, A.Muang, Lumphun, Thailand 51000
 &nbsp&nbsp<i class="material-icons">&#xe0b0;</i>(+66)02074428
 &nbsp&nbsp  <i class="material-icons">&#xe0be;</i> admin@waseasy.co.th</p>
 <br><br>
</div>
</div>
</div>
</body>
</html>
