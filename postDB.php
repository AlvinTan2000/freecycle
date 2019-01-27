<?php

$name = filter_input(INPUT_POST, 'name');
$location = filter_input(INPUT_POST, 'location');
$hours = filter_input(INPUT_POST, 'hours');

$host = "localhost";
$username = "root";
$user_pass = "password";
$database = "conuHack_database";

$mysqli = new mysqli($host, $username, "", $database);
if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

else{
    $sql = "INSERT INTO Food (Name, Location, Hours)
    values ('$name', '$location', '$hours')";
    if ($mysqli->query($sql)){
        echo "New record is inserted successfully";
    }
    else{
        echo "Error: ". $sql . "<br>". $mysqli->error;
    }
}

$mysqli->close();
?>