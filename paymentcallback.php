<?php
$data  = json_decode(file_get_contents('php://input'), true);
require("connect.php");
$transaction_id = $data["transactionId"];
$category = $data["category"]; 
$provider = $data["provider"];
$providerChannel = $data["providerChannel"];
$productName = $data["prodcutName"];
$sourceType = $data["sourceType"];
$source = $data["source"];
$destination = $data["destination"];
$destinationType = $data["destinationType"];
$value = $data["value"];
$transactionFee = $data["transactionFee"];
$providerFee = $data["providerFee"];
$status = $data["status"];
$desc = $data["description"];
$reqMeta = $data["requestMetadata"];
$providerMeta = $data["providerMetadata"];
$transactionDate = $data["transactionDate"];


$sql = "INSERT INTO Payments(transaction_id,category,provider,providerChannel,productName,sourceType,source,destinationType,destination,value, transactionFee,providerFee,status,description,requestMetadata,providerMetadata,transactionDate) 
VALUES('$transaction_id','$category','$provider','$providerChannel','$productName','$sourceType','$source','$destinationType','$destination','$value','$transactionFee','$providerFee','$status','$desc','$reqMeta','$providerMeta','$transactionDate')";

try{
$query = $connect->query($sql);
if($query===TRUE)
echo "OK";
else
echo $connect->error;

}
catch(Exception $e)
{
    echo $e->getMessage();
}

$connect->close();
?>