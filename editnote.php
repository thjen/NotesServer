<?php
	require "connect.php";

	$id = $_POST['nid'];
	$note = $_POST['note'];
	$timestamp = $_POST['timestamp'];
	$user = $_POST['user'];

	$query = "update notes set note = '$note', timestamp = '$timestamp', user = '$user' 				where nid = '$id'";

	if (mysqli_query($con, $query)) {
		echo "Success";
	} else {
		echo "Error";
	}

?>
