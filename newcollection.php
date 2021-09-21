<?php 
include "header.php";
include "config.php"; 

if (isset($_GET['address'])){
$address=$_GET['address'];
$query= "SELECT* FROM NFT_user Where Useraddress='$address'";
$result=mysqli_query($link,$query);
$data=mysqli_fetch_array($result);
    
}else{
    echo '<script>alert("Not connected")</script>'; 
}

?>

<script>
    function timerr(id, etime) {
        var countDownDate = new Date(etime * 1000).getTime();
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById(id).innerHTML = days + " d " + hours + " h " + minutes + " m " + seconds + " s";
        return distance;
    }
</script>
<style>
    .container {
        max-width: 1140px !important;
    }
    .banner-content-here {
        background: #4c549c !important;
    }
    .wsum-nft-detail-page {
        padding-top: 45px;
    }
    .form-set-input {
        position: relative;
    }
    .form-set-input span {
        position: absolute;
        top: 9px;
        bottom: 0px;
        right: 5px;
        color: #ccc;
    }
    .details-bid-history .nav-tabs .nav-link.active {
        color: #040405 !important;
        border-bottom: 2px solid #040405 !important;
    }
    .detail-right-side .dropdown-menu.show {
        left: -90px !important;
    }
    .likes-here-btn-set a {
        border: 1px solid #ccc;
        padding: 8px 20px;
        border-radius: 20px;
        display: block;
    }
    .side-btn-click .dropdown button#dropdownMenuButton {
        border: 1px solid #ccc !important;
    }
    .buy-for-btn {
        margin-bottom: 10px;
    }

    @media (max-width: 767px) {
        .my-item-address.text-center p {
            width: 90% !important;
        }
    }
    
    .twitter_div {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .twitter_div a {
       display: inline-flex;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        /* width: 255px; */
        background: #cbcbef66;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }
</style>
<section class="wsum-nft-detail-page pt-0">
    <!--<div class="banner-content-here py-5">-->
    <!--    <h2 class="text-center text-white">My-Item</h2>-->
    <!--    <div class="text-center text-white"><a class="text-white" href="/index.php">WSUM-NFT</a> > <a class="text-white" href="my_item.php">MY_ITEM</a></div>-->
    <!--</div>-->
    <div class="container-fluid px-md-3 px-3">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="my-item-banner-img" id="items_bg_img">
                     <!--<img src="https://ramlogics.com/wsum-NFT1/assets/img/5.jpg" class="w-100 rounded" height="250" alt="">-->
                     
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-img1" ><img class="" src="<?php echo $data['Userimage']?>" alt="Card image cap"></div>
            </div>
            <div class="col-md-12 m-md-auto col-12">
                <div class="my-item-address text-center">
                    <div style="display: inline-flex;">
                        <h2 class="text_nft_heading" ><?php echo $data['Username']?></h2>
                        <span class="badge_icon__" id="sign"><i class="fas fa-badge-check" style="color:#131531"></i></span>
                    </div>
                    <div class="py-4 twitter_div twi_hash row">
                        
                        <div class="col" id="portfolio">
                                <div class="kjdsvdv">
                                    <a href="<?php echo $data['Userportfolio']?>" class="py-1 px-3 w-100 rounded-pill" ><i class="far fa-globe-europe"></i>&nbsp;Website</a>
                                </div>
                            </div>
                            <div class="col" id="Usertwitname">
                                <div class="kjdsvdv">
                                    <a href="https://twitter.com/<?php echo $data['Usertwitname']?>" class="py-1 px-3 rounded-pill w-100"><i class="fab fa-twitter text_nft_heading" title="Twitter"></i>&nbsp; <?php echo $data['Usertwitname']?></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="kjdsvdv">
                                    <a href="https://bscscan.com/address/<?php echo $data['Useraddress']?>" class="py-1 px-3 rounded-pill"><span ><?php echo $data['Useraddress']?></span></a>
                                </div>
                            </div>
                            
                            <div class="col" id="Instagram">
                                <div class="kjdsvdv">
                                    <a href="https://www.instagram.com/<?php echo $data['Userinstaname']?>/" target="_blank" class="py-1 px-3 rounded-pill w-100" ><i class="fab fa-instagram"></i>&nbsp; <?php echo $data['Userinstaname']?></a>
                                </div>
                            </div> 
                     
                    </div>
                    <p class="mx-auto text-center">
                        <span ><?php echo $data['Userbio']?></span>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md col-12">
                        <div class="btn_2nd_follow">
                        <a  href="https://bscscan.com/address/0x37C7D580ae7200A38a96E8058A0D5d443c84ccd7" target="blank" >
                            <button class="btn w-100 btn2nd_follow" id="treeplantfees">Average Will Go To Tree Plant</button>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-auto profile-content1 text-center">
                        <div class="three-btns-here">
                            <a onclick="myFunction('<?php echo $data['Useraddress'];?>')" id="follow" class="btn px-5 w-100 text-white" style="background-color: #50579e;">Follow</a>
                            
                            <script>
                                let portfolio='<?php echo $data['Userportfolio']?>';
                                
                                if(portfolio==""){
                                    document.getElementById('portfolio').style.display = 'none';
                                }
                                let Userinstaname='<?php echo $data['Userinstaname']?>';
                                
                                
                                if(Userinstaname==""){
                                  
                                    document.getElementById('Instagram').style.display = 'none';
                                }
                                
                                let Usertwitname='<?php echo $data['Usertwitname']?>';
                                
                                if(Usertwitname==""){
                                  
                                    document.getElementById('Usertwitname').style.display = 'none';
                                }
                                let tick="<?php echo $data['verify'];?>";
                                
                                    if(tick>"0"){
                                         document.getElementById("sign").style.display="block";
                                    }else{
                                        
                                         document.getElementById("sign").style.display="none";
                                    }
                                
                           </script>    
                        </div>
                    </div>
                    <div class="col-md-auto profile-content1 text-center">
                        <div class="collection_social">
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="" href="https://twitter.com/intent/tweet?text=<?php echo $data['Userbio']?> &url=https://ramlogics.com/WSUMART/collection.php?address=<?php echo $data['Useraddress']?>" tager="_blank"><i class="fab fa-twitter"></i></a></li> &nbsp; &nbsp;
                              <li class="list-inline-item"><a class="" href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/collection.php?address=<?php echo $data['Useraddress']?>&p[title]=<?php echo $data['Userbio']?>" tager="_blank"><i class="fab fa-facebook-f"></i></a></li> &nbsp; &nbsp;
                              <li class="list-inline-item"><a class="" href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/collection.php?address=<?php echo $data['Useraddress']?>}&title={<?php echo $data['Userbio']?>}" tager="_blank"><i class="fab fa-linkedin-in"></i></a></li>  &nbsp;
                            </ul>
                      </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12">
                <div class="my-item-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                On sale <span class="text-muted">(<span id="totalNft">0</span>)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                Owned <span class="text-muted">(<span id="totalNft3">0</span>)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                Created <span class="text-muted">(<span id="totalNft2">0</span>)</span>
                            </a>
                        </li>
                       
                     
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         
                            <div class="my-items-are-here">
                                <div class="row" id="userNfts">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="owned-tab">
                               <div class="my-items-are-here">
                                    <div class="row" id="usernft3">
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="created-tab">
                                <div class="my-items-are-here">
                                    <div class="row" id="userNft2">
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liked" role="tabpanel" aria-labelledby="liked-tab">
                            <div class="created-tab">
                              
                                <div class="my-items-are-here">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;"> 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/1.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                            <!--<div class="col-auto p-0"><span>🤍 00 </span></div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/2.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                            <!--<div class="col-auto p-0"><span>🤍 00 </span></div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/3.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/gif5.gif" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W#ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                            <div class="created-tab">
                                <div class="row" id="nftuser3">
                                    <div class="col-md-7">
                                   
                                        <div class="three_tab_area______ mt-3">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mint active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mint</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mint" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mint" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Bid</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="activity-boxes">
                                            <div class="three_tab_area">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="mint">
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="buy">
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="bid">
                                                         
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                            <div class="following-tab">
                              <div class="follow-list">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="follow-content-with-follow mt-4">
                                                <ul class="list-inline">
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif6.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif9.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif7.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="created-tab">
                              <div class="follow-list">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="follow-content-with-follow mt-4">
                                                <ul class="list-inline">
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif9.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif5.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif4.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif3.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hidden" role="tabpanel" aria-labelledby="hidden-tab">
                            <div class="created-tab">
                                <div class="no-item-found-tab">
                                    <h4>No items found</h4>
                                    <p>
                                        Come back soon! Or try to browse something for you on our marketplace
                                    </p>
                                    <button class="btn btn-primary">Browse Marketplace</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="load__more__btn py-md-5 ">
                   <button type="submit" class="btn onsale-btn w-100" id="loadMore1" value="4">Load more</button>
                 </div>
            </div>
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>
<script>
 let address='<?php echo $data['Useraddress']?>';
  var formdata = new FormData();
                formdata.append("address", address);
                
                var requestOptions = {
                  method: 'POST',
                  body: formdata,
                  redirect: 'follow'
                };
                
                fetch("./treeplant.php", requestOptions)
                  .then(response => response.text())
                  .then(result=>{
                      result=Number(result).toFixed(2);
                      
                      
                      document.getElementById("treeplantfees").innerHTML=result +" % Average Will Go To Tree Plant";
                     
                  })
                  .catch(error => console.log('error', error));
 var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("type", "verify");
        
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };
        
                fetch("./Activity.php", requestOptions)
                    .then((response) => response.json())
                    .then((res2) => {
                                
                                   document.getElementById('items_bg_img').setAttribute("style", "background-image: url(" + res2[0].coverphoto + ");background-repeat: no-repeat");
                        }).catch(console.log)  
                        
      $.getJSON("./json/datanew.json", function(jsonn) {
                                            // console.log(jsonn);
                                            let nftinfoo=jsonn.nft_info; 
                                            let nft_likee=jsonn.nft_like;
                                            address=address.toLowerCase();
                                            let nftcreatee =nftinfoo.filter(function(itemm){
                                            
                                                let nftcreatoraddress = itemm.NFT_creatoraddress;
                                                // console.log( "creat",itemm.NFT_creatoraddress);  
                                                // console.log("address",address);
                                                return(itemm.NFT_creator_add==address && itemm.block=='0'||nftcreatoraddress== address);
                                            })
                                            // console.log("nftcreate",nftcreatee);
                                            for(let i=0; i<nftcreatee.length; i++){
                                                // console.log(nftcreatee[i].NFT_id);
                                                // console.log(nftcreatee[i].NFT_count);
                                                
                                            }
                                             
                                            let nftsell1= nftinfoo.filter(function(itemm){
                                                return (itemm.NFT_owner_address == address && itemm.NFT_resell=="on" && itemm.block=="0"||itemm.NFT_creatoraddress==address ); 
                                              
                                            })
                                            // console.log("nftsell",nftsell1);
                                            
                                            if(nftcreatee[1].end_id>1){
                                                
                                                // console.log(nftcreatee[2].NFT_count);
                                            }
                                          
      })                      
                     
    $.getJSON("./json/data.json", function(json) {
                                               
                                            let wweb3 = new Web3(window.ethereum);
                                            wweb3.eth.getAccounts().then((account) => {
                                            accounts= account[0]  
                                            accounts=accounts.toLowerCase();
                                            address=address.toLowerCase();
                                            let nftinfo=json.nft_info;
                                            let nft_like=json.nft_like;
                                            let nftcreate =nftinfo.filter(function(item){
                                               return(item.NFT_creator_add==address && item.block=='0');
                                            })
                                               loadfunction(8,nftcreate,1);
                                               
                                            
                                            let nftsell= nftinfo.filter(function(item){
                                                return (item.NFT_owner_address == address && item.NFT_resell=="on" && item.block=="0" ); 
                                              
                                            })
                                                loadfunction(8,nftsell,2);
                                            
                                            
                                            let nftowner= nftinfo.filter(function(item){
                                                return (item.NFT_owner_address == address && item.NFT_creator_add !=address  && item.block=="0" );   
                                      
                                            })
                                                loadfunction(8,nftowner,3);
                                            
                                            var result=json;
                                            let now = Math.floor(Date.now() / 1000);
                                            function loadfunction(value ,nft_info,state){
                                                if(value>nft_info.length){
                                                    
                                                    value=nft_info.length;
                                                   
                                                }
                                                   
                                                    let html = "";
                                                    let count=0;
                                                    for(let i=0; i<value; i++){
                                                        ++count;
                                                        // console.log(nft_info[i].NFT_creator_add);
                                                    html+=` <div class="col-lg-3 col-sm-6">
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                        <div class="auction-img text-center">
                                                            <div class="auction-top">
                                                                <div class="row m-0">
                                                                    <div class="col p-0"> 
                                                                        <div class="inner_img1 float-left">
                                                                            <img src="assets/img/fevicon.png" class="collec_img__"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
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
                                                                                        <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name}", "${nft_info[i].NFT_description} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}" target="blank"><i class="fab fa-twitter"></i></a></li>
                                                                                        <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}" target="blank"><i class="fab fa-facebook"></i></a></li>
                                                                                        <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
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
                                                            </div>`
                                            if(nft_info[i].NFT_auction==0)
                                                 {   if(nft_info[i].end_id=='1') {
                                                    html+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" target="_blank" ><img class="w-100" src="${nft_info[i].NFT_image}" alt="Card image cap"> </a>`; 
                                                      }else{
                                                           html+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" target="_blank" ><img class="w-100" src="${nft_info[i].NFT_image}" alt="Card image cap"> </a>`; 
                                                       }
                                                         }
                                                        else{
                                                            html+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}" target="_blank" ><img class="w-100" src="${nft_info[i].NFT_image}" alt="Card image cap"> </a>`;
                                                        }
                                                         html+=`</div>
                                                        <div class="auction-content">
                                                            <div class="auction-time">
                                                               <h6 class="d-flex justify-content-between"><span class="font-weight-bold text_nft_heading wsum_product_name">NFT Name: </span> <span> ${nft_info[i].NFT_name} &nbsp;${nft_info[i].start_id}/${nft_info[i].end_id}</span></h6>`
                                                                if(nft_info[i].NFT_resell=='off')
                                                                {
                                                                    html+=`<h6 class="d-flex justify-content-between"><span class="font-weight-bold"></span> Not For sale</h6>`;
                                                                }
                                                                else{
                                                                    html+=`<h6 class="text-muted d-flex justify-content-between"><span class="font-weight-bold text_nft_heading wsum_product_name">NFT price:</span>${Number(nft_info[i].NFT_price).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })}</span> ${nft_info[i].NFT_payment}
                                                                    &nbsp;`;
                                                                            let like_value=0;
                                                                            for(var z=0; z<nft_like.length; z++){
                                                                                let nftlike=nft_like[z].User_address.toLowerCase();
                                                                                 if(nft_like[z].NFT_id == nft_info[i].NFT_id && nftlike==accounts){
                                                                                   like_value=1;
                                                                                }
                                                                            }
                                                                            if(like_value==1){
                                                                               
                                                                                html+=` <span  id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fas fa-heart " aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                            }else{
                                                                                
                                                                                html+=` <span  id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                            }
                                                                    html+=`</h6>`;
                                                                }
                                                                html += 
                                                                  `</div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div> 
                                                     `;  
                                                     if(state==1)
                                                     {
                                                    document.getElementById("totalNft2").innerText = count;
                                                    document.getElementById("userNft2").innerHTML = html;
                                                         
                                                     }
                                                     if(state==2)
                                                     {
                                                         
                                                    document.getElementById("totalNft").innerText =count ;
                                                    document.getElementById("userNfts").innerHTML = html;
                                                    
                                                     }
                                                     if (state==3)
                                                     {
                                                    document.getElementById("totalNft3").innerText =count ;
                                                    document.getElementById("usernft3").innerHTML = html;
                                                    
                                                     }
                                                    
                                                     }
                                              }
                                             let oldd=8;
                                                $("#loadMore1").on("click",function(){
                                                    let value =Number($('#loadMore1').val());
                                                    oldd=oldd+value;
                                                    loadfunction(oldd,nftcreate,1);
                                                    loadfunction(oldd,nftsell,2);
                                                    loadfunction(oldd,nftowner,3);
                                                    })
                                               
                                            }).catch(console.log(""))    
                  });                    
                
</script>


<script>
let useraddress='<?php echo $_GET['address'];?>';

window.addEventListener("load", async () => {
        let web3 = new window.Web3(window.ethereum);
        let network = await web3.eth.net.getId();
        var address = "";
        await window.ethereum.enable().then((result) => {
            followeradd  = result[0];
           if(followeradd.toLowerCase()===useraddress.toLowerCase()) {
                document.getElementById("follow").style.display='none';
              }else{
                 document.getElementById("follow").style.display='inline-block';
              }        
                            var formdata = new FormData();
                            formdata.append("address", useraddress);
                            formdata.append("followadd",followeradd);
                            formdata.append("type","following");
                            
                              var requestOptions = {
                                method: "POST",
                                body: formdata,
                                redirect: "follow",
                                };
                                
                                fetch("./save_user.php", requestOptions)
                                .then((response) => response.json())
                                .then((result) => {
                                    if(result!=""){
                                       $("#follow").attr("onclick",'follow()');
                                          var btn = document.getElementById("follow");
                                                if(btn.innerText=="Follow"){
                                                  btn.innerText="Following";
                                                  }
                                                else{
                                                  btn.innerText="Follow";
                                                  }
                                      }
                              
                                 })
                                .catch(console.log)
        
                                
                            });
})
 </script>


<script>
async function myFunction(address){
                let web3 = new window.Web3(window.ethereum);
                let network = await web3.eth.net.getId();
                var followeradd ;
                await window.ethereum.enable().then((result) => {
                followeradd = result[0];
                var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("followadd",followeradd);
                formdata.append("type","follow");
                
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };
        
                fetch("./save_user.php", requestOptions)
                    .then((response) => response.json())
                    .then((result) => {
                       if(result==true){
                            
                            $("#follow").attr("onclick",'follow()');
                            var btn = document.getElementById("follow");
                                                if(btn.innerText=="Follow"){
                                                  btn.innerText="Following";
                                                  }
                                                else{
                                                  btn.innerText="Follow";
                                                  }
                                                  
                                 }else{
                                
                                   
                               }
                       
                })
                    .catch(console.log);
                
                    
                });   
}
    
</script>
<script>
let myaddress='<?php echo $_GET['address'];?>';

        async function follow(){ 
            let web3 = new window.Web3(window.ethereum);
            let network = await web3.eth.net.getId();
            var address = "";
            await window.ethereum.enable().then((result) => {
            followeradd  = result[0];                           
            var formdata = new FormData();
            formdata.append("address", myaddress);
            formdata.append("followadd",followeradd);
            formdata.append("type","unfollow");
            
            var requestOptions = {
                method: "POST",
                body: formdata,
                redirect: "follow",
                };
    
            fetch("./save_user.php", requestOptions)
                .then((response) => response.json())
                .then((result) => {
                    
                    if(result==true){
                        
                        $("#follow").attr("onclick",'myFunction(myaddress)');
                       
                               var btn = document.getElementById("follow");
                                        if(btn.innerText=="Following"){
                                              btn.innerText="Follow";
                                             }
                                        else{
                                              btn.innerText="Following";
                                              }
                                                  
                                 }
                   
                  })
                .catch(console.log)
            })
                        
                                    
        } 
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
                                                            .then(()=>{
                                                                
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
                      }
</script>
 <?php 
include "header.php";
include "config.php"; 

if (isset($_GET['address'])){
$address=$_GET['address'];
$query= "SELECT* FROM NFT_user Where Useraddress='$address'";
$result=mysqli_query($link,$query);
$data=mysqli_fetch_array($result);
    
}else{
    echo '<script>alert("Not connected")</script>'; 
}

?>

<script>
    function timerr(id, etime) {
        var countDownDate = new Date(etime * 1000).getTime();
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById(id).innerHTML = days + " d " + hours + " h " + minutes + " m " + seconds + " s";
        return distance;
    }
</script>
<style>
    .container {
        max-width: 1140px !important;
    }
    .banner-content-here {
        background: #4c549c !important;
    }
    .wsum-nft-detail-page {
        padding-top: 45px;
    }
    .form-set-input {
        position: relative;
    }
    .form-set-input span {
        position: absolute;
        top: 9px;
        bottom: 0px;
        right: 5px;
        color: #ccc;
    }
    .details-bid-history .nav-tabs .nav-link.active {
        color: #040405 !important;
        border-bottom: 2px solid #040405 !important;
    }
    .detail-right-side .dropdown-menu.show {
        left: -90px !important;
    }
    .likes-here-btn-set a {
        border: 1px solid #ccc;
        padding: 8px 20px;
        border-radius: 20px;
        display: block;
    }
    .side-btn-click .dropdown button#dropdownMenuButton {
        border: 1px solid #ccc !important;
    }
    .buy-for-btn {
        margin-bottom: 10px;
    }

    @media (max-width: 767px) {
        .my-item-address.text-center p {
            width: 90% !important;
        }
    }
    
    .twitter_div {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .twitter_div a {
       display: inline-flex;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        /* width: 255px; */
        background: #cbcbef66;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }
</style>
<section class="wsum-nft-detail-page pt-0">
    <!--<div class="banner-content-here py-5">-->
    <!--    <h2 class="text-center text-white">My-Item</h2>-->
    <!--    <div class="text-center text-white"><a class="text-white" href="/index.php">WSUM-NFT</a> > <a class="text-white" href="my_item.php">MY_ITEM</a></div>-->
    <!--</div>-->
    <div class="container-fluid px-md-3 px-3">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="my-item-banner-img" id="items_bg_img">
                     <!--<img src="https://ramlogics.com/wsum-NFT1/assets/img/5.jpg" class="w-100 rounded" height="250" alt="">-->
                     
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-img1" ><img class="" src="<?php echo $data['Userimage']?>" alt="Card image cap"></div>
            </div>
            <div class="col-md-12 m-md-auto col-12">
                <div class="my-item-address text-center">
                    <div style="display: inline-flex;">
                        <h2 class="text_nft_heading" ><?php echo $data['Username']?></h2>
                        <span class="badge_icon__" id="sign"><i class="fas fa-badge-check" style="color:#131531"></i></span>
                    </div>
                    <div class="py-4 twitter_div twi_hash row">
                        
                        <div class="col" id="portfolio">
                                <div class="kjdsvdv">
                                    <a href="<?php echo $data['Userportfolio']?>" class="py-1 px-3 w-100 rounded-pill" ><i class="far fa-globe-europe"></i>&nbsp;Website</a>
                                </div>
                            </div>
                            <div class="col" id="Usertwitname">
                                <div class="kjdsvdv">
                                    <a href="https://twitter.com/<?php echo $data['Usertwitname']?>" class="py-1 px-3 rounded-pill w-100"><i class="fab fa-twitter text_nft_heading" title="Twitter"></i>&nbsp; <?php echo $data['Usertwitname']?></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="kjdsvdv">
                                    <a href="https://bscscan.com/address/<?php echo $data['Useraddress']?>" class="py-1 px-3 rounded-pill"><span ><?php echo $data['Useraddress']?></span></a>
                                </div>
                            </div>
                            
                            <div class="col" id="Instagram">
                                <div class="kjdsvdv">
                                    <a href="https://www.instagram.com/<?php echo $data['Userinstaname']?>/" target="_blank" class="py-1 px-3 rounded-pill w-100" ><i class="fab fa-instagram"></i>&nbsp; <?php echo $data['Userinstaname']?></a>
                                </div>
                            </div> 
                     
                    </div>
                    <p class="mx-auto text-center">
                        <span ><?php echo $data['Userbio']?></span>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md col-12">
                        <div class="btn_2nd_follow">
                        <a  href="https://bscscan.com/address/0x37C7D580ae7200A38a96E8058A0D5d443c84ccd7" target="blank" >
                            <button class="btn w-100 btn2nd_follow" id="treeplantfees">Average Will Go To Tree Plant</button>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-auto profile-content1 text-center">
                        <div class="three-btns-here">
                            <a onclick="myFunction('<?php echo $data['Useraddress'];?>')" id="follow" class="btn px-5 w-100 text-white" style="background-color: #50579e;">Follow</a>
                            
                            <script>
                                let portfolio='<?php echo $data['Userportfolio']?>';
                                
                                if(portfolio==""){
                                    document.getElementById('portfolio').style.display = 'none';
                                }
                                let Userinstaname='<?php echo $data['Userinstaname']?>';
                                
                                
                                if(Userinstaname==""){
                                  
                                    document.getElementById('Instagram').style.display = 'none';
                                }
                                
                                let Usertwitname='<?php echo $data['Usertwitname']?>';
                                
                                if(Usertwitname==""){
                                  
                                    document.getElementById('Usertwitname').style.display = 'none';
                                }
                                let tick="<?php echo $data['verify'];?>";
                                
                                    if(tick>"0"){
                                         document.getElementById("sign").style.display="block";
                                    }else{
                                        
                                         document.getElementById("sign").style.display="none";
                                    }
                                
                           </script>    
                        </div>
                    </div>
                    <div class="col-md-auto profile-content1 text-center">
                        <div class="collection_social">
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="" href="https://twitter.com/intent/tweet?text=<?php echo $data['Userbio']?> &url=https://ramlogics.com/WSUMART/collection.php?address=<?php echo $data['Useraddress']?>" tager="_blank"><i class="fab fa-twitter"></i></a></li> &nbsp; &nbsp;
                              <li class="list-inline-item"><a class="" href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/collection.php?address=<?php echo $data['Useraddress']?>&p[title]=<?php echo $data['Userbio']?>" tager="_blank"><i class="fab fa-facebook-f"></i></a></li> &nbsp; &nbsp;
                              <li class="list-inline-item"><a class="" href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/collection.php?address=<?php echo $data['Useraddress']?>}&title={<?php echo $data['Userbio']?>}" tager="_blank"><i class="fab fa-linkedin-in"></i></a></li>  &nbsp;
                            </ul>
                      </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12">
                <div class="my-item-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                On sale <span class="text-muted">(<span id="totalNft">0</span>)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                Owned <span class="text-muted">(<span id="totalNft3">0</span>)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                Created <span class="text-muted">(<span id="totalNft2">0</span>)</span>
                            </a>
                        </li>
                       
                     
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         
                            <div class="my-items-are-here">
                                <div class="row" id="userNfts">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="owned-tab">
                               <div class="my-items-are-here">
                                    <div class="row" id="usernft3">
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="created-tab">
                                <div class="my-items-are-here">
                                    <div class="row" id="userNft2">
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liked" role="tabpanel" aria-labelledby="liked-tab">
                            <div class="created-tab">
                              
                                <div class="my-items-are-here">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;"> 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/1.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                            <!--<div class="col-auto p-0"><span>🤍 00 </span></div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/2.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                            <!--<div class="col-auto p-0"><span>🤍 00 </span></div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/3.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                 
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/gif5.gif" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W#ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid <span>1/1</span></h6>
                                                        <div class="row m-0">
                                                            <div class="col p-0"><span class="setthis">Place a bid</span></div>
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                            <div class="created-tab">
                                <div class="row" id="nftuser3">
                                    <div class="col-md-7">
                                   
                                        <div class="three_tab_area______ mt-3">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mint active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mint</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mint" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mint" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Bid</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="activity-boxes">
                                            <div class="three_tab_area">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="mint">
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="buy">
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="bid">
                                                         
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                            <div class="following-tab">
                              <div class="follow-list">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="follow-content-with-follow mt-4">
                                                <ul class="list-inline">
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif6.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif9.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif7.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="created-tab">
                              <div class="follow-list">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="follow-content-with-follow mt-4">
                                                <ul class="list-inline">
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif9.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif5.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif4.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="single-follow">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif3.gif" height="50px" /></div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>lorem ipsum sample</h6>
                                                                    <p>00k followers</p>
                                                                </div>
                                                                <div class="col-3">
                                                                    <button class="btn btn-primary">follow</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hidden" role="tabpanel" aria-labelledby="hidden-tab">
                            <div class="created-tab">
                                <div class="no-item-found-tab">
                                    <h4>No items found</h4>
                                    <p>
                                        Come back soon! Or try to browse something for you on our marketplace
                                    </p>
                                    <button class="btn btn-primary">Browse Marketplace</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="load__more__btn py-md-5 ">
                   <button type="submit" class="btn onsale-btn w-100" id="loadMore1" value="4">Load more</button>
                 </div>
            </div>
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>
<script>
 let address='<?php echo $data['Useraddress']?>';
  var formdata = new FormData();
                formdata.append("address", address);
                
                var requestOptions = {
                  method: 'POST',
                  body: formdata,
                  redirect: 'follow'
                };
                
                fetch("./treeplant.php", requestOptions)
                  .then(response => response.text())
                  .then(result=>{
                      result=Number(result).toFixed(2);
                      
                      
                      document.getElementById("treeplantfees").innerHTML=result +" % Average Will Go To Tree Plant";
                     
                  })
                  .catch(error => console.log('error', error));
 var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("type", "verify");
        
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };
        
                fetch("./Activity.php", requestOptions)
                    .then((response) => response.json())
                    .then((res2) => {
                                
                                   document.getElementById('items_bg_img').setAttribute("style", "background-image: url(" + res2[0].coverphoto + ");background-repeat: no-repeat");
                        }).catch(console.log)  
                        
      $.getJSON("./json/datanew.json", function(jsonn) {
                                            // console.log(jsonn);
                                            let nftinfoo=jsonn.nft_info; 
                                            let nft_likee=jsonn.nft_like;
                                            address=address.toLowerCase();
                                            let nftcreatee =nftinfoo.filter(function(itemm){
                                            
                                                let nftcreatoraddress = itemm.NFT_creatoraddress;
                                                // console.log( "creat",itemm.NFT_creatoraddress);  
                                                // console.log("address",address);
                                                return(itemm.NFT_creator_add==address && itemm.block=='0'||nftcreatoraddress== address);
                                            })
                                            // console.log("nftcreate",nftcreatee);
                                            for(let i=0; i<nftcreatee.length; i++){
                                                // console.log(nftcreatee[i].NFT_id);
                                                // console.log(nftcreatee[i].NFT_count);
                                                
                                            }
                                             
                                            let nftsell1= nftinfoo.filter(function(itemm){
                                                return (itemm.NFT_owner_address == address && itemm.NFT_resell=="on" && itemm.block=="0"||itemm.NFT_creatoraddress==address ); 
                                              
                                            })
                                            // console.log("nftsell",nftsell1);
                                            
                                            if(nftcreatee[1].end_id>1){
                                                
                                                // console.log(nftcreatee[2].NFT_count);
                                            }
                                          
      })                      
                     
    $.getJSON("./json/data.json", function(json) {
                                               
                                            let wweb3 = new Web3(window.ethereum);
                                            wweb3.eth.getAccounts().then((account) => {
                                            accounts= account[0]  
                                            accounts=accounts.toLowerCase();
                                            address=address.toLowerCase();
                                            let nftinfo=json.nft_info;
                                            let nft_like=json.nft_like;
                                            let nftcreate =nftinfo.filter(function(item){
                                               return(item.NFT_creator_add==address && item.block=='0');
                                            })
                                               loadfunction(8,nftcreate,1);
                                               
                                            
                                            let nftsell= nftinfo.filter(function(item){
                                                return (item.NFT_owner_address == address && item.NFT_resell=="on" && item.block=="0" ); 
                                              
                                            })
                                                loadfunction(8,nftsell,2);
                                            
                                            
                                            let nftowner= nftinfo.filter(function(item){
                                                return (item.NFT_owner_address == address && item.NFT_creator_add !=address  && item.block=="0" );   
                                      
                                            })
                                                loadfunction(8,nftowner,3);
                                            
                                            var result=json;
                                            let now = Math.floor(Date.now() / 1000);
                                            function loadfunction(value ,nft_info,state){
                                                if(value>nft_info.length){
                                                    
                                                    value=nft_info.length;
                                                   
                                                }
                                                   
                                                    let html = "";
                                                    let count=0;
                                                    for(let i=0; i<value; i++){
                                                        ++count;
                                                        // console.log(nft_info[i].NFT_creator_add);
                                                    html+=` <div class="col-lg-3 col-sm-6">
                                                      <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                        <div class="auction-img text-center">
                                                            <div class="auction-top">
                                                                <div class="row m-0">
                                                                    <div class="col p-0"> 
                                                                        <div class="inner_img1 float-left">
                                                                            <img src="assets/img/fevicon.png" class="collec_img__"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
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
                                                                                        <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name}", "${nft_info[i].NFT_description} &url=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}" target="blank"><i class="fab fa-twitter"></i></a></li>
                                                                                        <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name + nft_info[i].NFT_discription}" target="blank"><i class="fab fa-facebook"></i></a></li>
                                                                                        <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/WSUMART/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_name + nft_info[i].NFT_discription}}" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
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
                                                            </div>`
                                            if(nft_info[i].NFT_auction==0)
                                                 {   if(nft_info[i].end_id=='1') {
                                                    html+=` <a href="./buy_description.php?id=${nft_info[i].NFT_id}" target="_blank" ><img class="w-100" src="${nft_info[i].NFT_image}" alt="Card image cap"> </a>`; 
                                                      }else{
                                                           html+=` <a href="./buy_multiple.php?id=${nft_info[i].NFT_id}" target="_blank" ><img class="w-100" src="${nft_info[i].NFT_image}" alt="Card image cap"> </a>`; 
                                                       }
                                                         }
                                                        else{
                                                            html+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}" target="_blank" ><img class="w-100" src="${nft_info[i].NFT_image}" alt="Card image cap"> </a>`;
                                                        }
                                                         html+=`</div>
                                                        <div class="auction-content">
                                                            <div class="auction-time">
                                                               <h6 class="d-flex justify-content-between"><span class="font-weight-bold text_nft_heading wsum_product_name">NFT Name: </span> <span> ${nft_info[i].NFT_name} &nbsp;${nft_info[i].start_id}/${nft_info[i].end_id}</span></h6>`
                                                                if(nft_info[i].NFT_resell=='off')
                                                                {
                                                                    html+=`<h6 class="d-flex justify-content-between"><span class="font-weight-bold"></span> Not For sale</h6>`;
                                                                }
                                                                else{
                                                                    html+=`<h6 class="text-muted d-flex justify-content-between"><span class="font-weight-bold text_nft_heading wsum_product_name">NFT price:</span>${Number(nft_info[i].NFT_price).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })}</span> ${nft_info[i].NFT_payment}
                                                                    &nbsp;`;
                                                                            let like_value=0;
                                                                            for(var z=0; z<nft_like.length; z++){
                                                                                let nftlike=nft_like[z].User_address.toLowerCase();
                                                                                 if(nft_like[z].NFT_id == nft_info[i].NFT_id && nftlike==accounts){
                                                                                   like_value=1;
                                                                                }
                                                                            }
                                                                            if(like_value==1){
                                                                               
                                                                                html+=` <span  id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fas fa-heart " aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                            }else{
                                                                                
                                                                                html+=` <span  id="heart1${nft_info[i].NFT_id}" onclick='liked("${nft_info[i].NFT_id}","${nft_info[i].NFT_image}","${nft_info[i].NFT_name}","liked${nft_info[i].NFT_id}","heart1${nft_info[i].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[i].NFT_id}" >  ${nft_info[i].NFT_likes} </span></div>`;
                                                                            }
                                                                    html+=`</h6>`;
                                                                }
                                                                html += 
                                                                  `</div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div> 
                                                     `;  
                                                     if(state==1)
                                                     {
                                                    document.getElementById("totalNft2").innerText = count;
                                                    document.getElementById("userNft2").innerHTML = html;
                                                         
                                                     }
                                                     if(state==2)
                                                     {
                                                         
                                                    document.getElementById("totalNft").innerText =count ;
                                                    document.getElementById("userNfts").innerHTML = html;
                                                    
                                                     }
                                                     if (state==3)
                                                     {
                                                    document.getElementById("totalNft3").innerText =count ;
                                                    document.getElementById("usernft3").innerHTML = html;
                                                    
                                                     }
                                                    
                                                     }
                                              }
                                             let oldd=8;
                                                $("#loadMore1").on("click",function(){
                                                    let value =Number($('#loadMore1').val());
                                                    oldd=oldd+value;
                                                    loadfunction(oldd,nftcreate,1);
                                                    loadfunction(oldd,nftsell,2);
                                                    loadfunction(oldd,nftowner,3);
                                                    })
                                               
                                            }).catch(console.log(""))    
                  });                    
                
</script>


<script>
let useraddress='<?php echo $_GET['address'];?>';

window.addEventListener("load", async () => {
        let web3 = new window.Web3(window.ethereum);
        let network = await web3.eth.net.getId();
        var address = "";
        await window.ethereum.enable().then((result) => {
            followeradd  = result[0];
           if(followeradd.toLowerCase()===useraddress.toLowerCase()) {
                document.getElementById("follow").style.display='none';
              }else{
                 document.getElementById("follow").style.display='inline-block';
              }        
                            var formdata = new FormData();
                            formdata.append("address", useraddress);
                            formdata.append("followadd",followeradd);
                            formdata.append("type","following");
                            
                              var requestOptions = {
                                method: "POST",
                                body: formdata,
                                redirect: "follow",
                                };
                                
                                fetch("./save_user.php", requestOptions)
                                .then((response) => response.json())
                                .then((result) => {
                                    if(result!=""){
                                       $("#follow").attr("onclick",'follow()');
                                          var btn = document.getElementById("follow");
                                                if(btn.innerText=="Follow"){
                                                  btn.innerText="Following";
                                                  }
                                                else{
                                                  btn.innerText="Follow";
                                                  }
                                      }
                              
                                 })
                                .catch(console.log)
        
                                
                            });
})
 </script>


<script>
async function myFunction(address){
                let web3 = new window.Web3(window.ethereum);
                let network = await web3.eth.net.getId();
                var followeradd ;
                await window.ethereum.enable().then((result) => {
                followeradd = result[0];
                var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("followadd",followeradd);
                formdata.append("type","follow");
                
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };
        
                fetch("./save_user.php", requestOptions)
                    .then((response) => response.json())
                    .then((result) => {
                       if(result==true){
                            
                            $("#follow").attr("onclick",'follow()');
                            var btn = document.getElementById("follow");
                                                if(btn.innerText=="Follow"){
                                                  btn.innerText="Following";
                                                  }
                                                else{
                                                  btn.innerText="Follow";
                                                  }
                                                  
                                 }else{
                                
                                   
                               }
                       
                })
                    .catch(console.log);
                
                    
                });   
}
    
</script>
<script>
let myaddress='<?php echo $_GET['address'];?>';

        async function follow(){ 
            let web3 = new window.Web3(window.ethereum);
            let network = await web3.eth.net.getId();
            var address = "";
            await window.ethereum.enable().then((result) => {
            followeradd  = result[0];                           
            var formdata = new FormData();
            formdata.append("address", myaddress);
            formdata.append("followadd",followeradd);
            formdata.append("type","unfollow");
            
            var requestOptions = {
                method: "POST",
                body: formdata,
                redirect: "follow",
                };
    
            fetch("./save_user.php", requestOptions)
                .then((response) => response.json())
                .then((result) => {
                    
                    if(result==true){
                        
                        $("#follow").attr("onclick",'myFunction(myaddress)');
                       
                               var btn = document.getElementById("follow");
                                        if(btn.innerText=="Following"){
                                              btn.innerText="Follow";
                                             }
                                        else{
                                              btn.innerText="Following";
                                              }
                                                  
                                 }
                   
                  })
                .catch(console.log)
            })
                        
                                    
        } 
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
                                                            .then(()=>{
                                                                
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
                      }
</script>
 