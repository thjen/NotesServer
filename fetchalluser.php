<?php
	require "connect.php";

	/*class User {
		function User($uid, $user, $pass) {
			$this->uid = $uid;
			$this->user = $user;
			$this->pass = $pass;
		}
	}*/

	class User {
		function User($user) {
			$this->user = $user;
		}
	}

	$listuser = array();
	
	$query = "select user from user";
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($listuser, new User(
			$row['user']
		));
	}

	echo json_encode($listuser);

?>
