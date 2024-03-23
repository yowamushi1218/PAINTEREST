<?php
include "header.php";
include "execute/connection.php";
?>


<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
        <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
           Dashboard</a><a href="add_product.php" title="Go to User" class="tip-bottom"><i class="icon-file"></i>
           Back to Products</a>
    </div>
  </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
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
                <input type="search" class="span11" placeholder=" " name="productCode" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Name:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder=" " name="productName" required/>
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Product Description:</label>
              <div class="controls">
                <textarea type="description" class="span11" placeholder=" " name="productDescription" required> </textarea> 
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Product Details:</label>
              <div class="controls">
                <textarea type="details" class="span11" placeholder=" " name="productDetails" required> </textarea>
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
                <input type="price" class="span11" placeholder=" " name="unitPrice" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Quantity:</label>
              <div class="controls">
                <input type="quantity" class="span11" placeholder=" " name="quantity" required/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                  <select name="status" class="span11">
                      <option>Active</option>
                      <option>Inactive</option>

                  </select>
              </div>
            </div>
             <div class="alert alert-danger" id="error" style="display:none">
                Username already Exist! Please Try Another.
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">ADD</button>
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
    $count=0;
    $res=mysqli_query($connection,"SELECT * from product where productCode='$_POST[productCode]'");
    $count=mysqli_num_rows($res);

    if($count>0)
    {
        ?>
        <script type="text/javascript">
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        </script>
        <?php
    }
    else{
        mysqli_query($connection,"INSERT into product values(NULL,'$_POST[productCode]','$_POST[productName]','$_POST[productDescription]','$_POST[productDetails]','$_POST[Supplier]','$_POST[unitPrice]','$_POST[quantity]','$_POST[status]')")or die(mysqli_error($connection));
        ?>
        <script type="text/javascript">
        document.getElementById("error").style.display="none";
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location.href="add_product.php"; 
        },2000)
        </script>

        <?php
    }
}
?>
<!--end-main-container-part-->

<?php
include "footer.php"
?>