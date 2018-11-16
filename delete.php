<?php
	require "connect.php";
	
	$id = $_GET['uid'];

	if (strlen($id) > 0) {
		$query = "DELETE FROM user WHERE uid = '$id'";
		$data = mysqli_query($con, $query);	
		if ($data) {
			//unlink("images".$image) // remove file image
			echo "Success";	
		} else {
			echo "Fail";	
		}
	}
?>
