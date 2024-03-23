<!DOCTYPE html>
<html lang="en">
<head>
<title> Category </title>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
<?php include('Includes/navigation.php') ?>
<?php include('includes/navallin style.css') ?>
<?php include('includes/navigation style.css') ?>
</head>
<style>
* {
  box-sizing: border-box;
}
h2{
	color:rgba(230,187,89);
	font-size: 60px;
	text-align: center;
}
h3{
	font-weight: bold;
	
}
body {
  background-color: black;
  padding: 0px;
  font-family: Arial;
  color:black;
  font-family:  "Bradley Hand ITC";
  font-weight: bold;
}


.main {
  max-width: 1025px;
  margin: auto;
 
}


.row {
  margin: 8px -16px;
}


.row,
.row > .column {
  padding: 5px;
}


.column {
  float: left;
  width: 25%;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}


@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}


@media screen and (max-width: 600px) {
  .column {
    width: 20%;
  }
}
</style>

<body>
<div class="container" style="margin-left:150px;padding:0px 16px;">
<div class="main">


<hr>
<br>
<h2>OIL CANVAS PAINTINGS</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="Includes/img/best.jpg" alt="Mountains" style="width:100%; height:300px">
      <h3>Bridge of Life</h3>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/s.jpg" alt="Lights" style="width:100%; height:300px">
      <h3>Sunflower</h3>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/vw.jpg"  style="width:100%; height:300px">
      <h3>Sunset View</h3>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/pn.jpg"  style="width:100%; height:300px">
      <h3>Sweet Escape</h3>
      <p></p>
    </div>
  </div>
  </div>
</div>
</div>







 
</body>
</html>
