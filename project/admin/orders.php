<?php
error_reporting(0);
include "header.php";
include "execute/connection.php";
if(empty($_SESSION['id'])) {
  header('Location: ../index.php');
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

          <?php
          if(30 < $_SESSION['checker']){

          ?>
          <script>alert("Reach critical level")</script>
          <?php
          
            unset($_SESSION['checker']);
          }else{
            unset($_SESSION['checker']);
          }
          ?>


        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add To Cart</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form" action="execute/add_order_list.php" method="POST" class="form-horizontal">
            <div class="control-group">

            <label class="control-label">Customer Name:</label>
              <div class="controls">
              <select name ="customerName" class="span11" onchange="changePrice(this.value)"  required>
                    <option></option>
                    <?php
                        $sql="SELECT * FROM costumer";
                        $sql_result=mysqli_query($connection,$sql);
                        while($products=mysqli_fetch_assoc($sql_result)){
                    ?>
                    <option value="<?php echo $products['fullname'] ?>"><?php echo $products['fullname'];?> </option>
                    <?php
                        }
                    ?>
              </select>
              </div>


              <label class="control-label">Product Name:</label>
              <div class="controls">
              <select class="span11" onchange="changePrice(this.value)" required>
                    <option></option>
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
            <input type="hidden" name="product_id" id="productID" value="" hidden>
            <input type="hidden" name="old_quantity" id="old_quantity" value="" hidden>
            <input type="hidden" name="product_name" id="product_name" value="" hidden>
      
            <!-- <input type="hidden" name="customerName" id="product_name" value="" hidden> -->
            <div class="control-group">
              <label class="control-label">Price:</label>
              <div class="controls">
                <input type="number" class="span11" id="unitPrice" name="unitPrice" readonly/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Quantity:</label>
              <div class="controls">
                <input type="number" class="span11" min="1" id="quantity" name="quantity" required >
              </div>
            </div>
            <!-- <div class="control-group">
              <label class="control-label">Payment :</label>
              <div class="controls">
                  <select name="status" class="span11">
                      <option>Cash</option>
                      <option>Credit Card</option>

                  </select>
              </div> -->
            <div class="form-actions">
              <button type="submit" name="order_list" value="true" class="btn btn-success btn-lg ">ADD</button>
            </div>


          </form>
        </div>
      </div>

       <form method="post" action="add_transaction.php">
          <div class="widget-box">
            <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Product Name</th> 
                  <th>Price</th>
                  <th>Quantity</th>                  
                  <th>SubTotal</th>
                  <th>Add</th>
                  <th>Delete</th> 
                </tr>
              </thead>
              <tbody>
                <?php
                $total = 0;
                $orders = 0;
                $cart_id = $_SESSION['cart_id'];
                $query = "SELECT * FROM order_list WHERE cart_id = '$cart_id' ";
                $res=mysqli_query($connection, $query);
                while($row=mysqli_fetch_array($res))
                {
                $total += $row['subtotal'];
               
                  ?>
                  <tr>
                  <td><?=$row['customer_name'];?></td>
                  <td><?=$row['productName'];?></td>
                  <td>₱ <?=$row['price']?></td>
                  <td><?=$row['quantity'];?></td>
                  <td><?=$row['subtotal'];?></td>
                  <td><a href="execute/add_order_list.php?item=<?=$row["orderID"];?>&quantity=<?=$row['quantity'];?>">Add</a></td>
                  <td><a href="delete_orderlist.php?item=<?=$row["orderID"];?>">Delete</a>
                  <input name="quantitynani" type="hidden" value="<?=$orders += $row['quantity']?>">
                  <input type="hidden" name="customerName" value="<?=$row['customer_name']?>">
                  </td> 
                  </tr>
                <?php
                  }
                ?>               
              </tbody>
            </table>
          </div>
      </div>

      
        <div class="d-flex">
      
        <p style="color:red">Grand Total= <?php echo $total;?> </p>

          <div class="d-inline-block form-group"> 
            <!-- <label>Senior</label> -->
            
      
            <div class="d-flex">
          <div class="d-inline-block form-group"> 
            <label>Senior</label>
            <input type="checkbox" name="is_senior" value="20" class="openmodal">

            
          </div>
<br>
          <button class="btn btn-primary btn-sm"  id="myBtn" data-toggle="modal" data-target="#myModal">Senior
            <!-- <input type="hidden" name="is_senior" value="true"> -->
            </button>



          <script>
           $('.openmodal').click(function(){
     $('#myModal').modal('toggle');//.modal('show')/.modal('hide');
    });
          
          </script>
          
          </div>
          <br>
          <div class="d-inline-block form-group"> 
            <button class="btn btn-primary btn-sm"  id="myBtn" data-toggle="modal" data-target="#myModal1">Checkout</button>

            <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment</h4>
        </div>
        <div class="modal-body">
        <!-- <button class="btn btn-primary btn-sm" name="checkout">Cash</button> -->
        <button class="btn btn-primary btn-sm"  id="myBtn" data-toggle="modal" data-target="#myModal_cash">Cash</button>
        <!-- <button class="btn btn-primary btn-sm" id="myBtn" data-toggle="modal" data-target="#myModal_credit" name="">Credit Card</button> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>


      <!-- <div class="modal fade" id="myModal_credit" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment through Credit Vard</h4>
        </div>
        <div class="modal-body">
        <div class="control-group">
              <label class="control-label">Card number:</label>
              <div class="controls">
              <input name="somename"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"maxlength = "16" required/>
              </div>
            </div>
        </div>

        <div class="control-group">
              <label class="control-label">Card pin:</label>
              <div class="controls">
          
                <input name="somename"
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "4"
    required
 />
              </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button class="btn btn-primary " name="checkout">Cash</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> -->

    
      <div class="modal fade" id="myModal_cash" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment through cash</h4>
        </div>
        <div class="modal-body">
        <div class="control-group">
              <label class="control-label">Price:</label>
              <div class="controls">
                <input type="text" class="span11" id="price_paid" name="price_paid" onchange="calculateAmount(this.value)"/>
                
              </div>
            </div>
        </div>
        <script>
            function calculateAmount(val) {
              var a = "<?php Print($total); ?>"
                var tot_price = val-a;
                /*display the result*/
                var divobj = document.getElementById('change');
                divobj.value = tot_price;
             
            }
        </script>
        
        <div class="control-group">
              <label class="control-label">Change:</label>
              <div class="controls">
                <input type="number" class="span11" id="change" name="change" readonly/>
              </div>
            </div>
        </div>
        <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal"></button> -->
          <button class="btn btn-primary " name="checkout">Cash</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>     
    </div>
  </div>



          </div>
        </div>
        <input type="hidden" name="subtotal" value="<?php echo $total?>">
      </form>

    
       </div>
      </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Discount Price</h4>
        </div>
        <div class="modal-body">
          <p >
          <?php echo $total-$total*.20;?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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