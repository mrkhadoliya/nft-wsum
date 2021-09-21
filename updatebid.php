<?php
include "config.php";

$id =$_POST['id'];
$bid=$_POST['bid'];
$owner=$_POST["address"];


$query="UPDATE `NFT_info` SET `NFT_highest_bid`='$bid',`NFT_highest_bidder`='$owner' WHERE `NFT_id`=$id";
//echo $query;
$result=mysqli_query($link,$query);
if($result){
    
     //echo "success";
}
else{
    // echo $image;
    // echo "failed";
}
?>