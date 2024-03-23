<?php
include "execute/connection.php";
$customerID=$_GET["customerID"];
mysqli_query($connection,"delete from costumer where customerID=$customerID"); 
?>
<script type="text/javascript">
    window.location="Add_Costumer.php";
</script>
