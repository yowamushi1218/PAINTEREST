<?php
include_once'connection.php';

if(isset($_POST['delete'])){
	if(!empty($_POST['checked_id'])){
		$str = implode(',', $_POST['checked_id']);

		$sql = $connection->query("DELETE FROM user WHERE id IN ($str)");


		if($sql){
			$result = 'Deleted successfully';
		}else{
			$result = 'Some problem occured, please try again.';
		}
	}else{

		$result ='Select at least 1 record to delete';
	}
}

?>

