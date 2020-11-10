<?php
    function get_featured() {
        include("db_connect.php");

        $sql = "SELECT id FROM `featured`;";

        // get featured ids from featured table
        $query = $conn->query($sql);
        while($row = $query->fetch_all()) {
            return $row;
        }
    }

    function show_featured() {
        include("db_connect.php");

        $final = [];
        
        // match returned ids with ids from items_for_sale table
        $results = get_featured();

        foreach($results as &$item) { 
            $sql = "SELECT * FROM `items_for_sale` WHERE id=".$item[0].";";
            $query = $conn->query($sql);
            while($row = $query->fetch_all()) {
                array_push($final, $row);
            }
        }

        return $final;

    }
?>