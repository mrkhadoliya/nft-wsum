

<?php
include "config.php";

$id =$_POST['id'];
$owner=$_POST['owner'];
$price=$_POST["price"];
$resell=$_POST["resell"];

 $query1 = "SELECT `Id`, `Username`,`Userimage` FROM `NFT_user` WHERE Useraddress='{$owner}'";

 $result1 = $link->query($query1);
 $res=$result1->fetch_assoc();
 $image= $res['Userimage'];
 $OwnerName= $res['Username'];

$query="UPDATE `NFT_info` SET `NFT_owner`='$OwnerName',`NFT_owner_address`='$owner',`NFT_resell`='$resell',`NFT_price`='$price',`Nft_owner_image`='$image' WHERE `NFT_id`=$id";
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