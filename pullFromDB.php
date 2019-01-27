<?php

$host = "localhost";
$username = "root";
$user_pass = "password";
$database = "csv_db	";

$mysqli = new mysqli($host, $username, "", $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}




$myArray = array();

$res = $mysqli->query("SELECT fname, lname FROM test");


$name = $_POST
mysql_query("INSERT INTO table1 VALUES('$name')");

while ($row = $res->fetch_assoc()) {
	array_push($myArray, $row);
}


for ( $i = 0; $i<2; $i++ ) {
	echo $myArray[$i]['fname'];
	echo $myArray[$i]['lname'];
}


/*
echo "Reverse order...\n";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " id = " . $row['fname'] . "\n";
}

echo "Result set order...\n";
$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['fname'] . "\n";
}

//for($i = 0; $i < 2; $i++){
//	echo ($myArray[$i]['fname']);
//}
//echo $myArray[0]['fname'];

echo "Result set order...\n";
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['fname'] . "\n";
}

*/



?>