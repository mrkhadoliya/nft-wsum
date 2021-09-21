<?php
include "config.php";
$address=$_POST['address'];
$query="SElECT * FROM NFT_user WHERE Useraddress='$address'";
$result =$link->query($query);

$newArray = array();
while($row = mysqli_fetch_assoc($result))
{array_push($newArray , $row);
 
}
echo json_encode($newArray);


?>