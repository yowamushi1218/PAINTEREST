<?php 
include_once('connection.php');

session_start();

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['add'])){
  $has_empty = false;
  $order_date = date('m/d/Y');
  $order_id = generateRandomString();
  $cashier_id = $_SESSION['id'];
  $product_name = $_POST['product_name'];
  $product_id = $_POST['productID'];
  $price = $_POST['unitPrice'];
  $old_quantity = $_POST['old_quantity'];
  $quantity = $_POST['quantity'];
  $new_quantity = $old_quantity - $quantity;
  $discount = $_POST['discount'];
  $subtotal = $price * $quantity;

  foreach($_POST as $key => $value) {
    if($value === '') {
      $_SESSION['msg'] = "{$key} cannot be empty";
      $_SESSION['class'] = 'alert alert-danger';
      $has_empty = true;
    }
  }
  if(!$has_empty) {
    $sql = "UPDATE product SET quantity=$new_quantity WHERE productID = $product_id";
    //mysqli_query($connection, $sql);
    $sql1 = "INSERT INTO order_list (productName, price, quantity, subtotal, date) VALUES 
    ('$product_name', '$price', '$quantity', '$subtotal', '$order_date')";
    $sql1 = "INSERT INTO transaction (cashierID, orderID, productID, productName, unitPrice, quantity, subtotal, date, discount) VALUES ('$cashier_id', '$order_id', '$product_id', '$product_name', '$price', '$quantity', '$subtotal', '$order_date','$discount')";
    var_dump($sql);
    //$res = mysqli_query($connection, $sql);
    //var_dump($res);
    die;
    if($res !== false) {
      $_SESSION['msg'] = "Transaction Added! ID: $res->transID";
      $_SESSION['class'] = 'alert alert-success';

      header('location: ../add_transaction.php');
    }
  }
}