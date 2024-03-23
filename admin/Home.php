<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<?php include('Includes/home style.css') ?>
</head>
<body class="home">
<?php include('Includes/navigation.php') ?>
<br>
</br>
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
<div class="container" style="margin-left:150px;padding:0px 16px;">
  <h1><b>WE BELIEVE</b></h1>
  <h3><b>THAT ART CAN MAKE THIS WORLD A BETTER PLACE</b></h3>
  <hr>
  
  <img src="includes/img/hh.gif">
  <br>
  <p>PAINTEREST is an association of artists that aims to connect patrons and lovers of arts woth unique, independent artists, and create a positive difference to the society.
  This is a social art community for artist around the world who shared the same interest in painting. All fine arts artist and digital artist can join PAINTEREST for free
  and submit their artworks to showcase their creativeness and passion in pursuing art.</p>
  <hr>
</div>

</body>
</html>