<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Art Gallery</title>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
<?php include('includes/navigation style.css') ?>
<?php include('includes/navallin style.css') ?>
<?php include('Includes/navigation.php') ?>
</head>
<style>
* {
  box-sizing: border-box;
}

h2{
	color:rgba(230,187,89);
	text-align: center;
	font-weight: bold;
	font-size: 60px;
	font-family:  "Bradley Hand ITC";
}
h3{
	text-align: center;
	
}
p{
	color:rgba(230,187,89);
	text-align: center;
	font-weight: bold;
	font-size: 20px;
	font-family:  "Bradley Hand ITC";
}
	
body {
  background-color: black;
  padding: 0px;
  font-family:  "Arial";
  color:white;
  font-weight: bold;
 
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
 
}


.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 5px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: black;
  padding: 0px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 5%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
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
<h2>ARTISTS</h2>
<hr>
<br>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="Includes/img/ma.jpg" style="width:100%; height:260px">
      
      <p>Wimple Aira Umaoeng</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/jed.jpg"  style="width:100%; height:260px">
      
      <p>Jed Guillermo</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/kl.jpg"  style="width:100%; height:260px">
      
      <p>Klein Elisa Paula Aranas</p>
    </div>
  </div>
  
  <div class="column">
    <div class="content">
      <img src="Includes/img/der.jpg"  style="width:100%; height:260px">
      
      <p>Deryllen Tolentino</p>
    </div>
  </div>
 
  <div class="column">
    <div class="content">
      <img src="Includes/img/riz.jpg" style="width:100%; height:260px">
     
      <p>Riza Pequiro</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/nc.jpg"  style="width:100%; height:260px">
      
      <p>Nicole Larida</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/lyn.jpg"  style="width:100%; height:260px">
      
      <p>Gelyn Bete</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/nd.jpg"  style="width:100%; height:260px">
     
      <p>Nadine Alexis Lustre</p>
    </div>
  </div>
</div>

<div class="content">

<hr>

<!-- END MAIN -->
</div>




 </div>







 
</body>
</html>
