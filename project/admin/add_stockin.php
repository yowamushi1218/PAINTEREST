<?php
include "header.php";
include "execute/connection.php";
 
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

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;" align="center">
        <div class="span12">
        <div class="widget-box">
            <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Supplier</th>  
                  <th>Quantity</th>                  
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $res=mysqli_query( $connection,"SELECT * FROM stock_in ORDER BY stockinID DESC");
                while($row=mysqli_fetch_array($res))

                {
                  ?>
                  <tr>
                  <td><?php echo $row["productCode"];?></td>
                  <td><?php echo $row["productName"];?></td>
                  <td><?php echo $row["Supplier"];?></td>
                  <td><?php echo $row["quantity"];?></td>
                  <td><?php echo $row["date"];?></td>
                  </tr>
                <?php
                  }
                ?>
                
              </tbody>
            </table>
          </div>
      </div>
    </div>
    </div>
  </div>




<?php
include "footer.php"
?>