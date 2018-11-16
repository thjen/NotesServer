<?php
	require "connect.php";

	$user = $_POST['user'];
	//$user = 'thjen';

	class Notes {
		function Notes($nid, $note, $timestamp, $username) {
			$this->nid = $nid;
			$this->note = $note;
			$this->timestamp = $timestamp;
			$this->user = $username;
		}
	}

	$listnote = array();
	$query = "select * from notes where user = '$user'";

	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($listnote, new Notes (
			$row['nid'],
			$row['note'],
			$row['timestamp'],
			$row['user']
		));
	}

	echo json_encode($listnote);

?>
