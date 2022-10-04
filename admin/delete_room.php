<?php
	require_once 'connect.php';

	echo $room_id =$_REQUEST['room_id'];
$sql = "Delete from room where room_id = $room_id";
$query = mysqli_query($conn,$sql);


	header("location:room.php");
?>