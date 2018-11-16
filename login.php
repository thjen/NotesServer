<?php
    require "connect.php";

    $email = $_POST['user'];
    $pass = $_POST['pass'];
    //$email = "thjen";
    //$pass = "thjenit98";

    /** create struct json **/
    class User {
        function User($id, $user, $pass) {
            $this -> Id = $id;
            $this -> Email = $user;
            $this -> Pass = $pass;
        }
    }

    if (strlen($email) > 0 && strlen($pass) > 0) {
        $arraystudent = array();
        $query = "SELECT * FROM user WHERE FIND_IN_SET('$email', user) AND          FIND_IN_SET('$pass', pass)";
        $data = mysqli_query($con, $query);
        if ($data) {
            while ($row = mysqli_fetch_assoc($data)) {
                array_push($arraystudent, new User($row['uid'], $row['user'], $row['pass']));
            }
            if (count($arraystudent) > 0) {
                echo json_encode($arraystudent);
            } else {
                echo "Fail";
            }
        }
    } else {
        echo "Null";
    }

?>
