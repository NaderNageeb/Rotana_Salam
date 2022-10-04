<?php include("admin/connect.php");       ?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/rolax/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 12:27:53 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>AL SALAM HOTEL </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/alsalam-logo.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bslicknav.css%2bgijgo.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bslick.css%2bnice-select" />
<link rel="stylesheet" href="assets/css/A.style.css.pagespeed.cf.FJhlcspkRa.css">
<script nonce="298e7ee0-4fc2-4d24-a383-cc4c36df7b49">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)},["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>

<style>

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/slider-1.jpg" style="width:110%">
  <div class="text">KHARTOUM'S LEADING HOTEL</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/slider-2.jpg" style="width:100%">
  <div class="text">KHARTOUM'S LEADING HOTEL</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/slider-6.jpg" style="width:100%">
  <div class="text">KHARTOUM'S LEADING HOTEL</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img src="assets/img/icon/fav-icon.png" alt="loder">
</div>
</div>
</div>
</div>

<header>
<div class="header-area header-transparent">
<div class="main-header ">
<div class="header-top">
<div class="container-fluid">
<div class="row">
<div class="col-xl-12">
<div class="d-flex justify-content-between flex-wrap align-items-center">
<div class="header-info-left">
<ul>
<li>Call Us: +249-187007777</li>
<li><a href="" class="__cf_email__" data-cfemail="95fcfbf3fad5e7faf9f4edbbf6faf8">info@alsalamhotel.com</a></li>
</ul>
</div>

<div class="header-info-right d-none d-sm-block">
<ul class="header-social"> 
<?php if(isset($_SESSION['user_id'])){ ?>
  <div style="color:white ;"> Welcome <?php echo $_SESSION['user_name'];    ?> </div>
   <?php }else{ ?>
<li><a href="#"><i class="fab fa-facebook"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<?php } ?>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="header-bottom header-sticky">
<div class="container-fluid">
<div class="d-flex align-items-center justify-content-between flex-wrap">

<div class="logo">
<a href="index.php"><img src="assets/img/logo/alsalam-logo.png" alt=""></a>
</div>
<div class="menu-wrapper d-flex align-items-center">

<div class="main-menu d-none d-lg-block">
<nav>
<ul id="navigation">
<?php if(isset($_SESSION['user_id'])){ ?>
<li><a href="index.php">Home</a></li>
<li><a href="rooms.php">Rooms</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="myreservations.php">My Reservations</a></li>
<li><a href="logout.php">logout</a></li>
<?php }else{ ?>
  <li><a href="index.php">Home</a></li>
<li><a href="rooms.php">Rooms</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact Us</a></li>
 <li><a href="login.php">Login</a></li>
<li><a href="Registration.php">Register</a></li>

  <?php } ?>
</ul>
</nav>
</div>

<div class="header-right-btn f-right d-flex align-items-center">
<a href="rooms.php" class="header-btn2 d-none d-lg-block">Book Now</a>
</div>
</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<main>





