<?php

$host = "localhost";
$username = "root";
$user_pass = "password";
$database = "conuhacks";

$mysqli = new mysqli($host, $username, "", $database);
if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$myArray = array();

$res = $mysqli->query("SELECT feature, pointer, name, bin, day, longitude, latitude FROM tabletester");

while ($row = $res->fetch_assoc()) {
    array_push($myArray, $row);
}

$product= json_encode($myArray,JSON_FORCE_OBJECT);

echo $product;	
?>