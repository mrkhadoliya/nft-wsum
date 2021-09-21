<?php
include "config.php";
$type=$_POST['type'];
$value =$_POST['value'];

// $query ="SELECT * FROM `NFT_info` WHERE NFT_resell='on' ORDER BY ID DESC LIMIT 10,$myvalue";
    
//     $result1 = $link->query($query);
//     $newArray = array();
//     while($row = mysqli_fetch_assoc($result1))
//     {array_push($newArray ,$row);
     
//     }
//     echo json_encode($newArray);

if($type=="All" && $value<100 ){
    $query = "SELECT * FROM `NFT_info` WHERE  NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data = mysqli_query($link,$query);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}

if($type=="Art" && $value<100 ){
    $query1 = "SELECT * FROM `NFT_info` WHERE NFT_type='Art' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data1 = mysqli_query($link,$query1);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data1))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}
if($type=="Photography" && $value<100 ){
    $query2 = "SELECT * FROM `NFT_info` WHERE NFT_type='Photography' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data2 = mysqli_query($link,$query2);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data2))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}
if($type=="Cacao" && $value<100 ){
    $query3 = "SELECT * FROM `NFT_info` WHERE NFT_type='Cacao' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data3 = mysqli_query($link,$query3);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data3))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}

if($type=="Coffee" && $value<100 ){
    $query4 = "SELECT * FROM `NFT_info` WHERE NFT_type='Coffee' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data4 = mysqli_query($link,$query4);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data4))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}
if($type=="Lemon" && $value<100 ){
    $query5 = "SELECT * FROM `NFT_info` WHERE NFT_type='Lemon' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data5 = mysqli_query($link,$query5);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data5))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}

if($type=="Baobab" && $value<100 ){
    $query6 = "SELECT * FROM `NFT_info` WHERE NFT_type='Baobab' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
    $data6 = mysqli_query($link,$query6);
    $newArray = array();
    while($row = mysqli_fetch_assoc($data6))
    {array_push($newArray ,$row);
     
    }
    echo json_encode($newArray);
}
// if($type=="All" && $value<100 ){
//     $query = "SELECT * FROM `NFT_info` WHERE NFT_type='$type' AND NFT_resell='on' ORDER BY ID DESC LIMIT 0, $value";
    
//     $data = mysqli_query($link,$query);
//     $newArray = array();
//     while($row = mysqli_fetch_assoc($data))
//     {array_push($newArray ,$row);
     
//     }
//     echo json_encode($newArray);
// }




                                     
?>