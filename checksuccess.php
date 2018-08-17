<?php
require("connect.php");

$id = $_GET['id'];
$status = "";

$sql = "SELECT status FROM Payments WHERE transaction_id = '$id' ";

if($id){
$result = mysqli_query($connect,$sql);
    while(($row = mysqli_fetch_array($result))) {
        $status = $row[0];
        if($status=="Success")
        echo "OK";
        else
        echo $status;
    }
}

$connect->close();
?>