  <?php include 'connection.php';

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $position = $_POST['position'];
    $department = $_POST['department'];



 if($password==$confirm_password)
 {
     $sql="INSERT INTO admin (fullname,username,email,password,confirm_password,position,department) VALUES
        ('$fullname','$username','$email',md5('$password'),md5('$confirm_password'),'$position','$department')";
        
    if (!mysqli_query($connection,$sql))
    {
     die("Error: " . mysqli_error($connection));
    } else {
     session_start();
     $_SESSION['success_message']="Successfully Registered";
     header("Location:../Admin-Login.php");
    }
 } else {
  session_start();
  $_SESSION['error_message']="Username and Password incorrect.";
  header("Location:../Admin-SignUp.php");
 }
  ?>
