<?php
session_start();

require 'vendor/autoload.php';


$fb = new Facebook\Facebook([
    'app_id' => '762824364394136', 
    'app_secret' => '2c0c567e83dafe6f672fd115f734b744',  
    'default_graph_version' => 'v2.10'
        ]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/xyt/user/home.php");




?>