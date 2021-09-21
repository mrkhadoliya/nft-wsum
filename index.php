<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "config.php";

include "header.php";
?>
<?php
include "config.php";
?>

<style>
    .dropdown_h_toggle .dropdown_hv_menu {
        position: absolute;
        transition: .5s;
        transform: scale(1) translateX(109px);
        opacity: 0;
        background: #eaedf7;
        border-radius: 5px;
        top: 5px;
    }
    .dropdown_h_toggle:hover .dropdown_hv_menu { 
        transform: scale(1) translateX(80px);
        opacity: 1; 
    }
    .dropdown_hv_menu ul li i{
        color:#50579e;
    }
</style> 

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script>
            function timerr(id, lid, etime){
            let countDownDate = new Date(etime*1000).getTime();
            let now = new Date().getTime();
            let distance = countDownDate - now;
            let days = Math.floor(distance / (1000 *60 *60 * 24));
            let hours = Math.floor((distance % (1000*60*60*24)) / (1000*60 * 60));
            let minutes = Math.floor((distance % (1000*60*60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById(id).innerHTML = days+" d "+hours+" h " + minutes+ " m "+ seconds+ "s";
           
            return distance;
                    	
                        }
</script>
<section class="index_page">
    <div class="latest-nft">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="text-center py-4">
                        <h4 class=""> WSUM Network A price discovery and liquidity protocol for standard & non-standard assets </h4>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php
               
                $query1 = "SELECT NFT_user.verify ,NFT_info.ID,NFT_info.nft_priority,NFT_info.block, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE NFT_info.nft_priority=1 AND NFT_info.block=0 group by NFT_info.block,NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 1";
                              $dataa = mysqli_query($link,$query1);
                                while($result= mysqli_fetch_assoc($dataa))
                                  { 
                                       
                 ?>
                <div class="col-md-6 col-12">
                    <div class="main_landuing_img__">
                    <a class="img_gradient_clr" href="./collection.php?address=<?php echo $result['NFT_owner_address'];?>">
                        <img src="<?php echo $result['NFT_image'];?>" class="img-fluid" alt="" style="border-radius: 10px">
                      </a>
                    </div>
                </div> 
               <?php
                                  }
               ?>
               
                <div class="col-md-6 col-12">
                    <div class="row">
                         <?php
                         
                               $queryy ="SELECT NFT_user.verify ,NFT_info.ID,NFT_info.nft_priority,NFT_info.block, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE NFT_info.nft_priority=2 AND NFT_info.block=0 group by NFT_info.block,NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 1";
                               $data2 = mysqli_query($link,$queryy);
                                 while($myresul= mysqli_fetch_assoc($data2))
                                   { 
                           ?>  
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresul['NFT_owner_address'];?>">
                                <img src="<?php echo $myresul['NFT_image'];?>" class="img-fluid" alt="" style="border-radius: 10px">
                               
                                </a>
                            </div>
                        </div> 
                        <?php
                               }
                        ?>
                         <?php
                               $newqueryy ="SELECT NFT_user.verify ,NFT_info.ID,NFT_info.nft_priority,NFT_info.block, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE NFT_info.nft_priority=3 AND NFT_info.block=0 group by NFT_info.block, NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 1";
                               $data3 = mysqli_query($link,$newqueryy);
                                 while($myresult= mysqli_fetch_assoc($data3))
                                   { 
                           ?>  
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresult['NFT_owner_address'];?>">
                                <img src="<?php echo $myresult['NFT_image'];?>" class="img-fluid" alt="" style="border-radius: 10px">
                               
                                </a>
                            </div>
                        </div> 
                        <?php
                             }
                        ?>
                     </div>
                      <div class="row">
                         <?php
                               $newquery ="SELECT NFT_user.verify ,NFT_info.ID,NFT_info.nft_priority,NFT_info.block, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE NFT_info.nft_priority=4 AND NFT_info.block=0 group by NFT_info.block,NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 1";
                               $data4 = mysqli_query($link,$newquery);
                                 while($newresult= mysqli_fetch_assoc($data4))
                                   { 
                           ?>  
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $newresult['NFT_owner_address'];?>">
                                <img src="<?php echo $newresult['NFT_image'];?>" class="img-fluid" alt="" style="border-radius: 10px">
                               
                                </a>
                            </div>
                        </div> 
                        <?php
                             }
                        ?>
                        <?php
                           $newqueryy1 ="SELECT NFT_user.verify ,NFT_info.ID,NFT_info.nft_priority,NFT_info.block, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE NFT_info.nft_priority=5 AND NFT_info.block=0 group by NFT_info.block,NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 1";
                               $data5 = mysqli_query($link,$newqueryy1);
                                 while($myresult3= mysqli_fetch_assoc($data5))
                                   { 
                           ?>  
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresult3['NFT_owner_address'];?>">
                                <img src="<?php echo $myresult3['NFT_image'];?>" class="img-fluid" alt="" style="border-radius: 10px">
                               </a>
                            </div>
                        </div> 
                        <?php
                           }
                        ?>
                    </div>
                </div> 
              </div>
        </div>
    </div>
    <div class="work-is-good">
        <div class="container">
            <div class="row">
                 <div class="col-md-10 m-md-auto col-12">
                     <div class="nkadv row text-center">
                         <div class="col-md-9">
                            <div class="common-heading set-banner-head py-5">
                                <div class="heading-section"><h2>Why our work is good for everyone involved</h2></div>
                                    <div class="content-here text-center">
                                        <p>Investing in top-quality NFT Art material & Defi in global demand to earn money while not harming man and nature is that even possible? 
                                        We are convinced there is no other way long-term. therefore we made sustainability our main objective and made it the foundation of the 
                                        NFT & Defi business model. the result is a real win situation
                                        </p> 
                                    </div>
                                    <?php 
                                     $query="SELECT AVG(NFT_treeplant) as treeplant FROM NFT_info ";
                                     $result=mysqli_query($link,$query);
                                     $datatree= mysqli_fetch_assoc($result);
                                     ?>
                                   
                                
                                
                            </div>
                        </div> 
                        <div class="col-md-3">
                                <div class="wsum-dog-imageset py-5 text-center">
                                    <img src="assets/img/dog-img1 (1).png" class="w-75" />
                                </div>
                            </div>
                        
                        <div class="col-md-11 col-12 m-md-auto">
                             <div class="text-center pb-4">
                                    <a href="https://bscscan.com/address/0x37C7D580ae7200A38a96E8058A0D5d443c84ccd7#internaltx" target="blank"class="m-auto onsale_btn12 d-block my-4 " style="font-size: 19px;" id="treeplantdollar">Buying and selling WSUM to benefit &nbnsp;<?php echo number_format($datatree['treeplant'],2);?> % to nonprofit tree plant organizations </a>
                                </div>
                        </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <div class="common-head-here ">
                        <span>Top</span> 
                         <select class="d-inline"  id="buy_sell">
                          <option>buyers</option>
                          <option>seller</option>
                         </select>
                          <span>in</span> 
                        <select class="d-inline " id="day">
                          <option value="1" >1 day</option>
                          <option value="7" >7 days</option>
                          <option value="30" >30 days</option>
                         </select>
                    </div>
                </div>
    
                <div class="col-md-12" >
                    <div class="top-list-here">
                        <div class="set-scroll-list" id="mytime">
                            <?php
                               $query="SELECT NFT_user.verify, NFT_user.Useraddress , NFT_buy.Username, sum(NFT_buy.value) AS value, NFT_buy.image FROM NFT_buy INNER JOIN NFT_user ON NFT_user.Useraddress = NFT_buy.Address WHERE time=CURDATE() group by NFT_buy.Username, NFT_buy.image, NFT_user.verify, NFT_user.Useraddress Order by value" ;
                               $data = mysqli_query($link,$query);
                              
                              while($resul=mysqli_fetch_assoc($data))
                                {
                                    if($resul['verify']==1){
                                        
                               ?>
                               <div class="buyers mt-4" >
                                <div class="row d-flex justify-content-between" style="align-items:center">
                                    <!--<div class="w-100" style="width: 10%;"><span class="pt-3 d-block"></span></div>-->
                                    <div class="col-auto">
                                    <a href="./collection.php?address=<?php echo $resul['Useraddress'];?>" target="_blank"><div class="buyer-img d-flex"><img src="./<?php echo $resul['image'];?>" height="60" height="60" alt=""/> <span class="badge_icon" id="sign"><i class="fas fa-badge-check" style="color: #2b2f5a"></i> </span></div></a>
                                    </div>
                                    <div class="col">
                                        <div class="">
                                            <h6><b><?php echo $resul['Username']; ?></b></h6>
                                            <div class="text-muted"><i class="far fa-dollar-sign"></i><?php echo number_format($resul['value'],2);?></div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            
                            <?php
                                    }
                                }                            
                            ?>
                          </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <script>
            $('select').on('change', function()
            {      
                    let value=$("#day option:selected").text();
                    let buy_sell=$("#buy_sell option:selected").text();
                    var formdata = new FormData();
                    formdata.append("value", value);
                    formdata.append("buy_sell",buy_sell);
            
                    var requestOptions = {
                        method: "POST",
                        body: formdata,
                        redirect: "follow",
                    };
            
                    fetch("./time.php", requestOptions)
                        .then((response) => response.json())
                        .then((result) => {
                            let myhtml = "";
                            for (i=0; i<result.length; i++){
                            if(result[i].verify==1){
                            myhtml+= ` <div class="buyers mt-4">
                                            <div class="row d-flex justify-content-between align-items-center"> 
                                                <div class="col-auto">
                                                    <a href="./collection.php?address=${result[i].Useraddress}" target="_blank"> <div class="buyer-img"><img src="${result[i].image}" height="60" height="60" alt=""/> <span class="badge_icon" id="sign"><i class="fas fa-badge-check" style="color:#2b2f5a"></i></span></div></a>
                                                </div>
                                                <div class="col">
                                                   <div class="dolller_jj">
                                                        <h6 ><b>${result[i].Username}</b></h6>
                                                          <div class="text-muted"><i class="far fa-dollar-sign"></i> ${Number(result[i].value).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 2, minimumFractionDigits : 2 })}</div>
                                                   </div>
                                                 </div>
                                            </div>
                                        </div>
                                    `;
                                document.getElementById('mytime').innerHTML=myhtml; 
                                 }
                              }
                         });
                    });
                                    
     </script>
     
     <div class="live-auction-top">
     
        <div class="container">
            <div class="row"> 
              <div class="col-md-10 m-md-auto col-12">
                  <div class="bdvljadbv row">
                      <div class="col-md-9">
                                <div class="common-heading set-banner-head py-5">
                                    <div class="heading-section text-center"><h2>Let’s Get Planting</h2></div>
                                    <div class="content-here text-center">
                                        <p>
                                            Your purchase has a direct impact on the earth and lives of the people who need it most. By helping us plant trees, you give families the ability to transition from unsustainable farming techniques to a
                                            flourishing Forest Garden system. Your donation not only helps the environment, but it also empowers farmers to end poverty for their families.
                                        </p>
                                        <p>Trees & Blockchain. Our sustainable solution for a greener world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wsum-dog-imageset py-5 text-center">
                                <img src="assets/img/7thWSUM.png" class="w-75" alt=""/>
                            </div>
                        </div>
                  </div>
              </div>  
            </div>
        </div>
    </div>
    <div class="live-auctions py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common-heading pb-4">
                       
                        <div class="heading-section"><h2>Live Auctions</h2></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <div class="row">
                            <?php
                              $Time1 = time();
                              
                            //   $query = "SELECT * FROM `NFT_info` WHERE  $Time1 < NFT_auction_time AND NFT_resell='on' ORDER BY ID DESC" ;
                              $query="SELECT NFT_info.block ,NFT_info.NFT_owner_address,NFT_info.NFT_creator_add,NFT_info.Nft_owner_image,NFT_info.Nft_creator_image,NFT_info.NFT_creator,NFT_info.NFT_owner,NFT_user.verify ,NFT_info.ID, NFT_info.NFT_likes,NFT_info.NFT_id , NFT_info.NFT_name ,NFT_info.NFT_discription , NFT_info.NFT_image , NFT_info.NFT_price,NFT_info.NFT_payment, NFT_info.NFT_treeplant,NFT_info.NFT_auction_time,start_id,end_id FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE $Time1< NFT_info.NFT_auction_time AND NFT_info.NFT_resell='on' AND NFT_info.block=0 group by NFT_user.verify ,NFT_info.ID, NFT_info.NFT_id ,NFT_info.NFT_name,NFT_info.block , NFT_info.NFT_discription , NFT_info.NFT_image , NFT_info.NFT_price,NFT_info.NFT_payment, NFT_info.NFT_treeplant,NFT_info.NFT_auction_time,NFT_info.NFT_likes,start_id,end_id ORDER BY ID DESC";
                              
                              $data = mysqli_query($link,$query);
                              
                              while($mydata1= mysqli_fetch_assoc($data))
                                { 
                                     if($mydata1['verify']==1){
                                ?>
                                <div class="col-md-3 py-2">
                                    <div class="item">
                                          <div class="single-auction">
                                                <div class="auction-top">
                                                    <div class="row m-0">
                                                        <div class="col p-0">
                                                            <div class="inner_img1">
                                                                <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                              <a href="./collection.php?address=<?php echo $mydata1['NFT_owner_address'];?>" target="_blank"> <img src="<?php echo $mydata1['Nft_owner_image'];?>" class="second collec_img__" data-toggle="tooltip" data-placement="top" title="Owner: <?php echo $mydata1['NFT_owner']?>"></a>
                                                               <a href="./collection.php?address=<?php echo $mydata1['NFT_creator_add'];?>" target="_blank"> <img src="<?php echo $mydata1['Nft_creator_image'];?>" class="thired collec_img__" data-toggle="tooltip" data-placement="top" title="Creator: <?php echo $mydata1['NFT_creator']?>"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto p-0">
                                                            <div class="dropleft">
                                                              <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                              </button>
                                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <div class="dropdown_h_toggle">
                                                                    <div class="dropdown-item">Share</div>
                                                                    <div class="dropdown_hv_menu">
                                                                        <ul class="list-unstyled m-0">
                                                                            <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $mydata1['NFT_name'].", ".$mydata1['NFT_discription']; ?> &url=http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&ref_src=http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                            <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&p[title]=<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                            <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>}&title={<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                 <input type="hidden" id="nftid" name="NFT[]" value="<?php echo $mydata1['NFT_id']?>">
                                                                 <a href="report.php?id=<?php echo $mydata1['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
                                                              </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="auction-img text-center">
                                                  <img class="w-100" src="./<?php echo $mydata1['NFT_image'];?>" alt="Card image cap" />
                                                </div>
                                                
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                       <h6 class="timer" ><a href="#"><span id="clock<?php echo $mydata1['ID'];?>"></span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a> </h6>
                                                        
                                                        <div class="row m-0">
                                                            <div class="col-12 p-0">
                                                                <div class="left-nft-content d-flex"> 
                                                                    <h5 class="text_nft_heading"><?php echo $mydata1['NFT_name']?></h5> <span class="text-muted"><?php echo $mydata1['start_id']?>/<?php echo $mydata1['end_id']?> </span>
                                                                </div>  
                                                            </div>
                                                            <div class="col-12 p-0">
                                                                <div class="left-nft-content d-flex">
                                                                    <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div> 
                                                                    <span class="text-muted d-flex"> <?php echo number_format($mydata1['NFT_price'],5);?><span> <?php echo $mydata1['NFT_payment']?></span></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-12 p-0">
                                                                <div class="left-nft-content d-flex mt-2">
                                                                    <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                    <div class="text-muted plant_tree_ d-flex"><?php echo $mydata1['NFT_treeplant'];?>% &nbsp;
                                                                        <span class="heart_class" id="heart<?php echo $mydata1['NFT_id'];?>" onclick='liked("<?php echo $mydata1['NFT_id'];?>","<?php echo $mydata1['NFT_image']?>","<?php echo $mydata1['NFT_name']?>","like<?php echo $mydata1['NFT_id'];?>","heart<?php echo $mydata1['NFT_id'];?>")'>
                                                                        <i class="fal fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span> 
                                                                        <span id="like<?php echo $mydata1['NFT_id'];?>" ><?php echo $mydata1['NFT_likes'];?> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-12">
                                                                <div class="right-nft-content-here mt-3">
                                                                    <a href="./bid_description.php?id=<?php echo $mydata1['NFT_id']?>">
                                                                        <button class="btn btn-default border-color-set" id="mint2<?php echo $mydata1['ID'];?>">Place a bid</button>
                                                                    </a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                         
                                            //     var autionedendtime='<?php echo $mydata1['NFT_auction_time']?>';
                                            //     var autionedcheckingdate = autionedendtime*1000
                                            //     var checkingdate = new Date(autionedcheckingdate).getTime();
                                            //     var x<?php echo $mydata1['ID'];?> = setInterval(function() {
                                            //     var now = new Date().getTime();
                                            //     var t = checkingdate - now;
                                                
                                            //     var days = Math.floor(t / 86400000);
                                            //     var hours = Math.floor((t % 86400000) / 3600000);
                                            //     var minutes = Math.floor((t % 3600000) / 60000);
                                            //     var seconds = Math.floor((t % 60000)/ 1000);
                                               
                                            //     document.getElementById('clock<?php echo $mydata1['ID'];?>').innerHTML =days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";
                                             
                                            //     if(t < 0) {
                                            //         clearInterval(x<?php echo $mydata1['ID'];?>);
                                            //         console.log("Expired");
                                            //     }
                                           
                                            // }, 1000);
                                                
                                            </script>
                                             <script>
                                                var id<?php echo $mydata1['ID'];?>='clock<?php echo $mydata1['ID'];?>';
                                                
                                                var lid<?php echo $mydata1['ID'];?> = 'mint2<?php echo $mydata1['ID'];?>';
                                                var auctiontime<?php echo $mydata1['ID'];?>='<?php echo $mydata1["NFT_auction_time"];?>';
                                                var x = setInterval(function() { 
                                                var dd= timerr(id<?php echo $mydata1['ID'];?>, lid<?php echo $mydata1['ID'];?>, auctiontime<?php echo $mydata1['ID'];?>);
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id1<?php echo $mydata1['ID'];?>).innerHTML="expired";
                                                        document.getElementById(lid1<?php echo $mydata1['ID'];?>).disabled=false;
                                                    }
                                                }, 1000);
                                            </script>
                                          
                                      </div>
                                      </div>
                                    <?php
                                     } 
                                    }
                                ?>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--========================================== Charity NFT==========================================================-->

<div class="live-auctions py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common-heading pb-4">
                       
                        <div class="heading-section"><h2> Charity NFT</h2></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="live-carousal-here">
                        <div class="owl-carousel owl-theme">
                            <?php
                              $Time1 = time();
                              
                            //   $query = "SELECT * FROM `NFT_info` WHERE  $Time1 < NFT_auction_time AND NFT_resell='on' ORDER BY ID DESC" ;
                              $query="SELECT NFT_info.block ,NFT_info.NFT_owner_address,NFT_info.NFT_charity,NFT_info.NFT_creator_add,NFT_info.Nft_owner_image,NFT_info.Nft_creator_image,NFT_info.NFT_creator,NFT_info.NFT_owner,NFT_user.verify ,NFT_info.ID, NFT_info.NFT_likes,NFT_info.NFT_id , NFT_info.NFT_name ,NFT_info.NFT_discription , NFT_info.NFT_image , NFT_info.NFT_price,NFT_info.NFT_payment, NFT_info.NFT_treeplant,NFT_info.NFT_auction_time,start_id,end_id FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE NFT_info.NFT_resell='on' AND NFT_info.block=0 AND NFT_info.NFT_charity=1 group by NFT_user.verify ,NFT_info.ID, NFT_info.NFT_id ,NFT_info.NFT_name,NFT_info.block , NFT_info.NFT_discription , NFT_info.NFT_image , NFT_info.NFT_price,NFT_info.NFT_payment, NFT_info.NFT_treeplant,NFT_info.NFT_auction_time,NFT_info.NFT_likes,start_id,end_id ORDER BY ID DESC";
                              
                              $data = mysqli_query($link,$query);
                              
                              while($mydata1= mysqli_fetch_assoc($data))
                                { 
                                     if($mydata1['verify']==1){
                                ?>
                            <div class="item">
                                  <div class="single-auction">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                <div class="col p-0">
                                                    <div class="inner_img1">
                                                        <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                      <a href="./collection.php?address=<?php echo $mydata1['NFT_owner_address'];?>" target="_blank"> <img src="<?php echo $mydata1['Nft_owner_image'];?>" class="second collec_img__" data-toggle="tooltip" data-placement="top" title="Owner: <?php echo $mydata1['NFT_owner']?>"></a>
                                                       <a href="./collection.php?address=<?php echo $mydata1['NFT_creator_add'];?>" target="_blank"> <img src="<?php echo $mydata1['Nft_creator_image'];?>" class="thired collec_img__" data-toggle="tooltip" data-placement="top" title="Creator: <?php echo $mydata1['NFT_creator']?>"></a>
                                                    </div>
                                                </div>
                                                <div class="col-auto p-0">
                                                    <div class="dropleft">
                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                      </button>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="dropdown_h_toggle">
                                                            <div class="dropdown-item">Share</div>
                                                            <div class="dropdown_hv_menu">
                                                                <ul class="list-unstyled m-0">
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $mydata1['NFT_name'].", ".$mydata1['NFT_discription']; ?> &url=http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&ref_src=http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&p[title]=<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=<?php echo $mydata1['NFT_id']?>}&title={<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                         <input type="hidden" id="nftid" name="NFT[]" value="<?php echo $mydata1['NFT_id']?>">
                                                         <a href="report.php?id=<?php echo $mydata1['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
                                                      </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="auction-img text-center">
                                          <img class="w-100" src="./<?php echo $mydata1['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        
                                        <div class="auction-content">
                                            <div class="auction-time">
                                               <!--<h6 class="timer" ><a href="#"><span id="clock2<?php echo $mydata1['ID'];?>"></span>  left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a> </h6>-->
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex"> 
                                                            <h5 class="text_nft_heading"><?php echo $mydata1['NFT_name']?></h5> <span class="text-muted"><?php echo $mydata1['start_id']?>/<?php echo $mydata1['end_id']?> </span>
                                                        </div>  
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b> Price</b></div> 
                                                            <span class="text-muted d-flex"> <?php echo number_format($mydata1['NFT_price'],5);?><span> <?php echo $mydata1['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex mt-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <div class="text-muted plant_tree_ d-flex">100 % &nbsp;
                                                                <span class="heart_class" id="heart<?php echo $mydata1['NFT_id'];?>" onclick='liked("<?php echo $mydata1['NFT_id'];?>","<?php echo $mydata1['NFT_image']?>","<?php echo $mydata1['NFT_name']?>","like<?php echo $mydata1['NFT_id'];?>","heart<?php echo $mydata1['NFT_id'];?>")'>
                                                                <i class="fal fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span> 
                                                                <span id="like<?php echo $mydata1['NFT_id'];?>" ><?php echo $mydata1['NFT_likes'];?> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here mt-3">
                                                            <a href="./buycharity.php?id=<?php echo $mydata1['NFT_id']?>">
                                                                <button class="btn bg_green btn-default border-color-set px-4" id="mint2<?php echo $mydata1['ID'];?>">Buy</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <?php
                                     } 
                                    }
                                ?>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--============================================= Charity NFT END=======================================================-->




    <div class="when-you-plant-tree py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>The farmers take care of the trees and the trees take care of them.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You protect and revitalize land. You prevent flooding, erosion, and landslides.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You capture carbon and other greenhouse gases.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You restore biodiversity, bringing beneficial animals and insects back to the land.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You promote sustainable farming practices that embrace trees instead of clearing them.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You build healthy soil so that a variety of fruits and vegetables can grow to eat and sell.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You give families a supermarket in their own backyard.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You increase paydays and income of farmers who once lived in extreme poverty.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You give farmers the training they need to grow food in a sustainable way and be independent from aid.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You encourage children going to school, women's empowerment, and you stop climate migration.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You foster healthy, thriving communities whose people support each other and build the local economy.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You build resilience for the environment and families.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>You change the planet and people’s lives for the better. Forever.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="plant-tree text-center">
                                <h4>When You Plant Trees</h4>
                                <p>When you plant trees with farmers, you aren't just helping the planet and future generations, 
                                you're immediately impacting the lives of families in need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="when-you-plant-tree py-5">
        <div class="container">
           
            <div class="row" style="overflow: auto;">
                <div class="col-md-12">
                    <div class="common-heading pb-4">
                        <!--<div class="heading-section"><h2>Hot bids <img src="assets/img/fire.png" height="30px" style="width:30px!important"></h2></div>-->
                        <div class="heading-section"><h2>Hot bids</h2></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <div class="row">
                    <?php
                      $currentTimeinSeconds = time();
                      $query = "SELECT * FROM `NFT_info` WHERE  $currentTimeinSeconds<NFT_auction_time AND NFT_resell='on' AND block=0 ORDER BY ID DESC " ;
                      $data = mysqli_query($link,$query);
                        while($mydata= mysqli_fetch_assoc($data))
                        { ?><div class="col-md-3 py-2">
                            <div class="item">
                              <div class="single-auction">
                                  <div class="auction-top">
                                        <div class="row m-0">
                                             <div class="col p-0">
                                                    <div class="inner_img1">
                                                        <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                      <a href="./collection.php?address=<?php echo $mydata['NFT_owner_address'];?>" target="_blank">  <img src="<?php echo $mydata['Nft_owner_image']?>" class="second collec_img__" data-toggle="tooltip" data-placement="top" title="Owner: <?php echo $mydata['NFT_owner']?>"></a>
                                                       <a href="./collection.php?address=<?php echo $mydata['NFT_creator_add'];?>" target="_blank">  <img src="<?php echo $mydata['Nft_creator_image']?>" class="thired collec_img__" data-toggle="tooltip" data-placement="top" title="Creator: <?php echo $mydata['NFT_creator']?>"></a>
                                                    </div>
                                                </div>
                                                <div class="col-auto p-0">
                                                    <div class="dropleft">
                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                      </button>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="dropdown_h_toggle">
                                                            <div class="dropdown-item">Share</div>
                                                            <div class="dropdown_hv_menu">
                                                                <ul class="list-unstyled d-flex m-0">
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $mydata['NFT_name'].",  ".$mydata['NFT_discription']; ?> &url=http://wsum.art/bid_description.php?id=<?php echo $mydata['NFT_id']?>&ref_src=http://wsum.art/bid_description.php?id=<?php echo $mydata['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=<?php echo $mydata['NFT_id']?>&p[title]=<?php echo $mydata['NFT_name'].",  ".$mydata['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=<?php echo $mydata['NFT_id']?>}&title={<?php echo $mydata['NFT_name'].",  ".$mydata['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                         <a href="report.php?id=<?php echo $mydata['NFT_id']?>" class="dropdown-item" target="blank">Report</a>
                                                       </div>
                                                    </div>
                                                     
                                                </div>
                                        </div>
                                        </div>  
                                    <a href="./bid_description.php">
                                    <div class="auction-img text-center">
                                        <!--<img class="w-100" src="assets/img/gif4.gif" alt="Card image cap">-->
                                        <img class="w-100" src="./<?php echo $mydata['NFT_image'];?>" alt="Card image cap" />
                                    </div>
                                       </a> 
                                    <div class="auction-content">
                                        <div class="auction-time">
                                            <h6 class="timer" ><a href="#">
                                                <span id="myclock<?php echo $mydata['ID'];?>"></span>  left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a>
                                            </h6>
                                            
                                            <div class="row m-0">
                                                <div class="col-12 p-0">
                                                    <div class="left-nft-content d-flex">
                                                        <h5 class="min_bids text_nft_heading"><?php echo $mydata['NFT_name']?></h5> <span class="text-muted"><?php echo $mydata['start_id']?>/<?php echo $mydata['end_id']?></span>
                                                    </div>
                                                    <div class="left-nft-content d-flex">
                                                        <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($mydata['NFT_price'],5);?>
                                                            <span> <?php echo $mydata['NFT_payment']?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex mt-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <div class="text-muted d-flex plant_tree_"><?php echo $mydata['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $mydata['NFT_id'];?>" onclick='liked("<?php echo $mydata['NFT_id'];?>","<?php echo $mydata['NFT_image']?>","<?php echo $mydata['NFT_name']?>","liked<?php echo $mydata['NFT_id'];?>","heart<?php echo $mydata['NFT_id'];?>")'><i class="fal fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span> <span id="liked<?php echo $mydata['NFT_id'];?>"><?php echo $mydata['NFT_likes'];?></span></div>
                                                        </div>
                                                    </div>
                                                <div class="col-12 mt-3">
                                                    <div class="right-nft-content-here">
                                                        <a href="./bid_description.php?id=<?php echo $mydata['NFT_id']?>"><button class="btn btn-default border-color-set" id="mint<?php echo $mydata['ID'];?>">Place a bid</button></a>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                 </div>
                           <script>
                                var id1<?php echo $mydata['ID'];?>='myclock<?php echo $mydata['ID'];?>';
                                
                                var lid1<?php echo $mydata['ID'];?> = 'mint<?php echo $mydata['ID'];?>';
                                var auctiontime1<?php echo $mydata['ID'];?>='<?php echo $mydata["NFT_auction_time"];?>';
                                var x = setInterval(function() { 
                                var dd= timerr(id1<?php echo $mydata['ID'];?>, lid1<?php echo $mydata['ID'];?>, auctiontime1<?php echo $mydata['ID'];?>);
                                    if (dd < 0) {
                                        clearInterval(x);
                                        document.getElementById(id1<?php echo $mydata['ID'];?>).innerHTML="expired";
                                        document.getElementById(lid1<?php echo $mydata['ID'];?>).disabled=false;
                                    }
                                }, 1000);
                            </script>
                            </div>
                            </div>
                            <?php
                            }                    
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </div>
    <div class="explore-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common-heading">
                        <!--<div class="heading-section"><h2>Hot Collections <img src="assets/img/1f4a5.png" height="30px" style="width:30px!important"></h2></div>-->
                        <div class="heading-section"><h2>Hot Collections</h2></div>
                    </div>
                </div>
                 <div class="col-lg-12">
                    <div class="hot-collections-section">
                        <div class="owl-carousel owl-theme">
                            
                              <?php
                              $query = "SELECT * FROM `NFT_user` WHERE user_priority=1 AND block=0";
                              $data = mysqli_query($link,$query);
                                while($result= mysqli_fetch_assoc($data))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                               }
                            ?>
                            
                              <?php
                              $query1 = "SELECT * FROM `NFT_user` WHERE user_priority=2 AND block=0";
                              $data1 = mysqli_query($link,$query1);
                                while($result1= mysqli_fetch_assoc($data1))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result1['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result1['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result1['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result1['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                            
                              <?php
                              $query2 = "SELECT * FROM `NFT_user` WHERE user_priority=3 AND block=0";
                              $data2 = mysqli_query($link,$query2);
                                while($result2= mysqli_fetch_assoc($data2))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result2['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result2['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result2['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result2['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                            
                              <?php
                              $query4 = "SELECT * FROM `NFT_user` WHERE user_priority=4 AND block=0";
                              $data4 = mysqli_query($link,$query4);
                                while($result4= mysqli_fetch_assoc($data4))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result4['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result4['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result4['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result4['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                             <?php
                              $query5 = "SELECT * FROM `NFT_user` WHERE user_priority=5 AND block=0";
                              $data5 = mysqli_query($link,$query5);
                                while($result5= mysqli_fetch_assoc($data5))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result5['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result5['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result5['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result5['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                             <?php
                              $query6 = "SELECT * FROM `NFT_user` WHERE user_priority=6 AND block=0";
                              $data6 = mysqli_query($link,$query6);
                                while($result6= mysqli_fetch_assoc($data6))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result6['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result6['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result6['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result6['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                            
                             <?php
                              $query7 = "SELECT * FROM `NFT_user` WHERE user_priority=7 AND block=0";
                              $data7 = mysqli_query($link,$query7);
                                while($result7= mysqli_fetch_assoc($data7))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result7['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result7['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result7['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result7['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                            <?php
                              $query8 = "SELECT * FROM `NFT_user` WHERE user_priority=8 AND block=0";
                              $data8 = mysqli_query($link,$query8);
                                while($result8= mysqli_fetch_assoc($data8))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result8['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result8['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result8['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result8['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                            <?php
                              $query9 = "SELECT * FROM `NFT_user` WHERE user_priority=9 AND block=0";
                              $data9 = mysqli_query($link,$query9);
                                while($result9= mysqli_fetch_assoc($data9))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result9['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result9['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result9['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result9['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                             <?php
                              $query10 = "SELECT * FROM `NFT_user` WHERE user_priority=10 AND block=0";
                              $data10 = mysqli_query($link,$query10);
                                while($result10= mysqli_fetch_assoc($data10))
                                {
                                       
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result10['Useraddress'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result10['coverphoto'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result10['Userimage'];?>" class="w-100" /></div>
                                        <h5><?php echo $result10['Username'];?></h5>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                                }
                            ?>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="explore-tab-sections py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                   <div  class="Explore_____">
                        <h2 class="explore-set-this">Explore</h2>
                   </div>
                </div>
                <div class="col-md-8 pl-0">
                    <div class="wrong-network just-example-set-it">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"  aria-selected="false"> 🌈 Collectibles and Art</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">📸 Photography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cacao-tab" data-toggle="tab" href="#cacao" role="tab" aria-controls="cacao" aria-selected="false">🌾 Agricultural</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" id="Coffee-tab" data-toggle="tab" href="#Coffee" role="tab" aria-controls="Coffee" aria-selected="false">🏀 Sports</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" id="Lemon-tab" data-toggle="tab" href="#Lemon" role="tab" aria-controls="Lemon" aria-selected="false">🤑 Crypto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Baobab-tab" data-toggle="tab" href="#Baobab" role="tab" aria-controls="Baobab" aria-selected="false">🏬 Assets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Dogstree-tab" data-toggle="tab" href="#Dogstree" role="tab" aria-controls="Dogstree" aria-selected="false">🎫 Tickets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="TuttiFrutti-tab" data-toggle="tab" href="#TuttiFrutti" role="tab" aria-controls="TuttiFrutti" aria-selected="false">🧗️ Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Plantall-tab" data-toggle="tab" href="#Plantall" role="tab" aria-controls="Plantall" aria-selected="false">🌱 Holiday</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="Housing-tab" data-toggle="tab" href="#Housing" role="tab" aria-controls="Housing" aria-selected="false">🏠 Home & Garden </a>
                            </li>
                             
                            <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#Airplane" role="tab" aria-controls="Airplane" aria-selected="false">👬 Celebrities </a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Car-tab" data-toggle="tab" href="#Car" role="tab" aria-controls="Car" aria-selected="false">🚔 Vehicles </a>
                            </li>
                        </ul>
                    </div> 
               </div>
                 <div class="col-md-2">
                    <div class="Filter_______"> 
                        <div class="filtndrow">
                            <style>
                                .dropdown { 
                                    background: #4e9d66;
                                    border-radius: 50px;
                                }
                            </style>
                            <div class="dropdown d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary Filter_btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg viewBox="0 0 24 24" fill="none" width="22" height="22" xlmns="http://www.w3.org/2000/svg">
                                         <path d="M20 16L12 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6 16L4 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20 8L18 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 8L4 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <circle cx="9" cy="16" r="3" fill="currentColor"></circle>
                                        <circle cx="15" cy="8" r="3" fill="currentColor"></circle>
                                    </svg>
                                    Filter & Sort
                                </button>
                                <div class="dropdown-menu Filter_show" aria-labelledby="dropdownMenuButton">
                                    <div class="radio_box">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="select" id="Recently_added" value="Recently_added">
                                          <label class="form-check-label" for="Recently_added">
                                           Recently added
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="select" id="CheapestPrice" value="Cheapest_Price" ;>
                                          <label class="form-check-label" for="CheapestPrice">
                                            Cheapest Price
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="select" id="Highest_Price" value="Highest_Price" >
                                          <label class="form-check-label" for="Highest_Price">
                                            Highest Price
                                          </label>
                                        </div>
                                         <div class="form-check">
                                          <input class="form-check-input" type="radio" name="select" id="most_like" value="most_like" >
                                          <label class="form-check-label" for="most_like">
                                           Most Liked
                                          </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <span class="nav-link set-pad-here serch-icon" style="cursor: pointer;"><i class="fa fa-search " style="color: #fff;"></i></span> 
                             
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-12">
                    <style>
                        .search-here-full input {  
                            color: #eaedf7;
                            background: transparent !important;
                            outline: none !important;
                            border: 1px solid #eaedf7;
                        }
                        .search-here-full .form-control:focus {
                            border-color: #ffffff;
                            box-shadow: none;
                        }
                    </style>
                    <!--search-->
                            <div class="search-here-full pt-4 pb-3" style="display:none;">
                            <form>
                              <div class="form-group mb-0">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search.." autocomplete="off">
                                        </div>
                                      <div class="col-auto">
                                        <div class="clickcross d-grid align-items-center justify-content-center">
                                             <i class="fal fa-times-circle" style="font-size: 33px;color: #eaedf7;cursor: pointer;"></i>
                                        </div>
                                  </div>
                                
                              </div>
                              
                            </form>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){
                                  $(".serch-icon").click(function(){
                                    $(".search-here-full").show();
                                  });
                                  $(".clickcross").click(function(){
                                    $(".search-here-full").hide();
                                   });
                                });
                            </script>
                          </div>
                          <!---->
                </div>
             <div class="col-md-12 pt-4">
                    <style>
                        .wrong-network ul li {
                            margin: 10px 0px;
                        }
                    </style>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12" id="all">
                            </div>
                             </div>
                        </div> 
                       
                   <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"></script>-->
                         <!--profile-->
                       <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12" id="art">
                              </div>
                            </div>
                        </div>
                       <!--photography-->
                     <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12" id="photography">
                                </div>
                            </div>
                        </div>
                         
                         
                        <!--Agricultural-->
                       <div class="tab-pane fade" id="cacao" role="tabpanel" aria-labelledby="cacao-tab">
                            <div class="row">
                                <div class="col-md-12" id="agriculture">
                               </div>
                            </div>
                        </div>
                         
                        
                        <!--Sports-->
                         <div class="tab-pane fade" id="Coffee" role="tabpanel" aria-labelledby="Coffee-tab">
                            <div class="row">
                                <div class="col-md-12" id="sports">
                                 </div>
                             </div>
                        </div>
                            
                        
                        <!--Crypto-->
                        <div class="tab-pane fade" id="Lemon" role="tabpanel" aria-labelledby="Lemon-tab">
                            <div class="row">
                                <div class="col-md-12" id="crypto">
                              </div>
                            </div>
                        </div>
                        
                        <!--asset-->
                        <div class="tab-pane fade" id="Baobab" role="tabpanel" aria-labelledby="Baobab-tab">
                            <div class="row">
                                <div class="col-md-12" id="asset">
                              </div>
                              </div>
                        </div>
                        
                        <!--ticket-->
                        <div class="tab-pane fade" id="Dogstree" role="tabpanel" aria-labelledby="Dogstree-tab">
                            <div class="row">
                                <div class="col-md-12" id="ticket">
                                 </div>
                             </div>
                        </div>
                        <!--Lifestyle-->
                        <div class="tab-pane fade" id="TuttiFrutti" role="tabpanel" aria-labelledby="TuttiFrutti-tab">
                            <div class="row">
                                <div class="col-md-12" id="lifestyle">
                               </div>
                           </div>
                        </div>
                        <!--holiday-->
                        <div class="tab-pane fade" id="Plantall" role="tabpanel" aria-labelledby="Plantall-tab">
                            <div class="row">
                                <div class="col-md-12" id="holiday">
                               </div>
                            </div>
                        </div>
                        <!--homegarde-->
                        <div class="tab-pane fade" id="Housing" role="tabpanel" aria-labelledby="Housing-tab">
                            <div class="row">
                                <div class="col-md-12" id="homegarden">
                                </div>
                            </div>
                        </div>
                        <!--celebrity-->
                        <div class="tab-pane fade" id="Airplane" role="tabpanel" aria-labelledby="Airplane-tab">
                            <div class="row">
                                <div class="col-md-12" id="celebrity">
                                 </div>
                              
                            </div>
                        </div>
                        <!--vehicle-->
                        <div class="tab-pane fade" id="Car" role="tabpanel" aria-labelledby="Car-tab">
                            <div class="row">
                                <div class="col-md-12" id="vehicle">
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 m-md-auto">
                <div class="load__more__btn py-md-5">
                    <button type="submit" class="btn onsale-btn w-100" id="loadMore1" value="8">Load more</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
  
    <script>
  
         $.getJSON("./json/data.json?version="+Math.random(), function(json) {
                                            
                                            var result=json;
                                            const second = {...result};
                                            var nft_info=json.nft_info;
                                            var nft_like=json.nft_like;
                                            var user_info=json.nft_user;
                                            let now = Math.floor(Date.now() / 1000);
                                            var defaultDate = now - 1000 * 60 * 60 * 24 * 30;
                                            let wweb3 = new Web3(window.ethereum);
                                            wweb3.eth.getAccounts().then((account) => {
                                            let accounts=account[0];
                                       
                                            //  Filters-----------------------------------    
                                            const btn = document.querySelector('#Recently_added');
                                            const btn1 = document.querySelector('#CheapestPrice');
                                            const btn2 = document.querySelector('#Highest_Price');
                                            const btn3 = document.querySelector('#most_like');
                                            // const btn4 = document.querySelector('#BNBcoin');
                                            // const btn5 = document.querySelector('#WSBCcoin');
                                            // const btn6 = document.querySelector('#WBBWcoin');
                                            // const btn7 = document.querySelector('#EJCOcoin');
                                            // const btn8 = document.querySelector('#QBBWcoin');
                                            // const btn9 = document.querySelector('#BUSDcoin');
                                            // const btn10 = document.querySelector('#BETHcoin');
                                            // const btn11 = document.querySelector('#WSUMcoin');
                                            // const btn12 = document.querySelector('#WBTCcoin');
                                            let treedollarfess=Number(0);
                                            let percentage=<?php echo number_format($datatree['treeplant'],2);?>;
                                            
                                            
                                            for(let i=0;i<nft_info.length;i++)
                                            {
                                            treedollarfess=treedollarfess+parseInt(nft_info[i].Price_dollar);
                                            }
                                            
                                            document.getElementById("treeplantdollar").innerHTML="Buying and selling on WSUM benefit "+percentage+ " % ( $ "+((treedollarfess*percentage)/100).toFixed(2)+" ) to nonprofit tree plant organizations"
                                            
                                            function Recentlyadded() {
                                               
                                                    loadfunction(4,nft_info,nft_like);
                                                
                                                }
                                            function Cheapest() {
                                           
                                                             function GetSortOrder(prop) {    
                                                                            return function(a, b) {    
                                                                                if (a[prop] > b[prop]) {    
                                                                                    return 1;    
                                                                                } else if (a[prop] < b[prop]) {    
                                                                                    return -1;    
                                                                                }    
                                                                                return 0;    
                                                                            }    
                                                                        }    
                                                                            let nft_cheaptes=[];
                                                                        nft_info.sort(GetSortOrder("Price_dollar")); //Pass the attribute to be sorted on    
                                                                       
                                                                        for (var item in nft_info) {    
                                                                        
                                                                              nft_cheaptes.push(nft_info[item]);
                                                                        } 
                                                                        
                                                                        loadfunction(8,nft_cheaptes,nft_like);
                                                                            
                                                } 
                                            function highest() {
                                               
                                                   function GetSortOrder(prop) {    
                                                                            return function(a, b) {    
                                                                                if (a[prop] < b[prop]) {    
                                                                                    return 1;    
                                                                                } else if (a[prop] > b[prop]) {    
                                                                                    return -1;    
                                                                                }    
                                                                                return 0;    
                                                                            }    
                                                                        }    
                                                                            let nft_heigst=[];
                                                                        nft_info.sort(GetSortOrder("Price_dollar")); //Pass the attribute to be sorted on    
                                                                       
                                                                        for (var item in nft_info) {    
                                                                        
                                                                              nft_heigst.push(nft_info[item]);
                                                                        } 
                                                                        
                                                                        loadfunction(8,nft_heigst,nft_like);
                                                   
                                                }
                                            function mostlike() {
                                               
                                                   function GetSortOrder(prop) {    
                                                                            return function(a, b) {    
                                                                                if (a[prop] < b[prop]) {    
                                                                                    return 1;    
                                                                                } else if (a[prop] > b[prop]) {    
                                                                                    return -1;    
                                                                                }    
                                                                                return 0;    
                                                                            }    
                                                                        }    
                                                                            let most_like=[];
                                                                        nft_info.sort(GetSortOrder("NFT_likes")); //Pass the attribute to be sorted on    
                                                                       
                                                                        for (var item in nft_info) {    
                                                                              most_like.push(nft_info[item]);
                                                                        } 
                                                                        
                                                                        loadfunction(8,most_like,nft_like);
                                                   
                                                }
                                                
                                            btn.addEventListener('click',Recentlyadded);
                                            btn1.addEventListener('click',Cheapest);
                                            btn2.addEventListener('click',highest);
                                            btn3.addEventListener('click',mostlike);
                                            
                                        // search---------------------------------------------------
                                            
                                        const searchBar = document.getElementById('exampleInputEmail1');
                                                searchBar.addEventListener('keyup', (e) => {
                                                const searchString = e.target.value.toLowerCase();
                                            
                                                const filteredCharacters = nft_info.filter((nft_info) => {
                                                    return (
                                                        nft_info.NFT_name.toLowerCase().includes(searchString) || 
                                                        nft_info.NFT_id.toLowerCase().includes(searchString) ||
                                                        nft_info.NFT_owner.toLowerCase().includes(searchString)||
                                                        nft_info. NFT_payment.toLowerCase().includes(searchString)
                                                        
                                                    );
                                                });
                                                // console.log(filteredCharacters);
                                                loadfunction(12,filteredCharacters,nft_like);
                                            });
                                        //   loadfunction--------------------------------------- 
                                            function loadfunction(value,nft_info,nft_like){
                                                let All="";
                                                let Art ="";
                                                let Photograph="";
                                                let Agricultural="";
                                                let sport="";
                                                let crypto="";
                                                let assest="";
                                                let Ticket="";
                                                let lifestyle="";
                                                let holiday="";
                                                let homegarden="";
                                                let celebrity="";
                                                let vehicle="";
                                                let Sports="";
                                               
                                                for (let i=0; i<value; i++){ 
                                                    if(nft_info[i].NFT_resell=="on"){
                                                    
                                                All+= `<div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                     <div class="auction-top pb-3">
                                                         <div class="row m-0">
                                                            <div class="col p-0">
                                                                <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_owner}">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_creator}">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                             </div>
                                                              <div class="col-auto p-0">
                                                                 <div class="dropleft">
                                                                  <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                     <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                  </button>
                                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <div class="dropdown_h_toggle">
                                                                         <div class="dropdown-item">Share</div>
                                                                         <div class="dropdown_hv_menu">
                                                                             <ul class="list-unstyled d-flex m-0">
                                                                                 <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                 <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                 <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                            </ul>
                                                                         </div>
                                                                    </div> 
                                                                     <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                  </div>
                                                                 </div>
                                                                  
                                                             </div>
                                                         </div>
                                                      </div>
                                                         <div class="auction-img text-center">
                                                         <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                      </div>
                                                     <div class="auction-content">
                                                         <div class="auction-time">`;
                                                             if(nft_info[i].NFT_auction>0){ 
                                                            All+=`<h6 class="timer"><a><span id="time${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 
                                                             } else{
                                                            All+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                             }
                                                            
                                                          All+=`<div class="row m-0">
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id} </span>
                                                                    </div>  
                                                                </div>
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex">`;
                                                                    if(nft_info[i].NFT_auction>0){ 
                                                                      All+=`<div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>`; } 
                                                                      else {
                                                                      All+=`<div class="wsum_product_name text_nft_heading"><b>Price</b></div>`;
                                                                    }  
                                                                  All+=`<span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex my-2">
                                                                        <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                        <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                            let like_value=0;
                                                                            for(var z=0; z<nft_like.length; z++){
                                                                                if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                    like_value=1;
                                                                                }
                                                                            }
                                                                            if(like_value==1){
                                                                            
                                                                                All+=` <span  id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                            }else{
                                                                               
                                                                                All+=` <span class="heart_class" id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                            }
                                                                    All+=`</div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="right-nft-content-here text-center">`;
                                                                        if(nft_info[i].NFT_auction>0){ 
                                                                      All+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          if(nft_info[i].end_id=='1'){
                                                                              All+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               All+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                    }  
                                                                  All+=` </div>
                                                                </div>
                                                             </div>
                                                        </div>
                                                    </div>
                                              </div>
                                              `;
                                           
                                            
                                            if(nft_info[i].NFT_auction>0){
                                            let id =[];
                                            let auctiontime=[];
                                            let lid=[];
                                            id[i]='time'+nft_info[i].ID;
                                            lid[i] = 'bid'+nft_info[i].ID;
                                            auctiontime[i]=nft_info[i].NFT_auction_time;
                                            var x = setInterval(function() { 
                                            var dd= timerr(id[i], lid[i], auctiontime[i] );
                                          
                                                if (dd < 0) {
                                                    clearInterval(x);
                                                    document.getElementById(id[i]).innerHTML="expired";
                                                    document.getElementById(lid[i]).disabled=false;
                                                      }
                                                }, 1000);
                                                }
                                                 document.getElementById("all").innerHTML = All;
                                             }
                                        if(nft_info[i].NFT_type=="Collectibles and Art" && nft_info[i].NFT_resell=="on") {
                                                    
                                                  Art+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                  <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_owner}">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_creator}">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                 </div>
                                                                  <div class="col-auto p-0">
                                                                     <div class="dropleft">
                                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <div class="dropdown_h_toggle">
                                                                             <div class="dropdown-item">Share</div>
                                                                             <div class="dropdown_hv_menu">
                                                                                 <ul class="list-unstyled d-flex m-0">
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Art+=`<h6 class="timer"><a><span id="time1${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     
                                                                 } else{
                                                                Art+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 }
                                                                
                                                              Art+=` <div class="row m-0">
                                                                     <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex"> 
                                                                            <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}  </span>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                                Art+=`<div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>`;
                                                                     
                                                                                    } else{
                                                                                    Art+=` <div class="wsum_product_name text_nft_heading"><b>Price</b></div>`;
                                                                                 }
                                                                        Art+=`
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                       if(like_value==1){
                                                                           Art+=` <span  id="Art${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedArt${nft_info[i].NFT_id}","Art${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i>&nbsp; </span><span id="likedArt${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                           Art+=` <span class="heart_class" id="Art${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedArt${nft_info[i].NFT_id}","Art${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedArt${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                    Art+=`</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Art+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_1${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              if(nft_info[i].end_id=='1' ){
                                                                              Art+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               Art+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                    }  
                                                                      Art+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                let id1 =[];
                                                let auctiontime1=[];
                                                let lid1=[];
                                                id1[i]='time1'+nft_info[i].ID;
                                                lid1[i] = 'bid_1'+nft_info[i].ID;
                                                auctiontime1[i]=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                 
                                                var dd= timerr(id1[i], lid1[i], auctiontime1[i] );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id1[i]).innerHTML="expired";
                                                        document.getElementById(lid1[i]).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById("art").innerHTML = Art;
                                                
                                                 } 
                                                    if(nft_info[i].NFT_type=='Photography' && nft_info[i].NFT_resell=='on') {
                                                  Photograph+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                  <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_owner}">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_creator}">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                 </div>
                                                                  <div class="col-auto p-0">
                                                                     <div class="dropleft">
                                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <div class="dropdown_h_toggle">
                                                                             <div class="dropdown-item">Share</div>
                                                                             <div class="dropdown_hv_menu">
                                                                                 <ul class="list-unstyled d-flex m-0">
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                      
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Photograph+=`<h6 class="timer"><a><span id="time2${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     
                                                                 } else{
                                                                Photograph+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 }
                                                                
                                                              Photograph+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex"> 
                                                                            <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}  </span>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Photograph+=`<div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>`;
                                                                     
                                                                 } else{
                                                                Photograph+=` <div class="wsum_product_name text_nft_heading"><b>Price</b></div>`;
                                                                 }
                                                                
                                                              Photograph+=`<span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                        if(like_value==1){
                                                                            
                                                                            Photograph+=` <span  id="photo${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedphoto${nft_info[i].NFT_id}","photo${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedphoto${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                            Photograph+=` <span class="heart_class" id="photo${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedphoto${nft_info[i].NFT_id}","photo${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedphoto${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    Photograph+=`</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Photograph+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_2${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                if(nft_info[i].end_id=='1' ){
                                                                              Photograph+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               Photograph+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                          }  
                                                                      Photograph+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                let id2=[]; 
                                                let auctiontime2=[];
                                                let lid2=[];
                                                id2[i]='time2'+nft_info[i].ID;
                                                lid2[i] = 'bid_2'+nft_info[i].ID;
                                                auctiontime2[i]=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                var dd= timerr(id2[i], lid2[i], auctiontime2[i] );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id2[i]).innerHTML="expired";
                                                        document.getElementById(lid2[i]).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById('photography').innerHTML =Photograph;
                                                
                                                 }
                                                    if(nft_info[i].NFT_type=="Agricultural" && nft_info[i].NFT_resell=="on") {
                                                Agricultural+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                  <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_owner}">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title=" ${nft_info[i].NFT_creator}">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                 </div>
                                                                  <div class="col-auto p-0">
                                                                     <div class="dropleft">
                                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <div class="dropdown_h_toggle">
                                                                             <div class="dropdown-item">Share</div>
                                                                             <div class="dropdown_hv_menu">
                                                                                 <ul class="list-unstyled d-flex m-0">
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div> 
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Agricultural+=`<h6 class="timer"><a><span id="time3${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     
                                                                 } else{
                                                                Agricultural+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 }
                                                                
                                                              Agricultural+=` <div class="row m-0">
                                                              <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id} </span>
                                                                    </div>  
                                                                </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Agricultural+=` <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>`;
                                                                     
                                                                 } else{
                                                                Agricultural+=` <div class="wsum_product_name text_nft_heading"><b>Price</b></div>`;
                                                                 }
                                                                
                                                              Agricultural+=`<span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                        if(like_value==1){
                                                                            
                                                                            Agricultural+=` <span  id="Agri${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedAgri${nft_info[i].NFT_id}","Agri${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedAgri${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                            Agricultural+=` <span class="heart_class" id="Agri${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedAgri${nft_info[i].NFT_id}","Agri${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedAgri${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    Agricultural+=`</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Agricultural+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_3${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                if(nft_info[i].end_id=='1' ){
                                                                              Agricultural+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               Agricultural+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                          }  
                                                                      Agricultural+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                let id3=[];
                                                let lid3=[];
                                                let auciontime3=[];
                                                id3[i]='time3'+nft_info[i].ID;
                                                lid3[i] = 'bid_3'+nft_info[i].ID;
                                                auctiontime3[i]=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                var dd= timerr(id3[i], lid3[i], auctiontime3[i] );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id3[i]).innerHTML="expired";
                                                        document.getElementById(lid3[i]).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById("agriculture").innerHTML =Agricultural;
                                                
                                                 }
                                                    if(nft_info[i].NFT_type=="Sports" && nft_info[i].NFT_resell=="on") {
                                                Sports+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                  <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                 </div>
                                                                  <div class="col-auto p-0">
                                                                     <div class="dropleft">
                                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <div class="dropdown_h_toggle">
                                                                             <div class="dropdown-item">Share</div>
                                                                             <div class="dropdown_hv_menu">
                                                                                 <ul class="list-unstyled d-flex m-0">
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div> 
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Sports+=`<h6 class="timer"><a><span id="time4${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     
                                                                 } else{
                                                                Sports+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 }
                                                                
                                                              Sports+=` <div class="row m-0">
                                                              <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted"${nft_info[i].start_id}/${nft_info[i].end_id}</span>
                                                                    </div>  
                                                                </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Sports+=`<div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>`;
                                                                     
                                                                 } else{
                                                                Sports+=` <div class="wsum_product_name text_nft_heading"><b>Price</b></div>`;
                                                                 }
                                                                
                                                              Sports+=`
                                                                            
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                        if(like_value==1){
                                                                          Sports+=` <span id="Sports${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedSports${nft_info[i].NFT_id}","Sports${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedSports${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                          Sports+=` <span class="heart_class" id="Sports${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedSports${nft_info[i].NFT_id}","Sports${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedSports${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    Sports+=`</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Sports+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_4${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                if(nft_info[i].end_id=='1' ){
                                                                              Sports+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                              Sports+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                          }  
                                                                      Sports+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                let id4=[];
                                                let lid4 =[];
                                                let auctiontime4=[];
                                                id4[i]='time4'+nft_info[i].ID;
                                                lid4[i] = 'bid_4'+nft_info[i].ID;
                                                auctiontime4[i]=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                var dd= timerr(id4[i], lid4[i], auctiontime4[i] );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id4[i]).innerHTML="expired";
                                                        document.getElementById(lid4[i]).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById("sports").innerHTML =Sports;
                                                
                                                 }
                                                    if(nft_info[i].NFT_type=="Crypto" && nft_info[i].NFT_resell=="on") {
                                                crypto+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                  <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                 </div>
                                                                  <div class="col-auto p-0">
                                                                     <div class="dropleft">
                                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <div class="dropdown_h_toggle">
                                                                             <div class="dropdown-item">Share</div>
                                                                             <div class="dropdown_hv_menu">
                                                                                 <ul class="list-unstyled d-flex m-0">
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div> 
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                crypto+=`<h6 class="timer"><a><span id="time5${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     
                                                                 } else{
                                                                crypto+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 }
                                                                
                                                              crypto+=` <div class="row m-0">
                                                              <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}</span>
                                                                    </div>  
                                                                </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                       if(like_value==1){
                                                                           crypto+=` <span  id="crypto${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedcrypto${nft_info[i].NFT_id}","crypto${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedcrypto${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                           crypto+=` <span class="heart_class" id="crypto${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedcrypto${nft_info[i].NFT_id}","crypto${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedcrypto${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    crypto+=`</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          crypto+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_5${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                if(nft_info[i].end_id=='1' ){
                                                                              crypto+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               crypto+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                       }  
                                                                      crypto+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                let id5=[];
                                                let lid5=[];
                                                let auctiontime5=[];
                                                id5[i]='time5'+nft_info[i].ID;
                                                lid5[i] = 'bid_5'+nft_info[i].ID;
                                                auctiontime5[i]=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                var dd= timerr(id5[i], lid5[i], auctiontime5[i] );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id5[i]).innerHTML="expired";
                                                        document.getElementById(lid5[i]).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById("crypto").innerHTML =crypto;
                                                
                                                 }
                                                    if(nft_info[i].NFT_type=="Assets" && nft_info[i].NFT_resell=="on") {
                                                assest+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                  <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                 </div>
                                                                  <div class="col-auto p-0">
                                                                     <div class="dropleft">
                                                                      <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <div class="dropdown_h_toggle">
                                                                             <div class="dropdown-item">Share</div>
                                                                             <div class="dropdown_hv_menu">
                                                                                 <ul class="list-unstyled d-flex m-0">
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div> 
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                assest+=`<h6 class="timer"><a><span id="time6${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     
                                                                 } else{
                                                                assest+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                 }
                                                                
                                                              assest+=` <div class="row m-0">
                                                              <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}</span>
                                                                    </div>  
                                                                </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                        if(like_value==1){
                                                                            assest+=` <span  id="assest${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedassest${nft_info[i].NFT_id}","assest${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedassest${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                            assest+=` <span class="heart_class" id="assest${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedassest${nft_info[i].NFT_id}","assest${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedassest${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    assest+=`</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          assest+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_6${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                if(nft_info[i].end_id=='1'){
                                                                              assest+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               assest+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                          }  
                                                                      assest+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                let id6=[];
                                                let lid6=[];
                                                let auctiontime6=[];
                                                id6[i]='time6'+nft_info[i].ID;
                                                lid6[i] = 'bid_6'+nft_info[i].ID;
                                                auctiontime6[i]=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                var dd= timerr(id6[i], lid6[i], auctiontime6[i] );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id6[i]).innerHTML="expired";
                                                        document.getElementById(lid6[i]).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById("asset").innerHTML =assest;
                                                
                                                 }
                                                    if(nft_info[i].NFT_type=="Tickets" && nft_info[i].NFT_resell=="on") {
                                                    Ticket+=`
                                                          <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                             <div class="auction-top pb-3">
                                                                 <div class="row m-0">
                                                                    <div class="col p-0">
                                                                      <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                     </div>
                                                                      <div class="col-auto p-0">
                                                                         <div class="dropleft">
                                                                          <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <div class="dropdown_h_toggle">
                                                                                 <div class="dropdown-item">Share</div>
                                                                                 <div class="dropdown_hv_menu">
                                                                                     <ul class="list-unstyled d-flex m-0">
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div> 
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    Ticket+=`<h6 class="timer"><a><span id="time7${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                         
                                                                     } else{
                                                                    Ticket+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     }
                                                                    
                                                                  Ticket+=` <div class="row m-0">
                                                                  <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id} </span>
                                                                    </div>  
                                                                </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                      if(like_value==1){
                                                                          Ticket+=` <span id="Ticket${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedTicket${nft_info[i].NFT_id}","Ticket${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedTicket${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                          Ticket+=` <span class="heart_class" id="Ticket${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedTicket${nft_info[i].NFT_id}","Ticket${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedTicket${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    Ticket+=`</div>
                                                                    </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              Ticket+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_7${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                             if(nft_info[i].end_id=='1' ){
                                                                              Ticket+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                              Ticket+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                                  
                                                                              }  
                                                                          Ticket+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    let id7=[];
                                                    let lid7=[];
                                                    let auctiontime7=[];
                                                    id7[i]='time7'+nft_info[i].ID;
                                                    lid7[i] = 'bid_7'+nft_info[i].ID;
                                                    auctiontime7[i]=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                        var dd= timerr(id7[i], lid7[i], auctiontime7[i] );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id7[i]).innerHTML="expired";
                                                            document.getElementById(lid7[i]).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("ticket").innerHTML =Ticket;
                                                    
                                                     }
                                                    if(nft_info[i].NFT_type=="Lifestyle" && nft_info[i].NFT_resell=="on") {
                                                    lifestyle+=`
                                                          <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                             <div class="auction-top pb-3">
                                                                 <div class="row m-0">
                                                                    <div class="col p-0">
                                                                      <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                     </div>
                                                                      <div class="col-auto p-0">
                                                                         <div class="dropleft">
                                                                          <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <div class="dropdown_h_toggle">
                                                                                 <div class="dropdown-item">Share</div>
                                                                                 <div class="dropdown_hv_menu">
                                                                                     <ul class="list-unstyled d-flex m-0">
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div> 
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    lifestyle+=`<h6 class="timer"><a><span id="time8${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                         
                                                                     } else{
                                                                    lifestyle+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     }
                                                                    
                                                                  lifestyle+=` <div class="row m-0">
                                                                  <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id} </span>
                                                                    </div>  
                                                                </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading"><b> Minimum Bid</b></div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                        if(like_value==1){
                                                                            lifestyle+=` <span  id="lifestyle${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedlifestyle${nft_info[i].NFT_id}","lifestyle${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedlifestyle${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                            lifestyle+=` <span class="heart_class" id="lifestyle${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedlifestyle${nft_info[i].NFT_id}","lifestyle${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedlifestyle${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                       
                                                                    lifestyle+=`</div>
                                                                    </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              lifestyle+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_8${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                  
                                                                               if(nft_info[i].end_id=='1' ){
                                                                              lifestyle+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               lifestyle+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                             }  
                                                                          lifestyle+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    let id8=[];
                                                    let lid8=[];
                                                    let auctiontime8=[];
                                                    id8[i]='time8'+nft_info[i].ID;
                                                    lid8[i] = 'bid_8'+nft_info[i].ID;
                                                    auctiontime8[i]=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                    var dd= timerr(id8[i], lid8[i], auctiontime8[i] );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id8[i]).innerHTML="expired";
                                                            document.getElementById(lid8[i]).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("lifestyle").innerHTML =lifestyle;
                                                    
                                                     }
                                                    if(nft_info[i].NFT_type=="Holiday" && nft_info[i].NFT_resell=="on") {
                                                    holiday+=`
                                                          <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                             <div class="auction-top pb-3">
                                                                 <div class="row m-0">
                                                                    <div class="col p-0">
                                                                      <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                     </div>
                                                                      <div class="col-auto p-0">
                                                                         <div class="dropleft">
                                                                          <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <div class="dropdown_h_toggle">
                                                                                 <div class="dropdown-item">Share</div>
                                                                                 <div class="dropdown_hv_menu">
                                                                                     <ul class="list-unstyled d-flex m-0">
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div> 
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    holiday+=`<h6 class="timer"><a><span id="time9${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                         
                                                                     } else{
                                                                    holiday+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     }
                                                                    
                                                                  holiday+=` <div class="row m-0">
                                                                  <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}  </span>
                                                                    </div>  
                                                                </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                         if(like_value==1){
                                                                           holiday+=` <span  id="holiday${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedholiday${nft_info[i].NFT_id}","holiday${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedholiday${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                            holiday+=` <span class="heart_class" id="holiday${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedholiday${nft_info[i].NFT_id}","holiday${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedholiday${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    holiday+=`</div>
                                                                    </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              holiday+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_9${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                    if(nft_info[i].end_id=='1' ){
                                                                              holiday+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               holiday+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                             }  
                                                                          holiday+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    let id9=[];
                                                    let lid9=[];
                                                    let auctiontime9=[];
                                                    id9[i]='time9'+nft_info[i].ID;
                                                    lid9[i] = 'bid_9'+nft_info[i].ID;
                                                    auctiontime9[i]=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                    var dd= timerr(id9[i], lid9[i], auctiontime9[i] );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id9[i]).innerHTML="expired";
                                                            document.getElementById(lid9[i]).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("holiday").innerHTML =holiday;
                                                    
                                                     }
                                                    if(nft_info[i].NFT_type=="Home & Garden" && nft_info[i].NFT_resell=="on") {
                                                    homegarden+=`
                                                          <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                             <div class="auction-top pb-3">
                                                                 <div class="row m-0">
                                                                    <div class="col p-0">
                                                                      <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                     </div>
                                                                      <div class="col-auto p-0">
                                                                         <div class="dropleft">
                                                                          <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <div class="dropdown_h_toggle">
                                                                                 <div class="dropdown-item">Share</div>
                                                                                 <div class="dropdown_hv_menu">
                                                                                     <ul class="list-unstyled d-flex m-0">
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div> 
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    homegarden+=`<h6 class="timer"><a><span id="time10${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                         
                                                                     } else{
                                                                    homegarden+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     }
                                                                    
                                                                  homegarden+=` <div class="row m-0">
                                                                  <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}</span>
                                                                    </div>  
                                                                </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                        if(like_value==1){
                                                                            homegarden+=` <span  id="homegarden${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedhomegarden${nft_info[i].NFT_id}","holiday${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedhomegarden${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                            homegarden+=` <span class="heart_class" id="homegarden${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedhomegarden${nft_info[i].NFT_id}","holiday${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedhomegarden${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                    homegarden+=`</div>
                                                                    </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              homegarden+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_10${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                    if(nft_info[i].end_id=='1' ){
                                                                              homegarden+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               homegarden+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                              }  
                                                                          homegarden+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    let id10=[];
                                                    let lid10=[];
                                                    let auctiontime10=[];
                                                    id10[i]='time10'+nft_info[i].ID;
                                                    lid10[i] = 'bid_10'+nft_info[i].ID;
                                                    auctiontime10[i]=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                    var dd= timerr(id10[i], lid10[i], auctiontime10[i] );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id10[i]).innerHTML="expired";
                                                            document.getElementById(lid10[i]).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("homegarden").innerHTML =homegarden;
                                                    
                                                     }
                                                    if(nft_info[i].NFT_type=="Celebrities" && nft_info[i].NFT_resell=="on") {
                                                    celebrity+=`
                                                          <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                             <div class="auction-top pb-3">
                                                                 <div class="row m-0">
                                                                    <div class="col p-0">
                                                                      <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                     </div>
                                                                      <div class="col-auto p-0">
                                                                         <div class="dropleft">
                                                                          <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <div class="dropdown_h_toggle">
                                                                                 <div class="dropdown-item">Share</div>
                                                                                 <div class="dropdown_hv_menu">
                                                                                     <ul class="list-unstyled d-flex m-0">
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                          
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    celebrity+=`<h6 class="timer"><a><span id="time11${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                         
                                                                     } else{
                                                                    celebrity+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     }
                                                                    
                                                                  celebrity+=` <div class="row m-0">
                                                                  <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}</span>
                                                                    </div>  
                                                                </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                       if(like_value==1){
                                                                           celebrity+=` <span id="celebrity${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedcelebrity${nft_info[i].NFT_id}","celebrity${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedcelebrity${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                           celebrity+=` <span class="heart_class" id="celebrity${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedcelebrity${nft_info[i].NFT_id}","celebrity${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedcelebrity${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                       
                                                                    celebrity+=`</div>
                                                                    </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              celebrity+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_11${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                    if(nft_info[i].end_id=='1' ){
                                                                              celebrity+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                              celebrity+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                            }  
                                                                          celebrity+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    let id11=[];
                                                    let lid11=[];
                                                    let auctiontime11=[];
                                                    id11[i]='time11'+nft_info[i].ID;
                                                    lid11[i] = 'bid_11'+nft_info[i].ID;
                                                    auctiontime11[i]=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                    var dd= timerr(id11[i], lid11[i], auctiontime11[i] );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id11[i]).innerHTML="expired";
                                                            document.getElementById(lid11[i]).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("celebrity").innerHTML =celebrity;
                                                    
                                                     }
                                                    if(nft_info[i].NFT_type=="Vehicles" && nft_info[i].NFT_resell=="on") {
                                                    vehicle+=`
                                                          <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                             <div class="auction-top pb-3">
                                                                 <div class="row m-0">
                                                                    <div class="col p-0">
                                                                      <div class="inner_img1">
                                                                    <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection: WSUM">
                                                                        <a href="./collection.php?address=${nft_info[i].NFT_owner_address}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_owner_image}" class="second collec_img__" >
                                                                        </a>
                                                                       <a href="./collection.php?address=${nft_info[i].NFT_creator_add}" target="_blank" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                                            <img src="${nft_info[i].Nft_creator_image}" class="thired collec_img__" >
                                                                        </a>
                                                                </div>
                                                                     </div>
                                                                      <div class="col-auto p-0">
                                                                         <div class="dropleft">
                                                                          <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <div class="dropdown_h_toggle">
                                                                                 <div class="dropdown-item">Share</div>
                                                                                 <div class="dropdown_hv_menu">
                                                                                     <ul class="list-unstyled d-flex m-0">
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={http://wsum.art/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                          
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    vehicle+=`<h6 class="timer"><a><span id="time12${nft_info[i].ID}">00h 00m 00s</span> left <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                         
                                                                     } else{
                                                                    vehicle+=` <h6 class="timer"><a>buy is going on <img src="https://c.tenor.com/uTJev41fOAwAAAAC/ates.gif" style="width:21px!important"></a></h6>`;
                                                                     }
                                                                    
                                                                  vehicle+=` <div class="row m-0">
                                                                  <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex"> 
                                                                        <h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5> <span class="text-muted">${nft_info[i].start_id}/${nft_info[i].end_id}</span>
                                                                    </div>  
                                                                </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading"><b>Minimum Bid</b></div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="plant_tree_ text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;`;
                                                                        let like_value=0;
                                                                        for(var z=0; z<nft_like.length; z++){
                                                                            if(nft_like[z].NFT_id== nft_info[i].NFT_id && nft_like[z].User_address==accounts){
                                                                                like_value=1;
                                                                            }
                                                                        }
                                                                         if(like_value==1){
                                                                           vehicle+=` <span id="vehicle${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedvehicle${nft_info[i].NFT_id}","vehicle${nft_info[i].NFT_id}")'><i class="fas fa-heart heart-black" aria-hidden="true"></i> &nbsp; </span><span id="likedvehicle${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }else{
                                                                           vehicle+=` <span class="heart_class" id="vehicle${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","likedvehicle${nft_info[i].NFT_id}","vehicle${nft_info[i].NFT_id}")'><i class="fal fa-heart heart-black" aria-hidden="true"></i>  &nbsp; </span><span id="likedvehicle${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                        }
                                                                       
                                                                       
                                                                       
                                                                    vehicle+=`</div>
                                                                    </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              vehicle+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_12${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                                    if(nft_info[i].end_id=='1' ){
                                                                              vehicle+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }else{
                                                                               vehicle+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" ><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `; 
                                                                          }
                                                                              }  
                                                                          vehicle+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    let id12=[];
                                                    let lid12=[];
                                                    let auctiontime12=[];
                                                    id12[i]='time12'+nft_info[i].ID;
                                                    lid12[i] = 'bid_12'+nft_info[i].ID;
                                                    auctiontime12[i]=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                    var dd= timerr(id12[i], lid12[i], auctiontime12[i] );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id12[i]).innerHTML="expired";
                                                            document.getElementById(lid12[i]).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("vehicle").innerHTML =vehicle;
                                                    
                                                     }
                                                }
                                            }
                                            loadfunction(12,nft_info,nft_like);
                                              let oldd=8;
                                                $("#loadMore1").on("click",function(){
                                                    let value =Number($('#loadMore1').val());
                                                    oldd=oldd+value;
                                                    loadfunction(oldd,nft_info,nft_like);
                                                    })
         }).catch(console.log);
                                             });
    
                                                            

    </script>
    <script>
            function liked(id ,image,name,like,heart){
                            let wweb3 = new Web3(window.ethereum);
                            wweb3.eth.getAccounts().then((account) => { 
                            
                            var formdata = new FormData();
                            formdata.append("address", account[0]);
                            formdata.append("NFT_image",image);
                            formdata.append("NFT_name",name);
                            formdata.append("NFT_id",id);
                         
                            
                            var requestOptions = {
                                method: "POST",
                                body: formdata,
                                redirect: "follow",
                                };
                    
                            fetch("./like.php", requestOptions)
                                .then((response) => response.json())
                                .then((result) => {
                                    if(result[0]=="true"){
                                    wweb3.eth.personal.sign("You liked this NFT"+id, account[0], "test password!")
                                                            .then((res)=>{
                                                                $("#"+heart).html('<i class="fas fa-heart" aria-hidden="true"></i>');
                                                                $("#"+heart).removeClass("liked");
                                                                document.getElementById(like).innerHTML=result[1];
                                                           
                                                            }).catch(console.log);
                                     }
                                    else{
                                         
                                          $("#"+heart).html('<i class="fal fa-heart" aria-hidden="true"></i>');
                                          $("#"+heart).addClass("liked");
                                          document.getElementById(like).innerHTML=result[1];
                                  }
                                    
                                  
                                   
                                  })
                            }).catch(console.log);
                     
                                        // if($("#heart").hasClass("liked")){
                                        //   $("#heart").html('<i class="fal fa-heart" aria-hidden="true"></i>');
                                        //   $("#heart").removeClass("liked");
                                        // }else{
                                        //   $("#heart").html('<i class="fas fa-heart" aria-hidden="true"></i>');
                                        //   $("#heart").addClass("liked");
                                        // }
     
                      }
</script>

<script>
    setInterval(function(){ console.clear(); }, 3000);
    
</script>
<?php 
include "footer.php";
?>