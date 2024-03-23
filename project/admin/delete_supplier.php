<?php
include "execute/connection.php";
$supplierID=$_GET["supplierID"];
mysqli_query($connection,"delete from supplier where supplierID=$supplierID"); 
?>
<script type="text/javascript">
    window.location="add_supplier.php";
</script>
