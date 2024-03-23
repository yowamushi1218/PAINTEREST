<?php
include "header.php";
include "execute/connection.php";

if(empty($_SESSION['id'])) {
  header('Location: ../index.php');
  die;
}

function getOrderDetails($connection, $order_id) {
  $sql = "SELECT * FROM order_list WHERE orderID = '$order_id'";
  $res = mysqli_query($connection, $sql)->fetch_assoc();

  return $res;
}

if(isset($_GET['item']) && !empty($_GET['item'])) {
  $order = getOrderDetails($connection, $_GET['item']);
  $order_id = $_GET['item'];
}else{
  die;
}



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

        <div class="widget-box">
           <?php 
              if(isset($_SESSION['msg'])) {
          ?>
          <span class="<?=$_SESSION['class'];?>">
            <?=$_SESSION['msg'];?>
          </span>
          <?php 
            unset($_SESSION['msg']);
            }
          ?>
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add To Cart</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form" action="execute/add_order_list.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Product Name:</label>
              <div class="controls">
              <select class="span11" onchange="changePrice(this.value)" required>
                    <option selected><?=$order['productName'];?></option>
                    <?php
                        $sql="SELECT * FROM product";
                        $sql_result=mysqli_query($connection,$sql);
                        while($products=mysqli_fetch_assoc($sql_result)){
                    ?>
                    <option value="<?php echo $products['productID'] , ' ', $products['unitPrice'],' ', $products['quantity'], ' ', $products['productName'] ?>"><?php echo $products['productName'], '(',$products['productDescription'],')';?></option>
                    <?php
                        }
                    ?>
              </select>
              </div>
            </div>
            <input type="hidden" name="old_quantity" id="old_quantity" value="" hidden>
            <input type="hidden" name="order_id" value="<?=$order_id;?>">
            <input type="hidden" name="product_id" id="productID" value="<?=$order['product_id']?>" hidden>
            <input type="hidden" name="product_name" id="product_name" value="<?=$order['productName'];?>">
            <div class="control-group">
              <label class="control-label">Price:</label>
              <div class="controls">
                <input type="number" class="span11" id="unitPrice" name="unitPrice" value="<?=$order['price'];?>" readonly/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Quantity:</label>
              <div class="controls">
                <input type="number" class="span11" min="1" id="quantity" name="quantity" value="<?=$order['quantity'];?>"required >
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="edit_order" value="true" class="btn btn-success btn-lg ">Edit</button>
            </div>
          </form>
        </div>
      </div>
       </div>
      </div>
    </div>
<script>   
    function changePrice(title) {

        var fields = title.split(' ');
        console.log(fields);
        var id = fields[0];
        var price = fields[1];
        var old_quantity = fields[2];
        var productName  = fields[3];

        document.getElementById('productID').value = id;
        document.getElementById('unitPrice').value = price;
        document.getElementById('old_quantity').value = old_quantity;
        document.getElementById('product_name').value = productName;
    }

    function add_to_order_list() {

    }

</script>
<?php
include "footer.php"
?>