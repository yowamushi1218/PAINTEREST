<?php

 $host='localhost';
 $username='root';
 $password='';
 $database='email';
 
 $connection=mysqli_connect($host,$username,$password,$database);
 if(!$connection)
 {
  die("Connection failed." . mysqli_error($connection));
 } 

?>