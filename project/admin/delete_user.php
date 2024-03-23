<?php
include "execute/connection.php";
$userID=$_GET["userID"];
mysqli_query($connection,"delete from user where userID=$userID"); 
?>
<script type="text/javascript">
    window.location="Add_User.php";
</script>
