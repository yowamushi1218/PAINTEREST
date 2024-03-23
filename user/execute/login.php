<?php include 
  'connection.php';
  
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashPassword=md5($password);

$sql = "SELECT * FROM user WHERE Username='$username' AND Password1='$hashPassword'";
			

 $result=mysqli_query($connection,$sql);
 $user=mysqli_fetch_assoc($result);


 if($user){
   session_start();
   $_SESSION['id'] = $user['id'];
   $_SESSION['success_message']="Login Successfully.";
   header("Location:../Home.php");

 } else {

  session_start();
  $_SESSION['error_message']="Invalid username or password.";
  header("Location:../index.php");

 }
?>