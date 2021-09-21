<?php
include "config.php";

$address = $_POST["address"];
$query = "SELECT * FROM `NFT_info` WHERE NFT_creator_add ='$address' AND block=0 ORDER BY ID DESC ";
$result1 = $link->query($query);
$newArray = array();
while($row = mysqli_fetch_assoc($result1))
{array_push($newArray ,$row);
 
}
echo json_encode($newArray);
?>