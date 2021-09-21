<?php
include "config.php";

 $address = $_POST["address"];
$query="SELECT * FROM `NFT_user` WHERE Useraddress='{$address}' ";
$result1 = $link->query($query);
$newArray = array();
while($row = mysqli_fetch_assoc($result1))
{array_push($newArray ,$row);
 
}
echo json_encode($newArray[0]);
?>