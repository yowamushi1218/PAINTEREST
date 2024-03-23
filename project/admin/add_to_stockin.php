<?php
include "header.php";
include "execute/connection.php";


$productID=$_GET["productID"];
$productCode="";
$productName="";
$unitPrice="";
$old_quantity=$_GET["old_quantity"];



$res=mysqli_query($connection,"SELECT productCode, productName, Supplier, unitPrice, quantity FROM product where productID=$productID");
while($row=mysqli_fetch_array($res))
{
    $productCode=$row["productCode"];
    $productName=$row["productName"];
    $unitPrice=$row["unitPrice"];
    $quantity=$row["quantity"];
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
          <h5>Stock-In-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Product Code:</label>
              <div class="controls">
                <input type="select" class="span11" placeholder=" " name="productCode" value="<?php echo $productCode;?>" readonly/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Name:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder=" " name="productName" value="<?php echo $productName;?>" readonly/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Supplier Name:</label>
              <div class="controls">

                <select name="Supplier" class="span11" readonly>
               <?php
                $res=mysqli_query( $connection,"SELECT supplierName FROM supplier");
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
              <label class="control-label">Quantity:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder=" " name="quantity" value="" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Price:</label>
              <div class="controls">
                <input type="price" class="span11" placeholder=" " name="unitPrice" value="<?php echo $unitPrice;?>" readonly/>
              </div>
            </div>
             <div class="alert alert-danger" id="error" style="display:none">
                Username already Exist! Please Try Another.
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">ADD STOCK</button>
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
        $quantity = $_POST["quantity"];
        $quantity = $quantity + $old_quantity;

        mysqli_query($connection,"UPDATE product set quantity='$quantity' where productID=$productID ") or die(mysqli_error($connection));

        mysqli_query($connection,"INSERT into stock_in values(NULL,'$_POST[productCode]','$_POST[productName]','$_POST[Supplier]','$_POST[quantity]',NULL)")or die(mysqli_error($connection)); 

    if($count>0){

        ?>
        <script type="text/javascript">
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        </script>
        <?php
    }
    else{
       
        ?>
        <script type="text/javascript">
        document.getElementById("error").style.display="none";
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location.href="add_stockin.php"; 
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