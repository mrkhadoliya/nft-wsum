<?php 
include "header.php";
include "config.php"; 
$query="SELECT * FROM User_follow ";
$result=mysqli_query($link,$query);
$data = mysqli_fetch_assoc($result);
if(isset($_POST['submitcover'])){
    
       if(!empty($_POST['Accounts'])){
                          
               $valid_extensions = array('jpeg', 'jpg', 'png','gif','mp4','jfif'); // valid extensions
$path = '/home/ramlogicstech/public_html/WSUMART/uploads/';
    $img = $_FILES['tokenImage']['name'];
    $tmp = $_FILES['tokenImage']['tmp_name'];
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
              
    $final_image = rand(1000,100000000000);
  
                $accounts=$_POST['Accounts'];

                 if(in_array($ext, $valid_extensions)){ 
                       $path = $path.strtolower($final_image); 
                      if(true){move_uploaded_file($tmp,$path);
                        $path="uploads/".strtolower($final_image);
                        $sql="UPDATE `NFT_user` SET `coverphoto`='$path' WHERE Useraddress='{$accounts}'";
                        $data=mysqli_query($link,$sql);
                      
                        if($data){
                            echo "<script>swal('success','Profile','success')</script>";
                        } 
                    }
                   
                }
               
       }   
}
?>

<script>
    // function timerr(id, etime) {
    //     var countDownDate = new Date(etime * 1000).getTime();
    //     var now = new Date().getTime();
    //     var distance = countDownDate - now;
    //     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    //     document.getElementById(id).innerHTML = days + " d " + hours + " h " + minutes + " m " + seconds + " s";
    //     return distance;
    // }
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
    .user__circle i {
        font-size: 45px !important;
        color: #4e9d66;
    }
    .twitter_div {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .twitter_div a {
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 207px;
        background: #cbcbef66;
    }
    /*.twitter_div {*/
    /*    background: #cbcbef66;*/
    /*    padding: 12px;*/
    /*    border-radius: 6px;*/
    /*}*/
</style>
<section class="wsum-nft-detail-page pt-0">
    <!--<div class="banner-content-here py-md-5 py-3">-->
    <!--    <h2 class="text-center text-white">My-Item</h2>-->
    <!--    <div class="text-center text-white"><a class="text-white" href="./index1.php">WSUM-NFT</a> <a class="text-white" href="my_item.php">MY_ITEM</a></div>-->
    <!--</div>-->
    
    <div class="container-fluid px-md-3 px-3">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="my-item-banner-img" id="items_bg_img">
                     <!--<img src="https://ramlogics.com/wsum-NFT1/assets/img/5.jpg" class="w-100 rounded" height="250" alt="">-->
                     <div class="adit_icon_btn" data-toggle="modal" data-target="#exampleModalCenter">
                         <i class="fal fa-edit"></i> Edit Cover Photo
                     </div>
                     
                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update cover</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="py-5">
                                <h6 class="text-muteded rtext-center">Upload new cover for your profile page. We recommend to upload images in 1440x260 resolution</h6>
                                <div class="pt-4"> 
                                    <!--<input type="file" id="upload" class="btn onsale-btn w-100"> -->
                                    <!--<label class="btn onsale-btn w-100" for="upload">Choose File</label>-->
                                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                    <form method="post" action="" enctype="multipart/form-data">
                                    <main class="main_full"> 
                                        <div class="panel">
                                          <div class="button_outer">
                                            <div class="btn_upload">
                                              <input type="file" id="upload_file" name="tokenImage">
                                              Choose file
                                            </div>
                                            <div class="processing_bar"></div>
                                            <div class="success_box"></div>
                                          </div>
                                        </div>
                                        <div class="error_msg"></div>
                                        <div class="uploaded_file_view" id="uploaded_view">
                                          <span class="file_remove">X</span>
                                          
                                        </div> 
                                        <input type="text" name="Accounts" id="Accounts" value="" hidden/>
                                        <button type="submit" class="btn onsale-btn w-100" name="submitcover">Submit</button>
                                    </form>
                                    
                                    </main>
                                    <script>
                                        var btnUpload = $("#upload_file"),
                                            btnOuter = $(".button_outer");
                                          btnUpload.on("change", function(e){
                                            var ext = btnUpload.val().split('.').pop().toLowerCase();
                                            if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                                              $(".error_msg").text("Not an Image...");
                                            } else {
                                              $(".error_msg").text("");
                                              btnOuter.addClass("file_uploading");
                                              setTimeout(function(){
                                                btnOuter.addClass("file_uploaded");
                                              },3000);
                                              var uploadedFile = URL.createObjectURL(e.target.files[0]);
                                              setTimeout(function(){
                                                $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
                                              },3500);
                                            }
                                          });
                                          $(".file_remove").on("click", function(e){
                                            $("#uploaded_view").removeClass("show");
                                            $("#uploaded_view").find("img").remove();
                                            btnOuter.removeClass("file_uploading");
                                            btnOuter.removeClass("file_uploaded");
                                          });
                                    </script>
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
    <div class="container pb-5">
        <div class="row">
            
            <div class="col-md-12">
                <div class="profile-img1" id="image"></div>
            </div>
            <div class="col-md-8 m-md-auto col-12">
                <div class="my-item-address text-center">
                    
                    <div style="display: inline-flex;">
                        <h2 class="text_nft_heading" id="username"></h2>
                        <span class="badge_icon" id="sign"><i class="fas fa-badge-check" style="color:#28a5da"></i></span>
                    </div>
                    <div class="py-4 twitter_div">
                        <i class="fab fa-twitter text_nft_heading" title="Twitter"></i> &nbsp;<span id="usertwitter"></span> &nbsp; &nbsp;
                        <a href="javascript:void(0);" class="py-1 px-3 rounded-pill" id="currentAddress"></a>
                        <a href="#" class="py-1 px-3 rounded-pill" id="portfolio">Portfolio</a>
                    </div>
                   <div class="text-center pb-3">
                         <h6 class="mx-auto">
                            <span id="userbio"></span>
                        </h6>
                    </div>
                </div> 
                <div class="row">
                    
                    <?php
                    $query="SELECT * FROM User_follow ";
                    $res=mysqli_query($link,$query);
                    $data = mysqli_fetch_assoc($res);
                    ?>
                    <div class="col-md-6">
                        <div class="border rounded-pill text-center"><a href="./edit-profile.php" class="btn m-1 d-blocktext_nft_heading">Edit Profile</a></div>
                    </div>
                    <div class="col-md-6">
                      <a  href="https://bscscan.com/address/0x37C7D580ae7200A38a96E8058A0D5d443c84ccd7" target="blank"><div class="onsale-btn" id="treeplantfees">Average Will Go To Tree Plant</div></a>
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
                        <!--<li class="nav-item">-->
                        <!--  <a class="nav-link" id="liked-tab" data-toggle="tab" href="#liked" role="tab" aria-controls="liked" aria-selected="false">Liked <span class="text-muted">(4)</span></a>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <a class="nav-link" id="active-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">
                                Activity
                            </a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--  <a class="nav-link" id="following-tab" data-toggle="tab" href="#following" role="tab" aria-controls="following" aria-selected="false">Following <span class="text-muted">(5)</span></a>-->
                        <!--</li>-->
                        <li class="nav-item">
                          <a class="nav-link" id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers <span class="text-muted">(<span id="follower">0</span>)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="following-tab" data-toggle="tab" href="#following" role="tab" aria-controls="following" aria-selected="false">Following <span class="text-muted">(<span id="following1">0</span>)</span></a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--  <a class="nav-link" id="hidden-tab" data-toggle="tab" href="#hidden" role="tab" aria-controls="followers" aria-selected="false">Hidden <span class="text-muted">(0)</span></a>-->
                        <!--</li>-->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!--<div class="onsale-tab">-->
                            <!--    <div class="no-item-found-tab">-->
                            <!--        <h4>No items found</h4>-->
                            <!--        <p>-->
                            <!--            Come back soon! Or try to browse something for you on our marketplace-->
                            <!--        </p>-->
                            <!--        <button class="btn btn-primary">Browse Marketplace</button>-->
                            <!--    </div>-->
                            <!--</div>-->
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
                                                <div class="auction-top pb-3">
                                                    <div class="row m-0"></div>
                                                </div>
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/1.jpg" alt="Card image cap" />
                                                </div>
                                                <div class="auction-content">
                                                    <div class="auction-time">
                                                        <h6 class="timer"><a href="#">00h 00m 00s left 🔥</a></h6>
                                                        <h6>B&amp;W #ALIEN</h6>
                                                        <h6 class="text-muted">Highest bid<span>1/1</span></h6>
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
                                                <div class="auction-top pb-3">
                                                    <div class="row m-0"></div>
                                                </div>
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
                                                <div class="auction-top pb-3">
                                                    <div class="row m-0"></div>
                                                </div>
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
                                                            <!--<div class="col-auto p-0"><span>🤍 00 </span></div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                                <div class="auction-top pb-3">
                                                    <div class="row m-0"></div>
                                                </div>
                                                <div class="auction-img text-center">
                                                    <img class="w-100" src="assets/img/gif5.gif" alt="Card image cap" />
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                            <div class="created-tab scrollbar" id="style-3">
                                <div class="row" id="nftuser3">
                                    <div class="col-md-8 col-12">
                                        <!--<div class="no-item-found-tab">-->
                                        <!--    <h4>No items found</h4>-->
                                        <!--    <p>-->
                                        <!--        Come back soon! Or try to browse something for you on our marketplace-->
                                        <!--    </p>-->
                                        <!--    <button class="btn btn-primary">Browse Marketplace</button>-->
                                        <!--</div>-->
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
                                                <li class="nav-item">
                                                    <a class="nav-link mint" id="pills-sell-tab" data-toggle="pill" href="#pills-sell" role="tab" aria-controls="pills-sell" aria-selected="false">Sell</a>
                                                </li>
                                                <!--<li class="nav-item">-->
                                                <!--    <a class="nav-link mint" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Burns</a>-->
                                                <!--</li>-->
                                                <!--<li class="nav-item">-->
                                                <!--    <a class="nav-link mint" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Likes</a>-->
                                                <!--</li>-->
                                                <!--<li class="nav-item">-->
                                                <!--    <a class="nav-link mint" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Following</a>-->
                                                <!--</li>-->
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
                                                       <div class="tab-pane fade" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
                                                        <div class="tab_one">
                                                            <div class="activity-boxes" id="sell" >
                                                                
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
                        <!--<div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">-->
                        <!--    <div class="following-tab">-->
                              
                        <!--        <div class="follow-list">-->
                        <!--            <div class="row">-->
                        <!--                <div class="col-md-3"></div>-->
                        <!--                <div class="col-md-6">-->
                        <!--                    <div class="follow-content-with-follow mt-4">-->
                        <!--                        <ul class="list-inline">-->
                        <!--                            <li>-->
                        <!--                                <div class="single-follow">-->
                        <!--                                    <div class="row">-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif6.gif" height="50px" /></div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-6">-->
                        <!--                                            <h6>lorem ipsum sample</h6>-->
                        <!--                                            <p>00k followers</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <button class="btn btn-primary">follow</button>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <div class="single-follow">-->
                        <!--                                    <div class="row">-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-6">-->
                        <!--                                            <h6>lorem ipsum sample</h6>-->
                        <!--                                            <p>00k followers</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <button class="btn btn-primary">follow</button>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <div class="single-follow">-->
                        <!--                                    <div class="row">-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif8.gif" height="50px" /></div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-6">-->
                        <!--                                            <h6>lorem ipsum sample</h6>-->
                        <!--                                            <p>00k followers</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <button class="btn btn-primary">follow</button>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <div class="single-follow">-->
                        <!--                                    <div class="row">-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif9.gif" height="50px" /></div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-6">-->
                        <!--                                            <h6>lorem ipsum sample</h6>-->
                        <!--                                            <p>00k followers</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <button class="btn btn-primary">follow</button>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <div class="single-follow">-->
                        <!--                                    <div class="row">-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <div class="text-center"><img class="follow-img-inmyitem" src="assets/img/gif7.gif" height="50px" /></div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-6">-->
                        <!--                                            <h6>lorem ipsum sample</h6>-->
                        <!--                                            <p>00k followers</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="col-3">-->
                        <!--                                            <button class="btn btn-primary">follow</button>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                        </ul>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-md-3"></div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="created-tab" >
                                <!--<div class="no-item-found-tab">-->
                                <!--    <h4>No items found</h4>-->
                                <!--    <p>-->
                                <!--        Come back soon! Or try to browse something for you on our marketplace-->
                                <!--    </p>-->
                                <!--    <button class="btn btn-primary">Browse Marketplace</button>-->
                                <!--</div>-->
                                <div class="follow-list">
                                    <div class="row">
                                        <!--<div class="col-md-3"></div>-->
                                        <div class="col-md-8 m-auto">
                                            <div class="follow-content-with-follow mt-4" id="follow">
                                                
                                            </div>
                                        </div>
                                        <!--<div class="col-md-3"></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                            <div class="created-tab" >
                                <!--<div class="no-item-found-tab">-->
                                <!--    <h4>No items found</h4>-->
                                <!--    <p>-->
                                <!--        Come back soon! Or try to browse something for you on our marketplace-->
                                <!--    </p>-->
                                <!--    <button class="btn btn-primary">Browse Marketplace</button>-->
                                <!--</div>-->
                                <div class="follow-list">
                                    <div class="row">
                                        <!--<div class="col-md-3"></div>-->
                                        <div class="col-md-8 m-auto">
                                            <div class="follow-content-with-follow mt-4" id="following">
                                                
                                            </div>
                                        </div>
                                        <!--<div class="col-md-3"></div>-->
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
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>

<script>

        window.addEventListener("load", async () => {
        let web3 = new window.Web3(window.ethereum);
        let network = await web3.eth.net.getId();
        var address = "";
        await window.ethereum.enable().then((result) => {
            address = result[0];
            $('#Accounts').val(address);
        });
        
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
                      console.log(result);
                      
                      document.getElementById("treeplantfees").innerHTML=result +"% Average Will Go To Tree Plant";
                     
                  })
                  .catch(error => console.log('error', error));
        document.getElementById("currentAddress").innerText = address;
        //===================================================      created Tab   start  ======================================================================================
        // $('#currentAddress').click(function() {
        //          window.location.href = 'https://testnet.bscscan.com/address='+address;
        //     });
        $("#currentAddress").attr('href',`https://bscscan.com/address/${address}`);

        var formdata = new FormData();
        formdata.append("address", address);

        var requestOptions = {
            method: "POST",
            body: formdata,
            redirect: "follow",
        };

        fetch("./userNfts.php", requestOptions)
            .then((response) => response.json())
            .then((result) => {
                var html = "";
                var count = 0;
                for (i = 0; i < result.length; i++) {
                    ++count;
                   let id=result[i].NFT_id;
                    html += `
                     <div class="col-lg-3 col-sm-6">
                                  <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                    <div class="row m-0" bis_skin_checked="1">
                                        <div class="col p-0" bis_skin_checked="1"> 
                                        </div>
                                        <div class="col-auto p-0" bis_skin_checked="1">
                                            <div class="dropleft" bis_skin_checked="1">
                                              <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="left-start" style="position: absolute; transform: translate3d(-162px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                 
                                                <a href="./editNFT.php?id=`;
                                                html+=id+`" class="dropdown-item " target="blank">Edit NFT </a>
                                               </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="auction-img text-center">
                                        <img class="w-100" src="${result[i].NFT_image}" alt="Card image cap">
                                    </div>
                                    <div class="auction-content">
                                        <div class="auction-time">
                                            <div>
                                                <h6 class="timer"><a href="#"><span id="clock+${result[i].NFT_id}">00h 00m 00s left 🔥</span></a></h6>
                                            </div>
                                            <div class="row m-0">
                                                <div class="col-12 p-0">
                                                    <div class="payment_bnb">
                                                        <div>
                                                        
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="text_nft_heading">${result[i].NFT_name}</h5> <span class="text-muted">1/1</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="text_nft_heading wsum_product_name"> <b>${result[i].NFT_payment}</b></span> 
                                                                <span class="text-muted d-flex">${Number(result[i].NFT_price).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })} </span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-12 p-0">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="text_nft_heading wsum_product_name">Tree plant</div>
                                                        <div class="text-muted d-flex">${result[i].NFT_treeplant}%</div>
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
                              </div> 
                    `;
                    document.getElementById("totalNft2").innerText = count;
                    document.getElementById("userNft2").innerHTML = html;
                    let Id = result[i].NFT_id;
                    }
                // result.forEach((element, i) => {
                //     if (element.NFT_auction > "1") {
                //         let x = setInterval(function () {
                //             let myid = "clock+" + element.NFT_id;
                //             let time = element.NFT_auction_time;
                //             var dd = timerr(myid, time);
                //             if (dd < 0) {
                //                 clearInterval(x);
                //                 document.getElementById(myid).innerHTML = "expired";
                //                 // document.getElementById(lid).disabled=false;
                //             }
                //         }, 1000);
                //     } else {
                //         let myid = "clock+" + element.NFT_id;
                //         document.getElementById(myid).innerHTML = "buy is going on";
                //     }
                // });
            });
//===================================================for sale Tab start ======================================================================================
        fetch("./usernft3.php", requestOptions)
            .then((response) => response.json())
            .then((res) => {
                var html1 = "";
                var count1 = 0;
                for (i = 0; i < res.length; i++) {
                    ++count1;

                    // document.getElementById("username").innerText = res[i].User_name;
                    // document.getElementById("userbio").innerText = res[i].User_bio;
                    //   document.getElementById("image").innerText = result[i].User_image;

                 
                        let id=res[i].NFT_id;
                        html1 += `<div class="col-lg-3 col-sm-6">
                              <div class="single-auction mt-4 mr-2" style="  display: inline-block;">
                                <div class="row m-0" bis_skin_checked="1">
                                        <div class="col p-0" bis_skin_checked="1"> 
                                        </div>
                                        <div class="col-auto p-0" bis_skin_checked="1">
                                            <div class="dropleft" bis_skin_checked="1">
                                              <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="left-start" style="position: absolute; transform: translate3d(-162px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                 
                                                <a href="./editNFT.php?id=`;
                                                html1+=id+`" class="dropdown-item " target="blank">Edit NFT</a>
                                               
                                              </div>
                                            </div> 
                                        </div>
                                    </div>
                                <div class="auction-img text-center">
                                    <img class="w-100" src="${res[i].NFT_image}" alt="Card image cap">
                                </div>
                              
                                <div class="row m-0">
                                    <div class="col-12 p-0">
                                        <div class="payment_bnb">
                                            <div>
                                            
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="text_nft_heading">${res[i].NFT_name} </h5> <span class="text-muted">1/1</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                <span class="text_nft_heading wsum_product_name"><b> ${res[i].NFT_payment}</b></span>
                                                <span class="text-muted d-flex">${Number(res[i].NFT_price).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })}</span></div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-12 p-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="text_nft_heading wsum_product_name">Tree plant</div>
                                           <div class="text-muted d-flex">${res[i].NFT_treeplant}%</div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                          </div> 
                          `;
                        document.getElementById("totalNft").innerText = count1;
                        document.getElementById("userNfts").innerHTML = html1;
                        // res.forEach((element) => {
                        //     if (element.NFT_auction > "1") {
                        //         let x1 = setInterval(function () {
                        //             let Id = "clock1_" + element.NFT_id;
                        //             // console.log(Id);
                        //             let time1 = element.NFT_auction_time;
                        //             // console.log(time1);
                        //             var dd = timerr(Id, time1);
                        //             if (dd < 0) {
                        //                 clearInterval(x1);
                        //                 document.getElementById(Id).innerHTML = "expired";
                        //             }
                        //         }, 1000);
                        //     }
                        //     //   else{
                        //     //       let myid1 = 'clock1_'+element.NFT_id;
                        //     //       console.log(myid1);
                        //     //       document.getElementById(myid1).innerHTML="buy is going on";
                        //     //           }
                        // });
                }
            });
       //=================================================== Owned Tab start  ======================================================================================
        var formdata = new FormData();
        formdata.append("address", address);

        var requestOptions = {
            method: "POST",
            body: formdata,
            redirect: "follow",
        };

        fetch("./usernft2.php", requestOptions)
            .then((response) => response.json())
            .then((myresult) => {
                //   console.log(result);
                var html2 = "";
                var count2 = 0;
                for (i = 0; i < myresult.length; i++) {
                    ++count2;
              let id=myresult[i].NFT_id;

                    html2 += `
                                  <div class="col-lg-3 col-sm-6">
                                  <div class="single-auction mt-4 mr-2" style="display: inline-block;">
                                    <div class="row m-0" bis_skin_checked="1">
                                        <div class="col p-0" bis_skin_checked="1"> 
                                        </div>
                                        <div class="col-auto p-0" bis_skin_checked="1">
                                            <div class="dropleft" bis_skin_checked="1">
                                              <button class="btn btn-secondary dropleft-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fas fa-ellipsis-v text_nft_heading"></i>
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="left-start" style="position: absolute; transform: translate3d(-162px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                 
                                                <a href="./editNFT.php?id="`;
                                                 html2+=id+`" class="dropdown-item" target="blank">Edit NFT</a>
                                                
                                              </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="auction-img text-center">
                                        <img class="w-100" src="${myresult[i].NFT_image}" alt="Card image cap">
                                    </div>
                                    <div class="auction-content">
                                        <div class="auction-time">
                                            <div class="row m-0">
                                                <div class="col-12 p-0">
                                                    <div class="payment_bnb">
                                                        <div> 
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="text_nft_heading">${myresult[i].NFT_name}</h5> <span class="text-muted">1/1</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="text_nft_heading wsum_product_name"><b> ${myresult[i].NFT_payment}</b></span>
                                                                <span class="text-muted d-flex">${Number(myresult[i].NFT_price).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })}</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-12 p-0">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="text_nft_heading wsum_product_name">Tree plant</div>
                                                        <div class="text-muted d-flex">${myresult[i].NFT_treeplant}%</div>
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
                              </div>  `;
                    document.getElementById("totalNft3").innerText = count2;
                    document.getElementById("usernft3").innerHTML = html2;
                   
                }
            });
        // for the activity tab
        // for mint
        var formdata = new FormData();
        formdata.append("address", address);
        formdata.append("type", "mint");

        var requestOptions = {
            method: "POST",
            body: formdata,
            redirect: "follow",
        };

        fetch("./Activity.php", requestOptions)
            .then((response) => response.json())
            .then((res2) => {
                var myhtml = "";
                for (i = 0; i < res2.length; i++) {
                    myhtml += `<ul class="list-inline list-unstyled">
                                        <li class="single-activity-box" ><div class="row" >
                                        <div class="col-md-3 p-0">
                                            <div class="activity-img">
                                                <img class="" src="${res2[i].NFT_image}" style="">
                                                <span><i class="fa fa-tag"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="activity-content">
                                                <h5>${res2[i].NFT_name}</h5>
                                                <p class="mb-0">Minted on <span class="text-dark"></span></p>
                                                <p><span class="text_nft_heading">${res2[i].NFT_time}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </ul>
                              `;
                    document.getElementById("mint").innerHTML = myhtml;
                }
            })
            .catch((error) => console.log("error", error));

            var formdata = new FormData();
            formdata.append("address", address);
            formdata.append("type", "buy");
    
            var requestOptions = {
                method: "POST",
                body: formdata,
                redirect: "follow",
            };

            fetch("./Activity.php", requestOptions)
                .then((response) => response.json())
                .then((res2) => {
                    var myhtml = "";
                    for (i = 0; i < res2.length; i++) {
                        myhtml += `  <ul class="list-inline list-unstyled">
                                            <li class="single-activity-box" ><div class="row" >
                                            <div class="col-md-3 p-0">
                                                <div class="activity-img">
                                                    <img class="" src="${res2[i].NFT_image}" style="">
                                                    <span><i class="fa fa-tag"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="activity-content">
                                                    <h5>${res2[i].NFT_name}</h5>
                                                    <p class="mb-0">Buy  <span class="text-dark"></span></p>
                                                    <p><span class="text_nft_heading">${res2[i].time}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                              `;
                    document.getElementById("buy").innerHTML = myhtml;
                }
            })
            .catch((error) => console.log("error", error));
        // for bid
        var formdata = new FormData();
        formdata.append("address", address);
        formdata.append("type", "bid");

        var requestOptions = {
            method: "POST",
            body: formdata,
            redirect: "follow",
        };

        fetch("./Activity.php", requestOptions)
            .then((response) => response.json())
            .then((res2) => {
                var myhtml = "";
                for (i = 0; i < res2.length; i++) {
                    myhtml += `  <ul class="list-inline list-unstyled">
                                        <li class="single-activity-box" ><div class="row" >
                                        <div class="col-md-3 p-0">
                                            <div class="activity-img">
                                                <img class="" src="${res2[i].NFT_image}" style="">
                                                <span><i class="fa fa-tag"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="activity-content">
                                                <h5>${res2[i].NFT_name}</h5>
                                                <p class="mb-0">Bid  on<span class="text-dark"></span></p>
                                                <p><span class="text_nft_heading">${res2[i].NFT_bidtime}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                </ul>
                    `;
                    document.getElementById("bid").innerHTML = myhtml;
                }
            })
            .catch((error) => console.log("error", error));
            // for sell
                var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("type", "sell");
        
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };
        
                fetch("./Activity.php", requestOptions)
                    .then((response) => response.json())
                    .then((res2) => {
                        var myhtml = "";
                        for (i = 0; i < res2.length; i++) {
                            myhtml += ` <ul class="list-inline list-unstyled">
                                                <li class="single-activity-box" ><div class="row" >
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="${res2[i].Nft_image}" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>${res2[i].NFT_name}</h5>
                                                        <p class="mb-0">sell <span class="text-dark"></span></p>
                                                        <p><span class="text_nft_heading">${res2[i].Time}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            </li>
                                        </ul>
                            `;
                            document.getElementById("sell").innerHTML = myhtml;
                        }
                    })
                    .catch((error) => console.log("error", error));

              // for verify

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
                                document.getElementById("username").innerText = res2[0].Username;
                                document.getElementById("userbio").innerText = res2[0].Userbio;
                                document.getElementById("usertwitter").innerText = res2[0].Usertwitname;
                                $('#usertwitter').click(function() {
                            
                                         window.location.href = 'https://twitter.com/'+res2[0].Usertwitname
                                    });
                                if(res2[0].Userportfolio==""){
                                      document.getElementById('portfolio').style.display = 'none';
                                }  
                                $('#portfolio').click(function() {
                            
                                         window.location.href =  res2[0].Userportfolio;
                                    });    
                                
                             //  document.getElementById("items_bg_img").style.backgroundImage = "url("+res2[0].coverphoto+")";
                                   document.getElementById('items_bg_img').setAttribute("style", "background-image: url(" + res2[0].coverphoto + ");background-repeat: no-repeat");
                                if (res2[0].verify >= "1") {
                                    document.getElementById("sign").style.display = "block";
                                } else {
                                    document.getElementById("sign").style.display = "none";
                                }
                                
                                var html2="";
                    html2+=`
                            <div class="auction-img text-center">
                            <img class="" src="${res2[0].Userimage}" alt="Card image cap">
                            </div>`;
                            document.getElementById("image").innerHTML = html2;
                    })
                    .catch((error) => console.log("error", error));
           
            // ===================================================for the followers========================================================== 
                var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("type", "follow");
        
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                  };
        
                fetch("./Activity.php", requestOptions)
                    .then((response) => response.json())
                    .then((res2) => {
                     let myhtml="";
                    let count=0;
                    for (i = 0; i < res2.length; i++) {
                       ++count; 
                       console.log(res2);
                    myhtml += ` 
                            <ul class="list-inline">
                             <li>
                                <div class="single-follow">
                                    <div class="row">
                                         <div class="col-md-auto">
                                            <div class="text-center user__circle">
                                                <img src="${res2[i].Followers_image}" class="rounded-circle" width="60" height="60" alt=""/>
                                            </div>
                                        </div>
                                       <div class="col-md"> 
                                            <h6>${res2[i].Followers_name}</h6>
                                             <a href="./collection.php?address=${res2[i].Follower_address}"> <small>${res2[i].Follower_address}</small></a>   
                                        </div>
                                       
                                    </div>
                                </div>
                                </li> 
                            </ul>
                         `;
                        document.getElementById("follow").innerHTML = myhtml;
                        document.getElementById("follower").innerHTML = count;
                        
                                   let id=`click${res2[i].id}`;
                                //   console.log(id);
                                   window.address=`${res2[i].Follower_address}`;
                                   let Id=res2[i].id;
                                //   console.log(address);
                                //   console.log(Id);
                                //   followback(address,Id)
                        
                         }
                        
                    })
                    .catch((error) => console.log("error", error));
            //=============================================================for following========================================================
            var formdata = new FormData();
                formdata.append("address", address);
                formdata.append("type", "following");
        
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                  };
        
                fetch("./Activity.php", requestOptions)
                    .then((response) => response.json())
                    .then((res3) => {
                     let myhtml1="";
                    let count1=0;
                    for (i = 0; i < res3.length; i++) {
                       ++count1; 
                       console.log(res3);
                    myhtml1 += ` 
                            <ul class="list-inline">
                             <li>
                                <div class="single-follow">
                                    <div class="row">
                                         <div class="col-md-auto">
                                            <div class="text-center user__circle">
                                                <img src="${res3[i].User_image}" class="rounded-circle" width="60" height="60" alt=""/>
                                            </div>
                                        </div>
                                       <div class="col-md"> 
                                            <h6>${res3[i].User_name}</h6>
                                             <a href="./collection.php?address=${res3[i].User_address}"> <small>${res3[i].User_address}</small></a>   
                                        </div>
                                       
                                    </div>
                                </div>
                                </li> 
                            </ul>
                         `;
                        document.getElementById("following").innerHTML = myhtml1;
                        document.getElementById("following1").innerHTML = count1;
                        
                                   let id=`click${res3[i].id}`;
                                //   console.log(id);
                                   window.address=`${res3[i].Follower_address}`;
                                   let Id=res3[i].id;
                                //   console.log(address);
                                //   console.log(Id);
                                //   followback(address,Id)
                        
                         }
                        
                    })
                    .catch((error) => console.log("error", error));
                
    });
</script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function myFunction(Id) {
        let value = document.getElementById("resellvalue").value;
        console.log(Id);
        console.log(value);
        var formdata = new FormData();
        formdata.append("value", value);
        formdata.append("Id", Id);
console.log(Id);
      var formdata = new FormData();
formdata.append("Id", Id);
formdata.append("value",value);

var requestOptions = {
  method: 'POST',
  body: formdata,
  redirect: 'follow'
};

fetch("./resell.php", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
                 Swal.fire({
                                              icon: 'success',
                                              title: 'Great...',
                                              text: 'Now NFT On MarketPalce ðŸŽ‰',
                                             
                                                }).then((ok) => {
                                                         
                                                        window.location = "./my_item.php";
                                                 
                                                 })
                
          
    }
</script>


<script>

</script>
