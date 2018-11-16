<?php
	require "connect.php";

	$note = $_POST['note'];
	$time = $_POST['timestamp'];
	$user = $_POST['user'];

	//$note = "thjen";
	//$time = "22feb";
	//$user = "thjenit";

	if (strlen($note) > 0 && strlen($time) > 0 && strlen($user) > 0) {
		$query = "insert into notes values (null, '$note', '$time', '$user')";
		$data = mysqli_query($con, $query);
		if ($data) {
			echo "Success";
		} else {
			echo "Fail";	
		}
	} else {
		echo "Null";
	}
	
?>
