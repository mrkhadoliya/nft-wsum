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
section.wsum-nft-following-page {
    margin-top: 92px;
}

 </style>
<section class="wsum-nft-following-page">
    <div class="banner-content-here py-5 my-5"> 
        <h2 class="text-center text-white">Following</h2>
        <div class="text-center text-white">
            <a class="text-white" href="index.php">WSUM-NFT</a> > <a class="text-white" href="following.php">FOLLOWING</a>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right following-filter-page">
                    <div class="filterandrow">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg viewBox="0 0 24 24" fill="none" width="22" height="22" xlmns="http://www.w3.org/2000/svg"><path d="M20 16L12 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 16L4 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20 8L18 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 8L4 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="9" cy="16" r="3" fill="currentColor"></circle><circle cx="15" cy="8" r="3" fill="currentColor"></circle></svg>
                            Filter &amp; Sort
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             <h6>Sort</h6>
                            <a class="dropdown-item" href="#">Recently added</a>
                            <a class="dropdown-item" href="#">Cheapest</a>
                            <a class="dropdown-item" href="#">Highest price</a>
                            <a class="dropdown-item" href="#">Most liked</a>
                            <h6 class="mt-3">Options</h6>
                            <a class="dropdown-item" href="#">Verified only 
                            <label class="switch">
                              <input type="checkbox" checked="">
                              <span class="slider round"></span>
                            </label>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="no-item-found-infollowing">
                    <h4>No items found</h4>
                    <p>Come back soon! Or try to browse <br> something for you on our marketplace</p>
                    <div class="browse-marketplace-of-wsum">
                        <a href="index.php" class="btn btn-primary">Browse Marketplace</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>