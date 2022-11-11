<?php

    $host = "localhost";
    $dbname = "user";
    $username = "root";
    $password = "xxx";

    $mysqli = new mysqli($host, $username, $password, $dbname);
                     
    if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
    }

    return $mysqli;
?>