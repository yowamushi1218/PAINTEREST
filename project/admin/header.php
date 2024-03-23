<?php session_start(); 
    if(isset($_SESSION['username'])){
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>XYT Company</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div id="header">

    <h2 style="color: white;position: absolute">
        <a href="dashboard.html" style="color:white; margin-left: 40px; margin-top: 10px">XYT Inc.</a>
    </h2>
</div>

<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="active">
            <a href="home.php" ><i class="icon icon-home"></i><span>Dashboard</span></a>
        </li>
        <li >
            <a href="Add_Costumer.php"><i class="icon icon-user"></i><span>Customer</span></a>
        </li>
        <li >
            <a href="orders.php"><i class="icon icon-shopping-cart" id="myBtn1" data-toggle="modal" data-target="#User"></i><span>Orders</span></a>
        </li>
        <li >
            <a href="add_product.php"><i class="icon icon-file"></i><span>Products</span></a>
        </li>
        <li >
            <a href="add_supplier.php"><i class="icon icon-user"></i><span>Supplier</span></a>
        </li>
        <li >
            <a href="add_reports.php"><i class="icon icon-calendar"></i><span>Reports</span></a>
        </li>
        <li>
            <a href="backUpRestoreData.php"><i class="icon icon-remove"></i> <span>System</span> <span
                class="label label-important"></span></a>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>FAQ</span> <span
                class="label label-important"></span></a>
            <ul>
                
            </ul>
        </li>

    </ul>
</div>



<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
             <i class="icon icon-user"></i> <span class="text"> Hello - <?php echo $_SESSION['username'];?></span></a>

            <ul class="dropdown-menu">
                <li><a href="Admin_profile.php"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="..\index.php"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>


    </ul>
</div>