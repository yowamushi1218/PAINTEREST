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
         </div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;" align="center">
        <div class="span12">
         <div class="form-control" style="margin:5px; margin-left:88%; width: 150px; "> 
            <a href="add_to_products.php" type="button" class="btn btn-success-link btn-lg btn-block"><i class="icon-plus"></i>  ADD PRODUCTS</a>
         </div>
        <div class="widget-box">
            <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Details</th>
                  <th>Supplier</th>  
                  <th>Price</th>
                  <th>Stock</th>                  
                  <th>Status</th>
                  <th>Add</th>
                  <th>Edit</th>
                  <th>Delete</th> 
                </tr>
              </thead>
              <tbody>
                <?php
                $res=mysqli_query( $connection,"SELECT * FROM product ORDER BY productCode");
                while($row=mysqli_fetch_array($res))

                {
                  ?>
                  <tr>
                  <td><?php echo $row["productCode"];?></td>
                  <td><?php echo $row["productName"];?></td>
                  <td><?php echo $row["productDescription"];?></td>
                  <td><?php echo $row["productDetails"];?></td>
                  <td><?php echo $row["Supplier"];?></td>
                  <td>₱ <?php echo number_format ($row["unitPrice"]);?></td>
                  <td><?php echo $row["quantity"];?></td>
                  <td><?php echo $row["status"];?></td>
                  <td><a href="add_to_stockin.php?productID=<?php echo $row["productID"];?> & old_quantity=<?php echo $row["quantity"];?>">Add</a></td> 
                  <td><a href="edit_products.php?productID=<?php echo $row["productID"];?>">Edit</a></td> 
                  <td><a href="delete_products.php?productID=<?php echo $row["productID"];?>">Delete</a></td> 
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