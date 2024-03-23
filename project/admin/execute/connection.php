<?php

 $host='localhost';
 $username='root';
 $password='';
 $database='xyt';
 
 $connection=mysqli_connect($host,$username,$password,$database);
 if(!$connection)
 {
  die("Connection failed." . mysqli_error($connection));
 } 
date_default_timezone_set("Asia/Manila");
$error = "";

?>