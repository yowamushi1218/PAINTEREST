<!DOCTYPE html>
<html lang="en">
<head>
<title>Register Form</title>
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
  </head>
<style>
.header img{
	display: block;
    margin-top: 0%;
	margin-left: 0px;
	margin-right: auto;
	width:100%;
	height:150px;

}

	body{
		color: black;
		background: black;
		font-family: 'Roboto', sans-serif;
		background-image: url('Includes/img/aw.jpg');	
		background-size: contain; 
	}
    .form-control{
		height: 41px;
		background: white;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: white;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 800px;
		margin: 20px auto;
	}
	.signup-form form{
		color: black;
		border-radius: 4px;
    	margin-bottom: 10px;
       background: rgba(0,0,198,0.5);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 20px;
		
    }
	.signup-form h2 {
		color: white;
		font-weight: bold;
        margin-top: 0;
    }
	.signup-form p{
		color:white;
	}
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form .row div:first-child{
		padding-right: 120px;
	}
	.signup-form .row div:last-child{
		padding-left: 15px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: black;
		border: none;
		min-width: 140px;

		
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: black !important;
        outline: none;
	}
    .signup-form a{
		color: red;
		
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: white;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }
</style>

<body>
<div class="header">
<img src="Includes/img/po.jpg" >
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
		<h2>Registration Form</h2>
		<p>Please fill up this form to create an account!</p>
		<hr>
        <div class="form-group">
        	<input type="firstname" class="form-control" name="firstname" placeholder="First Name" required="required"> 
        </div>
        <div class="form-group">
        	<input type="middlename" class="form-control" name="middlename" placeholder="Middle Name" required="required">
        </div>
		<div class="form-group">
            <input type="lastname" class="form-control" name="lastname" placeholder="Last Name" required="required">
        </div>
		<div class="form-group">
            <input type="school" class="form-control" name="school" placeholder="School" required="required">
        </div>   
		        <div class="form-group">
        	<input type="program" class="form-control" name="program" placeholder="Program" required="required">
        </div>
        <div class="form-group">
        	<input type="yearlevel" class="form-control" name="yearlevel" placeholder="Year Level" required="required">
        </div>
		<div class="form-group">
            <input type="phonenumber" class="form-control" name="phonenumber" placeholder="Contact number: +63" required="required">
        </div>
        <div class="form-group">
        	<input type="Username" class="form-control" name="username" placeholder="Username: myname" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email ex: myname@example.com" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="Password1" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="Password2" placeholder="Confirm Password" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">Sign Up</button>	
        </div>
    </form>
  </div>
	 <p class="text-center meduim">Already Registered! <a href="index.php">Login Here</a>.</p>
 <script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>                            