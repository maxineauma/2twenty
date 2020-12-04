<?php

function getUserId($uname) {

    include ("db_connect.php");

    $sql = "SELECT id FROM `user` WHERE user = ?;";
    $query = $conn->prepare($sql);
    $query->bind_param('s', $u);

    $u = $uname;
    $query->execute();
    $result = $query->get_result();

    if($result->num_rows > 0) {
        return $result->fetch_array()[0];
    } else {
        return "Unknown";
    }

}

function getUserName($id) {

    include ("db_connect.php");

    $sql = "SELECT user FROM `user` WHERE id = ?;";
    $query = $conn->prepare($sql);
    $query->bind_param('i', $i);

    $i = $id;
    $query->execute();
    $result = $query->get_result();

    if($result->num_rows > 0) {
        return $result->fetch_array()[0];
    } else {
        return "Unknown User";
    }

}

function getUserSelling($uname) {

    include ("db_connect.php");

    $sql = "SELECT * FROM `items_for_sale` WHERE seller = ?; ";
    $query = $conn->prepare($sql);
    $query->bind_param('s', $u);

    $u = $uname;
    $query->execute();

    $res = $query->get_result();

    while ($row = $res->fetch_all())
    {
        return $row;
    }

}

?>