<?php
include('connection.php');

$path = $_POST['file'];

try{

    $path = "D:/" . $path;
    $username      = "root";
    $database = "xyt.inc.com";

    $cmd = "C:/xampp/mysql/bin/mysql -u {$username} {$database} < $path";
    exec($cmd);
    Header("Location: ..\backUpRestoreData.php");
  } catch(Throwable $e){
      die($e);
  }

?>