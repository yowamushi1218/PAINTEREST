<?php include 
  'connection.php';
  
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hashPassword=md5($password);

$sql = "SELECT * FROM admin WHERE email='$email' AND password='$hashPassword'";
			

 $result=mysqli_query($connection,$sql);
 $user=mysqli_fetch_assoc($result);


 if($user){
   session_start();
   $_SESSION['username'] = $user['username'];
   $_SESSION['id'] = $user['adminID'];
   $_SESSION['success_message']="Login Successfully.";
   header("Location:../home.php");

 } else {

  session_start();
  $_SESSION['error_message']="Invalid username or password.";
  header("Location:../Admin-Login.php");

 }
?>