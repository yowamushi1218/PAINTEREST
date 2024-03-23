<?php
include "header.php";
include "execute/connection.php";

$userID=$_GET["userID"];
$fullname="";
$username="";
$email="";
$role="";
$status="";


$res=mysqli_query($connection,"select * from user where userID=$userID");
while($row=mysqli_fetch_array($res))
{
    $fullname=$row["fullname"];
    $email=$row["email"];
    $username=$row["username"];
    $role=$row["role"];
    $status=$row["status"];
}
?>

    
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a>
            <a href="Add_User.php" title="Back to Customer" class="tip-bottom"><i class="icon-file"></i>
            Back to User Info</a>
          </div>
    </div>
    <!--End-breadcrumbs-->

     <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
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
                <input type="email" class="span11" placeholder="Enter your email" name="email" value="<?php echo $email;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Position :</label>
              <div class="controls">
                  <select name="role" class="span11">
                    <option <?php if($role=="Admin"){echo "selected";} ?>>Admin</option>
                    <option <?php if($role=="User"){echo "selected";} ?>>User</option>
                  </select>
              </div>
            </div>
                <input type="hidden" class="span11" placeholder="Enter your email" name="password1"/>
                <input type="hidden" class="span11" placeholder="Enter your email" name="password2" />
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

 mysqli_query($connection,"UPDATE user set fullname='$_POST[fullname]',email='$_POST[email]',username='$_POST[username]',role='$_POST[role]',status='$_POST[status]' where userID=$userID") or die(mysqli_error($connection));
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