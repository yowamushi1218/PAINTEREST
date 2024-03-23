<?php 
include '../admin/execute/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$hashPassword=md5($password);

$sql = "SELECT * FROM user where username='$username' AND password1='$hashPassword'";
			

$result=mysqli_query($connection,$sql);
$user=mysqli_fetch_assoc($result);


if($user){
  session_start();
  $_SESSION['username'] = $user['username'];
  $_SESSION['success_message']="Login Successfully.";
  header("Location: ../home.php");

} else {
  session_start();
  $_SESSION['error_message']="Invalid username or password.";
  header("Location:../User-Login.php");

}
?>