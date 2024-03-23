<?php
include_once('execute/connection.php');
include_once('includes/tcpdf/tcpdf.php');


function getProductAndPrice($connection, $cart_id) {
	$sql = mysqli_query($connection, "SELECT productName, unitPrice from transaction WHERE cart_id = '$cart_id'")->fetch_all(MYSQLI_ASSOC);

	return $sql;
}
function subtotal($connection, $cart_id) {
	$grandSubtotal = 0;
	$sql = mysqli_query($connection, "SELECT subtotal from transaction WHERE cart_id = '$cart_id' ")
	->fetch_all(MYSQLI_ASSOC);

	foreach($sql as $row) {
		$grandSubtotal = $grandSubtotal + intval($row['subtotal']);
	}

	return $grandSubtotal;
}

function discount($connection, $cart_id) {
	
	$grandDiscount = 0;
	$sql = mysqli_query($connection, "SELECT discount FROM transaction WHERE cart_id = '$cart_id' ")
			->fetch_assoc();
	if($sql['discount'] == 0) {
		$grandDiscount = 0;
	}else {
		$grandDiscount = 20;
	}
	return $grandDiscount;
}

function total(float $discount, $subtotal) {
	$total = $subtotal - (floatval("0.{$discount}") * $subtotal);
	return $total;
}

if(isset($_GET['cart_id'])) {
	$cart_id = $_GET['cart_id'];
	$grandSubtotal = subtotal($connection, $cart_id);
	$grandDiscount = discount($connection, $cart_id);
	$total = total($grandDiscount, $grandSubtotal);
	$html = "<center><h1>Transaction {$cart_id}</h1></center>";
	$html .= "<h2>Products</h2>";
	foreach(getProductAndPrice($connection, $cart_id) as $row) {
		// $html .= "<ul><li>{$row['productName']} - {$row['unitPrice']}</li></ul>";
	}


	$html .=	'<table>';
	$html .=	'<tr>';
	$html .=		'<th>Price</th>';
	$html .=		'<th>Senior Citizen Discount</th>';
	$html .=		'<th>Total Price</th>';
	$html .=	'</tr>';

	$html .=	'<tr>';
	$html .=		"<td>{$grandSubtotal}</td>";
	$html .=		"<td>{$grandDiscount}%</td>";
	$html .=		"<td>$total</td>";
	$html .= 	'</tr>';



	// $html .= '<h2>Subtotal</h2>';
	// $html .= "<b>{$grandSubtotal}</b>";
	// $html .= '<h2>Discount<h2>';
	// $html .= "<b>%{$grandDiscount}</b>";
	// $html .= "<h2>Total</h2>";
	// $html .= "<b>$total</b>";





	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetTitle("Transaction {$cart_id}");

	$pdf->SetFont('helvetica');
	$pdf->AddPage();

	$html = utf8_encode($html);

	$pdf->writeHTML($html, true, false, true, false, '');

	$pdf->Output('{$cart_id}.pdf', 'I');
}