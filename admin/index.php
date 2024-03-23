<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css">
</head>
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: burlywood;
}

.header {
  width: 30%;
  margin: 100px auto 0px;
  color: black;
  background: cornflowerblue;
  text-align: center;
  border: 1px solid grey;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
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
.btn {
  width: 100%;
  padding: 10px;
  font-size: 20px;
  color: black;
  background: springgreen;
  border: none;
  border-radius: 5px;
}
.success {
  color: bisque; 
  background: cornsilk; 
  border: 1px solid darkcyan;
  margin-bottom: 20px;
}
.header1 img{
  display: block;
    margin-top: 0%;
  margin-left: 0px;
  margin-right: auto;
  width:100%;
  height:150px;

}
</style>
<body>
<div class="header1">
<img src="Includes/img/po.jpg" >
</div>
  <div class="header">
    <h2>Admin Login</h2>
  </div>
  <form method="post" action="execute/login.php">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="" required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" value="" required>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="admin_login">Login</button>
    </div>
    <center>
    <p>
      Not yet a member? <a href="SignUp.php">Sign up</a>
    </p>
    </center>
  </form>
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

</body>
</html>