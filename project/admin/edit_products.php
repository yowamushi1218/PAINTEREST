<?php
include "header.php";
include "execute/connection.php";

$productID=$_GET["productID"];
$productCode="";
$productName="";
$productDescription="";
$productDetails="";
$unitPrice="";
$quantity="";
$status="";

$res=mysqli_query($connection,"SELECT * from product where productID=$productID");
while($row=mysqli_fetch_array($res))
{
    $productCode=$row["productCode"];
    $productName=$row["productName"];
    $productDescription=$row["productDescription"];
    $productDetails=$row["productDetails"];
    $unitPrice=$row["unitPrice"];
    $quantity=$row["quantity"];
    $status=$row["status"];

}
?>

    
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a>
            <a href="add_product.php" title="Back to Products" class="tip-bottom"><i class="icon-file"></i>
            Back to Products</a>
          </div>
    </div>
    <!--End-breadcrumbs-->

     <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Product-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Product Code:</label>
              <div class="controls">
                <input type="search" class="span11" placeholder=" " name="productCode" value="<?php echo $productCode;?>" disabled/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Name:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder=" " name="productName" value="<?php echo $productName;?>" required/>
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Product Description:</label>
              <div class="controls">
              <input type="description" class="span11" placeholder=" " name="productDescription" value="<?php echo $productDescription;?>" required/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Product Details:</label>
              <div class="controls">
                <input type="details" class="span11" placeholder=" " name="productDetails" value="<?php echo $productDetails;?>" required/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Supplier Name:</label>
              <div class="controls">

                <select name="Supplier" class="span11">
                  <option>---Select supplier name---</option>
               <?php
                $res=mysqli_query( $connection,"SELECT supplierName FROM supplier where supplierName=supplierName");
                while($row=mysqli_fetch_array($res))
                {
                  ?>
                      <option><?php echo $row["supplierName"];?></option>
                <?php
                }
                ?>
                  </select>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Price:</label>
              <div class="controls">
                <input type="price" class="span11" placeholder=" " name="unitPrice" value="<?php echo $unitPrice;?>" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Quantity:</label>
              <div class="controls">
                <input type="disabled" class="span11" placeholder=" " name="quantity" value="<?php echo $quantity;?>" disabled/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Select Status :</label>
              <div class="controls">
                  <select name="status" class="span11" required>
                      <option <?php if($status=="active"){echo "selected";} ?>>Active</option>
                      <option <?php if($status=="inactive"){echo "selected";} ?>>Inactive</option>
                  </select>
              </div>
            </div>
             <div class="alert alert-danger" id="error" style="display:none">
                Username already Exist! Please Try Another.
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">SUBMIT</button>
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

    mysqli_query($connection,"UPDATE product set productName='$_POST[productName]',productDescription='$_POST[productDescription]',productDetails='$_POST[productDetails]',Supplier='$_POST[Supplier]',unitPrice='$_POST[unitPrice]',status='$_POST[status]' where productID=$productID ") or die(mysqli_error($connection));
 
 ?>

 <script type="text/javascript">
 document.getElementById("success").style.display="block";
 setTimeout(function(){
   window.location="add_product.php"; 
 },2000)
 </script>

 <?php
}

?>
<!--end-main-container-part-->

<?php
include "footer.php"
?>