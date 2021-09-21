<?php include('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
$price=($response->BNB);


    $a=array();
    $b=array();  
     
        $result1= mysqli_query($link, "select * from NFT_info ORDER BY ID DESC") or die("Error in Selecting " . mysqli_error($link));
        while($row1 =mysqli_fetch_assoc($result1)){
                $nftid =$row1['NFT_id'];
                $a['nft_info'][]=$row1;
                
                $result=mysqli_query($link,"select * from NFT_multiplebuy WHERE NFT_id='$nftid' ")or die("Error in Selecting " . mysqli_error($link));
                while($row =mysqli_fetch_assoc($result)){
                   $a['nft_info'][]=$row; 
                   
                  }
            }
                //  print_r($a);
           
               
                
                // print_r($a);
                // $buyeradd=$row['NFT_buyeraddress'];
                // $buyertime=$row['NFT_buytime'];
                // $count=$row['NFT_count'];
                // $nftstart=$row['nftstart'];
                // print_r($nftid);
               
                // if($nftid==$nft_id){
                    
                // $row1['buyertime']=$buyertime;
                // $row1['count']=$count;
                // $row1['nftstart']=$nftstart;
                // $row1['buyeradd']=$buyeradd;
                    
                //   } 
    
        $nft_like=mysqli_query($link, "select * from NFT_like ") or die("Error in Selecting " . mysqli_error($link));
        while($row2 =mysqli_fetch_assoc($nft_like)){$emparray['NFT_like'][] = $row2;
                $a['nft_like'][]=$row2;
            }
   
    $fp = fopen('./datanew.json', 'w');
    fwrite($fp, json_encode($a));
    fclose($fp);
    echo "Hello";

?>