<?php include 'admin/execute/connection.php';
session_start();

if($_POST['password'] == "admin"){
      session_start();
      $_SESSION['success_message']="";
      header("Location: admin/Admin-Login.php");
    }
    else{
    session_start();
    $_SESSION['error_message']="";
    header("Location: index.php");
    }

?>