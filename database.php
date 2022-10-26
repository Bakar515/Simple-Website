<?php

$host = "localhost";
$dbname = "Users";
$username = "sa";
$password = "Bkr1122@";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;