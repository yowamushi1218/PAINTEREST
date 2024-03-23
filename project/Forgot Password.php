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
<h1 class="text-center"> <a href="index.php"> XYT Incorporation</a> </h1>  
</div>
<div class="forgot-form">
    <form action="execute/sendlink.php" method="POST">
		<h2 class="text-center">Forgot Password</h2>
		<p class="text-center">Please fill up this form again to recover your existing account!</p>
		<hr>
		<div class="form-id">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="Email" autocomplete="on">
        </div>    
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">Confirm</button>	
        </div>
    </form>
        <div class="index">
    <p class="text-center small">Remember your account! <a href="User-Login.php">Login here</a>.</p>
    </div>
  </div>
   <?php
  require 'includes/footer.php'; ?>
 <script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>                            