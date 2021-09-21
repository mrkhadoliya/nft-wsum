<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "header.php";
?>
<?php
include "config.php";
?>
 
    <!--<link rel="stylesheet" href="assets1/css/carousel.css">-->
    <!--<link rel="stylesheet" href="assets1/css/owl.carousel.css">-->
 
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script>
            function timerr(id, lid, etime){
                //  console.log(id);
                
            var countDownDate = new Date(etime*1000).getTime();
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 *60 *60 * 24));
            var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60 * 60));
            var minutes = Math.floor((distance % (1000*60*60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById(id).innerHTML = days+" d "+hours+" h " + minutes+ " m "+ seconds+ "s";
            return distance;
                    	
                        }
</script>
<section class="index_page">
    <div class="latest-nft pt-5">
        <div class="container">
            <div class="row">
               
                <!--$query1 = "SELECT NFT_user.verify ,NFT_info.ID, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address group by NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 1";-->
                <!--              $dataa = mysqli_query($link,$query1);-->
                <!--                while($result= mysqli_fetch_assoc($dataa))-->
                <!--                  { -->
                <!--                       if($result['verify']==1){-->
                 
                <div class="col-md-6 col-12">
                    <div class="main_landuing_img__">
                    <a class="img_gradient_clr" href="./collection.php?address=<?php echo $result['NFT_owner_address'];?>">
                        <img src="https://ramlogics.com/WSUMART/uploads/shutterstock_1340815730.png" class="img-fluid" alt="" style="border-radius: 10px">
                        <!--<span><?php echo $result['NFT_owner'];?></span>-->
                    </a>
                    </div>
                </div> 
               
               
                <div class="col-md-6 col-12">
                    <div class="row">
                        <!--// -->
                        <!--//       $queryy ="SELECT NFT_user.verify ,NFT_info.ID, NFT_info.NFT_owner_address, NFT_info.NFT_image,NFT_info.NFT_owner FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address group by NFT_user.verify ,NFT_info.NFT_owner_address, NFT_info.NFT_image ,NFT_info.NFT_owner ,NFT_info.ID ORDER BY ID DESC LIMIT 2,4";-->
                        <!--//       $data2 = mysqli_query($link,$queryy);-->
                        <!--//         while($myresul= mysqli_fetch_assoc($data2))-->
                        <!--//           { -->
                        <!--//               if($myresul['verify']==1){-->
                        <!--//      -->
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresul['NFT_owner_address'];?>">
                                <img src="https://ramlogics.com/WSUMART/uploads/shutterstock_1741385462.png" class="img-fluid" alt="" style="border-radius: 10px">
                                 <!--<span><?php echo $myresul['NFT_owner'];?></span>-->
                                </a>
                            </div>
                        </div> 
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresul['NFT_owner_address'];?>">
                                <img src="https://ramlogics.com/WSUMART/uploads/shutterstock_441401113.png" class="img-fluid" alt="" style="border-radius: 10px">
                                 <!--<span><?php echo $myresul['NFT_owner'];?></span>-->
                                </a>
                            </div>
                        </div> 
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresul['NFT_owner_address'];?>">
                                <img src="https://ramlogics.com/WSUMART/uploads/shutterstock_67436353.png" class="img-fluid" alt="" style="border-radius: 10px">
                                 <!--<span><?php echo $myresul['NFT_owner'];?></span>-->
                                </a>
                            </div>
                        </div> 
                        <div class="col-md-6 col-12">
                            <div class="main_lan_duing w-100">
                             <a class="img_gradient_clr mb-3" href="./collection.php?address=<?php echo $myresul['NFT_owner_address'];?>">
                                <img src="https://ramlogics.com/WSUMART/uploads/shutterstock_1340815730.png" class="img-fluid" alt="" style="border-radius: 10px">
                                 <!--<span><?php echo $myresul['NFT_owner'];?></span>-->
                                </a>
                            </div>
                        </div> 
                        <!--<div class="col-md-6 col-12">-->
                        <!--    <div class="main_landuing_img">-->
                        <!--        <img src="https://ramlogics.com/WSUMART/uploads/alternative%20concept%20nft%20designs%2014.jpg" class="img-fluid border" alt="">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6 col-12">-->
                        <!--    <div class="main_landuing_img pt-3">-->
                        <!--        <img src="https://ramlogics.com/WSUMART/uploads/alternative%20concept%20nft%20designs%2014.jpg" class="img-fluid border" alt="">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6 col-12">-->
                        <!--    <div class="main_landuing_img pt-3">-->
                        <!--        <img src="https://ramlogics.com/WSUMART/uploads/alternative%20concept%20nft%20designs%2014.jpg" class="img-fluid border" alt="">-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
    <div class="work-is-good">
        <div class="container">
            <div class="row">
                 
                <div class="col-md-7 offset-md-1">
                    <div class="common-heading set-banner-head py-5">
                        <div class="heading-section text-center"><h2>Why our work is good for everyone involved</h2></div>
                        <div class="content-here text-center">
                            <p>
                                Investing in top-quality Nft Art material in global demand to earn money while not harming man and nature – is that even possible? We are convinced there is no other way long-term. Therefore we made
                                sustainability our main objective and made it the foundation of the NFT business model. The result: a real win-win situation.
                            </p>
                   
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                    <div class="wsum-dog-imageset py-5 text-center">
                        <img src="assets/img/3rdWSUM.png" class="w-75" />
                    </div>
                </div>
                
            
           
            </div>
            
        </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <!--<div class="common-heading d-flex">-->
                        <!--<div class="heading-section"><h2>Top <span class="text-color">Buyers <i class="fa fa-chevron-down"></i></span></h2></div>-->
                        <!--<div class="heading-section ml-4">-->
                           
                        <!--    <div class="form-group">-->
                        <!--          <span>Top</span> -->
                        <!--         <select class="form-control" id="exampleFormControlSelect1">-->
                        <!--          <option>buyers</option>-->
                        <!--          <option>seller</option>-->
                        <!--         </select>-->
                        <!--      </div>-->
                        <!--</div>-->
                        <!--<div class="heading-section ml-4">-->
                        <!--    <div class="form-group"> -->
                        <!--        <select class="form-control" id="exampleFormControlSelect1">-->
                        <!--             <span>in</span> -->
                        <!--          <option value="1" >1 day</option>-->
                        <!--          <option value="7" >7 days </option>-->
                        <!--          <option value="30" >30 days</option>-->
                        <!--         </select>-->
                        <!--      </div>-->
                        <!--</div>-->
                       <!--</div>-->
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
                               $query="SELECT NFT_user.verify, NFT_user.Useraddress , NFT_buy.Username, sum(NFT_buy.value), NFT_buy.image FROM NFT_buy INNER JOIN NFT_user ON NFT_user.Useraddress = NFT_buy.Address WHERE time=CURDATE() group by NFT_buy.Username, NFT_buy.image, NFT_user.verify, NFT_user.Useraddress Order by sum(NFT_buy.value)" ;
                               $data = mysqli_query($link,$query);
                              
                              while($resul=mysqli_fetch_assoc($data))
                                {
                                    if($resul['verify']==1){
                                        
                               ?>
                               <div class="buyers mt-4" >
                                <div class="row d-flex justify-content-between" style="align-items:center">
                                    <!--<div class="w-100" style="width: 10%;"><span class="pt-3 d-block"></span></div>-->
                                    <div class="col-3">
                                        <div class="buyer-img d-flex"><img src="./<?php echo $resul['image'];?>" height="60" height="60" alt=""/> </div>
                                    </div>
                                    <div class="col-9 d-flex">
                                    <a href="./collection.php?address=<?php echo $resul['Useraddress'];?>" target="_blank"> <h6><?php echo $resul['Username']; ?> <span class="badge_icon" id="sign"><i class="fas fa-badge-check" style="color:#28a5da"></i></span></h6></a>
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
                    // console.log(buy_sell);
                    // console.log(value);
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
                          console.log(result);
                            let myhtml = "";
                            for (i=0; i<result.length; i++){
                            if(result[i].verify==1){
                            myhtml+= ` <div class="buyers mt-4">
                                            <div class="row d-flex justify-content-between align-items-center"> 
                                                <div class="col-3">
                                                    <div class="buyer-img"><img src="${result[i].image}" height="60" height="60" alt=""/> </div>
                                                </div>
                                                <div class="col-9">
                                                   <div class="d-flex">
                                                         <a href="./collection.php?address=${result[i].Useraddress}" target="_blank"><h6>${result[i].Username}<span class="badge_icon" id="sign"><i class="fas fa-badge-check" style="color:#28a5da"></i></span></h6></a>
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
        <!--<div class="container">-->
        <!--    <div class="row">-->
        <!--        <div class="col-md-2"></div>-->
        <!--        <div class="col-md-6">-->
        <!--            <div class="common-heading set-banner-head">-->
        <!--                <div class="heading-section text-center"><h2 class="w-100">Let’s Get Planting</h2></div>-->
        <!--                <div class="content-here text-center">-->
        <!--                    <p>-->
        <!--                        Your purchase has a direct impact on the earth and lives of the people who need it most. By helping us plant trees, you give families the ability to transition from unsustainable farming techniques to a-->
        <!--                        flourishing Forest Garden system. Your donation not only helps the environment, but it also empowers farmers to end poverty for their families.-->
        <!--                    </p>-->
        <!--                    <p>Trees & Blockchain. Our sustainable solution for a greener world.</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="col-md-2">-->
        <!--            <div class="wsum-dog-imageset">-->
        <!--                <img src="assets/img/space-dog (1).png" />-->
        <!--            </div>-->
        <!--        </div>-->

        <!--        <div class="col-md-2"></div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="container">
            <div class="row"> 
                <div class="col-md-7 offset-md-1">
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
    <div class="live-auctions py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common-heading pb-4">
                        <!--<div class="heading-section"><h2>Live Auctions <img src="assets/img/fire.png" height="30px" style="width:30px!important"></h2></div>-->
                        <div class="heading-section"><h2>Live Auctions</h2></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="live-carousal-here">
                        <div class="owl-carousel owl-theme">
                            <?php
                              $Time1 = time();
                            //   $query = "SELECT * FROM `NFT_info` WHERE  $Time1 < NFT_auction_time AND NFT_resell='on' ORDER BY ID DESC" ;
                            $query="SELECT NFT_info.block ,NFT_info.NFT_owner_address,NFT_info.NFT_creator_add,NFT_info.Nft_owner_image,NFT_info.Nft_creator_image,NFT_info.NFT_creator,NFT_info.NFT_owner,NFT_user.verify ,NFT_info.ID, NFT_info.NFT_likes,NFT_info.NFT_id , NFT_info.NFT_name ,NFT_info.NFT_discription , NFT_info.NFT_image , NFT_info.NFT_price,NFT_info.NFT_payment, NFT_info.NFT_treeplant,NFT_info.NFT_auction_time FROM `NFT_info` INNER JOIN NFT_user On NFT_user.Useraddress=NFT_info.NFT_owner_address WHERE $Time1< NFT_info.NFT_auction_time AND NFT_info.NFT_resell='on' AND NFT_info.block=0 group by NFT_user.verify ,NFT_info.ID, NFT_info.NFT_id ,NFT_info.NFT_name,NFT_info.block , NFT_info.NFT_discription , NFT_info.NFT_image , NFT_info.NFT_price,NFT_info.NFT_payment, NFT_info.NFT_treeplant,NFT_info.NFT_auction_time,NFT_info.NFT_likes ORDER BY ID DESC";
                              
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
                                                        <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection:WSUM">
                                                      <a href="./collection.php?address=<?php echo $mydata1['NFT_owner_address'];?>" target="_blank"> <img src="<?php echo $mydata1['Nft_owner_image'];?>" class="second collec_img__" data-toggle="tooltip" data-placement="top" title="Owner:<?php echo $mydata1['NFT_owner']?>"></a>
                                                       <a href="./collection.php?address=<?php echo $mydata1['NFT_creator_add'];?>" target="_blank"> <img src="<?php echo $mydata1['Nft_creator_image'];?>" class="thired collec_img__" data-toggle="tooltip" data-placement="top" title="Creator:<?php echo $mydata1['NFT_creator']?>"></a>
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $mydata1['NFT_name'].", ".$mydata1['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&p[title]=<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>}&title={<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                         <input type="hidden" id="nftid" name="NFT[]" value="<?php echo $mydata1['NFT_id']?>">
                                                         <a href="report.php?id=<?php echo $mydata1['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
                                                      </div>
                                                    </div>
                                                    <style> 
                                                        .dropdown_h_toggle .dropdown_hv_menu {
                                                            position: absolute;
                                                            transition: .5s;
                                                            transform: scale(1) translateX(109px);
                                                            opacity: 0;
                                                            background: #4e9d66;
                                                            border-radius: 5px;
                                                            top: 5px;
                                                        }
                                                        .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                            transform: scale(1) translateX(10px);
                                                            opacity: 1; 
                                                        }
                                                        .dropdown_hv_menu ul li i{
                                                            color:#fff;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="auction-img text-center">
                                          <img class="w-100" src="./<?php echo $mydata1['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        
                                        <div class="auction-content">
                                            <div class="auction-time">
                                               <h6 class="timer" ><a href="#"><span id="clock<?php echo $mydata1['ID'];?>">00h 00m 00s</span>  left <img src="assets/img/fire.png" height="14px" style="width:15px!important"></a> </h6>
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name left-nft-content d-flex">
                                                                <h5 class="text_nft_heading"><?php echo $mydata1['NFT_name']?></h5> <span class="text-muted">1/1</span>
                                                            </div> 
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
                                                            <div class="text-muted d-flex"><?php echo $mydata1['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $mydata1['NFT_id'];?>" onclick='liked("<?php echo $mydata1['NFT_id'];?>","<?php echo $mydata1['NFT_image']?>","<?php echo $mydata1['NFT_name']?>","like<?php echo $mydata1['NFT_id'];?>","heart<?php echo $mydata1['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="like<?php echo $mydata1['NFT_id'];?>" ><?php echo $mydata1['NFT_likes'];?> </span></div>
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
                                        var x = setInterval(function() { 
                                        var id='clock<?php echo $mydata1['ID'];?>';
                                        var lid = 'mint2<?php echo $mydata1['ID'];?>';
                                        var dd= timerr('clock<?php echo $mydata1['ID'];?>', 'mint2<?php echo $mydata1['ID'];?>', '<?php echo $mydata1["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                            }
                                        }, 1000);
                                    </script>
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
    $( document ).ready(function() {
     let wweb3 = new Web3(window.ethereum);
     wweb3.eth.getAccounts().then((account) => { console.log(account[0])
         
        
     }).catch(console.log);
     
});
</script>

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
            <!--<div class="row">-->
                <!--<div class="inner_img1">-->
                <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                <!--</div>-->
            <div class="row" style="overflow: auto;">
                <div class="col-md-12">
                    <div class="common-heading pb-4">
                        <!--<div class="heading-section"><h2>Hot bids <img src="assets/img/fire.png" height="30px" style="width:30px!important"></h2></div>-->
                        <div class="heading-section"><h2>Hot bids</h2></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="live-carousal-here">
                        <div class="owl-carousel owl-theme">
                    <?php
                      $currentTimeinSeconds = time();
                      $query = "SELECT * FROM `NFT_info` WHERE  $currentTimeinSeconds<NFT_auction_time AND NFT_resell='on' AND block=0 ORDER BY ID DESC " ;
                      $data = mysqli_query($link,$query);
                        while($mydata= mysqli_fetch_assoc($data))
                        { ?>
                            <div class="item">
                              <div class="single-auction">
                                  <div class="auction-top">
                                        <div class="row m-0">
                                             <div class="col p-0">
                                                    <div class="inner_img1">
                                                        <img src="assets/img/fevicon.png" class="collec_img__" data-toggle="tooltip" data-placement="top" title="collection:WSUM">
                                                      <a href="./collection.php?address=<?php echo $mydata['NFT_owner_address'];?>" target="_blank">  <img src="<?php echo $mydata['Nft_owner_image']?>" class="second collec_img__" data-toggle="tooltip" data-placement="top" title="Owner:<?php echo $mydata['NFT_owner']?>"></a>
                                                       <a href="./collection.php?address=<?php echo $mydata['NFT_creator_add'];?>" target="_blank">  <img src="<?php echo $mydata['Nft_creator_image']?>" class="thired collec_img__" data-toggle="tooltip" data-placement="top" title="Creator:<?php echo $mydata['NFT_creator']?>"></a>
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $mydata['NFT_name'].",  ".$mydata['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata['NFT_id']?>&p[title]=<?php echo $mydata['NFT_name'].",  ".$mydata['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata['NFT_id']?>}&title={<?php echo $mydata['NFT_name'].",  ".$mydata['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                         <a href="report.php?id=<?php echo $mydata['NFT_id']?>" class="dropdown-item" target="blank">Report</a>
                                                       </div>
                                                    </div>
                                                    <style> 
                                                        .dropdown_h_toggle .dropdown_hv_menu {
                                                            position: absolute;
                                                            transition: .5s;
                                                            transform: scale(1) translateX(109px);
                                                            opacity: 0;
                                                            background: #4e9d66;
                                                            border-radius: 5px;
                                                            top: 5px;
                                                        }
                                                        .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                            transform: scale(1) translateX(10px);
                                                            opacity: 1; 
                                                        }
                                                        .dropdown_hv_menu ul li i{
                                                            color:#fff;
                                                        }
                                                    </style>
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
                                                <span id="clock1<?php echo $mydata['ID'];?>">00h 00m 00s</span>  left <img src="assets/img/fire.png" height="14px" style="width:15px!important"></a>
                                            </h6>
                                            
                                            <div class="row m-0">
                                                <div class="col-12 p-0">
                                                    <div class="left-nft-content d-flex">
                                                        <h5 class="min_bids text_nft_heading"><?php echo $mydata['NFT_name']?></h5> <span class="text-muted">1/1</span>
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
                                                            <div class="text-muted d-flex"><?php echo $mydata['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $mydata['NFT_id'];?>" onclick='liked("<?php echo $mydata['NFT_id'];?>","<?php echo $mydata['NFT_image']?>","<?php echo $mydata['NFT_name']?>","liked<?php echo $mydata['NFT_id'];?>","heart<?php echo $mydata['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="liked<?php echo $mydata['NFT_id'];?>"><?php echo $mydata['NFT_likes'];?></span></div>
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
                                var x = setInterval(function() { 
                                var id='clock1<?php echo $mydata['ID'];?>';
                                var lid = 'mint<?php echo $mydata['ID'];?>';
                                var dd= timerr('clock1<?php echo $mydata['ID'];?>', 'mint<?php echo $mydata['ID'];?>', '<?php echo $mydata["NFT_auction_time"];?>');
                                    if (dd < 0) {
                                        clearInterval(x);
                                        document.getElementById(id).innerHTML="expired";
                                        document.getElementById(lid).disabled=false;
                                    }
                                }, 1000);
                            </script>
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
                            <div class="dropdown">
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
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
             <div class="col-md-12">
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
                <div class="col-md-12">
                <div class="load__more__btn py-md-5">
                    <button type="submit" class="btn onsale-btn w-100" id="loadMore1" value="8">Load more</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
  
    <script>
  
         $.getJSON("./json/data.json", function(json) {
                                            
              
                                            
                                            var result=json;
                                            const second = {...result};
                                            console.log(second);
                                            var nft_info=json.nft_info;
                                            var user_info=json.nft_user;
                                            let now = Math.floor(Date.now() / 1000);
                                            var defaultDate = now - 1000 * 60 * 60 * 24 * 30;
                                            
                                       
                                        //  Filters-----------------------------------    
                                            const btn = document.querySelector('#Recently_added');
                                            const btn1 = document.querySelector('#CheapestPrice');
                                            const btn2 = document.querySelector('#Highest_Price');
                                            function Recentlyadded() {
                                               
                                                    loadfunction(4,nft_info);
                                                
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
                                                                        
                                                                        loadfunction(8,nft_cheaptes);
                                                                            
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
                                                                        
                                                                            console.log( nft_info[item].Price_dollar);
                                                                              nft_heigst.push(nft_info[item]);
                                                                        } 
                                                                        
                                                                        loadfunction(8,nft_heigst);
                                                   
                                                }
                                                
                                            btn.addEventListener('click',Recentlyadded);
                                            btn1.addEventListener('click',Cheapest);
                                            btn2.addEventListener('click',highest);
                                           
                                        //   loadfunction--------------------------------------- 
                                            function loadfunction(value,nft_info){
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
                                                for (let i=0; i<value; i++){ 
                                                    if(nft_info[i].NFT_resell=="on"){
                                                    
                                                All+= `<div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                     <div class="auction-top pb-3">
                                                         <div class="row m-0">
                                                            <div class="col p-0">
                                                             
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
                                                                                 <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                 <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                 <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                            </ul>
                                                                         </div>
                                                                    </div> 
                                                                     <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                  </div>
                                                                 </div>
                                                                 <style> 
                                                                     .dropdown_h_toggle .dropdown_hv_menu {
                                                                         position: absolute;
                                                                         transition: .5s;
                                                                         transform: scale(1) translateX(109px);
                                                                         opacity: 0;
                                                                        background: #4e9d66;
                                                                         border-radius: 5px;
                                                                         top: 5px;
                                                                     }
                                                                     .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                         transform: scale(1) translateX(10px);
                                                                         opacity: 1; 
                                                                     }
                                                                     .dropdown_hv_menu ul li i{
                                                                         color:#fff;
                                                                     }
                                                                 </style>
                                                             </div>
                                                         </div>
                                                      </div>
                                                         <div class="auction-img text-center">
                                                         <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                      </div>
                                                     <div class="auction-content">
                                                         <div class="auction-time">`;
                                                             if(nft_info[i].NFT_auction>0){ 
                                                            All+=`<h6 class="timer"><a><span id="time${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                                                             } else{
                                                            All+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                             }
                                                            
                                                          All+=` <div class="row m-0">
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex">
                                                                        <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                        <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex my-2">
                                                                        <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                      <div class="text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;<span class="heart_class" id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="right-nft-content-here text-center">`;
                                                                        if(nft_info[i].NFT_auction>0){ 
                                                                      All+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                      All+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy${nft_info[i].ID}">Buy</button></a> `;}  
                                                                  All+=` </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>
                                              </div>
                                              `;
                                            
                                            if(nft_info[i].NFT_auction>0){
                                            var id='time'+nft_info[i].ID;
                                            console.log(id);
                                            // var id='time1'+res1[i].ID;
                                            var lid = 'bid'+nft_info[i].ID;
                                            var auctiontime=nft_info[i].NFT_auction_time;
                                            var x = setInterval(function() { 
                                                // console.log(id);
                                                // console.log(lid);
                                                // console.log(auctiontime);
                                            
                                            var dd= timerr(id, lid, auctiontime );
                                                if (dd < 0) {
                                                    clearInterval(x);
                                                    document.getElementById(id).innerHTML="expired";
                                                    document.getElementById(lid).disabled=false;
                                                          }
                                            
                                                    }, 1000);
                                                }
                                                
                                            document.getElementById("all").innerHTML = All;
                                             }
                                                    if(nft_info[i].NFT_type=="Collectibles and Art" && nft_info[i].NFT_resell=="on") {
                                                         console.log("art");
                                                  Art+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                 
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
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     <style> 
                                                                         .dropdown_h_toggle .dropdown_hv_menu {
                                                                             position: absolute;
                                                                             transition: .5s;
                                                                             transform: scale(1) translateX(109px);
                                                                             opacity: 0;
                                                                            background: #4e9d66;
                                                                             border-radius: 5px;
                                                                             top: 5px;
                                                                         }
                                                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                             transform: scale(1) translateX(10px);
                                                                             opacity: 1; 
                                                                         }
                                                                         .dropdown_hv_menu ul li i{
                                                                             color:#fff;
                                                                         }
                                                                     </style>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Art+=`<h6 class="timer"><a><span id="time1${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                     
                                                                 } else{
                                                                Art+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                 }
                                                                
                                                              Art+=` <div class="row m-0">
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                             <div class="text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;<span class="heart_class" id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="liked${nft_info[i].NFT_id}" > ${nft_info[i].NFT_likes} </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Art+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_1${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          Art+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_1${nft_info[i].ID}">Buy</button></a> `;}  
                                                                      Art+=` </div>
                                                                    </div>
                                                                 </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                var id='time1'+nft_info[i].ID;
                                                console.log(id);
                                                // var id='time1'+res1[i].ID;
                                                var lid = 'bid_1'+nft_info[i].ID;
                                                var auctiontime=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                    // console.log(id);
                                                    // console.log(lid);
                                                    // console.log(auctiontime);
                                                
                                                var dd= timerr(id, lid, auctiontime );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired";
                                                        document.getElementById(lid).disabled=false;
                                                              }
                                                
                                                        }, 1000);
                                                    }
                                                    
                                                document.getElementById("art").innerHTML = Art;
                                                
                                                 } 
                                                    if(nft_info[i].NFT_type=='Photography' && nft_info[i].NFT_resell=='on') {
                                                     console.log("photography");
                                                Photograph+=`
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                         <div class="auction-top pb-3">
                                                             <div class="row m-0">
                                                                <div class="col p-0">
                                                                 
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
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     <style> 
                                                                         .dropdown_h_toggle .dropdown_hv_menu {
                                                                             position: absolute;
                                                                             transition: .5s;
                                                                             transform: scale(1) translateX(109px);
                                                                             opacity: 0;
                                                                            background: #4e9d66;
                                                                             border-radius: 5px;
                                                                             top: 5px;
                                                                         }
                                                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                             transform: scale(1) translateX(10px);
                                                                             opacity: 1; 
                                                                         }
                                                                         .dropdown_hv_menu ul li i{
                                                                             color:#fff;
                                                                         }
                                                                     </style>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Photograph+=`<h6 class="timer"><a><span id="time2${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                     
                                                                 } else{
                                                                Photograph+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                 }
                                                                
                                                              Photograph+=` <div class="row m-0">
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <div class="text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;<span class="heart_class" id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="liked${nft_info[i].NFT_id}" > ${nft_info[i].NFT_likes} </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Photograph+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_2${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          Photograph+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_2${nft_info[i].ID}">Buy</button></a> `;}  
                                                                      Photograph+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                var id='time2'+nft_info[i].ID;
                                                console.log(id);
                                                // var id='time1'+res1[i].ID;
                                                var lid = 'bid_2'+nft_info[i].ID;
                                                var auctiontime=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                    // console.log(id);
                                                    // console.log(lid);
                                                    // console.log(auctiontime);
                                                
                                                var dd= timerr(id, lid, auctiontime );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired";
                                                        document.getElementById(lid).disabled=false;
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
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     <style> 
                                                                         .dropdown_h_toggle .dropdown_hv_menu {
                                                                             position: absolute;
                                                                             transition: .5s;
                                                                             transform: scale(1) translateX(109px);
                                                                             opacity: 0;
                                                                            background: #4e9d66;
                                                                             border-radius: 5px;
                                                                             top: 5px;
                                                                         }
                                                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                             transform: scale(1) translateX(10px);
                                                                             opacity: 1; 
                                                                         }
                                                                         .dropdown_hv_menu ul li i{
                                                                             color:#fff;
                                                                         }
                                                                     </style>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Agricultural+=`<h6 class="timer"><a><span id="time3${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                     
                                                                 } else{
                                                                Agricultural+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                 }
                                                                
                                                              Agricultural+=` <div class="row m-0">
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <div class="text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;<span class="heart_class" id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="liked${nft_info[i].NFT_id}" > ${nft_info[i].NFT_likes} </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Agricultural+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_3${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          Agricultural+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_3${nft_info[i].ID}">Buy</button></a> `;}  
                                                                      Agricultural+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                var id='time3'+nft_info[i].ID;
                                                console.log(id);
                                                // var id='time1'+res1[i].ID;
                                                var lid = 'bid_3'+nft_info[i].ID;
                                                var auctiontime=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                    // console.log(id);
                                                    // console.log(lid);
                                                    // console.log(auctiontime);
                                                
                                                var dd= timerr(id, lid, auctiontime );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired";
                                                        document.getElementById(lid).disabled=false;
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
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     <style> 
                                                                         .dropdown_h_toggle .dropdown_hv_menu {
                                                                             position: absolute;
                                                                             transition: .5s;
                                                                             transform: scale(1) translateX(109px);
                                                                             opacity: 0;
                                                                            background: #4e9d66;
                                                                             border-radius: 5px;
                                                                             top: 5px;
                                                                         }
                                                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                             transform: scale(1) translateX(10px);
                                                                             opacity: 1; 
                                                                         }
                                                                         .dropdown_hv_menu ul li i{
                                                                             color:#fff;
                                                                         }
                                                                     </style>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                Sports+=`<h6 class="timer"><a><span id="time4${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                     
                                                                 } else{
                                                                Sports+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                 }
                                                                
                                                              Sports+=` <div class="row m-0">
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          Sports+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_4${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          Sports+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_4${nft_info[i].ID}">Buy</button></a> `;}  
                                                                      Sports+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                var id='time4'+nft_info[i].ID;
                                                console.log(id);
                                                // var id='time1'+res1[i].ID;
                                                var lid = 'bid_4'+nft_info[i].ID;
                                                var auctiontime=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                    // console.log(id);
                                                    // console.log(lid);
                                                    // console.log(auctiontime);
                                                
                                                var dd= timerr(id, lid, auctiontime );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired";
                                                        document.getElementById(lid).disabled=false;
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
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     <style> 
                                                                         .dropdown_h_toggle .dropdown_hv_menu {
                                                                             position: absolute;
                                                                             transition: .5s;
                                                                             transform: scale(1) translateX(109px);
                                                                             opacity: 0;
                                                                            background: #4e9d66;
                                                                             border-radius: 5px;
                                                                             top: 5px;
                                                                         }
                                                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                             transform: scale(1) translateX(10px);
                                                                             opacity: 1; 
                                                                         }
                                                                         .dropdown_hv_menu ul li i{
                                                                             color:#fff;
                                                                         }
                                                                     </style>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                crypto+=`<h6 class="timer"><a><span id="time5${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                     
                                                                 } else{
                                                                crypto+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                 }
                                                                
                                                              crypto+=` <div class="row m-0">
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          crypto+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_5${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          crypto+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_5${nft_info[i].ID}">Buy</button></a> `;}  
                                                                      crypto+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                var id='time5'+nft_info[i].ID;
                                                console.log(id);
                                                // var id='time1'+res1[i].ID;
                                                var lid = 'bid_5'+nft_info[i].ID;
                                                var auctiontime=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                    // console.log(id);
                                                    // console.log(lid);
                                                    // console.log(auctiontime);
                                                
                                                var dd= timerr(id, lid, auctiontime );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired";
                                                        document.getElementById(lid).disabled=false;
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
                                                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                </ul>
                                                                             </div>
                                                                        </div> 
                                                                         <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                      </div>
                                                                     </div>
                                                                     <style> 
                                                                         .dropdown_h_toggle .dropdown_hv_menu {
                                                                             position: absolute;
                                                                             transition: .5s;
                                                                             transform: scale(1) translateX(109px);
                                                                             opacity: 0;
                                                                            background: #4e9d66;
                                                                             border-radius: 5px;
                                                                             top: 5px;
                                                                         }
                                                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                             transform: scale(1) translateX(10px);
                                                                             opacity: 1; 
                                                                         }
                                                                         .dropdown_hv_menu ul li i{
                                                                             color:#fff;
                                                                         }
                                                                     </style>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                             <div class="auction-img text-center">
                                                             <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                          </div>
                                                         <div class="auction-content">
                                                             <div class="auction-time">`;
                                                                 if(nft_info[i].NFT_auction>0){ 
                                                                assest+=`<h6 class="timer"><a><span id="time6${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                     
                                                                 } else{
                                                                assest+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                 }
                                                                
                                                              assest+=` <div class="row m-0">
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex">
                                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 p-0">
                                                                        <div class="left-nft-content d-flex my-2">
                                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                            <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="right-nft-content-here text-center">`;
                                                                            if(nft_info[i].NFT_auction>0){ 
                                                                          assest+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_6${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                          assest+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_6${nft_info[i].ID}">Buy</button></a> `;}  
                                                                      assest+=` </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>
                                                  `;
                                                
                                                if(nft_info[i].NFT_auction>0){
                                                var id='time6'+nft_info[i].ID;
                                                console.log(id);
                                                // var id='time1'+res1[i].ID;
                                                var lid = 'bid_6'+nft_info[i].ID;
                                                var auctiontime=nft_info[i].NFT_auction_time;
                                                var x = setInterval(function() { 
                                                    // console.log(id);
                                                    // console.log(lid);
                                                    // console.log(auctiontime);
                                                
                                                var dd= timerr(id, lid, auctiontime );
                                                    if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired";
                                                        document.getElementById(lid).disabled=false;
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
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                         <style> 
                                                                             .dropdown_h_toggle .dropdown_hv_menu {
                                                                                 position: absolute;
                                                                                 transition: .5s;
                                                                                 transform: scale(1) translateX(109px);
                                                                                 opacity: 0;
                                                                                background: #4e9d66;
                                                                                 border-radius: 5px;
                                                                                 top: 5px;
                                                                             }
                                                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                                 transform: scale(1) translateX(10px);
                                                                                 opacity: 1; 
                                                                             }
                                                                             .dropdown_hv_menu ul li i{
                                                                                 color:#fff;
                                                                             }
                                                                         </style>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    Ticket+=`<h6 class="timer"><a><span id="time7${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                         
                                                                     } else{
                                                                    Ticket+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                     }
                                                                    
                                                                  Ticket+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex my-2">
                                                                                <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              Ticket+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_7${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              Ticket+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_7${nft_info[i].ID}">Buy</button></a> `;}  
                                                                          Ticket+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    var id='time7'+nft_info[i].ID;
                                                    console.log(id);
                                                    // var id='time1'+res1[i].ID;
                                                    var lid = 'bid_7'+nft_info[i].ID;
                                                    var auctiontime=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                        // console.log(id);
                                                        // console.log(lid);
                                                        // console.log(auctiontime);
                                                    
                                                    var dd= timerr(id, lid, auctiontime );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id).innerHTML="expired";
                                                            document.getElementById(lid).disabled=false;
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
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                         <style> 
                                                                             .dropdown_h_toggle .dropdown_hv_menu {
                                                                                 position: absolute;
                                                                                 transition: .5s;
                                                                                 transform: scale(1) translateX(109px);
                                                                                 opacity: 0;
                                                                                background: #4e9d66;
                                                                                 border-radius: 5px;
                                                                                 top: 5px;
                                                                             }
                                                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                                 transform: scale(1) translateX(10px);
                                                                                 opacity: 1; 
                                                                             }
                                                                             .dropdown_hv_menu ul li i{
                                                                                 color:#fff;
                                                                             }
                                                                         </style>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    lifestyle+=`<h6 class="timer"><a><span id="time8${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                         
                                                                     } else{
                                                                    lifestyle+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                     }
                                                                    
                                                                  lifestyle+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex my-2">
                                                                                <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              lifestyle+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_8${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              lifestyle+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_8${nft_info[i].ID}">Buy</button></a> `;}  
                                                                          lifestyle+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    var id='time8'+nft_info[i].ID;
                                                    console.log(id);
                                                    // var id='time1'+res1[i].ID;
                                                    var lid = 'bid_8'+nft_info[i].ID;
                                                    var auctiontime=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                        // console.log(id);
                                                        // console.log(lid);
                                                        // console.log(auctiontime);
                                                    
                                                    var dd= timerr(id, lid, auctiontime );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id).innerHTML="expired";
                                                            document.getElementById(lid).disabled=false;
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
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                         <style> 
                                                                             .dropdown_h_toggle .dropdown_hv_menu {
                                                                                 position: absolute;
                                                                                 transition: .5s;
                                                                                 transform: scale(1) translateX(109px);
                                                                                 opacity: 0;
                                                                                background: #4e9d66;
                                                                                 border-radius: 5px;
                                                                                 top: 5px;
                                                                             }
                                                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                                 transform: scale(1) translateX(10px);
                                                                                 opacity: 1; 
                                                                             }
                                                                             .dropdown_hv_menu ul li i{
                                                                                 color:#fff;
                                                                             }
                                                                         </style>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    holiday+=`<h6 class="timer"><a><span id="time9${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                         
                                                                     } else{
                                                                    holiday+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                     }
                                                                    
                                                                  holiday+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex my-2">
                                                                                <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              holiday+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_9${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              holiday+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_9${nft_info[i].ID}">Buy</button></a> `;}  
                                                                          holiday+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    var id='time9'+nft_info[i].ID;
                                                    console.log(id);
                                                    // var id='time1'+res1[i].ID;
                                                    var lid = 'bid_9'+nft_info[i].ID;
                                                    var auctiontime=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                        // console.log(id);
                                                        // console.log(lid);
                                                        // console.log(auctiontime);
                                                    
                                                    var dd= timerr(id, lid, auctiontime );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id).innerHTML="expired";
                                                            document.getElementById(lid).disabled=false;
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
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                         <style> 
                                                                             .dropdown_h_toggle .dropdown_hv_menu {
                                                                                 position: absolute;
                                                                                 transition: .5s;
                                                                                 transform: scale(1) translateX(109px);
                                                                                 opacity: 0;
                                                                                background: #4e9d66;
                                                                                 border-radius: 5px;
                                                                                 top: 5px;
                                                                             }
                                                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                                 transform: scale(1) translateX(10px);
                                                                                 opacity: 1; 
                                                                             }
                                                                             .dropdown_hv_menu ul li i{
                                                                                 color:#fff;
                                                                             }
                                                                         </style>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    homegarden+=`<h6 class="timer"><a><span id="time10${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                         
                                                                     } else{
                                                                    homegarden+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                     }
                                                                    
                                                                  homegarden+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex my-2">
                                                                                <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              homegarden+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_10${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              homegarden+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_10${nft_info[i].ID}">Buy</button></a> `;}  
                                                                          homegarden+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    var id='time10'+nft_info[i].ID;
                                                    console.log(id);
                                                    // var id='time1'+res1[i].ID;
                                                    var lid = 'bid_10'+nft_info[i].ID;
                                                    var auctiontime=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                        // console.log(id);
                                                        // console.log(lid);
                                                        // console.log(auctiontime);
                                                    
                                                    var dd= timerr(id, lid, auctiontime );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id).innerHTML="expired";
                                                            document.getElementById(lid).disabled=false;
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
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                         <style> 
                                                                             .dropdown_h_toggle .dropdown_hv_menu {
                                                                                 position: absolute;
                                                                                 transition: .5s;
                                                                                 transform: scale(1) translateX(109px);
                                                                                 opacity: 0;
                                                                                background: #4e9d66;
                                                                                 border-radius: 5px;
                                                                                 top: 5px;
                                                                             }
                                                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                                 transform: scale(1) translateX(10px);
                                                                                 opacity: 1; 
                                                                             }
                                                                             .dropdown_hv_menu ul li i{
                                                                                 color:#fff;
                                                                             }
                                                                         </style>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    celebrity+=`<h6 class="timer"><a><span id="time11${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                         
                                                                     } else{
                                                                    celebrity+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                     }
                                                                    
                                                                  celebrity+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex my-2">
                                                                                <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              celebrity+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_11${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              celebrity+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_11${nft_info[i].ID}">Buy</button></a> `;}  
                                                                          celebrity+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    var id='time11'+nft_info[i].ID;
                                                    console.log(id);
                                                    // var id='time1'+res1[i].ID;
                                                    var lid = 'bid_11'+nft_info[i].ID;
                                                    var auctiontime=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                        // console.log(id);
                                                        // console.log(lid);
                                                        // console.log(auctiontime);
                                                    
                                                    var dd= timerr(id, lid, auctiontime );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id).innerHTML="expired";
                                                            document.getElementById(lid).disabled=false;
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
                                                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                                    </ul>
                                                                                 </div>
                                                                            </div> 
                                                                             <a href="report.php?id=${nft_info[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                                                                          </div>
                                                                         </div>
                                                                         <style> 
                                                                             .dropdown_h_toggle .dropdown_hv_menu {
                                                                                 position: absolute;
                                                                                 transition: .5s;
                                                                                 transform: scale(1) translateX(109px);
                                                                                 opacity: 0;
                                                                                background: #4e9d66;
                                                                                 border-radius: 5px;
                                                                                 top: 5px;
                                                                             }
                                                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                                                                                 transform: scale(1) translateX(10px);
                                                                                 opacity: 1; 
                                                                             }
                                                                             .dropdown_hv_menu ul li i{
                                                                                 color:#fff;
                                                                             }
                                                                         </style>
                                                                     </div>
                                                                 </div>
                                                              </div>
                                                                 <div class="auction-img text-center">
                                                                 <img class="w-100" src="./${nft_info[i].NFT_image}" alt="Card image cap" />
                                                              </div>
                                                             <div class="auction-content">
                                                                 <div class="auction-time">`;
                                                                     if(nft_info[i].NFT_auction>0){ 
                                                                    vehicle+=`<h6 class="timer"><a><span id="time12${nft_info[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                         
                                                                     } else{
                                                                    vehicle+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                                                                     }
                                                                    
                                                                  vehicle+=` <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex">
                                                                                <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="left-nft-content d-flex my-2">
                                                                                <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                                <span class="text-muted d-flex">${nft_info[i].NFT_treeplant} </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="right-nft-content-here text-center">`;
                                                                                if(nft_info[i].NFT_auction>0){ 
                                                                              vehicle+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_12${nft_info[i].ID}">Place a bid</button></a>`; } else {
                                                                              vehicle+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_12${nft_info[i].ID}">Buy</button></a> `;}  
                                                                          vehicle+=` </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
                                                      `;
                                                    
                                                    if(nft_info[i].NFT_auction>0){
                                                    var id='time12'+nft_info[i].ID;
                                                    console.log(id);
                                                
                                                    var lid = 'bid_12'+nft_info[i].ID;
                                                    var auctiontime=nft_info[i].NFT_auction_time;
                                                    var x = setInterval(function() { 
                                                       
                                                    
                                                    var dd= timerr(id, lid, auctiontime );
                                                        if (dd < 0) {
                                                            clearInterval(x);
                                                            document.getElementById(id).innerHTML="expired";
                                                            document.getElementById(lid).disabled=false;
                                                                  }
                                                    
                                                            }, 1000);
                                                        }
                                                        
                                                    document.getElementById("vehicle").innerHTML =vehicle;
                                                    
                                                     }
                                                }
                                            }
                                         loadfunction(12,nft_info);
                                              let oldd=8;
                                                $("#loadMore1").on("click",function(){
                                                    let value =Number($('#loadMore1').val());
                                                    oldd=oldd+value;
                                                    console.log(oldd);
                                                    //$('#loadMore1').val(Number(oldd));
                                                    //let myvalue = Number($('#loadMore1').val());
                                                    loadfunction(oldd,nft_info);
                                                    })
                                            
                                             });
    // }, 50);
                                                            

    </script>
    <script>
            function liked(id ,image,name,like,heart){
                console.log(like);
                console.log("#"+heart);
              
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
                                    console.log(result);
                                    document.getElementById(like).innerHTML=result[1];
                                    console.log('hello');
                                   
                                    if(result[0]==true ){
                                        console.log("")
                                          $("#"+heart).html('<i class="fal fa-heart" aria-hidden="true"></i>');
                                          $("#"+heart).addClass("liked");
                                    }else{
                                         $("#"+heart).html('<i class="fas fa-heart" aria-hidden="true"></i>');
                                          $("#"+heart).removeClass("liked");
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


<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" type="script"></script>-->

    <!--<script src="assets1/js/owl.carousel.min.js"></script>-->
    <!--<script src="assets1/js/slider-one.js"></script>-->
<?php 
include "footer.php";
?>


</script>