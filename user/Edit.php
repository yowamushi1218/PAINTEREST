<?php include 'execute/connection.php';

    session_start();

    $id = $_SESSION['id'];

    $sql="SELECT * FROM user WHERE id='$id'";
    $sql_result=mysqli_query($connection,$sql);
    $user=mysqli_fetch_assoc($sql_result);
	
	
?>
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
  margin-left: 10px;
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
    width: 600px;
    margin: 10px auto;
  }
  .signup-form form{
    color: black;
    border-radius: 4px;
      margin-bottom: 55px;
       background: rgba(0,0,198,0.5);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    
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
        margin: 10px -30px 10px;
    }    
.signup-form .form-group{
	min-width: 560px;
    margin-bottom: 10px;
	margin-left: 0%;
	margin-right: 10%;
  }
.signup-form .btn{        
    font-size: 16px;
    font-weight: bold;
    background: black;
    border: none;
    min-width: 560px;
    margin-right: auto;
	 margin-bottom .btn: 10px;
	margin-left: 0;
    }
  .signup-form .btn:hover, .signup-form .btn:focus{
    background: black !important;
    outline: none;
  }
  .signup-form .form-id{
	  min-width: 560px;
	  margin-top: 10px;
	  margin-right: auto;
	  margin-bottom: 10px;
	  margin-left: 58% ;
  }

</style>

<body>
<div class="header">
<img src="Includes/img/po.jpg" >
</div>
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
    <form method='post' action="execute/update.php" >
    <h2>Update your Acount</h2>
    <p>Please fill in this form to create an account!</p>
    <hr>
      <div class="form-group">
      <div class="row">
	  <div class="form-id">
        <div class="col-xs-5"><input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $user['id'] ?>" required></div>
        </div>
		<div class="form-group">
       <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo $user['firstname'] ?>" required>
      </div>     
      <div class="form-group">     
          <input type="Username" class="form-control" name="lastname" placeholder="Lastname"value="<?php echo $user['lastname'] ?>" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user['username'] ?>" required>
        </div>
    <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user['email'] ?>" required>
        </div>      
    <div class="form-group">
            <button type="submit" class="btn btn-success"> UPDATE </button>  
        </div>
		<div class="form-group">
		<button type="submit" class="btn btn-success"> <a href="Home.php">Cancel<a></button>  
	</div>		
		</div>
		</div>
    </form>
    </div> 
 <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>                            