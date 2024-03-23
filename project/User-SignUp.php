<!DOCTYPE html>
<html lang="en">
<head>
<title>Register Form</title>
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
  </head>
<style>

.header h1{
 font-style: normal;
 font-family: Honey;
 font-size: 30px;
color: white;
}

	body{
		font-family: 'Times New Roman', sans-serif;
		background-image: url('img/1.png');	
		background-size: 130%; 
    font-size: 16px;
    margin-right: auto;
    margin-left: auto;
    color: white;
	}
    .form-control{
		height: 40px;
    width: 350px;
    margin-left: 30px;
		background: white;
		box-shadow: none !important;
		border: 15px;

	}
	.form-control:focus{
		background: white;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 450px;
		margin: auto;
	}
	.signup-form form{
    background: darkcyan;
    box-shadow: 10px 12px 12px rgba(10, 10,10, 0.3);
    padding: 20px;

    }
	.signup-form h2 {
		color: white;
		font-weight: bold;
    }
	.signup-form p{
		color:white;
	}

    .signup-form .btn{        
    font-size: 20px;
    font-weight: bold;
		background: black;
		border: none;
		min-width: 240px;
		
    }
.field-icon {
  float: right;
  margin-top: -7%;
  margin-right: 8%;
  position: relative;
  z-index: 2;
}
</style>

<body>
<div class="header">
<h1 class="text-center"><a href="index.php"> XYT Incorporation</a></h1>  
</div>
<?php session_start(); ?>

    <div class="col-md-12">
     <div class="row1" style="text-align: center;">
      <?php
       if(isset($_SESSION['success_message']))
       {
      ?>
      <div class="alert alert-success">
       <span class="fa fa-exclamation-triangle">
       <?php echo $_SESSION['success_message']; ?>
      </div>
      <?php
       unset($_SESSION['success_message']);
       }
      ?>
     </div>
    </div>

    <div class="col-md-12">
     <div class="row2" style="text-align: center;">
      <?php
       if(isset($_SESSION['error_message']))
       {
      ?>
      <div class="alert alert-danger">
       <span class="fa fa-exclamation-triangle">
       <?php echo $_SESSION['error_message']; ?>
      </div>
      <?php
       unset($_SESSION['error_message']);
       }
      ?>

<div class="signup-form">
    <form action="execute/signup.php" method="POST">
		<h2>Registration</h2>
		<p>Please fill up this form to create an account!</p>
		<hr>
        <div class="form-group">
        	<input type="fullname" class="form-control" name="fullname" placeholder="Fullname" required="required"> 
        </div>
          <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required="required"> 
        </div>
        <div class="form-group">
        	<input type="Username" class="form-control" name="username" placeholder="Username: myname" required="required" autocomplete="on">
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="role" value="User" autocomplete="on">
        </div>
		    <div class="form-group">
            <input id="password-field" type="password" class="form-control" name="Password1" placeholder="Password" required="required">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="color: black;"></span>
        </div>
		    <div class="form-group">
            <input id="password-field1" type="password" class="form-control" name="Password2" placeholder="Confirm Password" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">Sign Up</button>	
        </div>
    </form>
  </div>
  <div>
	 <p class="text-center meduim" style="margin-bottom: 5%; font-size: 20px; margin-top: 15px;">Already Registered! <a href="User-Login.php">Login Here</a>.</p>
  </div>

 <script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>                            
<script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

   <?php
  require 'includes/footer.php'; ?>