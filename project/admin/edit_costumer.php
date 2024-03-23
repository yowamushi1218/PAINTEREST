<?php
include "header.php";
include "execute/connection.php";

$customerID=$_GET["customerID"];
$fullname="";
$username="";
$email="";
$mobile_number="";
$address="";
$new_address="";
$status="";
$createdOn="";

$res=mysqli_query($connection,"select * from costumer where customerID=$customerID");
while($row=mysqli_fetch_array($res))
{
    $fullname=$row["fullname"];
    $username=$row["username"];
    $email=$row["email"];
    $mobile_number=$row["mobile_number"];
    $address=$row["address"];
    $new_address=$row["new_address"];
    $status=$row["status"];
}
?>

    
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a>
            <a href="Add_Costumer.php" title="Back to Customer" class="tip-bottom"><i class="icon-file"></i>
            Back to Customer</a>
          </div>
    </div>
    <!--End-breadcrumbs-->

     <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Customer-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Fullname :</label>
              <div class="controls">
                <input type="fullname" class="span11" placeholder="Enter your name" name="fullname" value="<?php echo $fullname;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="username" class="span11" placeholder="Enter your username" name="username" value="<?php echo $username;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="Email" class="span11" placeholder="Enter your email" name="email" value="<?php echo $email;?>"/>
              </div>
            </div>           
            <div class="control-group">
              <label class="control-label">Contact Number :</label>
              <div class="controls">
                <input type="mobile_number" class="span11" placeholder=" " name="mobile_number" value="<?php echo $mobile_number;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="address" class="span11" placeholder=" " name="address" value="<?php echo $address;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"> New Address :</label>
              <div class="controls">
                <input type="new_address" class="span11" placeholder=" " name="new_address" value="<?php echo $new_address;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Select Status :</label>
              <div class="controls">
                  <select name="status" class="span11">
                      <option <?php if($status=="active"){echo "selected";} ?>>Active</option>
                      <option <?php if($status=="inactive"){echo "selected";} ?>>Inactive</option>
                  </select>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">UPDATE </button>
            </div>           
          </form>
        </div>
      </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST["submit1"]))
{

 mysqli_query($connection,"update costumer set fullname='$_POST[fullname]',username='$_POST[username]',email='$_POST[email]',mobile_number='$_POST[mobile_number]',address='$_POST[address]',new_address='$_POST[new_address]', status='$_POST[status]' where customerID=$customerID ") or die(mysqli_error($connection));
 
 ?>

 <script type="text/javascript">
 document.getElementById("success").style.display="block";
 setTimeout(function(){
   window.location="Add_Costumer.php"; 
 },2000)
 </script>

 <?php
}

?>


<!--end-main-container-part-->

<?php
include "footer.php"
?>