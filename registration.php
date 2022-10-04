<?php include("admin/connect.php");    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=email],input[type=password],input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 100px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>




<?php
if(isset($_POST['register'])){

  $fname = $_POST['fname'];
  $add = $_POST['add'];
  $gender = $_POST['gender'];
  $phone  = $_POST['phone'];
  $email  = $_POST['email'];
  $pass  = $_POST['pass'];

  Registration($fname,$add,$gender,$phone,$email,$pass);








}
















?>







<h2> Registration </h2>
<!-- <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p> -->

<div class="container">
  <form action="registration.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" required name="fname" placeholder="Your full Name..">
      </div>
    </div>

    

 

    <div class="row">
      <div class="col-25">
        <label for="fname">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" required name="add" placeholder="Your Address">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="Gender">Gender</label>
      </div>
      <div class="col-75">
        <select id="gender" required name="gender">
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="lname">Phone</label>
      </div>
      <div class="col-75">
        <input type="number" id="lname" name="phone" required placeholder="Your Phone Number">
      </div>
    </div>


     <div class="row">
      <div class="col-25">
        <label for="fname">Email </label>
      </div>
      <div class="col-75">
        <input type="email" id="email" required name="email" placeholder="Your Email">
      </div>
    </div> 

         <div class="row">
      <div class="col-25">
        <label for="fname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="fname" required name="pass" placeholder="Your Password">
      </div>
    </div> 


    <div class="row">
      <input type="submit" style="background:#e29c89" name="register" value="Register">
    </div>
    <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
  </form>
</div>

</body>
</html>
