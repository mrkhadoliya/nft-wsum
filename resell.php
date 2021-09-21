<?php 
include "config.php";
$Id=$_POST['Id'];

$value=$_POST['value'];
$query="UPDATE NFT_info SET `NFT_resell`='on', `NFT_price`='$value' WHERE NFT_id='$Id' ";
$result=mysqli_query($link,$query);
echo json_encode($result);

?>