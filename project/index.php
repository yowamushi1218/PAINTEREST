<?php session_start(); 
    if(isset($_SESSION['password'])){
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>XYT INC.</title>
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </head>
<style>

    .header h1{
        font-style: normal;
        font-family: Honey;
        font-size: 150px;
        color: orange;
    }

	body{
		background-color: teal;	
		background-size: contain; 
   font-size: 18px;
    color: white;
    }
* {
  box-sizing: border-box;
}
.row {
  display: flex;
}
.column {
  flex: 33.33%;
  padding: 230px;
}
.main-section{
  margin: 0 auto;
  margin-top:100px;
  margin-left: 20%;
  background-color: darkcyan;
  border-radius: 5px;
  padding: 0px;
}
.user-img{
  margin-top:-50px;
}
.user-img img{
  height: 100px;
  width: 100px;
}
.user-name{
  margin:10px 0px;
}
.user-name h1{
  font-size:30px;
  color:#676363;
}
.user-name button{
  position: absolute; 
  top:-50px;
  right:20px;
  font-size:40px;

}
.form-input button{
  width: 50%;
  height: 100%;
  margin-bottom: 20px;
}
.link-part{
  border-radius:0px 0px 5px 5px;
  background-color: darkcyan;
  padding:15px;
  border-top:1px solid #c2c2c2;
}
.open-modal{
  margin-top:100px !important;
}
</style>

<body>
        <div class="col-lg-12 col-sm-12 col-12 form-input" style="position: absolute; top: 20%; left: 44%;"> 
            
            <?php
            if(isset($_SESSION['error_message'])){
                        echo '<b style="color: darkred;">Invalid password!</b>';
                unset($_SESSION['error_message']);
                }
             ?>     
         
        </div>
<div class="header">
<h1 class="text-center"> XYT Incorporation </h1>  
</div>
<div class="row">
	<div class="column">
     <div class="image1" ><a href="#myModal" data-toggle="modal"><img src="img/admin.png" title="Login as ADMIN" style="width:50%; margin-left: 110%; margin-top: -60%"/></a>
     </div>
     <p class="text-center" style="margin-left: 125%; margin-top: -5%">ADMIN</p>
    </div>
    <div id="myModal" class="modal fade text-center">
  <div class="modal-dialog">
    <div class="col-lg-8 col-sm-8 col-12 main-section">
      <div class="modal-content">
        <div class="col-lg-12 col-sm-12 col-12 user-img">
          <img src="img/secure.png">
        </div>
        <div class="col-lg-12 col-sm-12 col-12 user-name">
          <h1>Administrator</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <div class="col-lg-12 col-sm-12 col-12 form-input">
          <form action="admin-login.php" method="POST" >
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required="password">
            </div>
            <button type="submit" class="btn btn-success" name="submit" value="login">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="column">
     <div class="image2"><a href="User-Login.php"><img src="img/user.png" title="Login as USER" style="width:50%; margin-left: -60%; margin-top: -60%"/></a></div>
     <p class="text-center" style="margin-left: -170%; margin-top: -5%">USER</p>
    </div>
    </div>
   <?php
  require 'includes/footer.php'; ?>
 <script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>                            