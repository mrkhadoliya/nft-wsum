<?php

require "config.php";

$address= $_POST['address'];

$query = "SELECT * FROM `NFT_user` Where Useraddress='".$address."'";

$data = $link->query($query);
$row=$data->fetch_assoc();
$User=$row['block'];
 
(json_encode($row));
if($data->num_rows){
    if($User==0)
{
    echo $User;
}
else{
    echo $User;
}
}

else{
    $query1 = "INSERT INTO `NFT_user`( `Useraddress`) VALUES ('".$address."')";
    echo $query1;
    $data1 = $link->query($query1);
}


?>