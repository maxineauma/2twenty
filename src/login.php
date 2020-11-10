<?php
    // boolean function
    function handle_login($uname, $pass) {
        include("db_connect.php");

        // verify username:
        $sql = "SELECT * FROM `user` WHERE user LIKE CONCAT('%',?,'%');";
        $query = $conn->prepare($sql);
        $query->bind_param('s', $u);

        $u = $uname;
        $query->execute();
        $result = $query->get_result();

        if($result->num_rows > 0) {
            
            // verify password:
            $sql = "SELECT * FROM `user` WHERE pass LIKE CONCAT('%',?,'%');";
            $query = $conn->prepare($sql);
            $query->bind_param('s', $p);

            $p = md5($pass); // salted password
            $query->execute();
            $result = $query->get_result();
            
            if($result->num_rows > 0) {
                return 1; // success
            } else {
                return 0; // wrong password
            }

        } else {
            return 0; // wrong username;
        }

    }
?>