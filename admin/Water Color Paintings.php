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
<h2>WATER COLOR PAINTINGS</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="Includes/img/j.jpg" alt="Mountains" style="width:100%; height:300px">
      <h3>Blue Bird</h3>
      <p>Painted by: Nadine Alexis Lustre</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/lo.jpg" alt="Lights" style="width:100%; height:300px">
      <h3>Royal Castle</h3>
      <p>Painted by: Wimple Aira Umaoeng</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/ln.jpg" alt="Nature" style="width:100%; height:300px">
      <h3>Aesthetic Lake</h3>
      <p>Painted by: Gelyn Bete</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/a5.jpg" alt="Mountains" style="width:100%; height:300px">
      <h3>Love Birds</h3>
      <p>Painted by: Nicole Larida</p>
    </div>
  </div>
  


 </div>







 
</body>
</html>
