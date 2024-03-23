<?php

 $host='localhost';
 $username='root';
 $password='';
 $database='xyt.inc.com';
 
 $connection=mysqli_connect($host,$username,$password,$database);
 if(!$connection)
 {
  die("Connection failed." . mysqli_error($connection));
 } 

?>