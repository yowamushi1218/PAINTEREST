<?php
include "header.php";
// include "header.php";
include "execute/connection.php";
?>

<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a></div>
    </div>
    <!--End-breadcrumbs-->
    <!--Action boxes-->
    <div class="container-fluid">

    


        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            

<br>
<br>


<?php

// $sql="SELECT * from product";
// $sql_result=mysqli_query($connection,$sql);

$query_total_products = mysqli_query($connection,"SELECT * FROM `product`")or die(mysqli_error());
$count_total = mysqli_num_rows($query_total_products);

$query_total_supplier = mysqli_query($connection,"SELECT * FROM `supplier`")or die(mysqli_error());
$count_supplier = mysqli_num_rows($query_total_supplier);

$query_total_customer = mysqli_query($connection,"SELECT * FROM `costumer`")or die(mysqli_error());
$count_customer = mysqli_num_rows($query_total_customer);

$query_low_product = mysqli_query($connection,"SELECT * FROM `product` where quantity <=10 ")or die(mysqli_error());
$count_low = mysqli_num_rows($query_low_product);


?>

<!-- <div class="row"> -->
  <div class="column" style="background-color:#03b1fc;" class="col-md-4">
    <a href="add_product.php" style="font-size:35px">Total Product</a>
    <br>
    <br>
    <p style="font-size:30px"><?php echo$count_total?></p>
  </div>

  <div class="column" style="background-color:#fca103;" class="col-md-4">
  <a href="add_supplier.php" style="font-size:35px">Total Supplier</a>
  <br>
  <br>
    <p style="font-size:30px" ><?php echo$count_supplier?></p>
  </div>

  <div class="column" style="background-color:#ccc;" class="col-md-4">
    <a href="Add_Costumer.php" style="font-size:30px">Total Customer</a>
    <br>
    <br>
    <p style="font-size:30px" ><?php echo$count_customer?></p>
  </div>

  <div class="column" style="background-color:#fc5a03;" class="col-md-4">
    <!-- <h2>Low Products</h2> -->
    <a href="add_product.php" style="font-size:35px">Low Products</a>
    <br>
    <br>
    <p style="font-size:30px" ><?php echo$count_low?></p>
  </div>
<!-- </div> -->


        </div>
<!--end-main-container-part-->

<?php
include "footer.php";
?>
    </div>
</div>

