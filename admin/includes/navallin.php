<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-theme.css">
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
  <?php include('includes/navallin style.css') ?>
  <?php include('includes/navigation style.css') ?>
  </head>
<body>
<div class="header">

</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Home.php"><img src="Includes/img/logo.svg"></a>
	 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="fa fa-folder" href="Category.php" style="font-size: 110%"> Category</a></li>
        <li> <a class="fa fa-camera" href="Gallery.php" style="font-size: 110%"> Art Gallery</a></li>
		 <li><a class="fa fa-user" href="Artists.php" style="font-size: 110%"> Artists</a></li>
       
        
		
        <li><a class="Login" href="Account.php"><span class="fa fa-lock"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

 <script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>

</body>
</html>
