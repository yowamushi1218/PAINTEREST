<!DOCTYPE html>
<html lang="en">
<head>
<title> Login </title>
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
	background-image: url('Includes/img/2.jpg');	
	background-size: contain; 
	
}
.login-form {
	width: 450px;
	margin: 30px auto;
	margin-top: 8%;
	color: white;
}
.login-form form {        
    margin-bottom: 15px;
    background: rgba(119,119,119,0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
    padding: 30px;
	border-radius: 12px;
	
	height: 280px;
}
.login-form h2 {
    margin: 0 0 15px;
	font-family: 'Roboto', sans-serif;
	color:white;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 12px;
}
.input-group-addon .fa {
    font-size: 18px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
	color: black;
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
<div class="login-form">
    <form action="execute/login.php" method="POST">
        <h2 class="text-center"]>User Login</h2>   
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="Text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
           <button type="submit" class="btn btn-warning btn-block"> Log in</button>
        </div>        
    </form>
    <p class="text-center small">Don't have an account! <a href="SignUp.php">Sign up here</a>.</p>
</div>
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>