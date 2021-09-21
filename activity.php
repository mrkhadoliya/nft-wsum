<?php 
include "header.php";?>


 <style>
 .container {
    max-width: 1140px!important;
}
     .banner-content-here{
        background: #4c549c!important;
     }
     .wsum-nft-detail-page{
         padding-top:45px;
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
    color: #040405!important;
    border-bottom: 2px solid #040405!important;
}
.detail-right-side .dropdown-menu.show{
    left: -90px!important;
}
.likes-here-btn-set a {
    border: 1px solid #ccc;
    padding: 8px 20px;
    border-radius: 20px;
    display: block;
}
.side-btn-click .dropdown button#dropdownMenuButton {
    border: 1px solid #ccc!important;
}
.buy-for-btn {
    margin-bottom: 10px;
}


 </style>
<section class="wsum-nft-detail-page">
    <div class="banner-content-here py-5 my-5"> 
        <h2 class="text-center text-white">Activity</h2>
        <div class="text-center text-white">
            <a class="text-white" href="index.php">WSUM-NFT</a> > <a class="text-white" href="activity.php">ACTIVITY</a>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="activity-tab">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Following</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">My Activity</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <div class="all-content-tab">
                              <div class="row">
                                  <div class="col-md-12">
                                    <h5 class="mt-5">Filters</h5>
                                    <div class="activity-filters">
                                        <ul class="list-inline">
                                            <!--<li class="list-inline-item"><button class="btn "><i class="fa fa-tag"></i> Listings</button></li>-->
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-money"></i> Purchases</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-tag"></i> sales</button></li>
                                            <!--<li class="list-inline-item"><button class="btn "><i class="fa fa-exchange"></i> Transfers</button></li>-->
                                            <!--<li class="list-inline-item"><button class="btn "><i class="fa fa-fire"></i> Burns</button></li>-->
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-link"></i> Bids</button></li>
                                            <!--<li class="list-inline-item"><button class="btn "><i class="fa fa-heart"></i> Likes</button></li>-->
                                            <!--<li class="list-inline-item"><button class="btn "><i class="fa fa-check"></i> Followings</button></li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="activity-boxes mt-4">
                                        <div class="single-activity-box">
                                            <div class="row">
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="assets/img/Image 03 Alt copy.jpg" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>Lorem ipsum sample text</h5>
                                                        <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>
                                                        <p><span>21/06/2021,2:52 PM</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="activity-boxes mt-4">
                                        <div class="single-activity-box">
                                            <div class="row">
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="assets/img/Image 13 Final copy.jpg" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>Lorem ipsum sample text</h5>
                                                        <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>
                                                        <p><span>21/06/2021,2:52 PM</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="activity-boxes mt-4">
                                        <div class="single-activity-box">
                                            <div class="row">
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="assets/img/Image 40 Final copy.jpg" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>Lorem ipsum sample text</h5>
                                                        <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>
                                                        <p><span>21/06/2021,2:52 PM</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="activity-boxes mt-4">
                                        <div class="single-activity-box">
                                            <div class="row">
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="assets/img/Image 33 Final copy.jpg" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>Lorem ipsum sample text</h5>
                                                        <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>
                                                        <p><span>21/06/2021,2:52 PM</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="activity-boxes mt-4">
                                        <div class="single-activity-box">
                                            <div class="row">
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="assets/img/Image 39 Final.jpg" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>Lorem ipsum sample text</h5>
                                                        <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>
                                                        <p><span>21/06/2021,2:52 PM</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="activity-boxes mt-4">
                                        <div class="single-activity-box">
                                            <div class="row">
                                                <div class="col-md-3 p-0">
                                                    <div class="activity-img">
                                                        <img class="" src="assets/img/Image 03 Alt copy.jpg" style="">
                                                        <span><i class="fa fa-tag"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="activity-content">
                                                        <h5>Lorem ipsum sample text</h5>
                                                        <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>
                                                        <p><span>21/06/2021,2:52 PM</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="following-filter-content-tab">
                              <div class="row">
                                  <div class="col-md-12">
                                    <h5 class="mt-5">Filters</h5>
                                    <div class="activity-filters">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-tag"></i> Listings</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-money"></i> Purchases</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-tag"></i> sales</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-exchange"></i> Transfers</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-fire"></i> Burns</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-link"></i> Bids</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-heart"></i> Likes</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-check"></i> Followings</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="nothing-yet-filter">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <div class="nothing-yet-content">
                                                    <h4>Nothing yet</h4>
                                                    <p>Activity will be shown here</p>
                                                    <div class="explore-wsum-art">
                                                        <a href="index.php" class="btn btn-primary">Exploare wsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <div class="activity-filter-content-tab">
                              <div class="row">
                                  <div class="col-md-12">
                                    <h5 class="mt-5">Filters</h5>
                                    <div class="activity-filters">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-tag"></i> Listings</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-money"></i> Purchases</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-tag"></i> sales</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-exchange"></i> Transfers</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-fire"></i> Burns</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-link"></i> Bids</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-heart"></i> Likes</button></li>
                                            <li class="list-inline-item"><button class="btn "><i class="fa fa-check"></i> Followings</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="nothing-yet-filter">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <div class="nothing-yet-content">
                                                    <h4>Nothing yet</h4>
                                                    <p>Activity will be shown here</p>
                                                    <div class="explore-wsum-art">
                                                        <a href="index.php" class="btn btn-primary">Exploare wsum</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            
            <!--<div class="col-md-7 col-sm-7 col-lg-7">-->
            <!--    <div class="activity-boxes">-->
            <!--        <ul class="list-inline">-->
            <!--            <li>-->
            <!--                <div class="single-activity-box">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-3 p-0">-->
            <!--                            <div class="activity-img">-->
            <!--                                <img class="" src="assets/img/gif9.gif" style="">-->
            <!--                                <span><i class="fa fa-tag"></i></span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-9">-->
            <!--                            <div class="activity-content">-->
            <!--                                <h5>Lorem ipsum sample text</h5>-->
            <!--                                <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>-->
            <!--                                <p><span>15/06/2021,2:52 PM</span></p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <div class="single-activity-box">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-3 p-0">-->
            <!--                            <div class="activity-img">-->
            <!--                                <img class="" src="assets/img/gif8.gif" style="">-->
            <!--                                <span><i class="fa fa-tag"></i></span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-9">-->
            <!--                            <div class="activity-content">-->
            <!--                                <h5>Lorem ipsum sample text</h5>-->
            <!--                                <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>-->
            <!--                                <p><span>15/06/2021,2:52 PM</span></p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <div class="single-activity-box">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-3 p-0">-->
            <!--                            <div class="activity-img">-->
            <!--                                <img class="" src="assets/img/gif6.gif" style="">-->
            <!--                                <span><i class="fa fa-tag"></i></span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-9">-->
            <!--                            <div class="activity-content">-->
            <!--                                <h5>Lorem ipsum sample text</h5>-->
            <!--                                <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>-->
            <!--                                <p><span>15/06/2021,2:52 PM</span></p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <div class="single-activity-box">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-3 p-0">-->
            <!--                            <div class="activity-img">-->
            <!--                                <img class="" src="assets/img/gif7.gif" style="">-->
            <!--                                <span><i class="fa fa-tag"></i></span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-9">-->
            <!--                            <div class="activity-content">-->
            <!--                                <h5>Lorem ipsum sample text</h5>-->
            <!--                                <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>-->
            <!--                                <p><span>15/06/2021,2:52 PM</span></p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <div class="single-activity-box">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-3 p-0">-->
            <!--                            <div class="activity-img">-->
            <!--                                <img class="" src="assets/img/gif4.gif" style="">-->
            <!--                                <span><i class="fa fa-tag"></i></span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-9">-->
            <!--                            <div class="activity-content">-->
            <!--                                <h5>Lorem ipsum sample text</h5>-->
            <!--                                <p class="mb-0">started following <span class="text-dark"><img class="following-activity" src="assets/img/img1.png" style="height:20px"> Lorem ipsum</span></p>-->
            <!--                                <p><span>15/06/2021,2:52 PM</span></p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->
            
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>