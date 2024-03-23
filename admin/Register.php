<!DOCTYPE html>
<html>
<head>
  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css">
</head>
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: lavenderblush;
}

.header {
  width: 50%;
  margin: 50px auto 0px;
  color: darkred;
  background: dimgrey;
  text-align: center;
  border: 1px solid grey;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
.header1 img{
  display: block;
    margin-top: 0%;
  margin-left: 0px;
  margin-right: auto;
  width:100%;
  height:150px;

}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid black;
  background: lightgrey;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}

.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 97%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.button {
  width: 50%;
  padding: 10px;
  font-size: 15px;
  color: black;
  background: limegreen;
  border: none;
  border-radius: 5px;
}
.btn {
  width: 50%;
  padding: 10px;
  font-size: 15px;
  color: black;
  background: red;
  border: none;
  border-radius: 5px;
}
.success {
  color: bisque; 
  background: cornsilk; 
  border: 1px solid darkcyan;
  margin-bottom: 20px;
}
</style>
<body>
<div class="header1">
<img src="Includes/img/po.jpg" >
</div>
  <div class="header">
    <h2>Admin Registration</h2>
  </div>
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
  <form method="post" action="execute/signup.php">
    <div class="input-group">
      <label>Fullname</label>
      <input type="text" name="fullname" value="" required>
    </div>
    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" value="" required>
    </div>
    <div class="input-group">
      <label>Contact Number</label>
      <input type="text" maxlength="13" minlength="13" name="contact_number" placeholder="Type Number +63" value="" required>
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="" required>
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="name@email.com" value="" required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password1" required>
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password2" required>
    </div>
    <center>
    <div class="input-group">
      <button type="submit" class="button" name="admin_reg">Register</button>
      </div>
        <button type="cancel" class="btn btn-warning btn-lg"><a href="Home.php">Cancel</a></button>  
      </div>
</center>
    </div>
  </form>
</body>
</html>