<?php  include("header.php");        ?>

<?php   $get_rooms = Getroms();     ?>
<div class="location-house section-padding">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-5 col-md-8">

<div class="section-tittle mb-50">
<h2>Our Rooms</h2>
<p>The concept and service of the best luxury hotels in Asturias in our sophisticated.</p>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">

<?php  while($row = mysqli_fetch_array($get_rooms)){                            ?>
<div class="col-lg-4">
<div class="single-location single-location2 mb-30">
<img src="images/<?php echo  $row['photo'];      ?>" width="500px" height="300px" alt="">
<div class="location-contents">
<?php if(isset($_SESSION['user_name'])){             ?>
<h3><a href="reservation.php?room_id=<?php echo $row['room_id'];  ?>"><?php echo  $row['room_type'];     ?> </a></h3>
<?php }else{ ?>
    
    <h3><a href="login.php"><?php echo  $row['room_type'];     ?> </a></h3>

    <?php } ?>
<!-- <p>2 Adult 1 Children</p> -->
<div class="price">
<span>Started from<span><?php echo  $row['price'];     ?></span></span>
</div>
</div>
</div>
</div>
<?php  } ?>

</div>
</div>
</div>



<div class="guest-house section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-8 col-lg-8">

<div class="section-tittle text-center mb-50">
<h2>We Offer to Our Guest</h2>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-location single-location2 mb-30 mb-30">
<img src="assets/img/gallery/guest1.jpg" alt="">
<div class="guest-contents guest-contents2">
<h3><a href="#">Free Drinks</a></h3>
</div>
<div class="guest-contents">
<h3><a href="#">Free Breakfast</a></h3>
<p>The concept and service of the best luxury hotels in Asturias in our sophisticated Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-location single-location2 mb-30 mb-30">
<img src="assets/img/gallery/guest2.jpg" alt="">
<div class="guest-contents guest-contents2">
<h3><a href="#">Free Breakfast</a></h3>
</div>
<div class="guest-contents">
<h3><a href="#">Free Breakfast</a></h3>
<p>The concept and service of the best luxury hotels in Asturias in our sophisticated Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-location single-location2 mb-30 mb-30">
<img src="assets/img/gallery/guest3.jpg" alt="">
<div class="guest-contents guest-contents2">
<h3><a href="#">Free Dinner</a></h3>
</div>
<div class="guest-contents">
<h3><a href="#">Free Breakfast</a></h3>
<p>The concept and service of the best luxury hotels in Asturias in our sophisticated Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
</div>
</div>
</div>
</div>
</div>
</div>


<?php include("footer.php");  ?>
