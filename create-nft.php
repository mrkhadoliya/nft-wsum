<?php 
include "header.php";
?>
<style>
    .create-single-nft {
        border: 1px solid #ccc;
        padding: 40px 20px 20px;
        border-radius: 15px;
        margin-top:30px;
        background-color: #fff;
    }
    .left-single-nft {
            position: relative;
        }
    .create-single-nft img.nft-img {
            height: 160px;
        }
        .left-single-nft .timed-auctions h6 {
            position: absolute;
            display: inline-block;
            top: -57px;
            left: 0;
            border: 1px solid #4c549c;
            padding: 8px 15px;
            border-radius: 30px;
            color: #fff;
            background-color: #4c549c;
        }
</style>
<section class="create-nft-collectible py-5 mt-5">
    <div class="banner-content-here py-5">
        <h2 class="text-center text-white">Create NFT</h2>
        <div class="text-center text-white"><a class="text-white" href="/index.php">WSUM-ART</a> &gt; <a class="text-white" href="#">Create NFT</a></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="upper-content-NFT">
                    <h2 class="text_nft_heading mt-5">Create collectible</h2>
                    <p>
                        Choose “Single” if you want your collectible to be one of a kind or “Multiple” if you want to sell one collectible multiple times
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="create-single-nft text-center">
                    <a class="text-decoration-none" href="./create.php">
                        <div class="left-single-nft">
                            <img class="nft-img" src="assets/img/single-create2.png" style="">
                            <h5 class="mt-3">Single</h5>
                            <div class="timed-auctions"><h6>Timed auctions <img src="assets/img/fire.png"  style="width:15px!important;height:15px1important;"></h6></div>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="create-single-nft text-center">
                    <a class="text-decoration-none" href="./create-multiple.php">
                        <div class="right-multiple-nft">
                            <img class="nft-img" src="assets/img/multiple-create1.png" style="">
                            <h5 class="mt-3">Multiple</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="create-single-nft text-center">
                    <a class="text-decoration-none" href="./charity-multiple.php">
                        <div class="right-multiple-nft">
                            <img class="nft-img" src="assets/img/Charity-nft-by-rohit-kumar.png" style="">
                            <h5 class="mt-3">Charity NFT</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="upper-content-NFT">
                    
                    <p class="mt-5">
                        We do not own your private keys and cannot access your funds without your confirmation

                    </p> 
                                               
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>