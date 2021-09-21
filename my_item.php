<?php 
include "header.php";
include "config.php"; 
$query="SELECT * FROM User_follow ";
$result=mysqli_query($link,$query);
$data = mysqli_fetch_assoc($result);
if(isset($_POST['submitcover'])){
    
       if(!empty($_POST['Accounts'])){
                           
                $valid_extensions = array('jpeg', 'jpg', 'png','gif'); 
               
                $path = './uploads/'; 
                $img = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                $final_image =$img;
                $accounts=$_POST['Accounts'];

                if(in_array($ext, $valid_extensions)){ 
                      if(true){
                        move_uploaded_file($tmp,$path);
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
   
</style>
<section class="wsum-nft-detail-page pt-0">

    
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
                                 
                                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                    <form method="post" action="" enctype="multipart/form-data">
                                    <main class="main_full"> 
                                        <div class="panel">
                                          <div class="button_outer">
                                            <div class="btn_upload">
                                              <input type="file" id="upload_file" name="image">
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
                        <span class="badge_icon__" id="sign"><i class="fas fa-badge-check" style="color:#131531"></i></span>
                    </div>
                    <div class="py-4 twitter_div">
                        <i class="fab fa-twitter text_nft_heading" title="Twitter"></i> &nbsp;<span id="usertwitter"></span> &nbsp; &nbsp;
                        <i class="fab fa-instagram" title="Instagram"></i> &nbsp;<span id="userinsta"></span> &nbsp; &nbsp;
                        <a href="javascript:void(0);" class="py-1 px-3 rounded-pill" id="currentAddress"></a> &nbsp; &nbsp;
                        <a href="#" class="py-1 px-3 rounded-pill" id="portfolio">Website</a>
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
                        <a href="#" class="text-white"><div class="onsale-btn bg_green" id="treeplantfees">Average Will Go To Tree Plant</div></a>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="load__more__btn py-md-5 ">
                                           <button type="submit" class="btn onsale-btn w-100" id="loadMore1" value="8">Load more</button>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="owned-tab">
                                
                                <div class="my-items-are-here">
                                    <div class="row" id="usernft3">
                                       
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="load__more__btn py-md-5 ">
                                           <button type="submit" class="btn onsale-btn w-100" id="loadMore2" value="8">Load more</button>
                                         </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="created-tab">
                               
                                <div class="my-items-are-here">
                                    <div class="row" id="userNft2">
                                       
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="load__more__btn py-md-5 ">
                                           <button type="submit" class="btn onsale-btn w-100" id="loadMore3" value="8">Load more</button>
                                         </div>
                                    </div>
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
                                    <!--<div class="row">-->
                                    <!--    <div class="col-md-12">-->
                                            <!--1-->
                                    <!--        <div class="load__more__btn py-md-5 ">-->
                                    <!--           <button type="submit" class="btn onsale-btn w-100" id="loadMore1" value="8">Load more</button>-->
                                    <!--         </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
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
                       
                        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="created-tab" >
                           
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
                   
                      
                      document.getElementById("treeplantfees").innerHTML=result +"% Average Will Go To Tree Plant";
                  })
                  .catch(error => console.log('error', error));
        document.getElementById("currentAddress").innerText = address;
        //===================================================      created Tab   start  ======================================================================================
        // $('#currentAddress').click(function() {
        //          window.location.href = 'https://testnet.bscscan.com/address='+address;
        //     });
        $("#currentAddress").attr('href',`https://bscscan.com/address/${address}`);

       
       
//===================================================for sale Tab start ======================================================================================

       //=================================================== Owned Tab start  ======================================================================================
      
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
                                document.getElementById("userinsta").innerText = res2[0].Userinstaname;
                              
                                
                                $('#usertwitter').click(function() {
                            
                                         window.location.href = 'https://twitter.com/'+res2[0].Usertwitname;
                                    });
                                    $('#userinsta').click(function() {
                            
                                         window.location.href = 'https://www.instagram.com/'+res2[0].Userinstaname;
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
                    //   console.log(res2);
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
                                
                                   window.address=`${res2[i].Follower_address}`;
                                   let Id=res2[i].id;
                                
                        
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
                             
                                   window.address=`${res3[i].Follower_address}`;
                                   let Id=res3[i].id;
                             }
                        
                    })
                    .catch((error) => console.log("error", error));
                    

    
 $.getJSON("./json/data.json?version="+Math.random(), function(json) {
                                       
                                            var nftinfo=json.nft_info;
                                            var nft_like=json.nft_like;
                                           
                                            let nftcreate =nftinfo.filter(function(item){
                                                return (item.NFT_creator_add == address && item.block=="0"); 
                                                
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
                                                    
                                                    let create ="";
                                                    let sell="";
                                                    let owned="";
                                                    let count=0;
                                                    let count1=0;
                                                    let count2=0;
                                                    
                                                    for(let k=0; k<value; k++){
                                                        ++count;
                                                      
                                                    create+=` <div class="col-lg-3 col-sm-6">
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
                                                                            create+=`${nft_info[k].NFT_id}" class="dropdown-item download_btn_a" target="blank">Edit NFT 
                                                                         </a>
                                                                       </div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="auction-img text-center">
                                                                <img class="w-100" src="${nft_info[k].NFT_image}" name='image' alt="Card image cap">
                                                            </div>
                                                            <div class="auction-content">
                                                                <div class="auction-time">
                                                                   
                                                                    <div class="row m-0">
                                                                        <div class="col-12 p-0">
                                                                            <div class="payment_bnb">
                                                                                <div>
                                                                                
                                                                                    <div class="d-flex justify-content-between">
                                                                                        <h5 class="text_nft_heading" id="name">${nft_info[k].NFT_name}</h5> <span class="text-muted">${nft_info[k].start_id}/${nft_info[k].end_id}</span>
                                                                                    </div>
                                                                                    <div class="d-flex justify-content-between">
                                                                                        <span class="text_nft_heading wsum_product_name"> <b>${nft_info[k].NFT_payment}</b></span> 
                                                                                        <span class="text-muted d-flex">${Number(nft_info[k].NFT_price).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })} </span>
                                                                                    </div>
                                                                                </div> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 p-0">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="text_nft_heading wsum_product_name">Tree plant</div>
                                                                                <div class="text-muted d-flex">${nft_info[k].NFT_treeplant}% &nbsp;`;
                                                                            let like_value=0;
                                                                            for(var z=0; z<nft_like.length; z++){
                                                                                
                                                                                let nftlike=nft_like[z].User_address.toLowerCase();
                                                                                if(nft_like[z].NFT_id == nft_info[k].NFT_id && nftlike==address){
                                                                                   like_value=1;
                                                                                }
                                                                            }
                                                                            if(like_value==1){
                                                                            
                                                                                create+=` <span  id="heart1${nft_info[k].NFT_id}" onclick='liked("${nft_info[k].NFT_id}","${nft_info[k].NFT_image}","${nft_info[k].NFT_name}","liked${nft_info[k].NFT_id}","heart1${nft_info[k].NFT_id}")'><i class="fas fa-heart " aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[k].NFT_id}" >  ${nft_info[k].NFT_likes} </span></div>`;
                                                                            }else{
                                                                               
                                                                                create+=` <span  id="heart1${nft_info[k].NFT_id}" onclick='liked("${nft_info[k].NFT_id}","${nft_info[k].NFT_image}","${nft_info[k].NFT_name}","liked${nft_info[k].NFT_id}","heart1${nft_info[k].NFT_id}")'><i class="fal fa-heart " aria-hidden="true"></i>  &nbsp; </span><span id="liked${nft_info[k].NFT_id}" >  ${nft_info[k].NFT_likes} </span></div>`;
                                                                            }
                                                                    create+=`</div>
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
                                                      </div> 
                                                     `;  
                                                     if(state==1)
                                                     {
                                                    document.getElementById("userNft2").innerHTML = create;
                                                    document.getElementById("totalNft2").innerText = count;
                                                         
                                                     }
                                                     if(state==2)
                                                     {
                                                         
                                                    document.getElementById("totalNft").innerText =count ;
                                                    document.getElementById("userNfts").innerHTML = create;
                                                    
                                                     }
                                                     if (state==3)
                                                     {
                                                    document.getElementById("totalNft3").innerText =count ;
                                                    document.getElementById("usernft3").innerHTML = create;
                                                    
                                                     }
                                                  }
                                              }
                                             let oldd=8;
                                                $("#loadMore1").on("click",function(){
                                                    let value =Number($('#loadMore1').val());
                                                    oldd=oldd+value;
                                                   
                                                    loadfunction(oldd,nftsell,2);
                                                    })
                                                $("#loadMore2").on("click",function(){
                                                    let value =Number($('#loadMore2').val());
                                                    oldd=oldd+value;
                                                   
                                                    loadfunction(oldd,nftowner,3);
                                                    })
                                                $("#loadMore3").on("click",function(){
                                                    let value =Number($('#loadMore3').val());
                                                    oldd=oldd+value;
                                                   
                                                    loadfunction(oldd,nftcreate,1);
                                                    })
                                 
                  });
        });
</script>
 
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function myFunction(Id) {
        let value = document.getElementById("resellvalue").value;
        
        var formdata = new FormData();
        formdata.append("value", value);
        formdata.append("Id", Id);

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="html2pdf.bundle.min.js"></script>-->
<!--<script>-->
<!--  function download(id,image12 ){-->
<!--    let wweb3 = new Web3(window.ethereum);-->
<!--        wweb3.eth.getAccounts().then((account) => {-->
<!--            wweb3.eth.personal.sign("You downloa this NFT"+id, account[0], "test password!")-->
<!--              .then(()=>{-->
                  
<!--                const element = document.getElementById('name'); -->
<!--                html2pdf().from(element).save();-->
                  
<!--              }).catch(console.log);-->
<!--        }).catch(console.log);  -->
      
<!--  }  -->
    
<!--</script>-->
<script>
function download(id,image12 ){
        let wweb3 = new Web3(window.ethereum);
        wweb3.eth.getAccounts().then((account) => { 
                            wweb3.eth.personal.sign("You downloa this NFT"+id, account[0], "test password!")
                                                            .then(()=>{
                                                                console.log(image12);
                                                                let downloadimage="http://wsum.art/"+image12;
                                                                console.log(downloadimage);
                                                                saveAs(downloadimage);
                                                            }).catch(console.log);
          }).catch(console.log);   
                                                             
                    
  }
         
</script>


