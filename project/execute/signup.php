  <?php include 'connection.php';

		$fullname = $_POST['fullname'];
   	 	$email = $_POST['email'];
    		$role = $_POST['role'];
		$username = $_POST['username'];
		$Password1 = $_POST['Password1'];
		$Password2 = $_POST['Password2'];



 if($Password1==$Password2)
 {
     $sql="INSERT INTO user (fullname,email,username,role,Password1,Password2) VALUES
        ('$fullname','$email','$username','$role',md5('$Password1'),md5('$Password2'))";
        
    if (!mysqli_query($connection,$sql))
    {
     die("Error: " . mysqli_error($connection));
    } else {
     session_start();
     $_SESSION['success_message']="Successfully Registered";
     header("Location:../User-Login.php");
    }
 } else {
  session_start();
  $_SESSION['error_message']="Password mismatched.";
  header("Location:../User-SignUp.php");
 }
	?>
