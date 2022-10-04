<?php  include("header.php");        ?>

<?php   $get_reser = Get_user_reservation();  ?>
<br>
<br>

<center> <h2>My Reservations</h2> </center>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
     <th >#No</th>
    <th >Room</th>
    <th >Reservation Date </th>
    <th >Days No</th>
    <th >checkin</th>
    <th >checkout</th>
    <th >Bill</th>
    <th >Status</th>

    
  </tr>
  <?php
  $i = 1;
  while($rows = mysqli_fetch_array($get_reser)){                 ?>
  <tbody>
  <tr>
  <td><?php echo $i++; ?></td>
    <td><?php echo $rows['room_type']; ?></td>
    <td><?php echo $rows['res_date']; ?></td>
    <td><?php echo $rows['days']; ?></td>
    <td><?php echo $rows['checkin']; ?></td>
    <td><?php echo $rows['checkout']; ?></td>
    <td><?php echo $rows['bill']; ?></td>
    <td><?php if ($rows['status'] == 0 )echo "<div class='btn btn-primary'>Pending</div>"; if($rows['status'] == 1)echo "<div class='btn btn-success'>Check In</div>"; if($rows['status'] == 2)echo "<div class='btn btn-danger'>Check Out</div>"; ?></td>
  </tr>
  </tbody>
  <?php } ?>
</table>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>









<?php include("footer.php");  ?>