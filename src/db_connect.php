<?php
$server   = "71.172.24.73:3316";
$user     = "user";
$password = "password";
$db       = "store";
$conn     = new mysqli($server, $user, $password, $db);
if ($conn->connect_error)
    die("Failed to connect.");
?>