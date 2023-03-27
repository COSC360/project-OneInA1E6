<?php


$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);

if($conn->connect_error){
   die("Connection Error " . $conn->connect_error);
}



// 360 CONNECTION 

   //  $serverName = "cosc360.ok.ubc.ca";
   // $username = "68878735";
   //  $password = "68878735";
   //  $dbname = "db_68878735";

   // $conn = new mysqli($serverName, $username, $password, $dbname);

   // if($conn->connect_error){
   //    die("Connection Error " . $conn->connect_error);
   // }

?>
