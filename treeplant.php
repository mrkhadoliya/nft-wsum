<?php
include "config.php";
$address =$_POST['address'];
$query="SELECT AVG(NFT_treeplant) as tree_balance FROM NFT_info WHERE NFT_creator_add='$address'";
$result=mysqli_query($link,$query);

$res=$result->fetch_assoc();
$treeplant= $res['tree_balance'];
echo $treeplant ;

// $myarray=array();
//   while($row = mysqli_fetch_assoc($result))
//             {
//                 array_push($myarray , $row);
             
//             }
//             echo json_encode($myarray);

?>


