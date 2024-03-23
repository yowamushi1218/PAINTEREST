<?php
include "execute/connection.php";
$transID=$_GET["item"];
mysqli_query($connection,"delete from order_list where orderID='$transID'"); 
?>
<script type="text/javascript">
    window.location="orders.php";
</script>