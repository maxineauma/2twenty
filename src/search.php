<?php
    function search_store($desc) {
        include("db_connect.php");

        $sql = "SELECT * FROM `items_for_sale` WHERE tags LIKE '%".$desc."%' ";
        $sql .= "OR title LIKE '%".$desc."%' ";
        $sql .= "OR description LIKE '%".$desc."%' ";
        $sql .= "OR seller LIKE '%".$desc."%' ";
        $sql .= "ORDER BY (CASE WHEN title LIKE '%".$desc."%' THEN 1 ELSE 0 END) DESC;";

        $query = $conn->query($sql);
        while($row = $query->fetch_all()) {
            return $row;
        }
    }
?>