<?php
include "config.php";
$value=$_POST['value'];
$buy_sell=$_POST['buy_sell'];

if( $value=='7 days' && $buy_sell=='buyers'){
   $query1="SELECT NFT_user.verify,NFT_user.Useraddress, NFT_buy.Username, sum(NFT_buy.value) AS value,NFT_buy.image FROM NFT_buy INNER JOIN NFT_user ON NFT_user.Useraddress = NFT_buy.Address WHERE time >= NOW() + INTERVAL -7 DAY group by NFT_buy.Username, NFT_buy.image,NFT_user.verify,NFT_user.Useraddress  Order by value DESC" ;
     $data1 = mysqli_query($link,$query1);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data1))
        {array_push($newArray ,$row);
         
        }
    
    echo json_encode($newArray);
     
}

if( $value=='1 day' && $buy_sell=='buyers' ){
    $query="SELECT NFT_user.verify, NFT_user.Useraddress, NFT_buy.Username, sum(NFT_buy.value) AS value, NFT_buy.image FROM NFT_buy INNER JOIN NFT_user ON NFT_user.Useraddress = NFT_buy.Address WHERE time=CURDATE() group by NFT_buy.Username, NFT_buy.image, NFT_user.verify ,NFT_user.Useraddress Order by value DESC" ;
    $data = mysqli_query($link,$query);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data))
        {
            array_push($newArray ,$row);
         
        }
    echo json_encode($newArray);
}


if($value=='30 days' && $buy_sell=='buyers'){
    $query2="SELECT NFT_user.verify, NFT_user.Useraddress,NFT_buy.Username, sum(NFT_buy.value) AS value,NFT_buy.image FROM NFT_buy INNER JOIN NFT_user ON NFT_user.Useraddress = NFT_buy.Address WHERE time >= NOW() + INTERVAL -30 DAY group by NFT_buy.Username, NFT_buy.image,NFT_user.verify,NFT_user.Useraddress Order by value DESC" ;
    $data2 = mysqli_query($link,$query2);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data2))
        {array_push($newArray ,$row);
         
        }
    echo json_encode($newArray);
  
}

if($value=='1 day' && $buy_sell=='seller'){
    
    $query3="SELECT NFT_user.verify,NFT_user.Useraddress, Nft_sell.Username, sum(Nft_sell.value) AS value, Nft_sell.image FROM Nft_sell INNER JOIN NFT_user ON NFT_user.Useraddress = Nft_sell.Address WHERE time=CURDATE() group by Nft_sell.Username, Nft_sell.image, NFT_user.verify,NFT_user.Useraddress Order by value DESC" ;
    $data3= mysqli_query($link,$query3);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data3))
        {
            array_push($newArray ,$row);
         
        }
    echo json_encode($newArray);
}

if($value=='7 days' && $buy_sell=='seller'){
    
    $query4="SELECT NFT_user.verify,NFT_user.Useraddress, Nft_sell.Username, sum(Nft_sell.value) AS value, Nft_sell.image FROM Nft_sell INNER JOIN NFT_user ON NFT_user.Useraddress = Nft_sell.Address WHERE time >= NOW() + INTERVAL -7 DAY  group by Nft_sell.Username, Nft_sell.image, NFT_user.verify,NFT_user.Useraddress Order by value DESC" ;
    $data4= mysqli_query($link,$query4);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data4))
        {
            array_push($newArray ,$row);
         
        }
    echo json_encode($newArray);
}

if($value=='30 days' && $buy_sell=='seller'){
    
    $query5="SELECT NFT_user.verify,NFT_user.Useraddress, Nft_sell.Username, sum(Nft_sell.value) AS value, Nft_sell.image FROM Nft_sell INNER JOIN NFT_user ON NFT_user.Useraddress = Nft_sell.Address WHERE time >= NOW() + INTERVAL -30 DAY  group by Nft_sell.Username, Nft_sell.image, NFT_user.verify,NFT_user.Useraddress Order by value DESC" ;
    $data5= mysqli_query($link,$query5);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data5))
        {
            array_push($newArray ,$row);
         
        }
    echo json_encode($newArray);
}



?>