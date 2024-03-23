  <?php include 'connection.php';

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
		$Password1 = $_POST['Password1'];
		$Password2 = $_POST['Password2'];



 if($Password1==$Password2)
 {
     $sql="INSERT INTO user (id,firstname,middlename,lastname,school,program,yearlevel,phonenumber,
        username,email,Password1,Password2) VALUES
        ('$id','$firstname','$middlename','$lastname','$school','$program','$yearlevel','$phonenumber',
        '$username','$email',md5('$Password1'),md5('$Password2'))";
        
    if (!mysqli_query($connection,$sql))
    {
     die("Error: " . mysqli_error($connection));
    } else {
     session_start();
     $_SESSION['success_message']="Successfully Registered";
     header("Location:../index.php");
    }
 } else {
  session_start();
  $_SESSION['error_message']="Password mismatched.";
  header("Location:../SignUp.php");
 }
	?>
