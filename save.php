<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "config.php";

$nftname = $_POST['tokenName'];
            $nftprice = $_POST['tokenprice'];
            $payment = $_POST['tokenpayment'];
            $paymentcurrency = $_POST['NFT_paymenCurrency'];
            $treeroyalties = $_POST['treeroyalties'];
            $sell = $_POST['sell'];
            $nftroyalities = $_POST['tokenroyal'];
            $nftauction= $_POST['tokenauction'];
            $nftowneradd = $_POST['tokenowneradd'];
            $charity = $_POST['charity'];
            $nftdesc= $_POST['tokendesc'];
            $nftid = $_POST['tokenid'];
            $nfttype = $_POST['tokentype'];
            $NFT_advancesize = $_POST['NFT_advancesize'];
            $NFT_advanceproperties = $_POST['NFT_advanceproperties'];
            $NFT_advancedesc = $_POST['NFT_advancedesc'];
            $endid = $_POST['endid'];
            $unlockcontent=$_POST['unlockcontent'];
            
            
$query1="SELECT `Id`, `Username`, `Userimage` FROM `NFT_user` WHERE Useraddress='{$nftowneradd}'";
    $result1 = mysqli_query($link,$query1);
    $res=$result1->fetch_assoc();
    $nftowner = $res['Username'];
    $userimage = $res['Userimage'];
     
$valid_extensions = array('jpeg', 'jpg', 'png','gif','mp4','jfif'); // valid extensions
$path = '/home/pramod/public_html/uploads/';

    $img = $_FILES['tokenImage']['name'];
    $tmp = $_FILES['tokenImage']['tmp_name'];
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    $final_image = rand(1000,1000000).$img;
  
    if(in_array($ext, $valid_extensions)){ 
      
        $path = $path.strtolower($final_image); 
   
       
        if(true){move_uploaded_file($tmp,$path);
       
       $path="uploads/".strtolower($final_image);
            date_default_timezone_set("Asia/Kolkata");
            $date= date("l jS \of F Y h:i:s A");
                
                if ($nftauction=='0'){
                     $queryselect = "SELECT * FROM `current_id`";
              $dataselect = mysqli_query($link, $queryselect);
              $resselect=$dataselect->fetch_assoc();
              $newid=$resselect['nftcurrentid'];
              $newid=$newid;
                    $NFT_auction_time=0;
                        $sql="INSERT INTO `NFT_info`( `NFT_charity`,`NFT_name`, `NFT_price`, `NFT_payment`,`NFT_paymenCurrency`,`NFT_royalties`,`NFT_treeplant`,`NFT_resell`, `NFT_auction`,`NFT_auction_time`,`NFT_owner`,`Nft_owner_image`,`NFT_owner_address`, `NFT_creator`,`Nft_creator_image`, `NFT_creator_add`, `NFT_discription`, `NFT_id`, `NFT_image`, `NFT_type`, `NFT_time`,`NFT_advancesize`,`NFT_advanceproperties`,`NFT_advancedesc`,`NFT_highest_bid`,`start_id`,`end_id`,`NFT_unlockcontent`) 
                        VALUES ('$charity','$nftname','$nftprice','$payment','$paymentcurrency','$nftroyalities','$treeroyalties','$sell','$nftauction','$NFT_auction_time','$nftowner','$userimage','$nftowneradd','$nftowner','$userimage','$nftowneradd','$nftdesc','$newid','$path','$nfttype','$date','$NFT_advancesize','$NFT_advanceproperties','$NFT_advancedesc','$nftprice','$endid','$endid','$unlockcontent')";
             $data = mysqli_query($link,$sql);
            //   echo   $sql;
            if($data){
                
              echo "Success";
             $newid=$newid+$endid+1;
              $querynew="UPDATE `current_id` SET `nftcurrentid`=$newid";
              $datanew= mysqli_query($link,$querynew);
              
            }else{
              echo "failed";  
            }
                }
                else{
                   
              $NFT_auction_time=time() + $nftauction * 86400;
              $queryselect = "SELECT * FROM `current_id`";
              $dataselect = mysqli_query($link, $queryselect);
              $resselect=$dataselect->fetch_assoc();
              $newid=$resselect['nftcurrentid'];
              $newid=$newid;
                         $sql="INSERT INTO `NFT_info`( `NFT_charity`,`NFT_name`, `NFT_price`, `NFT_payment`,`NFT_paymenCurrency`,`NFT_royalties`,`NFT_treeplant`,`NFT_resell`, `NFT_auction`,`NFT_auction_time`,`NFT_owner`,`Nft_owner_image`,`NFT_owner_address`, `NFT_creator`,`Nft_creator_image`, `NFT_creator_add`, `NFT_discription`, `NFT_id`, `NFT_image`, `NFT_type`, `NFT_time`,`NFT_advancesize`,`NFT_advanceproperties`,`NFT_advancedesc`,`NFT_highest_bid`,`start_id`,`end_id`,`NFT_unlockcontent`) 
                         VALUES ('$charity','$nftname','$nftprice','$payment','$paymentcurrency','$nftroyalities','$treeroyalties','$sell','$nftauction','$NFT_auction_time','$nftowner','$userimage','$nftowneradd','$nftowner','$userimage','$nftowneradd','$nftdesc','$nftid','$path','$nfttype','$date','$NFT_advancesize','$NFT_advanceproperties','$NFT_advancedesc','$nftprice','$endid','$endid','$unlockcontent')";
       
  
            $data = mysqli_query($link,$sql);
        
            if($data){
                echo "Success";
                $newid=$newid+$endid+1;
              $querynew="UPDATE `current_id` SET `nftcurrentid`=$newid";
              $datanew= mysqli_query($link,$querynew);
            }else{
                echo "failed";  
            }
                }
        
          }
    } 
    else{
       
    }

?>