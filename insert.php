<?php
    require "connect.php";

    $email = $_POST['user'];
    $pass = $_POST['pass'];

    if (strlen($email) > 0 && strlen($pass) > 0) {
        $query = "INSERT INTO user VALUES (null, '$email', '$pass')";
        //$query = "INSERT INTO user (user, pass) SELECT * FROM (SELECT '$email', '$pass') AS tmp WHERE NOT EXISTS (SELECT user FROM user WHERE user = '$email') limit 1";
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
