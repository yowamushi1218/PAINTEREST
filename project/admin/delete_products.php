<?php
include "execute/connection.php";
$productID=$_GET["productID"];
mysqli_query($connection,"delete from product where productID=$productID"); 
?>
<script type="text/javascript">
    window.location="add_product.php";
</script>
