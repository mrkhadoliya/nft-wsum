<?php

include "config.php";
$valid_extensions = array('jpeg', 'jpg', 'png','gif','mp4','jfif'); // valid extensions
$path = '/home/ramlogicstech/public_html/WSUMART/uploads/';

    $img = $_FILES['tokenImage']['name'];
    $tmp = $_FILES['tokenImage']['tmp_name'];
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    $final_image = $img;
   $nftowneradd = $_POST['tokenowneradd'];
    if(in_array($ext, $valid_extensions)){ 
      
        $path = $path.strtolower($final_image); 
   
       if(true){move_uploaded_file($tmp,$path);
       
            $path="uploads/".strtolower($final_image);
        
            $sql="UPDATE `NFT_user` SET `coverphoto`='$path' WHERE Useraddress='{$nftowneradd}'";
            $data=mysqli_query($link,$sql);
             
            if($data){
              echo "Success";
            }else{
              echo "failed";  
            } 
        }
        
    }