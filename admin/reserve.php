<!DOCTYPE html>
<?php

	require 'name.php';
?>

<?php
if(isset($_GET['room_id']) && isset($_GET['transaction_id'])){

 $room_id = $_GET['room_id'];
 $trans_id  = $_GET['transaction_id'];

//  check_in($room_id,$trans_id);

$query_check = "SELECT * FROM room where room_id = $room_id and room_status = 1 ";

if($query_check = mysqli_query($conn,$query_check))
If(mysqli_num_rows($query_check))
{
echo "<script>alert('This Room Not Avaliable for Now');window.location = 'reserve.php';</script>";
}else{

 $sql = "UPDATE  `transaction`t , `room`r SET t.status = 1 , r.room_status = 1 WHERE  t.room_id = r.room_id and r.room_id = $room_id  and t.transaction_id = $trans_id ";

 if($query = mysqli_query($conn,$sql)){

	

    echo "<script>alert('Reservation Check in Successfully');window.location = 'reserve.php';</script>";
 //   echo "<script>alert('Reservation Not Check in !!');window.location = 'reserve.php';</script>";
 
 }else{
 
	 echo "<script>alert('Reservation Not Check in !!');window.location = 'reserve.php';</script>";
 
 }


}

}



?>





<html lang = "en">
	<head>
		<title>Rotana Salam Hotel</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Rotana Salam Hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li class = "active"><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>	
			<li><a href = "report.php">Reports</a></li>			

		</ul>	
	</div>
	<br />
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 0 ") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = '1'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
				<a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
				<a class = "btn btn-info" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
				<a class = "btn btn-warning" href = "checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Check Out</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Contact No</th>
							<th>Room Type</th>
							<th>Reserved Date</th>
							<th>Total Bill</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = '0'") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['firstname'];?></td>
							<td><?php echo $fetch['contactno'];?></td>
							<td><?php echo $fetch['room_type'];?></td>
							<td><strong><?php if($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}else{echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}?></strong></td>
							<td><?php echo $fetch['bill'];?></td>

							<td><?php if ($fetch['status'] == 0 )echo "<div class='btn btn-primary'>Pending</div>"; if($fetch['status'] == 1)echo "<div class='btn btn-success'>Check In</div>"; if($fetch['status'] == 2)echo "<div class='btn btn-danger'>Check Out</div>"; ?></td>
							<td><center><a class = "btn btn-success" href = "reserve.php?transaction_id=<?php echo $fetch['transaction_id']?>&room_id=<?php  echo $fetch['room_id'];    ?>"><i class = "glyphicon glyphicon-check"></i> Check In</a> <a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "delete_pending.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-trash"></i> Discard</a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2017 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>