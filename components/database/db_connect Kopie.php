<?php

$localhost = "127.0.0.1";
$username = "d03fa03b";
$password = "77pFykuivN7Ez6JR4jH4";
$dbname = "d03fa03b";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
// } else {
//     echo "Successfully Connected";
}