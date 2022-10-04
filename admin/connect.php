<?php
session_start();

$conn = new mysqli("localhost", "root", "", "rotana"); 



function Registration($fname,$add,$gender,$phone,$email,$pass){
    global $conn;

	$query_check = "SELECT * FROM guest where 	email = '$email' ";

	if($query_check = mysqli_query($conn,$query_check))
	If(mysqli_num_rows($query_check))
	{
	echo "<script>alert('This User Exists');window.location = 'registration.php';</script>";
	}else{
	 $query = "insert into guest(firstname,email,address,gender,contactno,password)
	 values ('$fname','$email','$add','$gender','$phone','$pass')";
	 if(mysqli_query($conn,$query)){
		 
		 echo "<script>alert('Registration Successfully');window.location = 'login.php';</script>";
	 }else{
		  echo "<script>alert('Registration Faild');window.location = 'registration.php';</script>";
		  echo $query;
	 }
	}
}





function Login($email, $pass)
{
    global $conn;

     $sql = "SELECT * FROM `guest` where `email` = '$email' and `password` = '$pass'";
    if ($query = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($query)) {
            $row = mysqli_fetch_array($query);

            $_SESSION['user_id'] = $row['guest_id'];
            $_SESSION['user_name'] = $row['firstname'] ;
            echo "<script>
            window.location = './index.php';
            </script>";

        } else {
            echo "<script>alert('Wrong User Name Or Password');window.location = './login.php';</script>";
            }
        }
        
    }




    function Getroms(){
        global $conn;
        $sql = "SELECT * FROM `room` where 	room_status = 0";
        if($query = mysqli_query($conn,$sql))
            {
            return $query;	
            }
        else
            {
            echo $sql;die;
            }
    
    }
    

 function   Get_room_detils($room_id){

global $conn;

$sql = "SELECT * FROM `room` where room_id = $room_id";
if($query = mysqli_query($conn,$sql))
    {
        $res = mysqli_fetch_array($query);
     return $res;	
    }
else
    {
    echo $sql;die;
    }


 }




 function  Booking($check_in, $check_out, $user_id,  $total, $room_id ,$trans_date,$days )
 {

    global $conn;


  $query_check = "SELECT * FROM `transaction` where guest_id = $user_id and room_id = $room_id and checkin = '{$check_in}' and checkout = '{$check_out}'   ";
    
	if($query_check = mysqli_query($conn,$query_check))
	If(mysqli_num_rows($query_check))
	{
	echo "<script>alert('Your Reservation Already Exist');window.location = 'reservation.php?room_id = $room_id';</script>";
	}else{
	 $query = "insert into transaction(guest_id,room_id,days,checkin,checkout,bill,res_date)
	 values ($user_id,$room_id,$days,'{$check_in}','{$check_out}','$total','{$trans_date}')";
	 if(mysqli_query($conn,$query)){
		 
		 echo "<script>alert('Reservation  Successfully');window.location = 'myreservations.php';</script>";
	 }else{
		  echo "<script>alert('Reservation Faild');window.location = 'reservation.php?room_id = $room_id';</script>";
		  echo $query;
	 }
	}

 }


 function Get_user_reservation(){
    global $conn;
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `transaction`tr,`guest`g,`room`r where tr.guest_id = g.guest_id and tr.room_id = r.room_id and g.guest_id = $user_id ";
    if($query = mysqli_query($conn,$sql))
        {
        return $query;	
        }
    else
        {
        echo $sql;die;
        }

}


function check_in($room_id,$trans_id){

    global $conn ; 
	
	$sql = "UPDATE  `transaction`t , `room`r SET t.status = 1 , r.room_status = 1 WHERE  t.room_id = r.room_id and r.room_id = $room_id  and t.transaction_id = $trans_id ";

	if($query = mysqli_query($conn,$sql)){

        

	  echo "<script>alert('Reservation Check in Successfully');window.location = 'reserve.php';</script>";
    //   echo "<script>alert('Reservation Not Check in !!');window.location = 'reserve.php';</script>";
	
	}else{
	
		echo "<script>alert('Reservation Not Check in !!');window.location = 'reserve.php';</script>";
	
	}

}


// }


function check_out($room_id,$trans_id){


	
    global $conn ; 
	
	$sql = "UPDATE  `transaction`t , `room`r SET t.status = 2 , r.room_status = 0 WHERE  t.room_id = r.room_id and r.room_id = $room_id  and t.transaction_id = $trans_id ";

	if($query = mysqli_query($conn,$sql)){

	 echo "<script>alert('Reservation Check Out Successfully');window.location = 'checkin.php';</script>";
	
	}else{
	
		echo "<script>alert('Reservation Not Check Out !!');window.location = 'checkin.php';</script>";
	
	}

}







































































































































?>
