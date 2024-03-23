<?php include 
  'connection.php';
  
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashpassword=md5($password);

$sql = "SELECT * FROM admin WHERE username = '$username' AND password1 ='$hashpassword'";
			

 $result=mysqli_query($connection,$sql);
 $admin=mysqli_fetch_assoc($result);


 if($admin){
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