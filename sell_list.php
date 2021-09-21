<?php
include "config.php";

$price =$_POST['value'];
$owner=$_POST['owner'];
$NFT_image=$_POST["NFT_image"];
$NFT_name=$_POST["NFT_name"];
$currencies=$_POST["currencies"];
$currencies_address=$_POST["currencies_address"];

$query1 = "SELECT `Id`, `Username`,`Userimage` FROM `NFT_user` WHERE Useraddress='{$owner}'";

$result1 = $link->query($query1);
$res=$result1->fetch_assoc();
$userimage= $res['Userimage'];
$OwnerName= $res['Username'];

if ($currencies=="BNB")
{
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BNB',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$response= json_decode($response);

$price=($price/$response->BNB);

}

else{
$price=($price/0.01);
}
date_default_timezone_set("Asia/Kolkata");
$date=date("Y/m/d");
$query="INSERT INTO `Nft_sell`(`Username`,`image`,`Address`, `value`, `Time`,`Nft_image`,`NFT_name`) VALUES ('{$OwnerName}','{$userimage}','{$owner}','{$price}','{$date}','{$NFT_image}','{$NFT_name}')";
echo $query;

$result=mysqli_query($link,$query);
echo $result ;

if($result){
    
     //echo "success";
}
else{
 
    echo "failed";
}
?>