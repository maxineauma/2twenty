<?php

function getUserId($uname) {

    include ("db_connect.php");

    $sql = "SELECT id FROM `user` WHERE user = ?;";
    $query = $conn->prepare($sql);
    $query->bind_param('s', $u);

    $u = $uname;
    $query->execute();
    $result = $query->get_result();

    return $result->fetch_array()[0];

}

function getUserName($id) {

    include ("db_connect.php");

    $sql = "SELECT user FROM `user` WHERE id = ?;";
    $query = $conn->prepare($sql);
    $query->bind_param('i', $i);

    $i = $id;
    $query->execute();
    $result = $query->get_result();

    return $result->fetch_array()[0];

}

?>