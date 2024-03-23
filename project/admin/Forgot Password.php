<?php 
include"execute/connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'execute/vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'execute/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'execute/vendor/PHPMailer/PHPMailer/src/SMTP.php';


if (isset($_POST["email"])) {

    $emailTo = $_POST["email"];

    $key = uniqid(true);
    $query = mysqli_query($connection,"INSERT into password_reset (email,key) values('$emailTo','$key')");
    if(!$query){
        exit("ERROR");
    }

    $mail = new PHPMailer(true);

try {
    //Server settings                   
    $mail->isSMTP();                                    
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   =  true;                             
    $mail->Username   = 'w.umaoeng.477036@umindanao.edu.ph';                    
    $mail->Password   = 'baemax18';                             
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       =  465;           

    //Recipients
    $mail->setFrom('w.umaoeng.477036@umindanao.edu.ph', 'Admin');
    $mail->addAddress($emailTo);    
    $mail->addReplyTo('no-reply@umindanao.edu.ph', 'No reply');


    //Content
    $url = "http://localhost/xyt/admin/recover_password.php?key=$key";
    $mail->isHTML(true);                                 
    $mail->Subject = 'Recover your Password';
    $mail->Body    = "<h1>You requested a password reset<h1> <b>in bold!</b>
                        Clink <a href ='$url'> this link </a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Request reset password has been sent to your email';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error',$mail->ErrorInfo;
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forgot Password</title>
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
  </head>
<style>

    .header h1{
        font-style: normal;
        font-family: Honey;
        font-size: 150px;
        color: orange;
    }

	body{
		font-family: 'Times New Roman', sans-serif;
		background-image: url('Includes/img/wat.jpg');	
		background-size: contain; 
        font-size: 18px;
        margin-right: auto;
        margin-left: auto;
        color: white;
	}
    .form-control{
		height: 40px;
        width: 350px;
        margin-left: 30px;
		background: lightgray;
		box-shadow: none !important;
		border: none;

	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.forgot-form{
		width: 450px;
		margin-left: 35%;
        margin-bottom: 13%;
        border: none;
	}
	.forgot-form form{
        background: rgba(240,240,298,0.5);
        box-shadow: 10px 21px 21px rgba(110, 110,110, 0.3);
        padding: 20px;
        margin-bottom: 3%;
        border-radius: 20px;     

    }
	.forgot-form h2 {
		color: black;
		font-weight: bold;
    }
	.forgot-form p{
		color: white;
		font-size: 15px;
	}

    .forgot-form .btn{        
        font-size: 20px;
        font-weight: bold;
		background: black;
		border: none;
		min-width: 240px;
		margin-left: 20%;
    }
</style>
<body>
<div class="header">
<h1 class="text-center"> <a href="..\index.php"> XYT Incorporation</a> </h1>  
</div>
<div class="forgot-form">
    <form action="Forgot Password.php" method="POST">
		<h2 class="text-center">Recover Password</h2>
		<p class="text-center">Please fill up this form again to recover your existing account!</p>
		<hr>
		<div class="form-id">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" id= "email" name="email" placeholder="Email" required="email" autocomplete="on">
        </div>    
		<div class="form-group">
            <button type="submit" id="reset" name="submit" class="btn btn-success btn-lg">Confirm</button>	
        </div>
    </form>
        <div class="index">
    <p class="text-center small">Remember your account! <a href="Admin-Login.php">Login here</a>.</p>
    </div>
  </div>
   <?php
  require 'includes/footer.php'; ?>
 <script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>                            