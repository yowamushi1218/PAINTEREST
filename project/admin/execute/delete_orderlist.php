<?php
include "execute/connection.php";
$transID=$_GET["transID"];
mysqli_query($connection,"delete from transaction where transID=$transID"); 
?>
<script type="text/javascript">
    window.location="Add_User.php";
</script>