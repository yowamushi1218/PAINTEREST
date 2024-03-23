<?php
include "header.php";
include "execute/connection.php";

function getAllCarts($connection) {
    $carts = [];
    $sql = mysqli_query($connection, 'SELECT DISTINCT cart_id FROM transaction ORDER BY transID DESC')->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $cart) {
        array_push($carts, $cart['cart_id']);
    }
    return $carts;
}
function getProductNames($connection, $cart_id) {
    $names = [];
    $sql = mysqli_query($connection, "SELECT productName FROM transaction WHERE cart_id = '$cart_id'")->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $name) {
        array_push($names, $name['productName']);
    }
    return $names;
}
function getPrices($connection, $cart_id) {
    $prices = [];
    $sql = mysqli_query($connection, "SELECT unitPrice FROM transaction WHERE cart_id = '$cart_id'")->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $price) {
        array_push($prices, "₱ {$price['unitPrice']}");
    }
    return $prices;
}
function getQuantities($connection, $cart_id) {
    $quantities = [];
    $sql = mysqli_query($connection, "SELECT quantity FROM transaction WHERE cart_id = '$cart_id'")->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $quantity) {
        array_push($quantities, $quantity['quantity']);
    }
    return $quantities;
}
function getDates($connection, $cart_id) {
    $dates = [];
    $sql = mysqli_query($connection, "SELECT date FROM transaction where cart_id = '$cart_id' ")->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $date) {
        array_push($dates, $date['date']);
    }
    return $dates;
}
function getSubtotals($connection, $cart_id) {
    $subTotals = [];
    $sql = mysqli_query($connection, "SELECT subtotal FROM transaction where cart_id = '$cart_id' ")->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $subtotal) {
        array_push($subTotals, $subtotal['subtotal']);
    }
    return $subTotals;
}
function getDiscounts($connection, $cart_id) {
    $discounts = 0;
    $sql = mysqli_query($connection, "SELECT discount FROM transaction where cart_id = '$cart_id'")->fetch_assoc();
    if($sql['discount'] == 0){
        $discounts = 0;
    }else{
        $discounts = 20;
    }
    return $discounts;
}

function getCustomerName($connection, $cart_id) {
    $names = [];
    $sql = mysqli_query($connection, "SELECT customer_name FROM transaction WHERE cart_id = '$cart_id'")->fetch_all(MYSQLI_ASSOC);
    foreach($sql as $name) {
        array_push($names, $name['customer_name']);
    }
    return $names;
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
        <button class="btn btn-primary btn-sm"  id="myBtn" data-toggle="modal" data-target="#myModal_reports">Generate Reports</button>


        




      <div class="widget-box">
            
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Reports</h5>
        </div>
        <div class="widget-content nopadding">
           <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Order #</th>
                  <th>Product Name</th>
                  <th>Customer Name</th>
                  <th>Price</th>  
                  <th>Quantity</th>                  
                  <th>Date</th>
                  <th>Subtotal</th>
                  <th>Discount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                $carts = getAllCarts($connection);
                foreach($carts as $cart) {

                ?>
                <tr>
                <td><?=$cart?></td>
                <td><?=implode(', ', getProductNames($connection, $cart))?></td>
                <td><?=implode(', ', getCustomerName($connection, $cart))?></td>
                <td><?=implode(', ', getPrices($connection, $cart))?></td>
                <td><?=implode(', ', getQuantities($connection, $cart))?></td>
                <td><?=implode(', ', getDates($connection, $cart))?></td>
                <td><?=implode(', ', getSubtotals($connection, $cart))?></td>
                <td>%<?=getDiscounts($connection, $cart)?></td>
                <td><a href="pdf.php?cart_id=<?=$cart?>">View PDF</a></td>
                </tr>


    
                
                <?php
                }
                ?>
                
              </tbody>
            </table>
                      <div class="modal fade" id="myModal_reports" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose Date</h4>
        </div>
        <div class="modal-body">
        <!-- <label for="startDate" class="col-sm-2 control-label">Start Date</label> -->
       

        <form action="reports.php" method="post">
        <input type="date" id="start" name="startDate">
        <input type="date" id="end" name="endDate" >
      
        </div>
        <div class="modal-footer">
        <button class="btn btn-primary " type="submit" name="generate">Generate</button>
          
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
        </div>
      </div>
        </div>

  
    </div>
</div>




<!--end-main-container-part-->

<?php
include "footer.php"
?>