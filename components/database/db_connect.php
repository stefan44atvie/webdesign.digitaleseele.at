<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "webdesign_portal2024";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
// } else {
//     echo "Successfully Connected";
}