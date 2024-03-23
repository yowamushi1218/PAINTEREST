<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sending Message</title>  
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-theme.css">
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-old.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
      <style>
        .jumbotron {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60%;
            padding-top: 50px;
            transform: translate(-50%, -50%);
            background-color: antiquewhite;
        }

        h3 {
            text-align: center;
        }
    </style>
  </head>
  <body>
     <div class="container">
        <div class="jumbotron">

<?php
include 'execute/connection.php';

require __DIR__ . '/sms_api/src/Twilio/autoload.php';

use Twilio\Rest\Client;

    $sid = 'AC9d7546a33a7b4016fb74397aec764505';
    $token = '1fbbfd792fb8e7fbff806d8b5e75d9c8';
    $twilio_number = '+15862173750';
    $client = new Client($sid, $token);

$phonenumber = $_POST['phonenumber'];    
$message = $_POST['message'];


$sql= "SELECT phonenumber FROM user";

$result = mysqli_query($connection,$sql);
$phonenumber = array();

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $phonenumber[] = $row;
        }
    }
   foreach($phonenumber as $data){
        $client->messages->create(
            $data['phonenumber'],
            [
                'from' => $twilio_number,
                'body' => $message
            ]
        );
    }

    $phonenumber = '' ;
    $message = '';

$date_time = $_POST['date_time'];
$program = $_POST['program'];
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

   $insert = "INSERT INTO sms_records(date_time,program,username,email,message) VALUES ('$date_time','$program','$username','$email','$message')"; 

  $sql= mysqli_query($connection,$insert) or die (mysqli_error($connection));

 if ($sql){

     echo '
                        <a href="file records.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" />
                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z" />
                        </svg>
                        Create Message
                        <div class="alert alert-success mt-4" role="alert">Message has been sent.</div>
                        ';
                }else{
                    echo '
                        <a href="file records.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        Back
                        </a>
                        <div class="alert alert-success mt-4" role="alert">Sending Failed.</div>';
                }
                
  
?>

        </div>
    </div>

 <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
<body>
</html>