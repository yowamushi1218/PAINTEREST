<?php 
include_once 'execute/connection.php';
session_start();

function updateQuantity($product_id, $quantity, $connection) {

  $sql = "SELECT quantity from product WHERE productID = '$product_id'";
  $res = mysqli_query($connection, $sql)->fetch_assoc();


  $quantity = $res['quantity'] - $quantity;
  $sql = "UPDATE product SET quantity = '$quantity' WHERE productID = '$product_id'";
  $res = mysqli_query($connection, $sql);

  if($res) {
    return true;
  }

  return false;
}



if(isset($_POST['checkout'])) {
  $cart_id = $_SESSION['cart_id'];
  // $is_senior = empty($_POST['is_senior']) ? false : true;
  $cashier_id = $_SESSION['id'];
  $discount = $_POST['is_senior'];
  $date_order = date('Y-m-d');
  $orders = $_POST['quantitynani'];
  $customerName = $_POST['customerName'];
  $price_paid = $_POST['price_paid'];
  $subtotal_paid = $_POST['subtotal'];



  $sql = "SELECT * FROM order_list WHERE cart_id = '$cart_id'";
  $res = mysqli_query($connection, $sql)->fetch_all(MYSQLI_ASSOC);
  foreach($res as $row) {
    $order_id = $row['orderID'];
    $product_id = $row['product_id'];
    $product_name = $row['productName'];
    $price = $row['price'];
    $quantity = $row['quantity'];
    $subtotal = $row['subtotal'];


    $final_na=0;
    $discount_1 = 0;
    if($discount == 0){
      $final_na = $subtotal;
    }else if($discount == 20){
      
    $final_na = $subtotal-$subtotal*.20;
    }

    $sql="SELECT * FROM product";
    $sql_result=mysqli_query($connection,$sql);
    while($products=mysqli_fetch_assoc($sql_result)){

      $stocks = $products['quantity'];
      $result = $stocks - $orders ;
        if($result < 5){
          // $_SESSION['msg'] = 'ekis na {$orders}';
          // $_SESSION['class'] = 'alert alert-danger';
          // unset($_SESSION['cart_id']);
          // header('Location: orders.php');

          $_SESSION['msg'] = "Insufficient Product Quantity";
          $_SESSION['class'] = 'alert alert-danger';
          header('Location: orders.php');
          break;
        }else{

          
        if($price_paid < $subtotal_paid ){
          $_SESSION['msg'] = "Insufficient Amount";
          $_SESSION['class'] = 'alert alert-danger';
          header('Location: orders.php');
        }else{




          updateQuantity($product_id, $quantity, $connection);

          $sql = "INSERT INTO transaction (cashierID, orderID, productID, productName, unitPrice, quantity, subtotal, date, discount, cart_id,customer_name)
          VALUES 
            ('$cashier_id', '$order_id', '$product_id', '$product_name',
              '$price', '$quantity', '$final_na', '$date_order', '$discount',
              '$cart_id','$customerName' 
            )
          ";
          $res = mysqli_query($connection, $sql);
          if($res == false) {
            $_SESSION['msg'] = 'Something Happened Please Try again.';
            $_SESSION['class'] = 'alert alert-danger';
      
            header('Location: orders.php');
            break;
          }
          $_SESSION['msg'] = 'Successfully Purchased';
          $_SESSION['class'] = 'alert alert-success';
          unset($_SESSION['cart_id']);
          header('Location: orders.php');
        }
      }
        }
    }



  
  // $_SESSION['msg'] = 'Successfully Purchased';
  // $_SESSION['class'] = 'alert alert-success';
  // unset($_SESSION['cart_id']);
  // header('Location: orders.php');
}


