<?php

include "config.php";
  
            $nftid = $_POST['tokenid'];
            $NFT_buyprice = $_POST['buyprice'];
            $NFT_buyer_Address = $_POST['buyer_Address'];
            $NFT_count=$_POST['count'];
            $buy_type=$_POST['buy_type'];
            $buy_resell=$_POST['resell'];
            $start_id=$_POST['start_id'];
            $count=$_POST['countner'];
            $address=$_POST['address'];
            $newid=$_POST['newid'];
            
            date_default_timezone_set("Asia/Kolkata");
            $date= date("l jS \of F Y h:i:s A");
            
            $sql5="SELECT * FROM `NFT_user` WHERE Useraddress='{$NFT_buyer_Address}'";
            $data2 = mysqli_query($link,$sql5);
            $res=$data2->fetch_assoc();
            $userimage=$res['Userimage'];
            $username=$res['Username'];
            
            $mysqldata="SELECT * FROM `NFT_info` WHERE NFT_id='{$nftid}'";
            $mydata = mysqli_query($link,$mysqldata);
            $myres=$mydata->fetch_assoc();
            $creatoradd=$myres['NFT_creator_add'];
            
            $sql=" INSERT INTO `NFT_multiplebuy`( `NFT_id`, `NFT_buyprice`, `NFT_buycurrecy`, `NFT_count`,`nftstart`, `NFT_buyeraddress`, `NFT_buyername`, `NFT_buyerimage`, `NFT_buytime`, `NFT_resell`,`NFT_creatoraddress`)
            VALUES ('$nftid','$NFT_buyprice','$buy_type','$NFT_count','$NFT_count','$NFT_buyer_Address','$username','$userimage','$date','$buy_resell','$creatoradd')";
                $data = mysqli_query($link,$sql);
                if($count==0)
                {
                  $query="UPDATE `NFT_info` SET start_id='$start_id' WHERE NFT_id= '$nftid' " ;
                  $data1=mysqli_query($link,$query);  
                }
                else{
                     $query="UPDATE `NFT_multiplebuy` SET `nftstart`='$start_id' WHERE NFT_id='$nftid' AND NFT_buyeraddress='{$address}' AND id='$newid'" ;
                     
                     $data1=mysqli_query($link,$query);  
                }
                
                  echo "success";
                  
?>