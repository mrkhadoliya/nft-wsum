<?php include('../config.php');

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

   $emparray = array();
    $a=array();
    $b=array();    
    $result = mysqli_query($link, "select * from NFT_info WHERE NFT_charity=0 ORDER BY ID DESC") or die("Error in Selecting " . mysqli_error($link));
    while($row =mysqli_fetch_assoc($result)){ 
            //$emparray['NFT_info'][] = $row; 
            if($row['NFT_payment']=='BNB'){
                $currency=$price;
            }else {
                 $currency=0.01;
            }
            $b=$row['NFT_price']*$currency;
            $row['Price_dollar']=number_format($b,6);
            $a['nft_info'][]=$row;
            }
            
            $resultt = mysqli_query($link, "select * from NFT_user ") or die("Error in Selecting " . mysqli_error($link));
            while($roww =mysqli_fetch_assoc($resultt)){ //$emparray['NFT_user'][]= $roww; 
                $a['nft_user'][]=$roww;
            }
            
            $nft_bid=mysqli_query($link, "select * from NFT_bids") or die("Error in Selecting " . mysqli_error($link));
            while($rows =mysqli_fetch_assoc($nft_bid)){ //$emparray['NFT_bid'][] = $rows;  
            $a['nft_bid'][]=$rows;
            }
            
            $nft_follow=mysqli_query($link, "select * from User_follow ") or die("Error in Selecting " . mysqli_error($link));
            while($rowf =mysqli_fetch_assoc($nft_follow)){ //$emparray['NFT_follow'][] = $rowf;
                $a['nft_follow'][]=$rowf;
            }
            
            $nft_like=mysqli_query($link, "select * from NFT_like ") or die("Error in Selecting " . mysqli_error($link));
            while($rowl =mysqli_fetch_assoc($nft_like)){$emparray['NFT_like'][] = $rowl;
                $a['nft_like'][]=$rowl;
            }
    $fp = fopen('./data.json', 'w');
    fwrite($fp, json_encode($a));
    fclose($fp);
    echo "Hello";

?>