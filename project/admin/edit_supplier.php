<?php
include "header.php";
include "execute/connection.php";

$supplierID=$_GET["supplierID"];
$supplierName="";
$email="";
$contactNumber="";
$Address="";
$status="";
$createdOn="";

$res=mysqli_query($connection,"select * from supplier where supplierID=$supplierID");
while($row=mysqli_fetch_array($res))
{
    $supplierName=$row["supplierName"];
    $email=$row["email"];
    $contactNumber=$row["contactNumber"];
    $Address=$row["Address"];
    $status=$row["status"];
    $createdOn=$row["createdOn"];
}
?>

    
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a>
            <a href="add_supplier.php" title="Back to Customer" class="tip-bottom"><i class="icon-file"></i>
            Back to Supplier Info</a>
          </div>
    </div>
    <!--End-breadcrumbs-->

     <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Supplier-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Fullname:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder=" " name="supplierName" required value="<?php echo $supplierName;?>"/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Email:</label>
              <div class="controls">
                <input type="email" class="span11" placeholder=" " name="email" required value="<?php echo $email;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Contact Number:</label>
              <div class="controls">
                <input type="number" class="span11" placeholder=" " name="contactNumber" required value="<?php echo $contactNumber;?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address:</label>
              <div class="controls">
                <input type="address" class="span11" placeholder=" " name="Address" required  value="<?php echo $Address;?>"/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                  <select name="status" class="span11">
                      <option <?php if($status=="active"){echo "selected";} ?>>Active</option>
                      <option <?php if($status=="inactive"){echo "selected";} ?>>Inactive</option>

                  </select>
              </div>
            </div>

             <div class="alert alert-danger" id="error" style="display:none">
                Username already Exist! Please Try Another.
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">UPDATE</button>
            </div>

             <div class="alert alert-success" id="success" style="display:none">
                Record Inserted Successfully
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
 mysqli_query($connection,"update supplier set supplierName='$_POST[supplierName]',email='$_POST[email]',contactNumber='$_POST[contactNumber]',Address='$_POST[Address]',status='$_POST[status]' where supplierID=$supplierID") or die(mysqli_error($connection));
 ?>
 <script type="text/javascript">
 document.getElementById("success").style.display="block";
 setTimeout(function(){
   window.location="add_supplier.php"; 
 },2000)
 </script>

 <?php
}

?>


<!--end-main-container-part-->

<?php
include "footer.php"
?>