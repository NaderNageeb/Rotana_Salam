<?php  include("header.php");        ?>

<?php if(isset($_GET['room_id'])){

$room_id = $_GET['room_id'];

 $room = Get_room_detils($room_id);

} else{
    echo "<script>
    window.location = 'index.php';
    </script>";
    
}
  ?>

<?php
if(isset($_POST['book'])){

$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$room_id = $_POST['room_id'];
$trans_date = date("Y-m-d");

$user_id = $_SESSION['user_id'];
// deffrence Between Deats
$startDate = new DateTime($check_in);
$endDate = new DateTime($check_out);
$difference =  $endDate->diff($startDate);
$days = $difference->format("%a");
// deffrence Between Deats
$room_price = $_POST['room_price'];
$total = $days * $room_price;

$date_1 = strtotime($check_in);
$date_2 = strtotime($check_out);

if(  $date_1 >= $date_2){?>

  <div class="alert alert-danger" role="alert" style="text-align:center">Your Reservation Date Is Wrong Try Another Date</div>

  <?php
}else{

 Booking($check_in, $check_out, $user_id,  $total, $room_id ,$trans_date,$days );

}





}


?>










<div class="location-house section-padding">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-5 col-md-8">

<div style="text-align:center ;" class="section-tittle mb-50">
<h2>Room Reservation</h2>

</div>
</div>
</div>
</div>


<section class="blog_area single-post-area section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 posts-list">
    
<div class="single-post">
<div class="feature-img">
<img class="img-fluid" src="images/<?php echo  $room['photo'];      ?>" alt="">
</div>
<div class="blog_details">
<h2 style="color: #2d2d2d;"><?php  echo $room['room_type']; ?>
</h2>
<ul class="blog-info-link mt-3 mb-4">
<li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
<li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
</ul>


</div>
</div>

<div class="navigation-top">

</div>

</div>
<div class="col-lg-4">
<div class="blog_right_sidebar">
<aside class="single_sidebar_widget search_widget">
<form action="reservation.php?room_id=<?php echo $_GET['room_id']; ?>" method="POST">
<div class="form-group m-0">

<div class="input-group">
<input type="date" required min="<?php echo date("Y-m-d");   ?>"  max="2050-1-1" id="check_in" name="check_in" class="form-control">
<div class="input-group-append d-flex">
<p class="boxed-btn2" >Check In</p>
</div>
</div>
<br>
<div class="input-group">
<input type="date" required id="check_out" name="check_out" onchange="myFunction()" min="<?php echo date("Y-m-d");   ?>" class="form-control">
<div class="input-group-append d-flex">
<p class="boxed-btn2">Check Out</p>
</div>
</div>
<input type="hidden"    name="room_id" value="<?php echo $room['room_id'];  ?>"  class="form-control">

<br>
<div class="input-group">
<input type="text" readonly required id="room_price" onchange="myFunction()" name="room_price" value="<?php echo $room['price'];  ?>"  class="form-control">
<div class="input-group-append d-flex">
<p class="boxed-btn2" >Room Price</p>
</div>
</div>

</div>
<br>
<!-- </aside> -->
<!-- <aside class="single_sidebar_widget post_category_widget"> -->
<h4 class="widget_title" style="color: #2d2d2d;">Total Bill :  <span id="msg"></span></h2></h4>
<ul class="list cat-list">


<div class="input-group">
<button type="submit" name="book" class="boxed-btn2"  value="Confirm" class="form-control">Confirm Reservation</button>
<div class="input-group-append d-flex">

</div>
</div>
</ul>
</aside>
</form>
</div>
</div>
</div>
</div>
</div>





<script>
function myFunction() {
    var y,z,x,total,Msg;
   
 y = document.getElementById("check_in").value;
//alert(y);////

 z = document.getElementById("check_out").value;
 //alert(z);
 
 x = document.getElementById("room_price").value;


const date1 = new Date(y);
const date2 = new Date(z);

getDifferenceInDays(date1,date2, x)
}


function getDifferenceInDays(date1, date2,room_price) {

    var diffrent_ ;
    var Msg ;
    var calz = 0 ;

  const diffInMs = Math.abs(date2 - date1);
  diffrent_ =  diffInMs / (1000 * 60 * 60 * 24);

  calz = room_price * diffrent_ ;

  //alert("Total Prince :" + calz +  " .SDG" );

  Msg=document.getElementById("msg").innerHTML = calz + " " + "$ ";
}

</script>






















































<?php include("footer.php");  ?>
