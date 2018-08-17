<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Transactions";

$connect = new mysqli($servername,$username,$password,$dbname);
if($connect->connect_error)
echo "Connection error".$connect->connect_error;
?>