<?php 
session_start();
if(isset($_SESSION["user_id"]))
{
    unset($_SESSION["user_id"]);
    session_destroy();
      echo "<script>
				window.location = 'index.php';
				</script>";

}

if(isset($_SESSION["user_name"]))
{
    unset($_SESSION["user_name"]);
    session_destroy();
     echo "<script>
				window.location = 'index.php';
				</script>";
}



?>