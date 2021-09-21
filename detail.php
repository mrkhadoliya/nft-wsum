<?php 
include "header.php";?>


 <style>
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

.wsum-nft-detail-page .carousel-container {
  padding: 0;
  margin: 1em auto;
  display: inline-block;
  max-width: 100%;
  width: 400px;
  height: 300px;
  position: relative;
  list-style-type: none;
}
.wsum-nft-detail-page .carousel-container .carousel-content {
  height: 300px;
  overflow: hidden;
  background: rgba(0,0,0,0.9);
  position: absolute;
  top: 0;
  box-shadow: 0 5px 5px -5px #333;
  padding: 0;
  text-align: center;
  line-height: 296px;
}
.wsum-nft-detail-page .carousel-container .carousel-content img {
  opacity: 0;
  padding: 0;
  /*width: auto;*/
  /*height: auto;*/
  /*max-height: 300px;*/
  /*max-width: 400px;*/
  vertical-align: middle;
  -webkit-animation-name: ziim;
  -webkit-animation-duration: 0.6s;
  animation-name: ziim;
  animation-duration: 0.6s;
}
@-webkit-keyframes ziim {
  from {-webkit-transform:scale(1)} 
  to {-webkit-transform:scale(0)}
}
@keyframes ziim {
  from {transform:scale(1)} 
  to {transform:scale(0)}
}
.wsum-nft-detail-page .carousel-container .carousel-toggle:checked ~ .carousel-content,.wsum-nft-detail-page .carousel-container .carousel-toggle.active ~ .carousel-content {
  height: 100%;
  width: 100%;
}
.wsum-nft-detail-page .carousel-container .carousel-toggle:checked ~ .carousel-content img,.wsum-nft-detail-page .carousel-container .carousel-toggle.active ~ .carousel-content img {
  opacity: 1;
}
.wsum-nft-detail-page .carousel-fullscreen {
  position: absolute;
  bottom: 0;
  right: 0;
  margin: 0 4px 4px 0;
  width: 27px;
  height: 27px;
  cursor: pointer;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAQAAAAn3TzeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAA/SURBVHjaYvjPQA5kGCHaUEApQylDKZrY4NEG5UG1YZUbetpKCcJBoG04R8DQyAGjJRfDf4b/DAAAAAD//wMAswEnryWu8FcAAAAASUVORK5CYII=') no-repeat center center;
}
.wsum-nft-detail-page .carouselFullScreen:checked,.carouselFullScreen.active {
  display: block;
  height: 100%;
}
.wsum-nft-detail-page .carouselFullScreen:checked+.carousel-container,.wsum-nft-detail-page .carouselFullScreen.active+.carousel-container {
  margin: 0;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;  
}
.wsum-nft-detail-page .carouselFullScreen:checked+.carousel-container .carousel-toggle:checked ~.carousel-content >li,.wsum-nft-detail-page  .carouselFullScreen.active+.carousel-container .carousel-toggle:checked ~.carousel-content >li {
  height: 100%;
  line-height: 99vh;
}
.wsum-nft-detail-page .carouselFullScreen:checked+.carousel-container .carousel-fullscreen,.wsum-nft-detail-page .carouselFullScreen.active+.carousel-container .carousel-fullscreen {
  width: 54px;
  height: 54px;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAQAAAAmTKJWAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD+SURBVHja7Jc9CoQwEIW9gkdJYyFoIeiFvIaH0VLB0sLGI3iE1DbhbRciGDJrltnFHV+Zpx9I3vwkSPiUCExgAvsH2A7tUY/Sukr0Xt9Ohx3wPQtq66qxeH0HHWa8H1nRWFeD1eszdJiOhulPwKi/8RZMY8PsqIOyLoXudLad3rsB29CicqSQWlcKdTprscXBJuTkHOWY4mAjMjIswxgHm1GRYRXmn4eZy1yF5ObO3ClXbq5CcnP3RrkaLnMVkpu7gQ4rLnMVkpu7Qprnk2GsF4T16rOGmrVcPbfqf6l5so4FrAMP6yjHOqQyjN+siwXrysS6DEqnFpjABEbRawACMWGE7CJdswAAAABJRU5ErkJggg==') no-repeat center center;
}
.wsum-nft-detail-page .carouselFullScreen:checked+.carousel-container img,.wsum-nft-detail-page .carouselFullScreen.active+.carousel-container img {
  width: auto;
  height: 100%;
  max-height: 100vh;
  max-width: 100vw;
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}
@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}
.wsum-nft-detail-page input[type=checkbox].carouselFullScreen,.wsum-nft-detail-page input[type=checkbox].carousel-toggle {
  visibility: hidden;  
}
 </style>
<section class="wsum-nft-detail-page">
    <div class="banner-content-here py-5 my-5"> 
        <h2 class="text-center text-white">Detail</h2>
        <div class="text-center text-white">
            <a class="text-white" href="/index.php">WSUM-NFT</a> > <a class="text-white" href="/detail.php">DETAIL</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row p-0">
            <div class="col-md-6">
                <!--<div class="detail-left-side pb-5">-->
                <!--    <div class="row">-->
                <!--        <div class="col-md-2"></div>-->
                <!--        <div class="col-md-8">-->
                <!--            <div class="detail-img"><img class="d-block w-100" src="assets/img/gif9.gif" alt=""></div>-->
                <!--        </div>-->
                <!--        <div class="col-md-2"></div>-->
                <!--    </div>-->
                <!--</div>-->
                <div style="text-align: center">
                  <!--<h1>Carousel without JavaScript</h1>-->
                <input id="satu" type="checkbox" class="carouselFullScreen" />
                    <ul class="carousel-container">
                        <li>
                            <input type="checkbox" checked="checked" class="carousel-toggle" />
                            <ul class="carousel-content">
                                <!--<li><img src="//lorempixel.com/400/200/nature/" /></li>-->
                                <li>
                                    <img class="d-block w-100" src="assets/img/gif9.gif" alt="">
                                </li>
                            </ul>
                        </li>
                        <label for="satu" class="carousel-fullscreen"></label>
                </ul>
                </div>  
            </div>
            <div class="col-md-6">
                <div class="detail-right-side">
                    <div class="head-detail">
                        <div class="d-flex justify-content-between">
                            <div style="width:70%"><h2>Lorem ipsum, lipsum some times</h2></div>
                            <div style="width:15%">
                               <div class="likes-here-btn-set">
                                    <a href="#"><span>🤍 00 </span></a>
                               </div>
                            </div>
                            <div style="width:15% text-right">
                                <div class="side-btn-click">
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ...
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">New bid</a>
                                        <!--<a class="dropdown-item" href="#">View on OpenSea</a>-->
                                        <a class="dropdown-item" href="#">View on ---</a>
                                        <a class="dropdown-item" href="#">Share</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>On sale for 00 ETH</p>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual 
                    form of a document or a typeface without relying on meaningful content.</p>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual 
                    form of a document or a typeface without relying on meaningful content.</p>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual 
                    form of a document or a typeface without relying on meaningful content.</p>
                    <div class="creator-collection-set">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Creator</h6>
                                <div class="d-flex justify-content-between">
                                    <div style="width:20%" class="left-img-in-here">
                                        <img src="assets/img/creator_img.png" class="">
                                    </div>
                                    <div style="width:80% " class="right-img-in-here">
                                        <div class="content-line">
                                            <h5 class="pt-3 px-2">Billy Markus</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Collection</h6>
                                <div class="d-flex justify-content-between">
                                    <div style="width:20%" class="left-img-in-here">
                                        <img src="assets/img/img3.png" class="">
                                    </div>
                                    <div style="width:80%" class="right-img-in-here">
                                        <div class="content-line">
                                            <h5 class="pt-3 px-2">Foundation</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-bid-history py-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bids</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">History</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="detail-tab-set">
                                  <h6 class="mt-4">Creator</h6>
                                  <ul class="list-inline">
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/creator_img.png"  class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h5 class="pt-3 px-2">Billy Markus</h5>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="bid-tab-set mt-4">
                                  <ul class="list-inline">
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/creator_img.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span></h6>
                                                    <p class=" px-2">6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/img1.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span></h6>
                                                    <p class=" px-2">6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/img2.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span></h6>
                                                    <p class=" px-2">6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/creator_img.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span></h6>
                                                    <p class=" px-2">6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="history-tab-set mt-4">
                                  <ul class="list-inline">
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/creator_img.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>10 ETH</span></h6>
                                                    <p class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span> 6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/img1.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>10 ETH</span></h6>
                                                    <p class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span> 6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/img2.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>10 ETH</span></h6>
                                                    <p class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span> 6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="d-flex justify-content-between">
                                            <div style="width:10%" class="left-img-in-here1">
                                                <img src="assets/img/creator_img.png" style="border-radius:50%;height:50px;width:50px" class="">
                                            </div>
                                            <div style="width:90%" class="right-img-in-here1">
                                                <div class="content-line">
                                                    <h6 class=" px-2">lorem ipsum <span>10 ETH</span></h6>
                                                    <p class=" px-2">lorem ipsum <span>0x9ebd97bf7...af33</span> 6/10/2021, 10:20 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="buy-bid-btn-set py-5 border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="buy-for-btn text-center">
                                    <a class="btn" href="#" data-toggle="modal" data-target="#myModal">Buy for 10 ETH</a>
                                </div>
                                
                                  <!-- The Modal -->
                                  <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header border-0">
                                          <h4 class="modal-title">Place a bid</h4>
                                          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                         <p>You are about to place a bid for <strong>Art</strong> by <strong>Deftroy</strong></p>
                                         <h5>You bid </h5>
                                         <form>
                                          <div class="form-group">
                                            <div class="form-set-input">
                                                <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email" value="0.000">
                                                <span>? wETH</span>
                                            </div>
                                          </div>
                                          <h6>Must be atleast 0.00wETH</h6>
                                          <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                                        </form>
                                        <div class="form-popup-content mt-3">
                                            <div class="row">
                                                <div class="col"><p>Your bidding balance</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong>0 wETH</strong></div></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><p>Your balance</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong>0 ETH</strong></div></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><p>Service fee</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong> ~ 0.000 wETH</strong></div></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><p>Total bid amount</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong>  0.000 wETH</strong></div></div>
                                            </div>
                                        </div>
                                        <div class="bid-content-footer">
                                            <button type="submit" class="btn btn-primary form-control">Buy</button>
                                            
                                            <p class="text-center text-danger pt-2"> Not enough funds</p>
                                        </div>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <!--<div class="modal-footer">-->
                                        <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                        <!--</div>-->
                                        
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="buy-for-btn text-center">
                                    <a class="btn" href="#" data-toggle="modal" data-target="#myModal1">Place a bid</a>
                                </div>
                                <!-- The Modal -->
                                  <div class="modal fade" id="myModal1">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header border-0">
                                          <h4 class="modal-title">Place a bid</h4>
                                          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                         <p>You are about to place a bid for <strong>Art</strong> by <strong>Deftroy</strong></p>
                                         <h5>You bid </h5>
                                         <form>
                                          <div class="form-group">
                                            <div class="form-set-input">
                                                <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email" value="0.000">
                                                <span>? wETH</span>
                                            </div>
                                          </div>
                                          <h6>Must be atleast 0.00wETH</h6>
                                          <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                                        </form>
                                        <div class="form-popup-content mt-3">
                                            <div class="row">
                                                <div class="col"><p>Your bidding balance</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong>0 wETH</strong></div></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><p>Your balance</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong>0 ETH</strong></div></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><p>Service fee</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong> ~ 0.000 wETH</strong></div></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><p>Total bid amount</p></div>
                                                <div class="col-auto"><div class="valuhere"><strong>  0.000 wETH</strong></div></div>
                                            </div>
                                        </div>
                                        <div class="bid-content-footer">
                                            <button type="submit" class="btn btn-primary form-control">Place a bid</button>
                                            
                                            <p class="text-center text-danger pt-2"> Not enough funds</p>
                                        </div>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <!--<div class="modal-footer">-->
                                        <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                        <!--</div>-->
                                        
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
</section>

<?php 
include "footer.php";
?>