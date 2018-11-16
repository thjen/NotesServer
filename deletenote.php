<?php
	require "connect.php";

	$id = $_POST['nid'];
	$query = "delete from notes where nid = '$id'";
	$data = mysqli_query($con, $query);

	if ($data) {
		echo "Success";		
	} else {
		echo "Error";
	}
	
?>
