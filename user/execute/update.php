<?php
	include 'connection.php';
	
	
	$id = $_POST['id'];
	$Firstname=$_POST['firstname'];
	$Lastname=$_POST['lastname'];
	$Username=$_POST['username'];
	$Email=$_POST['email'];


	
	$sql = "UPDATE user SET firstname='$Firstname',lastname='$Lastname', username='$Username',email ='$Email' where id='$id'";
	
		if(!mysqli_query($connection,$sql))
		{
			die("Error:" . mysql_error($connection));
		}
		session_start();
		$_SESSION['success_message']="Successfully updated";
		header("Location:../Edit.php");

?>