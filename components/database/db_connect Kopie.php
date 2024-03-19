<?php

$localhost = "127.0.0.1";
$username = "d03fb9f5";
$password = "q8utGHvFFfgkqJe2cZkn";
$dbname = "d03fb9f5";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
// } else {
//     echo "Successfully Connected";
}