<?php
	include 'connection.php';
	
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$school = $_POST['school'];
		$program = $_POST['program'];
		$yearlevel = $_POST['yearlevel'];
		$phonenumber = $_POST['phonenumber'];
		$username = $_POST['username'];
		$email = $_POST['email'];


	
	$sql = "UPDATE user SET firstname='$firstname', middlename='$middlename',lastname='$lastname',school='$school',program='$program', phonenumber ='$phonenumber',username='$username',email ='$email' where id='$id'";
	
		if(!mysqli_query($connection,$sql))
		{
			die("Error:" . mysql_error($connection));
		}
		session_start();
		$_SESSION['success_message']="Successfully updated";
		header("Location:../Edit.php");

?>