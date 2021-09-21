<?php
include "config.php";

$NFT_id =$_POST['NFT_id'];
$address=$_POST['address'];
$NFT_image=$_POST['NFT_image'];
$NFT_name=$_POST['NFT_name'];



            $query1 = "SELECT `Id`, `Username`,`Userimage` FROM `NFT_user` WHERE Useraddress='{$address}'";
                        $result1 = $link->query($query1);
                        $res=$result1->fetch_assoc();
                        $userimage= $res['Userimage'];
                        $OwnerName= $res['Username'];
        
            $querynew="SELECT NFT_likes FROM NFT_info WHERE NFT_id='$NFT_id'";
                          $newdata= $link->query($querynew);
                          $newresult=$newdata->fetch_assoc();
                          $likes= $newresult['NFT_likes'];
                          
            $sql3="SELECT * FROM `NFT_like` WHERE NFT_id=$NFT_id And  User_address='{$address}'";
                  $data3 = mysqli_query($link,$sql3);
                  (json_encode($data3->fetch_assoc()));
                   if($data3->num_rows==0)
                  {
                        $likes=$likes+1;
                        $likequery="UPDATE `NFT_info` SET `NFT_likes`=$likes WHERE NFT_id='$NFT_id' ";
                        $resultlike = $link->query($likequery);
                        $query = "INSERT INTO `NFT_like`(`NFT_id`, `NFT_image`, `NFT_name`, `User_image`, `User_name`, `User_address`) VALUES ('$NFT_id','$NFT_image','$NFT_name','$userimage','$OwnerName','$address')";
                        $result1 = $link->query($query);
                        
                        $newArray = array();
                        array_push($newArray , "true");
                        array_push($newArray , $likes);
                      echo json_encode($newArray);
                  }
                  else{
                       
                          $likes=$likes-1;
                          $likequery="UPDATE `NFT_info` SET `NFT_likes`=$likes WHERE NFT_id='$NFT_id' ";
                          $resultlike = $link->query($likequery);
                          $sqli= "DELETE FROM `NFT_like` WHERE NFT_id=$NFT_id And  User_address='{$address}'";
                          $data5 = mysqli_query($link,$sqli);
                     
                     $newArray = array();
                        array_push($newArray , "false");
                        array_push($newArray , $likes);
                        echo json_encode($newArray);
                  }
?>