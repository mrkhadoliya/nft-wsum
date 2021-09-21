<?php

include "config.php";
  
            $nftid = $_POST['tokenid'];
            $NFT_bid = $_POST['bid'];
            $NFT_bidder_add = $_POST['bidder_Address'];
            $NFT_name = $_POST['Nft_name'];
            $NFT_image = $_POST['NFT_image'];
            $NFT_highestbid=$_POST['higherbid'];
            $NFT_type=$_POST['NFT_type'];
            date_default_timezone_set("Asia/Kolkata");
            $date= date("l jS \of F Y h:i:s A");
            
            $sql5="SELECT * FROM `NFT_user` WHERE Useraddress='{$NFT_bidder_add}'";
            $data2 = mysqli_query($link,$sql5);
            $res=$data2->fetch_assoc();
            // print_r($res);
            $Useremail=$res['Useremail'];
            $Usertwitname=$res['Usertwitname'];
            $Userportfolio=$res['Userportfolio'];
            $userimage=$res['Userimage'];
            $username=$res['Username'];
          
           if ($Useremail==''){
               echo "not Okay"; 
           }
           else{
            
                $sql1="SELECT `NFT_bid` FROM `NFT_bids` WHERE NFT_id=$nftid And NFT_bid=$NFT_bid";
            $data2 = mysqli_query($link,$sql1);
            (json_encode($data2->fetch_assoc()));
         
            if($data2->num_rows==0)
             { $sql3="SELECT `NFT_bid` FROM `NFT_bids` WHERE NFT_id=$nftid And NFT_bid=$NFT_bid AND NFT_bidder_add='{$NFT_bidder_add}'";
                  $data3 = mysqli_query($link,$sql3);
                  (json_encode($data3->fetch_assoc()));
                  if($data3->num_rows==0)
                  {
                      
                $sql=" INSERT INTO `NFT_bids`(`NFT_id`, `NFT_bid`,`Bid_Type`,`NFT_bidder_add`, `NFT_bidtime`,`NFT_image`,`NFT_name`,`Username`,`Userimage`) VALUES ('$nftid','$NFT_bid','$NFT_type','$NFT_bidder_add','$date','$NFT_image','$NFT_name','$username','$userimage')";
                $data = mysqli_query($link,$sql);
                $query="UPDATE `NFT_info` SET NFT_highest_bid='".$NFT_highestbid."' WHERE NFT_id= '$nftid' " ;
                $data1=mysqli_query($link,$query);
                  echo "success";
                  }
                  else{
                      echo $sql3;
                      echo "not inserted";
                  }
            }
            else
            {
                echo "false"; 
            }
    }
           
           
?>