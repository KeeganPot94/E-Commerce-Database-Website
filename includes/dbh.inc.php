<?php

$severName = "localhost";
$dBusername = "root";
$dBPassword = "";
$dBName = "phpproject";

$con = mysqli_connect($severName, $dBusername, $dBPassword, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_errno());
}
