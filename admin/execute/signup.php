  <?php include 'connection.php';


		$fullname = $_POST['fullname'];
		$address = $_POST['address'];
		$contact_number = $_POST['contact_number'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];



 if($password1==$password2)
 {
     $sql="INSERT INTO admin (fullname,address,contact_number,
        username,email,password1,password2) VALUES
        ('$fullname','$address','$contact_number',
        '$username','$email',md5('$password1'),md5('$password2'))";
        
    if (!mysqli_query($connection,$sql))
    {
     die("Error: " . mysqli_error($connection));
    } else {
     session_start();
     $_SESSION['success_message']="Successfully Registered";
     header("Location:../Home.php");
    }
 } else {
  session_start();
  $_SESSION['error_message']="Password mismatched.";
  header("Location:../SignUp.php");
 }
	?>
