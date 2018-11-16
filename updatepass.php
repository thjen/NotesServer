<?php
	require "connect.php";

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "update user set pass = '$pass' where user = '$user'";

	if ($data = mysqli_query($con, $query)) {
		echo "Success"; 
	} else {
		echo "Error";
	}

?>
