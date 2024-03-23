<?php
include('connection.php');
try{
    define("BACKUP_PATH", "D:/");

    $host  = "localhost";
    $username      = "root";
    $database = "xyt.inc.com";
    $date_string   = date("m-d-Y");

    $cmd = "C:/xampp/mysql/bin/mysqldump --routines -h {$host} -u {$username} {$database} > " . BACKUP_PATH . "{$date_string}_{$database}.sql";

    exec($cmd);

    Header("location: ..\backUpRestoreData.php");
} catch(throwable $e){
    die($e);
}

?>