<?php

    $host = "localhost";
    $dbname = "user";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($host, $dbname, $username, $password);
                     
    if ($mysqli->connect_errno) {
        die("Connection error: " . $mysqli->connect_error);
    }

    return $mysqli;
?>