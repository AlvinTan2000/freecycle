<?php
$location = filter_input(INPUT_POST, 'location');
$numOfItems = filter_input(INPUT_POST, 'numOfItems');
$free = filter_input(INPUT_POST, 'free');




$host = "localhost";
$username = "root";
$user_pass = "password";
$database = "csv_db";

$mysqli = new mysqli($host, $username, "", $database);
if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

else{
    $sql = "INSERT INTO tbl_name (random1, type, feature, pointer, coor1, coor2, ref, name, bin, numOf, size, style, day, longitude, latitude)
    VALUES ("","",'Feature','Point', '145.39495300131','-36.403279013015','SB00731', 'McGill', 'Recycle', '1', '240L', 'Free_Standing', 'Sunday', '36.2048','138.2529')";
    if ($mysqli->query($sql)){
        echo "New record is inserted successfully";
    }
    else{
        echo "Error: ". $sql . "<br>". $mysqli->error;
    }
}

$mysqli->close();
?>