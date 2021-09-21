<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="mytime"></div>
        <div id="myty"></div>
    </body>
    <script>
        $.getJSON("data.json", function(json) {
        let myhtml = "";
        let nd = "";  
        var result=json;
        var nft_info=json.nft_info;
        var user_info=json.nft_user;
        console.log(result);
        console.log(nft_info);
        let now = new Date().getTime();
        var defaultDate = now - 1000 * 60 * 60 * 24 * 30;
            for (var i=0; i<(nft_info).length; i++){
                for(var j=0; j<(user_info).length; j++){
                    if(user_info[j].Useraddress==nft_info[i].NFT_owner_address){
                        myhtml+= ` <div class="buyers mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="" style="width: 10%;"><span class="pt-3 d-block"></span></div>
                                                <div class="" style="width: 30%;">
                                                    <div class="buyer-img"><img class="" src="../${user_info[i].Userimage}" height="60" height="60" alt=""/> </div>
                                                </div>
                                                <div class="" style="width: 60%; display: grid;align-items: center;">
                                                  <a href="./collection.php?address=${user_info[i].Useraddress}" target="_blank"> <h6>${user_info[i].Username}<span class="badge_icon" id="sign"><i class="fas fa-badge-check" style="color:#28a5da"></i></span></h6></a>
                                                </div>
                                        </div>
                                    </div>
                                        `;
                                    document.getElementById('mytime').innerHTML=myhtml; 
                    }
                }
                                    nd+=`<div class="single-auction mt-4 mr-2" style="display: inline-block;" >
                                        <div class="auction-top pb-3">
                                            <div class="row m-0">
                                                <div class="col p-0">
                                                    <div class="inner_img1"></div>
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
                                                                    <li class="m-2"><a href="https://twitter.com/intent/tweet?text=${nft_info[i].NFT_name},${nft_info[i].NFT_name}&url=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}&ref_src=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_discription}"><i class="fab fa-twitter"></i></a></li>
                                                                    <li class="m-2"><a href="http://www.facebook.com/sharer.php?u=https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}&p[title]=${nft_info[i].NFT_name},${nft_info[i].NFT_name}"><i class="fab fa-facebook"></i></a></li>
                                                                    <li class="m-2"><a href="https://www.linkedin.com/shareArticle?mini=true&url={https://ramlogics.com/wsum-NFT1/bid_description.php?id=${nft_info[i].NFT_id}}&title={${nft_info[i].NFT_id},${nft_info[i].NFT_description}}"><i class="fab fa-linkedin-in"></i></a></li>
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
                                            <img class="" src="../${nft_info[i].NFT_image}" alt="Card image cap" />
                                        </div>
                                        <div class="auction-content">
                                            <div class="auction-time"><?if($res['NFT_auction']>0){ ?>
                                                <h6 class="timer"><a><span id="time${nft_info[i].NFT_id}">00h 00m 00s</span> left 🔥</a></h6><?} else{?>
                                                <h6 class="timer"><a>buy is going on 🔥</a></h6>
                                                <?}?>
                                                
                                                <div class="row m-0">
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex">
                                                            <div class="wsum_product_name text_nft_heading">${nft_info[i].NFT_name}</div>
                                                            <span class="text-muted d-flex">${nft_info[i].NFT_price} <span> ${nft_info[i].NFT_payment}</span></span>
                                                          </div>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="left-nft-content d-flex my-2">
                                                            <div class="wsum_product_name text_nft_heading">Tree plant</div>
                                                            <span class="text-muted d-flex">${nft_info[i].NFT_treeplant}%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="right-nft-content-here text-center">`;
                                                            if(nft_info[i].NFT_auction>0){ 
                                                              nd+=` <a href="./bid_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="bidd${nft_info[i].NFT_id}">Place a bid</button></a>`;} else {
                                                                nd+=`<a href="./buy_description.php?id=${nft_info[i].NFT_id}"><button class="btn btn-default border-color-set" id="buy${nft_info[i].NFT_id}">Buy</button></a>`; }
                                                    nd+=`    </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><br><br>`;
                                    document.getElementById('myty').innerHTML=nd;
                                  // alert("hi");
                 
            }
        }
);
</script>
</html>


<?php
$json = file_get_contents('data.json');
$data = json_decode($json,true);
echo "NFT_Info: ".count($data['NFT_info']);
echo "<br>NFT_User :".count($data['NFT_user']);
echo "<br>NFT_bid :".count($data['NFT_bid']);
echo "<br>NFT_buy :".count($data['NFT_buy']);
echo "<br>NFT_like :".count($data['NFT_like']);
echo "<br>NFT_sell :".count($data['NFT_sell']);
echo "<br>NFT_follow :".count($data['NFT_follow']);

?>  