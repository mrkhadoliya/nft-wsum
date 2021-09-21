<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "header.php";

include "config.php";

$query = "SELECT * FROM `current_id`";
$data = mysqli_query($link, $query);
$result = mysqli_fetch_array($data);

?>
<style>
.choose-tab-this .nav-link{
        width: 100%;
}
    .create-single-collectible .container {
        max-width: 815px !important;
    }
    .details-bid-history .explore-tab-sections .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #000000 !important;
        background-color: #ffffff;
        /* border-color: #dee2e6 #dee2e6 #fff; */
        /*border-radius: 0px;*/
        padding: 8px 15px;
        font-size: 16px;
        /* font-weight: 700; */
        border-bottom: 2px solid #000 !important;
    }
    .upload_here {
        border: 2px dashed rgba(4, 4, 5, 0.1);
        min-height: 140px;
        padding: 30px 10px;
        text-align: center;
        border-radius: 16px;
        overflow: hidden;
    }
    .choosen_img {
        max-height: 300px;
        width: 100%;
        overflow: hidden;
    }
    button.browse.btn.btn-primary {
        border-radius: 20px;
    }
    .upload_here .input-group-append {
        display: inline-block !important;
        text-align: center;
        margin: 0 auto;
    }
    .upload_here p {
        color: #04040580;
        font-size: 15px;
        font-weight: 500;
    }
    .choosen_img img#preview {
        width: 100%;
        height: auto;
        /* min-height: 100px; */
        max-height: 309px;
        object-fit: contain;
        overflow: hidden;
    }
    .preview-section img#preview1 {
        width: 100%;
        height: auto;
    }
    /*    .wsum_bnb {*/
    /*    position: absolute;*/
    /*    right: 0;*/
    /*    top: 0px;*/
    /*    width: 40%;*/
    /*}*/ 
</style>
 
<section class="create-single-collectible">
    <div class="create-form-here">
        <div class="banner-content-here py-5"> 
            <h2 class="text-center text-white">Create multiple NFT</h2>
            <div class="text-center text-white">
                <a class="text-white" href="/index.php">WSUM-NFT</a> &gt; <a class="text-white" href="my_item.php">Create multiple NFT</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="text-decoration-none d-block my-4 text-dark" href="#"> <i class="fa fa-arrow-left"></i> Manage collectible type</a>
                    <h2 class="text_nft_heading mb-5">Create multiple NFT collectible</h2>
                </div>
                <div class="col-md-8">
                    <div class="upload-section">
                        <label>Upload file</label>
                        <div class="upload_here">
                            <p>PNG, GIF, WEBP, MP4 or MP3. Max 100mb.</p>
 
                             <input type="file" name="file" id="tokenImage" style="display: none;" class="file" required accept="image/*" />
                                <div class="input-group my-3">
                                    <div class="input-group-append">
                                        <button type="button" class="browse btn btn-primary">Choose file...</button>
                                    </div>
                                    <!--<input type="text" class="form-control" disabled placeholder="Upload File" id="file">-->
                                </div>

                            <div class="choosen_img" id="img">
                                <!--<img src="assets/img/image.png" id="preview" class="img-thumbnail" width="" height="300px">-->
                                <img src="" id="preview" class=""/>
                            </div>
                        </div>
                    </div>
                    <div class="put-on-marketplace mt-5">
                        <div class="row">
                            <div class="col">
                                <label>Put on marketplace</label>
                            </div>
                            <div class="col-auto">
                                <div class="switch-here">
                                    <label class="switch">
                                        <input type="checkbox" id="checked" checked />
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p>Enter price to allow users instantly purchase your NFT</p>
                        <div class="choose-tab-this">
                            <ul class="row nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="col-md-6 col-6 nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <div class="make-tab">
                                            <!--<i class="fa fa-tags"></i>-->
                                            <img class="" src="assets/img/tag.png" style="height: 40px; width: 40px;" />
                                            <span class="d-block">
                                                Fixed <br />
                                                price
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="col-md-6 col-6 nav-item">
                                    
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="fixed-price-tabcontent">
                                        <form>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col"><label for="exampleInputEmail1">Price</label></div>
                                                    <div class="col"> <label for="exampleFormControlSelect1">BNB</label></div>
                                                </div>
                                                <div class="price-btn-here">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="price"  onkeyup="service()" placeholder="Enter price for one piece" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wsum_bnb">
                                                            <select class="form-control" id="payment">
                                                                <option value="BNB">BNB</option>
                                                                <option value="WSBC">WSBC</option>
                                                                <option value="WBBW">WBBW</option>
                                                                <option value="EJCO">EJCO</option>
                                                                <option value="QBBW">QBBW</option>
                                                                <option value="BUSD">BUSD</option>
                                                                <option value="WBTC">WBTC</option>
                                                                <option value="BETH">BETH</option>
                                                                <option value="WSUM">WSUM</option>
                                                                
                                                            </select>
                                                        </div>
                                                        </div>
                                                    </div>
                                                   </div>
                                                <div class="service-fee-receive mt-3">
                                                    <p class="m-0">Service fee <span class="text_nft_heading" id="service">0.0%</span></p>
                                                        <p id="getbnb">You will receive <span class="text_nft_heading" id="get"> </span> </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                               
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unloack-once-purchased mt-5">
                      
                        <label>Choose collection</label>
                        <div class="choose-collection row">
                             <div class="col-md-6 col-6">
                                <div class="ngkegkhq_btn">
                                    <button class="btn btn-default w-100 py-2 border-color-set">
                                        <img class="" src="assets/img/fevicon.png" style="height: 40px; width: 40px; border-radius: 5%; object-fit: contain;" />
                                        <br />
                                        WSUM <br />
                                        <span class="text-muted">WSUM</span>
                                    </button>
                                </div>
                            </div>
                          
                        </div>
                        <div class="title_area_create_box py-md-4 pt-3">
                            <div class="Title_headeing price-btn-here">
                                <h5>Title</h5>
                                <input placeholder='e. g. "Redeemable T-Shirt with logo"' id="title" type="text" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="title_area_create_box py-md-4 pt-3">
                            <div class="Title_headeing price-btn-here">
                                <h5>Description <small class="font-weight-normal"></small></h5>
                                <input placeholder="e. g. &quot;Redeemable T-Shirt with logo&quote. g. 'After purchasing you’ll be able to get the real T-Shirt'" id="Description" type="text" class="form-control" value="" />
                                <small>With preserved line-breaks</small>
                            </div>
                        </div>
                        <div class="title_area_create_box py-md-4 py-3">
                            <div class="row">
                                <div class="col-md-6 col-12 pt-3">
                                    <div class="Title_headeing price-btn-here">
                                        <h5>Royalties</h5>
                                        <input placeholder="10" type="text" id="royalties" onkeyup="royalties()" class="form-control" value="10" /><span class="float-right" style="position: relative; bottom: 37px;">%</span>
                                        <small>Suggested: 0%, 10%, 20%, 30%</small>
                                    </div>
                                      <div class="">
                                          <p class="text-danger" id="Royalties" style="display:none"> Royalties must be less than 50% </p>
                                            </div>
                                </div>
                                <div class="col-md-6 col-12 pt-3">
                                    <div class="Title_headeing price-btn-here">
                                        <h5>Number of copies</h5>
                                        <input placeholder="E. g. 10" type="text" id="copies" onkeyup="Numberofcopies()" class="form-control" value="10" />
                                        <small>Amount of tokens</small>
                                    </div>
                                    <div class="">
                                          <p class="text-danger" id="Numbercopies" style="display:none"> must be less than or equal to 100</p>
                                            </div>
                                </div>
                                <div class="col-md-12 col-12 pt-3">
                                     <div class="Title_headeing price-btn-here">
                                            <h5> Tree Plant Royalties</h5>
                                            <input placeholder="5" type="text" class="form-control" onkeyup="tree()" id="treeroyalties" value="5" /><span class="float-right" style="position: relative; bottom: 37px;">%</span>
                                            <small>Suggested: 0%, 5%, 10%, 15%</small>
                                        </div>
                                          <div class="">
                                          <p class="text-danger" id="TreePlantRoyalties" style="display:none"> Tree plant royalties must be less than 50%</p>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="title_area_create_box py-md-4 pt-3">
                                <div class="Title_headeing price-btn-here">
                                    <h5>Category</h5>
                                    <div class="category_here-youadd">
                                        <select class="form-control" id="type">
                                            <option value="Collectibles and Art">Collectibles and Art</option>
                                            <option value="Photography">Photography</option>
                                            <option value="Agricultural">Agricultural</option>
                                            <option value="Sports">Sports</option>
                                            <option value="Crypto">Crypto</option>
                                            <option value="Assets">Assets</option>
                                            <option value="Tickets">Tickets</option>
                                            <option value="Lifestyle">Lifestyle</option>
                                            <option value="Holiday">Holiday</option>
                                            <option value="Home & Garden">Home & Garden</option>
                                            <option value="Celebrities">Celebrities</option>
                                            <option value="Vehicles">Vehicles</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="title_area_create_box py-md-4 py-3">
                            <div class="row">
                                <div class="col-md-6 py">
                                    <div class="Title_headeing price-btn-item">
                                        <button class="btn btn-primary w-100 rounded-50 font-weight-bold" onclick="condition()" id="Createitem" type="button">Create item</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="preview-section">
                        <label>Preview</label>
                        <div class="preview-box">
                            <div class="upload-file-preview">
                                <span>
                                    Upload file to preview your brand new NFT
                                </span>
                                <img src="" id="preview1" class="" height="300px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h4 class="modal-title">Collection</h4>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
            </div>

            <!-- Modal body -->
            <div class="modal-body pb-4">
                <div class="collection-popup">
                    <div class="above-collection">
                        <div class="row">
                            <div class="col-3">
                                <div class="popup-image"></div>
                            </div>
                            <div class="col-9">
                                <p>We recommened an image of at least 400*400. Gifs work too.</p>
                                <!--<form action="">-->
                                <!--  <input type="file" id="myFile" name="filename2">-->
                                <!--</form>-->
                                <div class="file-input text-center">
                                    <input type="file" name="file-input" id="file-input" class="file-input__input" style="display: none;"  />
                                    <label class="file-input__label" for="file-input"> <span>Choose file</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="display-form-here">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Display name (<small class="text-muted">required</small>)</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter token name" />
                                <p>Token name cannot be changed in future</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Symbol (<small class="text-muted">required</small>)</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter token symbol" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description (<small class="text-muted">required</small>)</label>
                                <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Spread some words about your token collection" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short url (<small class="text-muted">required</small>)</label>
                                <input type="email" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter short url" />
                                <p>will be used as public URL</p>
                            </div>
                            <button class="btn- btn-primary form-control w-100">Create collection</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!--SHOW LOADING IMAGE-->
<div id="loadingdiv" class="d-none" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 200;">
    <div class="" style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 100%; height: 100vh; background: #cccccc7a;">
        <h3>Transaction in process</h3>
        <img src="assets/img/loading-process.gif" width="100" height="100" />
    </div>
</div>

        <!-- Modal -->
        <div class="modal fade" id="showLoadingBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              
              <div class="modal-body">
                <div class="d-flex align-items-center" style="flex-direction: column;">
                    <div class="w-25">
                        <span id="approveLoading"></span>
                    </div>
                    <div>
                        <h4>Approve</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="flex-direction: column;">
                    <div class="w-25">
                        <span id="transferLoading"></span>
                    </div>
                    <div>
                        <h4>Transfer</h4>
                    </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
<!--SHOW LOADING IMAGE-->

<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).on("click", ".browse", function () {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
            document.getElementById("preview1").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    
    // document.getElementById('checkbox').addEventListener('change',(e)=>{
    //     e.target.checked? $('#submit').attr("disabled", false):$('#submit').attr("disabled", true);  
    // })
</script>

<script>
 var wallet = {
        contract_address: "0xEaee76099220659e80C2faa55F9d042c4754aF5D",
        contract_abi:[ { "inputs": [], "stateMutability": "payable", "type": "constructor" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "approved", "type": "address" }, { "indexed": true, "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "operator", "type": "address" }, { "indexed": false, "internalType": "bool", "name": "approved", "type": "bool" } ], "name": "ApprovalForAll", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": true, "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "Transfer", "type": "event" }, { "inputs": [], "name": "adminAddress", "outputs": [ { "internalType": "address payable", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "approve", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" } ], "name": "balanceOf", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address payable", "name": "_artist", "type": "address" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" } ], "name": "bidingclaim", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_from", "type": "uint256" }, { "internalType": "uint256", "name": "_to", "type": "uint256" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" }, { "internalType": "address payable", "name": "artist", "type": "address" }, { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "buyMultipleThroughBNB", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "uint256", "name": "_from", "type": "uint256" }, { "internalType": "uint256", "name": "_to", "type": "uint256" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" }, { "internalType": "uint256", "name": "buyAmount", "type": "uint256" }, { "internalType": "address", "name": "paymentCurrency", "type": "address" }, { "internalType": "address payable", "name": "_artist", "type": "address" } ], "name": "buyMultipleThroughCurrencies", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "string", "name": "_tokenURI", "type": "string" }, { "internalType": "uint256", "name": "value", "type": "uint256" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address", "name": "_paymentCurrency", "type": "address" }, { "internalType": "uint256", "name": "state", "type": "uint256" } ], "name": "createAuction", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "string", "name": "_tokenURI", "type": "string" }, { "internalType": "uint256", "name": "value", "type": "uint256" }, { "internalType": "uint256", "name": "startId", "type": "uint256" }, { "internalType": "uint256", "name": "endId", "type": "uint256" }, { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "address", "name": "_paymentCurrency", "type": "address" } ], "name": "createFix", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [], "name": "creationFess", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address payable", "name": "artist", "type": "address" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" } ], "name": "fixclaim", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "getApproved", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "operator", "type": "address" } ], "name": "isApprovedForAll", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "name", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "ownerOf", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "safeTransferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "bytes", "name": "_data", "type": "bytes" } ], "name": "safeTransferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "sellingFess", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address payable", "name": "_adminAdd", "type": "address" } ], "name": "setAdminAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "operator", "type": "address" }, { "internalType": "bool", "name": "approved", "type": "bool" } ], "name": "setApprovalForAll", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_creationFess", "type": "uint256" } ], "name": "setCreatonFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_sellingFess", "type": "uint256" } ], "name": "setSellingFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address payable", "name": "_treePlant", "type": "address" } ], "name": "setTreePlantAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "bytes4", "name": "interfaceId", "type": "bytes4" } ], "name": "supportsInterface", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "tokenURI", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "total", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "transferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "treePlant", "outputs": [ { "internalType": "address payable", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" } ]
    };
</script>
<script>
 var walletWSBC = {
        contract_address: "0xb4eaa7058dB92e26EaadD7F1e968D7F79F43Feb8",
        contract_abi:[{"constant":true,"inputs":[],"name":"mintingFinished","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_token","type":"address"}],"name":"reclaimToken","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"unpause","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_amount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"value","type":"uint256"}],"name":"burn","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"claimOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"paused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_subtractedValue","type":"uint256"}],"name":"decreaseApproval","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"finishMinting","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"pause","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_addedValue","type":"uint256"}],"name":"increaseApproval","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"pendingOwner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"anonymous":false,"inputs":[],"name":"Pause","type":"event"},{"anonymous":false,"inputs":[],"name":"Unpause","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"burner","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[],"name":"MintFinished","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"}],"name":"OwnershipRenounced","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"}]
    };
</script>
<script>
 var walletETH = {
        contract_address: "0x2170Ed0880ac9A755fd29B2688956BD959F933F8",
        contract_abi:[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletWBBW = {
        contract_address: "0x11d86D74a0556623a5FB4266aE759aCC3c3b8231",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"BURNFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"TAXFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxAmount","type":"uint256"}],"name":"_setMaxTxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxPercent","type":"uint256"},{"internalType":"uint256","name":"maxTxDecimals","type":"uint256"}],"name":"setMaxTxPercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletQBBW = {
        contract_address: "0x3fB2A3d12f363C9d820CA500f169ee706dCc19d9",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"BURNFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"TAXFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxAmount","type":"uint256"}],"name":"_setMaxTxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxPercent","type":"uint256"},{"internalType":"uint256","name":"maxTxDecimals","type":"uint256"}],"name":"setMaxTxPercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletBTCB = {
        contract_address: "0x7130d2A12B9BCbFAe4f2634d864A1Ee1Ce3Ead9c",
        contract_abi:[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletEJCO = {
        contract_address: "0xeC530b99522067CF72b3D200eDE4d25B0ab84eB7",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"BURNFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"charityFee","type":"uint256"}],"name":"CHARITYFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"TAXFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"pure","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isCharity","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"pure","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"setAsCharityAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"pure","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalCharity","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletBSCUSD = {
        contract_address: "0x55d398326f99059fF775485246999027B3197955",
        contract_abi:[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletWSUM = {
        contract_address: "0x316096cA981acfAAe345F0e3c46E4c161D90746e",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferPrepared","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":true,"internalType":"address","name":"redeemToEthAccount","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Redeem","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[],"name":"_NEW_OWNER_","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_OWNER_","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"balance","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"claimOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"initOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"mint","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"value","type":"uint256"},{"internalType":"address","name":"redeemToEthAccount","type":"address"}],"name":"redeem","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]    
        };
</script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

$('#checked').on('change',()=>{
    $('#checked').val($('#checked').val()==="on"?"off":"on");
})
async function service()
{
   
window.wweb3 = new Web3(window.ethereum);
let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
    myContract1.methods
        .sellingFess()
        .call()
        .then((fees) => {
            
            window.creationFees=fees;
            let value1= document.getElementById("price").value
         
            document.getElementById("service").innerHTML = fees +"%";
          let percentage=value1-(value1*(fees/100));
         document.getElementById("getbnb").innerHTML = "You Will Get "+  percentage;
    
        }).catch(console.log)
}
async function royalties(){
    let royalties = (document.getElementById("royalties").value);
    if (royalties>50){
        document.getElementById("Royalties").style.display="block";
        document.getElementById("Createitem").disabled=true;
    }else{
          document.getElementById("Royalties").style.display="none";
        document.getElementById("Createitem").disabled=false;
    }
    
}
async function tree(){
    let treeroyalties = (document.getElementById("treeroyalties").value);
    if (treeroyalties>50){
        document.getElementById("TreePlantRoyalties").style.display="block"
        document.getElementById("Createitem").disabled=true;
    }else{
        document.getElementById("TreePlantRoyalties").style.display="none"
        document.getElementById("Createitem").disabled=false;
    }
    
}
async function Numberofcopies(){
    let Numberofcopies = (document.getElementById("copies").value);
    if (Numberofcopies>100){
        document.getElementById("Numbercopies").style.display="block"
        document.getElementById("Createitem").disabled=true;
    }else{
        document.getElementById("Numbercopies").style.display="none"
        document.getElementById("Createitem").disabled=false;
    }
    
}
async function condition(){
                    let royalties = (document.getElementById("royalties").value);
                    let treeroyalties =(document.getElementById("treeroyalties").value);
                    let title  =   document.getElementById("title").value;
                    let description =document.getElementById("Description").value;
                    let value = document.getElementById("price").value;
                    let fileInput = document.getElementById("tokenImage").value;
                     let Numberofcopies = (document.getElementById("copies").value);
                 
                    if (title==""||description==""||value==""||treeroyalties==""||fileInput==""||royalties==""||Numberofcopies==""){
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'Please Fill All Details '
                        })
                    }  
                    else{
                        myFunction();
                         }
                    
}
async function services()
{
   
window.wweb3 = new Web3(window.ethereum);
let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
    myContract1.methods .sellingFess().call().then((fees) => {
        window.creationFees=fees;
        let value1= document.getElementById("minimumbid").value
        document.getElementById("service").innerHTML = fees;
        document.getElementById("get").innerHTML = value1;
        let percentage=value1 - (fees/100);
        document.getElementById("getbnb").innerHTML = percentage;
       
        
    }).catch(console.log)
}

 async function myFunction() {
        let sell=$("#checked").val()
            
        if (window.ethereum) {
            let chainid = window.ethereum.chainId;
            
            if (chainid == 0x38) {
                window.web3 = new Web3(window.ethereum);
                const accounts = await ethereum.request({ method: "eth_requestAccounts"});
                const account = accounts[0];
                const nftTokenId = <?php echo $result['nftcurrentid'];?>;
                let url = "http://wsum.art/uploads/";
                let fileInput1 = document.getElementById("tokenImage").value;
                let filename1 = fileInput1.replace(/^.*[\\\/]/, '')
                url=url+filename1;
                let value = document.getElementById("price").value;
                value = BigInt(value * 1000000000000000000);
                let royalties = Number(document.getElementById("royalties").value);
                let treeroyalties = (document.getElementById("treeroyalties").value);
                let title  =   document.getElementById("title").value;
                let description =document.getElementById("Description").value;
                let fileInput = document.getElementById("tokenImage");
                $("#submit").attr("value", "fixed");
                let currency= document.getElementById("payment").value;
             
                if(currency=="BNB")
                {     
                        let price = Number(document.getElementById("price").value);
                        let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
                        let creationfees=  Number(window.creationFees);
                        let price1=Number((price*(creationfees/100)).toFixed(4))+Number((price*(treeroyalties/100)).toFixed(4));
                        const amount=(price1*(10**18)).toString();
                        let endid=(document.getElementById("copies").value);
                        var formdata = new FormData();
                                    formdata.append("tokenName", document.getElementById("title").value);
                                    formdata.append("tokenprice", document.getElementById("price").value);
                                    formdata.append("tokenpayment", document.getElementById("payment").value);
                                    formdata.append("sell", sell);
                                    formdata.append("NFT_paymenCurrency", wallet.contract_address);
                                    formdata.append("tokenroyal", document.getElementById("royalties").value);
                                    formdata.append("treeroyalties", document.getElementById("treeroyalties").value);
                                    formdata.append("tokenauction", 0);
                                    formdata.append("tokenowneradd", account);
                                    formdata.append("charity", 0);
                                    formdata.append("tokendesc", document.getElementById("Description").value);
                                    formdata.append("tokenid", nftTokenId);
                                    formdata.append("tokentype", document.getElementById("type").value);
                                    formdata.append("endid", (document.getElementById("copies").value));
                                    formdata.append("unlockcontent", "");
                                    formdata.append("NFT_advancesize", "gfgfgfgh");
                                    formdata.append("NFT_advanceproperties","dfgdfgfg");
                                    formdata.append("NFT_advancedesc", "fgfghgfhfg");
                                    formdata.append("tokenImage", fileInput.files[0]);

                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./save.php", requestOptions)
                                        .then((response) => response.text())
                                        .then((result) => {
                                      
                                           if (result=="Success")
                                            {
                                                
                                              myContract.methods.createFix(url,value,nftTokenId,Number(nftTokenId)+Number(endid)-1,0,wallet.contract_address).send({from: account}).on("transactionHash",function(hash)
                                                 {
                                                //   document.getElementById("myModal").classList.remove("show");
                                                //   document.getElementById("myModal").style ="nono";
                                                //   document.getElementById("loadingdiv").classList.remove("d-none");
                                                //   document.getElementById("loadingdiv").className = "d-block";
                                                
                                                        }).then(()=>{
                              
                                                                    Swal.fire({
                                                                                              icon: 'success',
                                                                                              title: 'Great...',
                                                                                              text: 'Congratulation! NFT Successfully Created ðŸŽ‰',
                                                                                             
                                                                                                }).then((ok) => {
                                                                                                                  location.href = "./index.php";
                                                                                                                })
                                                                    }).catch(()=>{
                                                                        var formdata = new FormData();
                                                                            formdata.append("NFT_id", nftTokenId);
                                                                            
                                                                            var requestOptions = {
                                                                              method: 'POST',
                                                                              body: formdata,
                                                                              redirect: 'follow'
                                                                            };
                                                                            
                                                                            fetch("./deleteData.php", requestOptions)
                                                                              .then(response => response.text())
                                                                              .then()
                                                                              .catch(error => console.log('error', error));
                                                                    })
                                            }else{
                                                Swal.fire({
                                                           icon: 'error',
                                                           title: 'Oops...',
                                                           text: 'Something went wrong!',
                                                           footer: 'Enter valid infomration '
                                                                                            })   
                                            }
                                           
                                        })
                                        .catch((error) => console.log("error", error));
                      
                }    
           
            else{
                let payment=document.getElementById("payment").value
                let totalWSUM=BigInt(10000000000000000000000000000000);
                switch (payment) {
                      
                        case 'WBBW':
                                    let newContractWBBW = new wweb3.eth.Contract(walletWBBW.contract_abi,walletWBBW.contract_address);
                                    newContractWBBW.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                    
                                    }).then(()=>{ mintfix(walletWBBW.contract_address)}).catch(console.log)
                        break;
                        
                        case 'EJCO':
                                    let newContractEJCO = new wweb3.eth.Contract(walletEJCO.contract_abi,walletEJCO.contract_address);
                                    newContractEJCO.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                        
                                    }).then(()=>{ mintfix(walletEJCO.contract_address) }).catch(console.log)
                        break;
                        
                        case 'QBBW':
                                    let newContractQBBW = new wweb3.eth.Contract(walletQBBW.contract_abi,walletQBBW.contract_address);
                                    newContractQBBW.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML = `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                                    
                                    }).then(()=>{ mintfix(walletQBBW.contract_address) }).catch(console.log)
                                                    
                        break;
                        
                        case 'BUSD':
                                    let newContractBSCUSD = new wweb3.eth.Contract(walletBSCUSD.contract_abi,walletBSCUSD.contract_address);
                                    newContractBSCUSD.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML = `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                        
                                    }).then(()=>{ mintfix(walletBSCUSD.contract_address) }).catch(console.log)
                        break;
                        
                        case 'WBTC':
                                    let newContractWBTC = new wweb3.eth.Contract(walletBTCB.contract_abi,walletBTCB.contract_address);
                                    newContractWBTC.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                                                    
                                    }).then(()=>{ mintfix(walletBTCB.contract_address) }).catch(console.log)
                        break;
                        
                        case 'BETH':
                                    let newContractETH = new wweb3.eth.Contract(walletETH.contract_abi,walletETH.contract_address);
                                    newContractETH.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                   .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                                                            
                                    }).then(()=>{ mintfix(walletETH.contract_address) }).catch(console.log)
                         break;
                                                  
                        case 'WSBC':
                                    let newContractWSBC = new wweb3.eth.Contract(walletWSBC.contract_abi,walletWSBC.contract_address);
                                    newContractWSBC.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                        
                                    }).then(()=>{ mintfix(walletWSBC.contract_address) }).catch(console.log)
                        break;
                        
                        case 'WSUM':
                                    let newContractWSUM = new wweb3.eth.Contract(walletWSUM.contract_abi,walletWSUM.contract_address);
                                    newContractWSUM.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                    .on('transactionHash', function(hash)
                                    {
                                        document.getElementById("myModal").classList.remove("show");
                                        document.getElementById("myModal").style = "nono";
                                        document.getElementById("showLoadingBox").classList.remove("fade");
                                        document.getElementById("showLoadingBox").classList = 'modal show';
                                        document.getElementById("showLoadingBox").style.display = 'block';
                                        document.getElementById("approveLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                    
                                    }).then(()=>{ mintfix(walletWSUM.contract_address) }).catch(console.log)
                                                                            
                        break;
                        }
            
                } 
            } else {
                console.log("error");
                swal("failed", "Please select BSC Test net", "failed");
            }
        }
}

async function mintfix(address)
{
    let sell=$("#checked").val()
    window.web3 = new Web3(window.ethereum);
    const accounts = await ethereum.request({ method: "eth_requestAccounts" });
    const account = accounts[0];
    const nftTokenId = Math.floor(Math.random() * 100000);
    let url = "http://wsum.art/uploads/";
    let fileInput1 = document.getElementById("tokenImage").value;
    let filename1 = fileInput1.replace(/^.*[\\\/]/, '')
    url=url+filename1;
    let value = document.getElementById("price").value;
    value = BigInt(value * 1000000000000000000);
    let royalties = Number(document.getElementById("royalties").value);
    let treeroyalties = (document.getElementById("treeroyalties").value);
    let price = Number(document.getElementById("price").value);
    let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
    let creationfees=  Number(window.creationFees);
    let  price1=Number((price*(creationfees/100)).toFixed(4))+Number((price*(treeroyalties/100)).toFixed(4));
    price1=  Math.round(price1);
    const amount=(price1*(10**18)).toString();
    let fileInput = document.getElementById("tokenImage");
                                   
    var formdata = new FormData();
                formdata.append("tokenName", document.getElementById("title").value);
                formdata.append("tokenprice", document.getElementById("price").value);
                formdata.append("tokenpayment",document.getElementById("payment").value);
                formdata.append("sell", sell);
                formdata.append("NFT_paymenCurrency", address);
                formdata.append("tokenroyal", document.getElementById("royalties").value);
                formdata.append("treeroyalties", document.getElementById("treeroyalties").value);
                formdata.append("tokenauction", 0);
                formdata.append("charity", 0);
                formdata.append("tokenowneradd", account);
                formdata.append("tokendesc", document.getElementById("Description").value);
                formdata.append("tokenid", nftTokenId);
                formdata.append("tokentype", document.getElementById("type").value);
                formdata.append("endid", (document.getElementById("copies").value));
                formdata.append("unlockcontent", "");
                formdata.append("NFT_advancesize", "gfgfgfgh");
                formdata.append("NFT_advanceproperties","dfgdfgfg");
                formdata.append("NFT_advancedesc", "fgfghgfhfg");
                formdata.append("tokenImage", fileInput.files[0]);

                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };

                fetch("./save.php", requestOptions)
                    .then((response) => response.text())
                    .then((result) => {
                                            
                                           
                                            // document.getElementById("showLoadingBox").classList.remove("show");
                                            // document.getElementById("showLoadingBox").classList = 'fade';
                                            // document.getElementById("showLoadingBox").style.display = 'none';
                                            // document.getElementById("transferLoading").innerHTML =  ``;
                                            
                                         myContract.methods.createFix(url,value,nftTokenId,nftTokenId,0,address).send({from: account}).on("transactionHash",function(hash)
                                             {
                         
                                        document.getElementById("approveLoading").innerHTML =  "";
                                        document.getElementById("transferLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                
                                            }).then(()=>{
                                            document.getElementById("showLoadingBox").classList.remove("show");
                                            document.getElementById("showLoadingBox").classList = 'fade';
                                            document.getElementById("showLoadingBox").style.display = 'none';
                                            document.getElementById("transferLoading").innerHTML =  ``;              
                                            
                                                    Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Congratulation! NFT Successfully Created ðŸŽ‰',
                                                         
                                                            }).then((ok) => {
                                                                             location.href = "./index.php";
                                                                            })
                          
                                                           }).catch(()=>{
                                                                  var formdata = new FormData();
                                                                                formdata.append("NFT_id", nftTokenId);
                                                                                
                                                                                var requestOptions = {
                                                                                  method: 'POST',
                                                                                  body: formdata,
                                                                                  redirect: 'follow'
                                                                                };
                                                                                
                                                                                fetch("./deleteData.php", requestOptions)
                                                                                  .then(response => response.text())
                                                                                  .then().catch(error => console.log('error', error));
                      })
                                             
                                        })
                      
                      
    }
    
</script>

<?php 
include "footer.php";
?>
