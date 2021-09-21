<?php
include "config.php";

$address =$_POST['address'];
$followadd =$_POST['followadd'];
$type=$_POST['type'];
$id=$_POST['id'];

if($type=="follow")
{
        $query1 = "SELECT `Id`, `Username`,`Userimage` FROM `NFT_user` WHERE Useraddress='{$followadd}'";
        $result1 = $link->query($query1);
        $res=$result1->fetch_assoc();
        $userimage= $res['Userimage'];
        $OwnerName= $res['Username'];
        
        $query2 = "SELECT `Id`, `Username`,`Userimage` FROM `NFT_user` WHERE Useraddress='{$address}'";
   
        $result2 = $link->query($query2);
        $res1=$result2->fetch_assoc();
        $userimage1= $res1['Userimage'];
        $OwnerName1= $res1['Username'];
        
        $myquery="SELECT * FROM User_follow WHERE User_address='$address'AND Follower_address='$followadd'";
        $myresult = $link->query($myquery);
        $data = mysqli_fetch_assoc($myresult);
        
        if($data==""){
                $query = "INSERT INTO `User_follow`(`User_address`,`User_image`,`User_name`,`following`, `Follower_address`, `Followers_image`, `Followers_name`) VALUES ('$address','$userimage1','$OwnerName1',1,'$followadd','$userimage','$OwnerName')";
                $result1 = $link->query($query);
                echo json_encode($result1);
                   
        }
        else{
             echo json_encode(0);
        }
}

if($type=="following"){
    $query2="SELECT * FROM User_follow WHERE User_address='$address'AND Follower_address='$followadd' ";
 
    $result2 = $link->query($query2);
    $newArray = array();
    while($row = mysqli_fetch_assoc($result2))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);

}

if($type=="followback")
{      
        $myquery="SELECT * FROM User_follow WHERE User_address='$address'AND Follower_address='$followadd' ";
        $myresult = $link->query($myquery);
        $data = mysqli_fetch_assoc($myresult);
        
        if($data==""){
                $query = "Insert INTO User_follow (`User_address`, `following`, `Follower_address`)VALUES('$address','1','$followadd')";
                $result1 = $link->query($query);
                echo json_encode($result1);
        }
            else{
                 echo json_encode(0);
            }

}

if($type=="unfollow"){
    
    $query3="DELETE FROM User_follow WHERE User_address='$address'AND Follower_address='$followadd'";
    $result3 = $link->query($query3);
    echo json_encode($result3);
    
}

?>
