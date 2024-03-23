<?php 
include_once 'connection.php';
session_start();

function generateCartId($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['order_list'])) {
	$cart_id = $_SESSION['cart_id'] ?? generateCartId();
	$userName = $_POST['customerName'];
	$product_name = $_POST['product_name'];
	$product_id = $_POST['product_id'];
	$price = $_POST['unitPrice'];
	$quantity = $_POST['quantity'];
	$subtotal = $quantity * $price;
	$date_order = date('Y-m-d H:i:s');
	$has_empty = false;

	foreach($_POST as $key => $value) {
		if($value === '') {
			$_SESSION['msg'] = "{$key} cannot be empty!";
			$_SESSION['class'] = 'alert alert-danger';
			$has_empty = true;
		}
	}

	if(!$has_empty) {
		$sql = "INSERT INTO order_list (productName, price, quantity, subtotal, date, cart_id, product_id,customer_name)
			VALUES ('$product_name', '$price', '$quantity', '$subtotal', '$date_order', '$cart_id', '$product_id','$userName')
		";
		$res = mysqli_query($connection, $sql);

		if($res) {

			$sql="SELECT * FROM product where productID='$product_id' ";
			$sql_result=mysqli_query($connection,$sql);
			while($products=mysqli_fetch_assoc($sql_result)){

				$_SESSION['msg'] = "Success {$product_name} has been added to your cart!";
				$_SESSION['class'] = 'alert alert-success';
				$_SESSION['cart_id'] = $cart_id;
				$_SESSION['checker'] = $products['quantity'];
				// $_SESSION['prod_name'] = $products['productName'];
				header('Location: ../orders.php');

			}
			
		}else{
			$_SESSION['msg'] = "Error adding {$product_name} to your cart";
			$_SESSION['class'] = 'alert alert-danger';
			header('Location: ../orders.php');
		}
	}
}

if(isset($_GET['item']) && isset($_GET['quantity'])) {
	$order_id = $_GET['item'];
	$sql = "SELECT quantity, price from order_list where orderID = '$order_id'";
	$res = mysqli_query($connection, $sql)->fetch_assoc();

	$quantity = $res['quantity'] + 1;
	$subtotal = $res['price'] * $quantity;

	$sql = "UPDATE order_list set quantity = '$quantity', subtotal = '$subtotal' WHERE orderID = '$order_id'";
	
	$res = mysqli_query($connection, $sql);
	
	if($res) {
		$_SESSION['msg'] = 'Success Adding';
		$_SESSION['class'] = 'alert alert-success';
		header('Location: ../orders.php');
	}else{
		$_SESSION['msg'] = 'Error Adding';
		$_SESSION['class'] = 'alert alert-danger';
		header('Location: ../orders.php');
	}
}

if(isset($_POST['edit_order'])) {
	$order_id = $_POST['order_id'];
	$userName = $_POST['customerName'];
	$product_name = $_POST['product_name'];
	$product_id = $_POST['product_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['unitPrice'];
	$subtotal = $price * $quantity;
	$date_order = date('Y-m-d H:i:s');

	$sql = "UPDATE order_list SET productName = '$product_name',customer_name = $userName ,product_id = '$product_id', 
		price = '$price', quantity = '$quantity', subtotal = '$subtotal', date = '$date_order' 
	WHERE orderID = '$order_id' ";
	$res = mysqli_query($connection, $sql);

	if(!$res) {
		$_SESSION['msg'] = 'Error Editing Order';
		$_SESSION['class'] = 'alert alert-danger';
		header('Location: ../orders.php');
	}else{
		$_SESSION['msg'] = 'Success Editing Order';
		$_SESSION['class'] = 'alert alert-success';
		header('Location: ../orders.php');
	}
}