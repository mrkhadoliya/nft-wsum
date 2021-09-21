<?php
include "config.php";
$NFT_name=$_POST['NFT_name'];
$NFT_price=$_POST['NFT_price'];
$NFT_description=$_POST['NFT_description'];
$NFT_royalties=$_POST['NFT_royalties'];
$NFT_treeplant=$_POST['NFT_treeplant'];
$status=$_POST['status'];
$NFT_id=$_POST['NFT_id'];
$sell=$_POST['sell'];
$advancesize=$_POST['NFT_advancesize'];
$NFT_advanceproperties=$_POST['NFT_advanceproperties'];
$NFT_advancedesc=$_POST['NFT_advancedesc'];

if($status==0){
    $query="DELETE FROM `NFT_info` WHERE NFT_id='$NFT_id'";
    $result =$link->query($query);
    if($result)
    {
        echo "DELETED";
    }
    else{
        echo "Not Deleted ";
    }
}
if($status==1){
    $query1="UPDATE `NFT_info` SET `NFT_name`='{$NFT_name}',`NFT_price`='$NFT_price',`NFT_resell`='$sell',`NFT_royalties`='$NFT_royalties',`NFT_treeplant`=$NFT_treeplant,`NFT_discription`='{$NFT_description}' WHERE NFT_id='$NFT_id' ";
    $result1 =$link->query($query1);
    
    echo $sell;
    if($result1)
    {
        echo "updated";
        
    }
    else{
        echo "Not updated ";
    }
}

if($status==2){
    
    $query2="UPDATE `NFT_info` SET `NFT_advancesize`='$advancesize',`NFT_advanceproperties`=$NFT_advanceproperties,`NFT_advancedesc`='{$NFT_advancedesc}' WHERE NFT_id='$NFT_id' ";
    $result2 =$link->query($query2);
    if($result2){
        echo "updated";
    }
    else{
        echo "not updated";
    }
    
}


$newArray = array();
while($row = mysqli_fetch_assoc($result))
{array_push($newArray , $row);
 
}
echo json_encode($newArray);


?>