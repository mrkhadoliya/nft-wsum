<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "header.php";
?>
<?php
include "config.php";


?>
 
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
                <!--<div class="col-md-12">-->
                <!--    <div class="latest-nft-tokens-here">-->
                     
                              <!--$query1 = "SELECT * FROM `NFT_info` ORDER BY ID DESC LIMIT 4";-->
                              <!--$dataa = mysqli_query($link,$query1);-->
                              <!--  while($result= mysqli_fetch_assoc($dataa))-->
                              <!--    {-->
                        
                                 
                        <!--<div class="latest-onenft">-->
                        <!--    <a class="text-decoration-none" href="#">-->
                        <!--        <div class="nft-image-here1">-->
                        <!--          <a href="./collection.php?address=<?php echo $result['User_address'];?>">-->
                        <!--            <img class="d-block" src="./<?php echo $result['NFT_image'];?>" alt="" />-->
                        <!--            </a>-->
                        <!--            <span><?php echo $result['NFT_creator'];?></span>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--ending-->
                        <!--<div class="latest-onenft">-->
                        <!--    <a class="text-decoration-none" href="#">-->
                        <!--        <div class="nft-image-here1">-->
                                    <!--<img class="d-block" src="assets/img/gif8.gif" alt="">-->
                        <!--            <img class="d-block" src="assets/img/Art 2..png" alt="" />-->
                        <!--            <span>Lorem ipsum is placeholder </span>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--<div class="latest-onenft">-->
                        <!--    <a class="text-decoration-none" href="#">-->
                        <!--        <div class="nft-image-here1">-->
                                    <!--<img class="d-block" src="assets/img/gif7.gif" alt="">-->
                        <!--            <img class="d-block" src="assets/img/1.jpg" alt="" />-->
                        <!--            <span>Lorem ipsum is placeholder </span>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--<div class="latest-onenft">-->
                        <!--    <a class="text-decoration-none" href="#">-->
                        <!--        <div class="nft-image-here1">-->
                                    <!--<img class="d-block" src="assets/img/gif6.gif" alt="">-->
                        <!--            <img class="d-block" src="assets/img/10.jpg" alt="" />-->
                        <!--            <span>Lorem ipsum is placeholder </span>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</div> -->
                <!--    </div>-->
                <!--</div>-->
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
                        <img src="assets/img/dog-img1 (1).png" class="w-75" />
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
                        <img src="assets/img/space-dog (1).png" class="w-75" alt=""/>
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
                         
                            <div class="item">
                                  <div class="single-auction" id="liveauction">
                                        <!--<div class="auction-top" >-->
                                        <!--    <div class="row m-0">-->
                                        <!--        <div class="col p-0">-->
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
                                        <!--        </div>-->
                                        <!--        <div class="col-auto p-0">-->
                                        <!--            <div class="dropleft">-->
                                        <!--              <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                        <!--                <i class="fas fa-ellipsis-v text_nft_heading"></i>-->
                                        <!--              </button>-->
                                        <!--              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
                                        <!--                <div class="dropdown_h_toggle">-->
                                        <!--                    <div class="dropdown-item">Share</div>-->
                                        <!--                    <div class="dropdown_hv_menu">-->
                                        <!--                        <ul class="list-unstyled d-flex m-0">-->
                                        <!--                            <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $mydata1['NFT_name'].", ".$mydata1['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>-->
                                        <!--                            <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>&p[title]=<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>-->
                                        <!--                            <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $mydata1['NFT_id']?>}&title={<?php echo $mydata1['NFT_name'].",  ".$mydata1['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>-->
                                        <!--                        </ul>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                 <input type="hidden" id="nftid" name="NFT[]" value="">-->
                                        <!--                 <a href="report.php?id=<?php echo $mydata1['NFT_id']?>" class="dropdown-item " target="blank">Report</a>-->
                                        <!--              </div>-->
                                        <!--            </div>-->
                                        <!--            <style> -->
                                        <!--                .dropdown_h_toggle .dropdown_hv_menu {-->
                                        <!--                    position: absolute;-->
                                        <!--                    transition: .5s;-->
                                        <!--                    transform: scale(1) translateX(109px);-->
                                        <!--                    opacity: 0;-->
                                        <!--                    background: #4e9d66;-->
                                        <!--                    border-radius: 5px;-->
                                        <!--                    top: 5px;-->
                                        <!--                }-->
                                        <!--                .dropdown_h_toggle:hover .dropdown_hv_menu { -->
                                        <!--                    transform: scale(1) translateX(10px);-->
                                        <!--                    opacity: 1; -->
                                        <!--                }-->
                                        <!--                .dropdown_hv_menu ul li i{-->
                                        <!--                    color:#fff;-->
                                        <!--                }-->
                                        <!--            </style>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>   -->
                                        <!--<div class="auction-img text-center">-->
                                        <!--  <img class="w-100" src="./<?php echo $mydata1['NFT_image'];?>" alt="Card image cap" />-->
                                        <!--</div>-->
                                        
                                        <!--<div class="auction-content">-->
                                        <!--    <div class="auction-time">-->
                                        <!--       <h6 class="timer" ><a href="#"><span id="clock<?php echo $mydata1['ID'];?>">00h 00m 00s</span>  left <img src="assets/img/fire.png" height="14px" style="width:15px!important"></a> </h6>-->
                                                
                                        <!--        <div class="row m-0">-->
                                        <!--            <div class="col-12 p-0">-->
                                        <!--                <div class="left-nft-content d-flex">-->
                                        <!--                    <div class="wsum_product_name"><h5 class="text_nft_heading"><?php echo $mydata1['NFT_name']?></h5></div> -->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="col-12 p-0">-->
                                        <!--                <div class="left-nft-content d-flex">-->
                                        <!--                    <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div> -->
                                        <!--                    <span class="text-muted d-flex"> <?php echo number_format($mydata1['NFT_price'],5);?><span> <?php echo $mydata1['NFT_payment']?></span></span>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                                    
                                        <!--            <div class="col-12 p-0">-->
                                        <!--                <div class="left-nft-content d-flex mt-2">-->
                                        <!--                    <div class="wsum_product_name text_nft_heading">Tree plant</div>-->
                                        <!--                    <div class="text-muted d-flex"><?php echo $mydata1['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $mydata1['NFT_id'];?>" onclick='liked("<?php echo $mydata1['NFT_id'];?>","<?php echo $mydata1['NFT_image']?>","<?php echo $mydata1['NFT_name']?>","la<?php echo $mydata1['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="la<?php echo $mydata1['NFT_id'];?>" > <?php echo $mydata1['NFT_likes'];?> </span></div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                                    
                                        <!--            <div class="col-12">-->
                                        <!--                <div class="right-nft-content-here mt-3">-->
                                        <!--                    <a href="./bid_description.php?id=<?php echo $mydata1['NFT_id']?>">-->
                                        <!--                        <button class="btn btn-default border-color-set" id="mint2<?php echo $mydata1['ID'];?>">Place a bid</button>-->
                                        <!--                    </a>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                 
                                    <script>
                                          $.getJSON("data.json", function(json) {
                                            let myhtml = "";
                                            var result=json;
                                            var nft_info=json.nft_info;
                                            var user_info=json.nft_user;
                                            let now = new Date().getTime();
                                            var defaultDate = now - 1000 * 60 * 60 * 24 * 30;
                                                for (var i=0; i<(nft_info).length; i++){
                                                    for(var j=0; j<(user_info).length; j++){
                                                        
                                                        myhtml+=`
                                                        
                                                        <div class="auction-top" >
                                                        <div class="row m-0">
                                                            <div class="col p-0">
                                                                <!--<div class="inner_img1">-->
                                                                <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                                <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                                <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                                <!--</div>-->
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
                                                                                 <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name+nft_info[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                                                                                <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                                                                                <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + res1[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                     <input type="hidden" id="nftid" name="NFT[]" value="">
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
                                                        <div class="auction-time">
                                                           <h6 class="timer" ><a href="#"><span id="clock${nft_info[i].NFT_id}">00h 00m 00s</span>  left <img src="assets/img/fire.png" height="14px" style="width:15px!important"></a> </h6>
                                                            
                                                            <div class="row m-0">
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex">
                                                                        <div class="wsum_product_name"><h5 class="text_nft_heading">${nft_info[i].NFT_name}</h5></div> 
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex">
                                                                        <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div> 
                                                                        <span class="text-muted d-flex">${nft_info[i].NFT_price}<span> ${nft_info[i].NFT_payment}</span></span>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-12 p-0">
                                                                    <div class="left-nft-content d-flex mt-2">
                                                                        <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                                        <div class="text-muted d-flex">${nft_info[i].NFT_treeplant}% &nbsp;<span class="heart_class" id="heart${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","la<?php echo $mydata1['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="la${nft_info[i].NFT_id}" > ${nft_info[i].NFT_likes} </span></div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-12">
                                                                    <div class="right-nft-content-here mt-3">
                                                                        <a href="./bid_description.php?id=${nft_info[i].NFT_id}">
                                                                            <button class="btn btn-default border-color-set" id="mint2${nft_info[i].ID}">Place a bid</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        `;
                                                        
                                                            var x = setInterval(function() { 
                                                            var id='clock'+${nft_info[i].NFT_id};
                                                            var lid = 'mint2'+${nft_info[i].ID};
                                                            var dd= timerr(id,lid, ${nft_info[i].NFT_auction_time});
                                                                if (dd < 0) {
                                                                    clearInterval(x);
                                                                    document.getElementById(id).innerHTML="expired";
                                                                    document.getElementById(lid).disabled=false;
                                                                }
                                                            }, 1000);
                                                        
                                                    }
                                                }
                                          }
                                    </script>
                                    
                                    </div>
                                 
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
         
        console.log(document.getElementById("nftid").value)
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
                      $query = "SELECT * FROM `NFT_info` WHERE  $currentTimeinSeconds<NFT_auction_time AND NFT_resell='on' ORDER BY ID DESC " ;
                      $data = mysqli_query($link,$query);
                        while($mydata= mysqli_fetch_assoc($data))
                        { ?>
                            <div class="item">
                              <div class="single-auction">
                                  <div class="auction-top">
                                        <div class="row m-0">
                                             <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                    <h5 class="min_bids text_nft_heading"><?php echo $mydata['NFT_name']?></h5>
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
                                                            <div class="text-muted d-flex"><?php echo $mydata['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $mydata['NFT_id'];?>" onclick='liked("<?php echo $mydata['NFT_id'];?>","<?php echo $mydata['NFT_image']?>","<?php echo $mydata['NFT_name']?>","liked<?php echo $mydata['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="liked<?php echo $mydata['NFT_id'];?>"><?php echo $mydata['NFT_likes'];?></span></div>
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
                              $query = "SELECT * FROM `NFT_info`  ORDER BY ID DESC ";
                              $data = mysqli_query($link,$query);
                                while($result= mysqli_fetch_assoc($data))
                                {
                        
                                 ?>
                            <div class="item">
                                <div class="single-explore mt-4">
                                    <a href="./collection.php?address=<?php echo $result['NFT_creator_add'];?>">
                                    <div class="explore-img">
                                        <img class="d-block w-100" src="./<?php echo $result['NFT_image'];?>" alt="" />
                                    </div>
                                    </a>
                                    <div class="explore-content">
                                        <div class="inner_explore_img"><img src="./<?php echo $result['Nft_creator_image'];?>" class="w-100" /></div>
                                        <h5><?php echo $result['NFT_creator'];?></h5>
                                        <p>
                                            <!--<a class="text-decoration-none" href="#"><span class="text-muted">ERC-111</span></a>-->
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
                                <a class="nav-link" id="cacao-tab" data-toggle="tab" href="#cacao" role="tab" aria-controls="cacao" aria-selected="false">🍫 Agricultural</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" id="Coffee-tab" data-toggle="tab" href="#Coffee" role="tab" aria-controls="Coffee" aria-selected="false">☕  Sports</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" id="Lemon-tab" data-toggle="tab" href="#Lemon" role="tab" aria-controls="Lemon" aria-selected="false">🍋 Crypto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Baobab-tab" data-toggle="tab" href="#Baobab" role="tab" aria-controls="Baobab" aria-selected="false">🍃 Assets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Dogstree-tab" data-toggle="tab" href="#Dogstree" role="tab" aria-controls="Dogstree" aria-selected="false">🐶 Tickets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="TuttiFrutti-tab" data-toggle="tab" href="#TuttiFrutti" role="tab" aria-controls="TuttiFrutti" aria-selected="false">✊ Tifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Plantall-tab" data-toggle="tab" href="#Plantall" role="tab" aria-controls="Plantall" aria-selected="false">🌱 Holiday</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="Housing-tab" data-toggle="tab" href="#Housing" role="tab" aria-controls="Housing" aria-selected="false">🏠 Home & Garden </a>
                            </li>
                             
                            <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#Airplane" role="tab" aria-controls="Airplane" aria-selected="false">✈️ Celebrities </a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Car-tab" data-toggle="tab" href="#Car" role="tab" aria-controls="Car" aria-selected="false">🚔 Vehicles </a>
                            </li>
                        </ul>
                    </div> 
               </div>
                <!--<div class="col-md-2">-->
                <!--    <div class="Filter_______"> -->
                <!--        <div class="filtndrow">-->
                <!--            <div class="dropdown">-->
                <!--                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                    <svg viewBox="0 0 24 24" fill="none" width="22" height="22" xlmns="http://www.w3.org/2000/svg">-->
                <!--                         <path d="M20 16L12 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
                <!--                        <path d="M6 16L4 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
                <!--                        <path d="M20 8L18 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
                <!--                        <path d="M12 8L4 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
                <!--                        <circle cx="9" cy="16" r="3" fill="currentColor"></circle>-->
                <!--                        <circle cx="15" cy="8" r="3" fill="currentColor"></circle>-->
                <!--                    </svg>-->
                <!--                    Filter & Sort-->
                <!--                </button>-->
                <!--                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
                <!--                    <h6>Sort</h6>-->
                <!--                    <a class="dropdown-item" href="#">Recently added</a>-->
                <!--                    <a class="dropdown-item" href="#">Cheapest</a>-->
                <!--                    <a class="dropdown-item" href="#">Highest price</a>-->
                <!--                    <h6>Options</h6>-->
                <!--                    <a class="dropdown-item" href="#">-->
                <!--                        Verified only-->
                <!--                        <label class="switch">-->
                <!--                            <input type="checkbox" checked />-->
                <!--                            <span class="slider round"></span>-->
                <!--                        </label>-->
                <!--                    </a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div> -->
                <!--    </div>-->
                <!--</div>-->
             <div class="col-md-12">
                    <style>
                        .wrong-network ul li {
                            margin: 10px 0px;
                        }
                    </style>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12" id="loaddata">
                                    <?php
                                    $query = "SELECT * FROM `NFT_info` WHERE NFT_resell='on' ORDER BY ID DESC LIMIT 10";
                                      $data = mysqli_query($link,$query);
                                        while($res= mysqli_fetch_assoc($data))
                                             { 
                                            ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;" >
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                <div class="col p-0">
                                                    <div class="inner_img1">
                                                        <!--<img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                        <!--<img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                        <!--<img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res['NFT_name'].",  ".$res['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res['NFT_id']?>&p[title]=<?php echo $res['NFT_name'].",  ".$res['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res['NFT_id']?>}&title={<?php echo $res['NFT_name'].",  ".$res['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div> 
                                                        <a href="report.php?id=<?php echo $res['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time"><?if($res['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="time<?php echo $res['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res['NFT_price'],5);?> <span> <?php echo $res['NFT_payment']?></span></span>
                                                           </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <div class="text-muted d-flex"><?php echo $res['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $res['NFT_id'];?>" onclick='liked("<?php echo $res['NFT_id'];?>","<?php echo $res['NFT_image']?>","<?php echo $res['NFT_name']?>","liked<?php echo $res['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span> <span id="liked<?php echo $res['NFT_id'];?>"><?php echo $res['NFT_likes'];?> </span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res['NFT_auction']>0){ ?>
                                                                <a href="./bid_description.php?id=<?php echo $res['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bidd<?php echo $res['ID'];?>">Place a bid</button></a><? } else {?>
                                                                <a href="./buy_description.php?id=<?php echo $res['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy<?php echo $res['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <script>
                                   <?if($res['NFT_auction']>0){ ?>
                                            var x = setInterval(function() { 
                                            var id='time<?php echo $res['ID'];?>';
                                            var lid='bidd<?php echo $res['ID'];?>';
                                            var dd= timerr('time<?php echo $res['ID'];?>', 'bidd<?php echo $res['ID'];?>', '<?php echo $res["NFT_auction_time"];?>');
                                                if (dd < 0) {
                                                    clearInterval(x);
                                                    document.getElementById(id).innerHTML="expired";
                                                    document.getElementById(lid).disabled=false;
                                                }
                                            }, 1000);
                                            <? 
                                         
                                            }?>
                                    </script>
                                          <?php
                                          } ?> 
                                         
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5 ">
                                       <button type="submit" class="btn onsale-btn w-100" id="loadMore" value="4">Load more</button>
                                     </div>
                                </div>
                            
                             
                            </div>
                        </div> 
                        <script>
                                
                                </script>
                   <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"></script>-->
                         <!--profile-->
                       <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Art' AND NFT_resell='on' ORDER BY ID DESC LIMIT 4 ";
                                      $data = mysqli_query($link,$query);
                                        while($res1= mysqli_fetch_assoc($data))
                                        {
                                
                                        ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
                                                     
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res1['NFT_name'].",  ".$res1['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res1['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res1['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res1['NFT_id']?>&p[title]=<?php echo $res1['NFT_name'].",  ".$res1['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res1['NFT_id']?>}&title={<?php echo $res1['NFT_name'].",  ".$res1['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res1['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res1['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                 <?if($res1['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="time1<?php echo $res1['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res1['NFT_name']?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res1['NFT_price'],5);?> <span> <?php echo $res1['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <div class="text-muted d-flex"><?php echo $res1['NFT_treeplant'];?>% &nbsp;<span class="heart_class" id="heart<?php echo $res1['NFT_id'];?>" onclick='liked("<?php echo $res1['NFT_id'];?>","<?php echo $res1['NFT_image']?>","<?php echo $res1['NFT_name']?>","liked<?php echo $res1['NFT_id'];?>")'><i class="fal fa-heart " aria-hidden="true"></i>&nbsp; </span><span id="liked<?php echo $res1['NFT_id'];?>"><?php echo $res1['NFT_likes'];?></span></div>
                                                             
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res1['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res1['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_1<?php echo $res1['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res1['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_1<?php echo $res1['ID'];?>">Buy</button></a> <? } ?> 
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                  <script>
                                   <?if($res1['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='time1<?php echo $res1['ID'];?>';
                                        var lid = 'bid_1<?php echo $res1['ID'];?>';
                                        var dd= timerr('time1<?php echo $res1['ID'];?>', 'bid_1<?php echo $res1['ID'];?>', '<?php echo $res1["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                   </script>
                                    
                                   
                                    <?php
                                      }
                                      ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        
                         <script>
                        //       function loadfunction(value) { 
                        //                  console.log("ready!");
                        //                  let formdata = new FormData();
                        //                 formdata.append("type","Art");
                        //                 formdata.append("value",value);
                                       
                        //                 let requestOptions = {
                        //                     method: "POST",
                        //                     body: formdata,
                        //                     redirect: "follow",
                        //                   };
                                         
                        //                 fetch("https://ramlogics.com/wsum-NFT1/load.php", requestOptions)
                        //                     .then((response) => response.json())
                        //                     .then((res1) => {
                        //                         console.log(res1);
                        //                         let html="";
                                                
                        //                         for (i=0; i < res1.length; i++){
                                            
                                               
                        //                         html+=`
                        //                               <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                        //                               <div class="auction-top pb-3">
                        //                                 <div class="row m-0">
                        //                                     <div class="col p-0">
                                                             
                        //                                     </div>
                        //                                      <div class="col-auto p-0">
                        //                                         <div class="dropleft">
                        //                                           <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        //                                             <i class="fas fa-ellipsis-v text_nft_heading"></i>
                        //                                           </button>
                        //                                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        //                                             <div class="dropdown_h_toggle">
                        //                                                 <div class="dropdown-item">Share</div>
                        //                                                 <div class="dropdown_hv_menu">
                        //                                                     <ul class="list-unstyled d-flex m-0">
                        //                                                         <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${res1[i].NFT_name+res1[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res1[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res1[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                        //                                                         <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res1[i].NFT_id}&p[title]=${res1[i].NFT_name + res1[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                        //                                                         <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res1[i].NFT_id}}&title={${res1[i].NFT_name + res1[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                        //                                                     </ul>
                        //                                                 </div>
                        //                                             </div> 
                        //                                             <a href="report.php?id=${res1[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                        //                                           </div>
                        //                                         </div>
                        //                                         <style> 
                        //                                             .dropdown_h_toggle .dropdown_hv_menu {
                        //                                                 position: absolute;
                        //                                                 transition: .5s;
                        //                                                 transform: scale(1) translateX(109px);
                        //                                                 opacity: 0;
                        //                                                 background: #4e9d66;
                        //                                                 border-radius: 5px;
                        //                                                 top: 5px;
                        //                                             }
                        //                                             .dropdown_h_toggle:hover .dropdown_hv_menu { 
                        //                                                 transform: scale(1) translateX(10px);
                        //                                                 opacity: 1; 
                        //                                             }
                        //                                             .dropdown_hv_menu ul li i{
                        //                                                 color:#fff;
                        //                                             }
                        //                                         </style>
                        //                                     </div>
                        //                                 </div>
                        //                             </div>
                        //                                 <div class="auction-img text-center">
                        //                                 <img class="w-100" src="https://ramlogics.com/wsum-NFT1/${res1[i].NFT_image}" alt="Card image cap" />
                        //                              </div>
                        //                             <div class="auction-content">
                        //                                 <div class="auction-time">`;
                        //                                      if(res1[i].NFT_auction>0){ 
                        //                                     html+=`<h6 class="timer"><a><span id="time1${res1[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                        //                                      } else{
                        //                                     html+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                        //                                      }
                                                            
                        //                                   html+=` <div class="row m-0">
                        //                                         <div class="col-12 p-0">
                        //                                             <div class="left-nft-content d-flex">
                        //                                                 <div class="wsum_product_name text_nft_heading">${res1[i].NFT_name}</div>
                        //                                                 <span class="text-muted d-flex">${res1[i].NFT_price} <span> ${res1[i].NFT_payment}</span></span>
                        //                                             </div>
                        //                                         </div>
                        //                                         <div class="col-12 p-0">
                        //                                             <div class="left-nft-content d-flex my-2">
                        //                                                 <div class="wsum_product_name text_nft_heading">Tree plant</div>
                        //                                                 <span class="text-muted d-flex">${res1[i].NFT_treeplant} </span></span>
                        //                                             </div>
                        //                                         </div>
                        //                                         <div class="col-12">
                        //                                             <div class="right-nft-content-here text-center">`;
                        //                                                 if(res1[i].NFT_auction>0){ 
                        //                                               html+=` <a href="https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res1[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_1${res1[i].ID}">Place a bid</button></a>`; } else {
                        //                                               html+=` <a href="https://ramlogics.com/wsum-NFT1/buy_description.php?id=${res1[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_1${res1[i].ID}">Buy</button></a> `;}  
                        //                                           html+=` </div>
                        //                                         </div>
                                                                
                        //                                     </div>
                        //                                 </div>
                        //                             </div>
                        //                       </div>
                        //                       `;
                                            
                        //                     if(res1[i].NFT_auction>0){
                        //                     var id='time1'+res1[i].ID;
                        //                     console.log(id);
                        //                     // var id='time1'+res1[i].ID;
                        //                     var lid = 'bid_1'+res1[i].ID;
                        //                     var auctiontime=res1[i].NFT_auction_time;
                        //                     var x = setInterval(function() { 
                        //                         // console.log(id);
                        //                         // console.log(lid);
                        //                         // console.log(auctiontime);
                                            
                        //                     var dd= timerr(id, lid, auctiontime );
                        //                         if (dd < 0) {
                        //                             clearInterval(x);
                        //                             document.getElementById(id).innerHTML="expired";
                        //                             document.getElementById(lid).disabled=false;
                        //                                   }
                                            
                        //                             }, 1000);
                        //                         }
                                                
                        //                     document.getElementById("loaddata1").innerHTML = html;
                        //                     }
                                     
                        //               })
                               
                        //         }
                        //           $(window).on('load', function() { 
                        //               console.log("hello");
                        //               loadfunction(4);
                        //           });
                        //             $("#loadMore1").on("click",function(){
                        //                 let value =Number($('#loadMore1').val());
                        //                 $('#loadMore1').val(Number(value+8));
                        //                 let myvalue = Number($('#loadMore1').val());
                        //                 loadfunction(myvalue);
                        //              })
                                
                            </script>
                                 
                        <!--photography-->
                     <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Photography' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4 " ;
                                      $data = mysqli_query($link,$query);
                                        while($res2= mysqli_fetch_assoc($data))
                                        { ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                            <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res2['NFT_name'].",  ".$res2['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res2['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res2['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res2['NFT_id']?>&p[title]=<?php echo $res2['NFT_name'].",  ".$res2['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res2['NFT_id']?>}&title={<?php echo $res2['NFT_name'].",  ".$res2['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res2['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res2['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                               <?if($res2['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim2e<?php echo $res2['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res2['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res2['NFT_price'],5);?> <span> <?php echo $res2['NFT_payment']?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res2['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res2['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res2['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_2<?php echo $res2['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res2['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_2<?php echo $res2['ID'];?>">Buy</button></a> <? } ?> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                     <?if($res2['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim2e<?php echo $res2['ID'];?>';
                                        var lid = 'bid_2<?php echo $res2['ID'];?>';
                                        var dd= timerr('tim2e<?php echo $res2['ID'];?>', 'bid_2<?php echo $res2['ID'];?>', '<?php echo $res2["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                   </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <script>
                            //   function loadfunc2(value) { 
                            //             console.log("ready!");
                            //             let formdata = new FormData();
                            //             formdata.append("type","Photography");
                            //             formdata.append("value",value);
                                       
                            //             let requestOptions = {
                            //                 method: "POST",
                            //                 body: formdata,
                            //                 redirect: "follow",
                            //               };
                                         
                            //             fetch("https://ramlogics.com/wsum-NFT1/load.php", requestOptions)
                            //                 .then((response) => response.json())
                            //                 .then((res2) => {
                            //                     console.log(res2);
                            //                     let html="";
                                                
                            //                     for (i=0; i < res2.length; i++){
                                            
                                               
                            //                     html+=`
                            //                           <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                            //                           <div class="auction-top pb-3">
                            //                             <div class="row m-0">
                            //                                 <div class="col p-0">
                                                             
                            //                                 </div>
                            //                                  <div class="col-auto p-0">
                            //                                     <div class="dropleft">
                            //                                       <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            //                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                            //                                       </button>
                            //                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            //                                         <div class="dropdown_h_toggle">
                            //                                             <div class="dropdown-item">Share</div>
                            //                                             <div class="dropdown_hv_menu">
                            //                                                 <ul class="list-unstyled d-flex m-0">
                            //                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${res2[i].NFT_name+res2[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res2[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res2[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                            //                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res2[i].NFT_id}&p[title]=${res2[i].NFT_name + res2[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                            //                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res2[i].NFT_id}}&title={${res2[i].NFT_name + res2[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                            //                                                 </ul>
                            //                                             </div>
                            //                                         </div> 
                            //                                         <a href="report.php?id=${res2[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                            //                                       </div>
                            //                                     </div>
                            //                                     <style> 
                            //                                         .dropdown_h_toggle .dropdown_hv_menu {
                            //                                             position: absolute;
                            //                                             transition: .5s;
                            //                                             transform: scale(1) translateX(109px);
                            //                                             opacity: 0;
                            //                                             background: #4e9d66;
                            //                                             border-radius: 5px;
                            //                                             top: 5px;
                            //                                         }
                            //                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                            //                                             transform: scale(1) translateX(10px);
                            //                                             opacity: 1; 
                            //                                         }
                            //                                         .dropdown_hv_menu ul li i{
                            //                                             color:#fff;
                            //                                         }
                            //                                     </style>
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                             <div class="auction-img text-center">
                            //                             <img class="w-100" src="https://ramlogics.com/wsum-NFT1/${res2[i].NFT_image}" alt="Card image cap" />
                            //                          </div>
                            //                         <div class="auction-content">
                            //                             <div class="auction-time">`;
                            //                                  if(res2[i].NFT_auction>0){ 
                            //                                 html+=`<h6 class="timer"><a><span id="time2${res2[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                            //                                  } else{
                            //                                 html+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                            //                                  }
                                                            
                            //                               html+=` <div class="row m-0">
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex">
                            //                                             <div class="wsum_product_name text_nft_heading">${res2[i].NFT_name}</div>
                            //                                             <span class="text-muted d-flex">${res2[i].NFT_price} <span> ${res2[i].NFT_payment}</span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex my-2">
                            //                                             <div class="wsum_product_name text_nft_heading">Tree plant</div>
                            //                                             <span class="text-muted d-flex">${res2[i].NFT_treeplant} </span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12">
                            //                                         <div class="right-nft-content-here text-center">`;
                            //                                             if(res2[i].NFT_auction>0){ 
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res2[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_2${res2[i].ID}">Place a bid</button></a>`; } else {
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/buy_description.php?id=${res2[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_2${res2[i].ID}">Buy</button></a> `;}  
                            //                                       html+=` </div>
                            //                                     </div>
                                                                
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                   </div>
                            //                   `;
                                            
                            //                 if(res2[i].NFT_auction>0){
                            //                 var id='time2'+res2[i].ID;
                            //                 console.log(id);
                            //                 // var id='time1'+res1[i].ID;
                            //                 var lid = 'bid_2'+res2[i].ID;
                            //                 var auctiontime=res2[i].NFT_auction_time;
                            //                 var x = setInterval(function() { 
                            //                     // console.log(id);
                            //                     // console.log(lid);
                            //                     // console.log(auctiontime);
                                            
                            //                 var dd= timerr(id, lid, auctiontime );
                            //                     if (dd < 0) {
                            //                         clearInterval(x);
                            //                         document.getElementById(id).innerHTML="expired";
                            //                         document.getElementById(lid).disabled=false;
                            //                               }
                                            
                            //                         }, 1000);
                            //                     }
                                                
                            //                 document.getElementById("loaddata2").innerHTML = html;
                            //                 }
                                     
                            //           })
                               
                            //     }
                            //       $(window).on('load', function() { 
                            //           console.log("hello");
                            //           loadfunc2(4);
                            //       });
                            //         $("#loadMore2").on("click",function(){
                            //             let value =Number($('#loadMore2').val());
                            //             $('#loadMore2').val(Number(value+8));
                            //             let myvalue = Number($('#loadMore2').val());
                            //             loadfunc2(myvalue);
                            //          })
                                
                            </script>
                         
                        <!--cacao-->
                       <div class="tab-pane fade" id="cacao" role="tabpanel" aria-labelledby="cacao-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Cacao' AND NFT_resell='on' ORDER BY ID DESC LIMIT 4 " ;
                                      $data = mysqli_query($link,$query);
                                        while($res3= mysqli_fetch_assoc($data))
                                        { ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res3['NFT_name'].",  ".$res3['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res3['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res3['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res3['NFT_id']?>&p[title]=<?php echo $res3['NFT_name'].",  ".$res3['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res3['NFT_id']?>}&title={<?php echo $res3['NFT_name'].",  ".$res3['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res3['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res3['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                 <?if($res3['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim3e<?php echo $res3['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res3['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res3['NFT_price'],5);?> <span> <?php echo $res3['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res3['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res3['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res3['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_3<?php echo $res3['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res3['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_3<?php echo $res3['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <script>
                                      <?if($res3['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim3e<?php echo $res3['ID'];?>';
                                        var lid = 'bid_3<?php echo $res3['ID'];?>';
                                        var dd= timerr('tim3e<?php echo $res3['ID'];?>', 'bid_3<?php echo $res3['ID'];?>', '<?php echo $res3["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                   </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <script>
                            //   function loadfunc3(value) { 
                            //             console.log("ready!");
                            //             let formdata = new FormData();
                            //             formdata.append("type","Cacao");
                            //             formdata.append("value",value);
                                       
                            //             let requestOptions = {
                            //                 method: "POST",
                            //                 body: formdata,
                            //                 redirect: "follow",
                            //               };
                                         
                            //             fetch("https://ramlogics.com/wsum-NFT1/load.php", requestOptions)
                            //                 .then((response) => response.json())
                            //                 .then((res3) => {
                            //                     console.log(res3);
                            //                     let html="";
                                                
                            //                     for (i=0; i < res3.length; i++){
                                            
                                               
                            //                     html+=`
                            //                           <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                            //                           <div class="auction-top pb-3">
                            //                             <div class="row m-0">
                            //                                 <div class="col p-0">
                                                             
                            //                                 </div>
                            //                                  <div class="col-auto p-0">
                            //                                     <div class="dropleft">
                            //                                       <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            //                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                            //                                       </button>
                            //                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            //                                         <div class="dropdown_h_toggle">
                            //                                             <div class="dropdown-item">Share</div>
                            //                                             <div class="dropdown_hv_menu">
                            //                                                 <ul class="list-unstyled d-flex m-0">
                            //                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${res3[i].NFT_name+res3[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res3[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res3[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                            //                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res3[i].NFT_id}&p[title]=${res3[i].NFT_name + res3[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                            //                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res3[i].NFT_id}}&title={${res3[i].NFT_name + res3[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                            //                                                 </ul>
                            //                                             </div>
                            //                                         </div> 
                            //                                         <a href="report.php?id=${res3[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                            //                                       </div>
                            //                                     </div>
                            //                                     <style> 
                            //                                         .dropdown_h_toggle .dropdown_hv_menu {
                            //                                             position: absolute;
                            //                                             transition: .5s;
                            //                                             transform: scale(1) translateX(109px);
                            //                                             opacity: 0;
                            //                                             background: #4e9d66;
                            //                                             border-radius: 5px;
                            //                                             top: 5px;
                            //                                         }
                            //                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                            //                                             transform: scale(1) translateX(10px);
                            //                                             opacity: 1; 
                            //                                         }
                            //                                         .dropdown_hv_menu ul li i{
                            //                                             color:#fff;
                            //                                         }
                            //                                     </style>
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                             <div class="auction-img text-center">
                            //                             <img class="w-100" src="https://ramlogics.com/wsum-NFT1/${res3[i].NFT_image}" alt="Card image cap" />
                            //                          </div>
                            //                         <div class="auction-content">
                            //                             <div class="auction-time">`;
                            //                                  if(res3[i].NFT_auction>0){ 
                            //                                 html+=`<h6 class="timer"><a><span id="time3${res3[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                            //                                  } else{
                            //                                 html+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                            //                                  }
                                                            
                            //                               html+=` <div class="row m-0">
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex">
                            //                                             <div class="wsum_product_name text_nft_heading">${res3[i].NFT_name}</div>
                            //                                             <span class="text-muted d-flex">${res3[i].NFT_price} <span> ${res3[i].NFT_payment}</span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex my-2">
                            //                                             <div class="wsum_product_name text_nft_heading">Tree plant</div>
                            //                                             <span class="text-muted d-flex">${res3[i].NFT_treeplant} </span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12">
                            //                                         <div class="right-nft-content-here text-center">`;
                            //                                             if(res3[i].NFT_auction>0){ 
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res3[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_3${res3[i].ID}">Place a bid</button></a>`; } else {
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/buy_description.php?id=${res3[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_3${res3[i].ID}">Buy</button></a> `;}  
                            //                                       html+=` </div>
                            //                                     </div>
                                                                
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                   </div>
                            //                   `;
                                            
                            //                 if(res3[i].NFT_auction>0){
                            //                 var id='time3'+res3[i].ID;
                            //                 console.log(id);
                            //                 // var id='time1'+res1[i].ID;
                            //                 var lid = 'bid_3'+res3[i].ID;
                            //                 var auctiontime=res3[i].NFT_auction_time;
                            //                 var x = setInterval(function() { 
                            //                     // console.log(id);
                            //                     // console.log(lid);
                            //                     // console.log(auctiontime);
                                            
                            //                 var dd= timerr(id, lid, auctiontime );
                            //                     if (dd < 0) {
                            //                         clearInterval(x);
                            //                         document.getElementById(id).innerHTML="expired";
                            //                         document.getElementById(lid).disabled=false;
                            //                               }
                                            
                            //                         }, 1000);
                            //                     }
                                                
                            //                 document.getElementById("loaddata3").innerHTML = html;
                            //                 }
                                     
                            //           })
                               
                            //     }
                            //       $(window).on('load', function() { 
                            //           console.log("hello");
                            //           loadfunc3(4);
                            //       });
                            //         $("#loadMore3").on("click",function(){
                            //             let value =Number($('#loadMore3').val());
                            //             $('#loadMore3').val(Number(value+8));
                            //             let myvalue = Number($('#loadMore3').val());
                            //             loadfunc3(myvalue);
                            //          })
                                
                            </script>
                        
                        <!--cofee-->
                        
                        <div class="tab-pane fade" id="Coffee" role="tabpanel" aria-labelledby="Coffee-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                          $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Coffee' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                          $data = mysqli_query($link,$query);
                                            while($res4= mysqli_fetch_assoc($data))
                                            {
                                    
                                        ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res4['NFT_name'].",  ".$res4['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res4['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res4['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res4['NFT_id']?>&p[title]=<?php echo $res4['NFT_name'].",  ".$res4['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res4['NFT_id']?>}&title={<?php echo $res4['NFT_name'].",  ".$res4['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res4['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res4['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                <?if($res4['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim4e<?php echo $res4['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res4['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <h6 class="text-muted d-flex"><?php echo number_format($res4['NFT_price'],5);?> <span> <?php echo $res4['NFT_payment']?></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res4['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res4['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res4['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_4<?php echo $res4['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res4['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_4<?php echo $res4['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                     <?if($res4['NFT_auction']>0){ ?>
                                     var x = setInterval(function() { 
                                        var id='tim4e<?php echo $res4['ID'];?>';
                                        var lid = 'bid_4<?php echo $res4['ID'];?>';
                                        var dd= timerr('tim4e<?php echo $res4['ID'];?>', 'bid_4<?php echo $res4['ID'];?>', '<?php echo $res4["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <script>
                            //   function loadfunc4(value) { 
                            //             console.log("ready!");
                            //             let formdata = new FormData();
                            //             formdata.append("type","Coffee");
                            //             formdata.append("value",value);
                                       
                            //             let requestOptions = {
                            //                 method: "POST",
                            //                 body: formdata,
                            //                 redirect: "follow",
                            //               };
                                         
                            //             fetch("https://ramlogics.com/wsum-NFT1/load.php", requestOptions)
                            //                 .then((response) => response.json())
                            //                 .then((res4) => {
                            //                     console.log(res4);
                            //                     let html="";
                                                
                            //                     for (i=0; i < res4.length; i++){
                                            
                                               
                            //                     html+=`
                            //                           <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                            //                           <div class="auction-top pb-3">
                            //                             <div class="row m-0">
                            //                                 <div class="col p-0">
                                                             
                            //                                 </div>
                            //                                  <div class="col-auto p-0">
                            //                                     <div class="dropleft">
                            //                                       <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            //                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                            //                                       </button>
                            //                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            //                                         <div class="dropdown_h_toggle">
                            //                                             <div class="dropdown-item">Share</div>
                            //                                             <div class="dropdown_hv_menu">
                            //                                                 <ul class="list-unstyled d-flex m-0">
                            //                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${res4[i].NFT_name+res4[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res4[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res4[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                            //                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res4[i].NFT_id}&p[title]=${res4[i].NFT_name + res4[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                            //                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res4[i].NFT_id}}&title={${res4[i].NFT_name + res4[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                            //                                                 </ul>
                            //                                             </div>
                            //                                         </div> 
                            //                                         <a href="report.php?id=${res4[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                            //                                       </div>
                            //                                     </div>
                            //                                     <style> 
                            //                                         .dropdown_h_toggle .dropdown_hv_menu {
                            //                                             position: absolute;
                            //                                             transition: .5s;
                            //                                             transform: scale(1) translateX(109px);
                            //                                             opacity: 0;
                            //                                             background: #4e9d66;
                            //                                             border-radius: 5px;
                            //                                             top: 5px;
                            //                                         }
                            //                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                            //                                             transform: scale(1) translateX(10px);
                            //                                             opacity: 1; 
                            //                                         }
                            //                                         .dropdown_hv_menu ul li i{
                            //                                             color:#fff;
                            //                                         }
                            //                                     </style>
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                             <div class="auction-img text-center">
                            //                             <img class="w-100" src="https://ramlogics.com/wsum-NFT1/${res4[i].NFT_image}" alt="Card image cap" />
                            //                          </div>
                            //                         <div class="auction-content">
                            //                             <div class="auction-time">`;
                            //                                  if(res4[i].NFT_auction>0){ 
                            //                                 html+=`<h6 class="timer"><a><span id="time4${res4[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                            //                                  } else{
                            //                                 html+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                            //                                  }
                                                            
                            //                               html+=` <div class="row m-0">
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex">
                            //                                             <div class="wsum_product_name text_nft_heading">${res4[i].NFT_name}</div>
                            //                                             <span class="text-muted d-flex">${res4[i].NFT_price} <span> ${res4[i].NFT_payment}</span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex my-2">
                            //                                             <div class="wsum_product_name text_nft_heading">Tree plant</div>
                            //                                             <span class="text-muted d-flex">${res4[i].NFT_treeplant} </span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12">
                            //                                         <div class="right-nft-content-here text-center">`;
                            //                                             if(res4[i].NFT_auction>0){ 
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res4[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_4${res4[i].ID}">Place a bid</button></a>`; } else {
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/buy_description.php?id=${res4[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_4${res4[i].ID}">Buy</button></a> `;}  
                            //                                       html+=` </div>
                            //                                     </div>
                                                                
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                   </div>
                            //                   `;
                                            
                            //                 if(res4[i].NFT_auction>0){
                            //                 var id='time4'+res4[i].ID;
                            //                 console.log(id);
                            //                 // var id='time1'+res1[i].ID;
                            //                 var lid = 'bid_4'+res4[i].ID;
                            //                 var auctiontime=res4[i].NFT_auction_time;
                            //                 var x = setInterval(function() { 
                            //                     // console.log(id);
                            //                     // console.log(lid);
                            //                     // console.log(auctiontime);
                                            
                            //                 var dd= timerr(id, lid, auctiontime );
                            //                     if (dd < 0) {
                            //                         clearInterval(x);
                            //                         document.getElementById(id).innerHTML="expired";
                            //                         document.getElementById(lid).disabled=false;
                            //                               }
                                            
                            //                         }, 1000);
                            //                     }
                                                
                            //                 document.getElementById("loaddata4").innerHTML = html;
                            //                 }
                                     
                            //           })
                               
                            //     }
                            //       $(window).on('load', function() { 
                            //           console.log("hello");
                            //           loadfunc4(4);
                            //       });
                            //         $("#loadMore4").on("click",function(){
                            //             let value =Number($('#loadMore4').val());
                            //             $('#loadMore4').val(Number(value+8));
                            //             let myvalue = Number($('#loadMore4').val());
                            //             loadfunc4(myvalue);
                            //          })
                                
                            </script>
                        
                        <!--lemon-->
                        <div class="tab-pane fade" id="Lemon" role="tabpanel" aria-labelledby="Lemon-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Lemon' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                      $data = mysqli_query($link,$query);
                                        while($res5= mysqli_fetch_assoc($data))
                                        {
                                
                                         ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                 <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res5['NFT_name'].",  ".$res5['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res5['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res5['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res5['NFT_id']?>&p[title]=<?php echo $res5['NFT_name'].",  ".$res5['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res5['NFT_id']?>}&title={<?php echo $res5['NFT_name'].",  ".$res5['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res5['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res5['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                <?if($res5['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim5e<?php echo $res5['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res5['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res5['NFT_price'],5);?> <span> <?php echo $res5['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res5['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                             <?if($res5['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res5['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_5<?php echo $res5['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res5['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_5<?php echo $res5['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <script>
                                      <?if($res5['NFT_auction']>0){ ?>
                                     var x = setInterval(function() { 
                                        var id='tim5e<?php echo $res5['ID'];?>';
                                        var lid = 'bid_5<?php echo $res5['ID'];?>';
                                        var dd= timerr('tim5e<?php echo $res5['ID'];?>', 'bid_5<?php echo $res5['ID'];?>', '<?php echo $res5["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <script>
                            //   function loadfunc5(value) { 
                            //             console.log("ready!");
                            //             let formdata = new FormData();
                            //             formdata.append("type","Lemon");
                            //             formdata.append("value",value);
                                       
                            //             let requestOptions = {
                            //                 method: "POST",
                            //                 body: formdata,
                            //                 redirect: "follow",
                            //               };
                                         
                            //             fetch("https://ramlogics.com/wsum-NFT1/load.php", requestOptions)
                            //                 .then((response) => response.json())
                            //                 .then((res5) => {
                            //                     console.log(res5);
                            //                     let html="";
                                                
                            //                     for (i=0; i < res5.length; i++){
                                            
                                               
                            //                     html+=`
                            //                           <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                            //                           <div class="auction-top pb-3">
                            //                             <div class="row m-0">
                            //                                 <div class="col p-0">
                                                             
                            //                                 </div>
                            //                                  <div class="col-auto p-0">
                            //                                     <div class="dropleft">
                            //                                       <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            //                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                            //                                       </button>
                            //                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            //                                         <div class="dropdown_h_toggle">
                            //                                             <div class="dropdown-item">Share</div>
                            //                                             <div class="dropdown_hv_menu">
                            //                                                 <ul class="list-unstyled d-flex m-0">
                            //                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${res5[i].NFT_name+res5[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res5[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res5[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                            //                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res5[i].NFT_id}&p[title]=${res5[i].NFT_name + res5[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                            //                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res5[i].NFT_id}}&title={${res5[i].NFT_name + res5[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                            //                                                 </ul>
                            //                                             </div>
                            //                                         </div> 
                            //                                         <a href="report.php?id=${res5[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                            //                                       </div>
                            //                                     </div>
                            //                                     <style> 
                            //                                         .dropdown_h_toggle .dropdown_hv_menu {
                            //                                             position: absolute;
                            //                                             transition: .5s;
                            //                                             transform: scale(1) translateX(109px);
                            //                                             opacity: 0;
                            //                                             background: #4e9d66;
                            //                                             border-radius: 5px;
                            //                                             top: 5px;
                            //                                         }
                            //                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                            //                                             transform: scale(1) translateX(10px);
                            //                                             opacity: 1; 
                            //                                         }
                            //                                         .dropdown_hv_menu ul li i{
                            //                                             color:#fff;
                            //                                         }
                            //                                     </style>
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                             <div class="auction-img text-center">
                            //                             <img class="w-100" src="https://ramlogics.com/wsum-NFT1/${res5[i].NFT_image}" alt="Card image cap" />
                            //                          </div>
                            //                         <div class="auction-content">
                            //                             <div class="auction-time">`;
                            //                                  if(res5[i].NFT_auction>0){ 
                            //                                 html+=`<h6 class="timer"><a><span id="time5${res5[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                            //                                  } else{
                            //                                 html+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                            //                                  }
                                                            
                            //                               html+=` <div class="row m-0">
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex">
                            //                                             <div class="wsum_product_name text_nft_heading">${res5[i].NFT_name}</div>
                            //                                             <span class="text-muted d-flex">${res5[i].NFT_price} <span> ${res5[i].NFT_payment}</span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex my-2">
                            //                                             <div class="wsum_product_name text_nft_heading">Tree plant</div>
                            //                                             <span class="text-muted d-flex">${res5[i].NFT_treeplant} </span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12">
                            //                                         <div class="right-nft-content-here text-center">`;
                            //                                             if(res5[i].NFT_auction>0){ 
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res5[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_5${res5[i].ID}">Place a bid</button></a>`; } else {
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/buy_description.php?id=${res5[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_5${res5[i].ID}">Buy</button></a> `;}  
                            //                                       html+=` </div>
                            //                                     </div>
                                                                
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                   </div>
                            //                   `;
                                            
                            //                 if(res5[i].NFT_auction>0){
                            //                 var id='time5'+res5[i].ID;
                            //                 console.log(id);
                            //                 // var id='time1'+res1[i].ID;
                            //                 var lid = 'bid_5'+res5[i].ID;
                            //                 var auctiontime=res5[i].NFT_auction_time;
                            //                 var x = setInterval(function() { 
                            //                     // console.log(id);
                            //                     // console.log(lid);
                            //                     // console.log(auctiontime);
                                            
                            //                 var dd= timerr(id, lid, auctiontime );
                            //                     if (dd < 0) {
                            //                         clearInterval(x);
                            //                         document.getElementById(id).innerHTML="expired";
                            //                         document.getElementById(lid).disabled=false;
                            //                               }
                                            
                            //                         }, 1000);
                            //                     }
                                                
                            //                 document.getElementById("loaddata5").innerHTML = html;
                            //                 }
                                     
                            //           })
                               
                            //     }
                            //       $(window).on('load', function() { 
                            //           console.log("hello");
                            //           loadfunc5(4);
                            //       });
                            //         $("#loadMore5").on("click",function(){
                            //             let value =Number($('#loadMore5').val());
                            //             $('#loadMore5').val(Number(value+8));
                            //             let myvalue = Number($('#loadMore5').val());
                            //             loadfunc5(myvalue);
                            //          })
                                
                            </script>
                            
                        <!--Baobab-->
                        <div class="tab-pane fade" id="Baobab" role="tabpanel" aria-labelledby="Baobab-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Baobab' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4 " ;
                                      $data = mysqli_query($link,$query);
                                        while($res6= mysqli_fetch_assoc($data))
                                        {
                                
                                    ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                 <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res6['NFT_name'].",  ".$res6['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res6['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res6['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res6['NFT_id']?>&p[title]=<?php echo $res6['NFT_name'].",  ".$res6['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res6['NFT_id']?>}&title={<?php echo $res6['NFT_name'].",  ".$res6['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res6['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res6['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                <?if($res6['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim6e<?php echo $res6['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res6['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res6['NFT_price'],5);?><span> <?php echo $res6['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res6['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="right-nft-content-here">
                                                             <?if($res6['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res6['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_6<?php echo $res6['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res6['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_6<?php echo $res6['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      <script>
                                       <?if($res6['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim6e<?php echo $res6['ID'];?>';
                                        var lid = 'bid_6<?php echo $res6['ID'];?>';
                                        var dd= timerr('tim6e<?php echo $res6['ID'];?>', 'bid_6<?php echo $res6['ID'];?>', '<?php echo $res6["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <script>
                            //   function loadfunc6(value) { 
                            //             console.log("ready!");
                            //             let formdata = new FormData();
                            //             formdata.append("type","Baobab");
                            //             formdata.append("value",value);
                                       
                            //             let requestOptions = {
                            //                 method: "POST",
                            //                 body: formdata,
                            //                 redirect: "follow",
                            //               };
                                         
                            //             fetch("https://ramlogics.com/wsum-NFT1/load.php", requestOptions)
                            //                 .then((response) => response.json())
                            //                 .then((res6) => {
                            //                     console.log(res6);
                            //                     let html="";
                                                
                            //                     for (i=0; i < res6.length; i++){
                                            
                                               
                            //                     html+=`
                            //                           <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                            //                           <div class="auction-top pb-3">
                            //                             <div class="row m-0">
                            //                                 <div class="col p-0">
                                                             
                            //                                 </div>
                            //                                  <div class="col-auto p-0">
                            //                                     <div class="dropleft">
                            //                                       <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            //                                         <i class="fas fa-ellipsis-v text_nft_heading"></i>
                            //                                       </button>
                            //                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            //                                         <div class="dropdown_h_toggle">
                            //                                             <div class="dropdown-item">Share</div>
                            //                                             <div class="dropdown_hv_menu">
                            //                                                 <ul class="list-unstyled d-flex m-0">
                            //                                                     <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${res6[i].NFT_name+res6[i].NFT_discription} &url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res6[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res6[i].NFT_id}"><i class="fab fa-twitter"></i></a></li>
                            //                                                     <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res6[i].NFT_id}&p[title]=${res6[i].NFT_name + res6[i].NFT_discription}"><i class="fab fa-facebook"></i></a></li>
                            //                                                     <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res6[i].NFT_id}}&title={${res6[i].NFT_name + res6[i].NFT_discription}}"><i class="fab fa-linkedin-in"></i></a></li>
                            //                                                 </ul>
                            //                                             </div>
                            //                                         </div> 
                            //                                         <a href="report.php?id=${res6[i].NFT_id}" class="dropdown-item " target="blank">Report</a>
                            //                                       </div>
                            //                                     </div>
                            //                                     <style> 
                            //                                         .dropdown_h_toggle .dropdown_hv_menu {
                            //                                             position: absolute;
                            //                                             transition: .5s;
                            //                                             transform: scale(1) translateX(109px);
                            //                                             opacity: 0;
                            //                                             background: #4e9d66;
                            //                                             border-radius: 5px;
                            //                                             top: 5px;
                            //                                         }
                            //                                         .dropdown_h_toggle:hover .dropdown_hv_menu { 
                            //                                             transform: scale(1) translateX(10px);
                            //                                             opacity: 1; 
                            //                                         }
                            //                                         .dropdown_hv_menu ul li i{
                            //                                             color:#fff;
                            //                                         }
                            //                                     </style>
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                             <div class="auction-img text-center">
                            //                             <img class="w-100" src="https://ramlogics.com/wsum-NFT1/${res6[i].NFT_image}" alt="Card image cap" />
                            //                          </div>
                            //                         <div class="auction-content">
                            //                             <div class="auction-time">`;
                            //                                  if(res6[i].NFT_auction>0){ 
                            //                                 html+=`<h6 class="timer"><a><span id="time6${res6[i].ID}">00h 00m 00s</span> left 🔥</a></h6>`;
                                                                 
                            //                                  } else{
                            //                                 html+=` <h6 class="timer"><a>buy is going on 🔥</a></h6>`;
                            //                                  }
                                                            
                            //                               html+=` <div class="row m-0">
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex">
                            //                                             <div class="wsum_product_name text_nft_heading">${res6[i].NFT_name}</div>
                            //                                             <span class="text-muted d-flex">${res6[i].NFT_price} <span> ${res6[i].NFT_payment}</span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12 p-0">
                            //                                         <div class="left-nft-content d-flex my-2">
                            //                                             <div class="wsum_product_name text_nft_heading">Tree plant</div>
                            //                                             <span class="text-muted d-flex">${res6[i].NFT_treeplant} </span></span>
                            //                                         </div>
                            //                                     </div>
                            //                                     <div class="col-12">
                            //                                         <div class="right-nft-content-here text-center">`;
                            //                                             if(res6[i].NFT_auction>0){ 
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/bid_description.php?id=${res6[i].NFT_id}"><button class="btn btn-default border-color-set" id="bid_6${res6[i].ID}">Place a bid</button></a>`; } else {
                            //                                           html+=` <a href="https://ramlogics.com/wsum-NFT1/buy_description.php?id=${res6[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy_6${res6[i].ID}">Buy</button></a> `;}  
                            //                                       html+=` </div>
                            //                                     </div>
                                                                
                            //                                 </div>
                            //                             </div>
                            //                         </div>
                            //                   </div>
                            //                   `;
                                            
                            //                 if(res6[i].NFT_auction>0){
                            //                 var id='time6'+res6[i].ID;
                            //                 console.log(id);
                            //                 // var id='time1'+res1[i].ID;
                            //                 var lid = 'bid_6'+res6[i].ID;
                            //                 var auctiontime=res6[i].NFT_auction_time;
                            //                 var x = setInterval(function() { 
                            //                     // console.log(id);
                            //                     // console.log(lid);
                            //                     // console.log(auctiontime);
                                            
                            //                 var dd= timerr(id, lid, auctiontime );
                            //                     if (dd < 0) {
                            //                         clearInterval(x);
                            //                         document.getElementById(id).innerHTML="expired";
                            //                         document.getElementById(lid).disabled=false;
                            //                               }
                                            
                            //                         }, 1000);
                            //                     }
                                                
                            //                 document.getElementById("loaddata6").innerHTML = html;
                            //                 }
                                     
                            //           })
                               
                            //     }
                            //       $(window).on('load', function() { 
                            //           console.log("hello");
                            //           loadfunc6(4);
                            //       });
                            //         $("#loadMore6").on("click",function(){
                            //             let value =Number($('#loadMore6').val());
                            //             $('#loadMore6').val(Number(value+8));
                            //             let myvalue = Number($('#loadMore6').val());
                            //             loadfunc6(myvalue);
                            //          })
                                
                            </script>
                        <!--Dogstree-->
                        <div class="tab-pane fade" id="Dogstree" role="tabpanel" aria-labelledby="Dogstree-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='The Dogs Tree' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                     
                                      $data = mysqli_query($link,$query);
                                        while($res7= mysqli_fetch_assoc($data))
                                        {
                                
                                    ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                               <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res7['NFT_name'].",  ".$res7['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res7['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res7['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res7['NFT_id']?>&p[title]=<?php echo $res7['NFT_name'].",  ".$res7['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res7['NFT_id']?>}&title={<?php echo $res7['NFT_name'].",  ".$res7['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res7['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res7['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                 <?if($res7['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim7e<?php echo $res7['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res7['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res7['NFT_price'],5);?> <span> <?php echo $res7['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res7['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                              <?if($res7['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res7['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_7<?php echo $res7['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res7['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_7<?php echo $res7['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <script>
                                       
                                        <?if($res7['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim7e<?php echo $res7['ID'];?>';
                                        var lid = 'bid_7<?php echo $res7['ID'];?>';
                                        var dd= timerr('tim7e<?php echo $res7['ID'];?>', 'bid_7<?php echo $res7['ID'];?>','<?php echo $res7["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TuttiFrutti" role="tabpanel" aria-labelledby="TuttiFrutti-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Tutti Futti' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                      $data = mysqli_query($link,$query);
                                        while($res8= mysqli_fetch_assoc($data))
                                        {
                                
                                    ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                
                                                <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res8['NFT_name'].",  ".$res8['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res8['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res8['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res8['NFT_id']?>&p[title]=<?php echo $res8['NFT_name'].",  ".$res8['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res8['NFT_id']?>}&title={<?php echo $res8['NFT_name'].",  ".$res8['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res8['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res8['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                <?if($res8['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim8e<?php echo $res8['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res8['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <h6 class="text-muted d-flex"><?php echo number_format($res8['NFT_price'],5);?><span> <?php echo $res8['NFT_payment']?></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res8['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                               <?if($res8['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res8['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_8<?php echo $res8['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res8['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_8<?php echo $res8['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <script>
                                         <?if($res8['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim8e<?php echo $res8['ID'];?>';
                                        var lid = 'bid_8<?php echo $res8['ID'];?>';
                                        var dd= timerr('tim8e<?php echo $res8['ID'];?>', 'bid_8<?php echo $res8['ID'];?>', '<?php echo $res8["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Plantall" role="tabpanel" aria-labelledby="Plantall-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Plant Them All' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                      $data = mysqli_query($link,$query);
                                        while($res9= mysqli_fetch_assoc($data))
                                        {  ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                               <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res9['NFT_name'].",  ".$res9['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res9['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res9['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res9['NFT_id']?>&p[title]=<?php echo $res9['NFT_name'].",  ".$res9['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res9['NFT_id']?>}&title={<?php echo $res9['NFT_name'].",  ".$res9['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res9['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res9['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                               <?if($res9['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim9e<?php echo $res9['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res9['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res9['NFT_price'],5);?> <span> <?php echo $res9['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res9['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                           <?if($res9['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res9['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_9<?php echo $res9['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res9['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_9<?php echo $res9['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <script>
                                        <?if($res9['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim9e<?php echo $res9['ID'];?>';
                                        var lid = 'bid_9<?php echo $res9['ID'];?>';
                                        var dd= timerr('tim9e<?php echo $res9['ID'];?>', 'bid_9<?php echo $res9['ID'];?>', '<?php echo $res9["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Housing" role="tabpanel" aria-labelledby="Housing-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                          $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Housing' AND NFT_resell='on' ORDER BY ID DESC   LIMIT 4" ;
                                          $data = mysqli_query($link,$query);
                                            while($res10= mysqli_fetch_assoc($data))
                                            {
                                    
                                        ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                  <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res10['NFT_name'].",  ".$res10['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res10['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res10['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res10['NFT_id']?>&p[title]=<?php echo $res10['NFT_name'].",  ".$res10['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res10['NFT_id']?>}&title={<?php echo $res10['NFT_name'].",  ".$res10['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res10['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res10['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                <?if($res10['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim10e<?php echo $res10['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res10['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                             <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res10['NFT_price'],5);?> <span> <?php echo $res10['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res10['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res10['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res10['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_10<?php echo $res10['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res10['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_10<?php echo $res10['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      <script>
                                       <?if($res10['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim10e<?php echo $res10['ID'];?>';
                                        var lid = 'bid_10<?php echo $res10['ID'];?>';
                                        var dd= timerr('tim10e<?php echo $res10 ['ID'];?>', 'bid_10<?php echo $res10['ID'];?>', '<?php echo $res10["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                        </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Airplane" role="tabpanel" aria-labelledby="Airplane-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Airplane' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                      $data = mysqli_query($link,$query);
                                        while($res11= mysqli_fetch_assoc($data))
                                        {
                                
                                    ?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                  <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res11['NFT_name'].",  ".$res11['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res11['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res11['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res11['NFT_id']?>&p[title]=<?php echo $res11['NFT_name'].",  ".$res11['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res11['NFT_id']?>}&title={<?php echo $res11['NFT_name'].",  ".$res11['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res11['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res11['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                                 <?if($res11['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim11e<?php echo $res11['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res11['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res11['NFT_price'],5);?> <span> <?php echo $res11['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res11['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                            <?if($res11['NFT_auction']>0){ ?>
                                                            <a href="./bid_description.php?id=<?php echo $res11['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_11<?php echo $res11['ID'];?>">Place a bid</button></a><? } else {?>
                                                            <a href="./buy_description.php?id=<?php echo $res11['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_11<?php echo $res11['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                     <?if($res11['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim11e<?php echo $res11['ID'];?>';
                                        var lid = 'bid_11<?php echo $res11['ID'];?>';
                                        var dd= timerr('tim11e<?php echo $res11 ['ID'];?>', 'bid_11<?php echo $res11['ID'];?>', '<?php echo $res11["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                    </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Car" role="tabpanel" aria-labelledby="Car-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                      $query = "SELECT * FROM `NFT_info` WHERE NFT_type='Car' AND NFT_resell='on' ORDER BY ID DESC  LIMIT 4" ;
                                      $data = mysqli_query($link,$query);
                                        while($res12= mysqli_fetch_assoc($data))
                                        {?>
                                    <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                        <div class="auction-top">
                                            <div class="row m-0">
                                                  <div class="col p-0">
                                                    <!--<div class="inner_img1">-->
                                                    <!--    <img src="assets/img/creator_img.png" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="collection:wsum">-->
                                                    <!--    <img src="assets/img/img2.png" class="second" height="28px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Owner:real">-->
                                                    <!--    <img src="assets/img/creator_img.png" class="thired" height="30px" style="width:30px!important;display:inline-block!important" data-toggle="tooltip" data-placement="top" title="Creator:real">-->
                                                    <!--</div>-->
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=<?php echo $res12['NFT_name'].",  ".$res12['NFT_discription']; ?> &url=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res12['NFT_id']?>&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res12['NFT_id']?>"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res12['NFT_id']?>&p[title]=<?php echo $res12['NFT_name'].",  ".$res12['NFT_discription']; ?>"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=<?php echo $res12['NFT_id']?>}&title={<?php echo $res12['NFT_name'].",  ".$res12['NFT_discription']; ?>}"><i class="fab fa-linkedin-in"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="report.php?id=<?php echo $res12['NFT_id']?>" class="dropdown-item " target="blank">Report</a>
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
                                            <img class="w-100" src="./<?php echo $res12['NFT_image'];?>" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time">
                                               <?if($res12['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="tim12e<?php echo $res12['ID'];?>">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                
                                                <div class="row m-0">
                                              
                                                </div>
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <h5 class="text_nft_heading"><?php echo $res12['NFT_name'];?></h5>
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading"><b>Minimum  Bid</b></div>
                                                            <span class="text-muted d-flex"><?php echo number_format($res12['NFT_price'],5);?> <span> <?php echo $res12['NFT_payment']?></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex"><?php echo $res12['NFT_treeplant'];?>%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">
                                                              <?if($res12['NFT_auction']>0){ ?>
                                                    <a href="./bid_description.php?id=<?php echo $res12['NFT_id'];?>"><button class="btn btn-default border-color-set" id="bid_12<?php echo $res12['ID'];?>">Place a bid</button></a><? } else {?>
                                                    <a href="./buy_description.php?id=<?php echo $res12['NFT_id'];?>"><button class="btn btn-default border-color-set" id="buy_12<?php echo $res12['ID'];?>">Buy</button></a> <? } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      <script>
                                       <?if($res12['NFT_auction']>0){ ?>
                                        var x = setInterval(function() { 
                                        var id='tim12e<?php echo $res12['ID'];?>';
                                        var lid = 'bid_12<?php echo $res12['ID'];?>';
                                        var dd= timerr('tim12e<?php echo $res12 ['ID'];?>', 'bid_12<?php echo $res12['ID'];?>', '<?php echo $res12["NFT_auction_time"];?>');
                                            if (dd < 0) {
                                                clearInterval(x);
                                                document.getElementById(id).innerHTML="expired";
                                                document.getElementById(lid).disabled=false;
                                                      }
                                        }, 1000);
                                        <?}?>
                                    </script>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-12">
                                    <div class="load__more__btn py-md-5">
                                        <button type="submit" class="btn onsale-btn w-100">Load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>


    <script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.6/web3.min.js"
        integrity="sha512-jMEcX0Bev3VsCrACqEM3BFZvAMFXJSuTsMu0SttkAdMjquip6p3Oty5bbXrfg4T8n4g5BQYkGKxzLsrSqQgLUQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script>
            function liked(id ,image,name,like){
              
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
                                     document.getElementById(like).innerHTML=result[1];
                                   
                                    // if(result[0]==true){
                                    //       $("#myid").html('<i class="fas fa-heart" aria-hidden="true"></i>');
                                    //       $("#myid").addClass("liked");
                                    // //   if($("#heart24974").hasClass("liked")){
                                    // //       $("#heart24974").html('<i class="fal fa-heart" aria-hidden="true"></i>');
                                    // //       $("#heart24974").removeClass("liked");
                                    // //     }else{
                                       
                                    // //     } 
                                    // }else{
                                    //      $("#myid").html('<i class="fal fa-heart" aria-hidden="true"></i>');
                                    //       $("#myid").removeClass("liked");
                                    // }
                                   
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



<?php 
include "footer.php";
?>