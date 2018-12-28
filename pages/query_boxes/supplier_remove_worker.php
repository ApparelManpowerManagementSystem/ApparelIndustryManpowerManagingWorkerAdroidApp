<?php
	if(isset($_POST['removeWorker'])){
		require_once "../../db_config/config.php";
		$workerID=$_POST['workerID'];
		$query="DELETE FROM worker WHERE workerID='$workerID'";
		echo $query;
		if(mysqli_query($conn,$query)){
			echo "<script>window.location.replace('../supplier.php');</script>";
		}
	}

?>