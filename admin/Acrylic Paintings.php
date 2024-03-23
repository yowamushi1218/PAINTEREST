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
	text-align: center;
	font-weight: bold;
	font-size: 60px;
}
h3{
	font-weight: bold;
	
}
body {
  background-color: black;
  padding: 0px;
  font-family:  "Bradley Hand ITC";
  color:black;
  font-weight: bold;
}

/* Center website */
.main {
  max-width: 1025px;
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
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
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
<h2>ACRYLIC PAINTINGS</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="Includes/img/apple.jpg" style="width:100%; height:300px">
      <h3><b>Apples of Life</b></h3>
      <p>Painted by: Klein Elisa Paula Aranas</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/n.jpg" style="width:100%; height:300px">
      <h3>Night and Day</h3>
      <p>Painted by: Wimple Aira Umaoeng</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/a3.jpg" style="width:100%; height:300px">
      <h3>Calm Green</h3>
      <p>Painted by: Deryllen Tolentino</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="Includes/img/st.jpg" style="width:100%; height:300px">
      <h3>Cutie Stitch</h3>
      <p>Painted by: Riza Pequiro</p>
    </div>
  </div>



 </div>







 
</body>
</html>

 