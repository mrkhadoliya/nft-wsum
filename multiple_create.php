<?php 
include "header.php";
?>

<style>
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
    }
    .choosen_img {
        max-height: 300px;
        width: 100%;
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
        object-fit: contain;
    }
    .preview-section img#preview1 {
        width: 100%;
        height: auto;
    }
</style>

<section class="create-single-collectible py-5 mt-5">
    <div class="create-form-here">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="text-decoration-none d-block my-4 text-dark" href="#"> <i class="fa fa-arrow-left"></i> Manage collectible type</a>
                    <h2 class="text-dark mb-5">Create single collectible</h2>
                </div>
                <div class="col-md-8">
                    <div class="upload-section">
                        <label>Upload file</label>
                        <div class="upload_here">
                            <p>PNG, GIF, WEBP, MP4 or MP3. Max 100mb.</p>

                            <input type="file" name="file" id="tokenImage" style="display: none;" class="file" accept="image/" />
                            <div class="input-group my-3">
                                <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary">Choose file...</button>
                                </div>
                                <!--<input type="text" class="form-control" disabled placeholder="Upload File" id="file">-->
                            </div>

                            <div class="choosen_img" id="img">
                                <!--<img src="assets/img/image.png" id="preview" class="img-thumbnail" width="" height="300px">-->
                                <img src="" id="preview" class="" height="300px" />
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
                                        <input type="checkbox" checked />
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p>Enter price to allow users instantly purchase your NFT</p>
                        <div class="choose-tab-this">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
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
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <div class="make-tab">
                                            <!--<i class="fa fa-tags"></i>-->
                                            <img class="" src="assets/img/tag2.png" style="height: 40px; width: 40px;" />
                                            <span class="d-block">
                                                Timed <br />
                                                auction
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <div class="make-tab">
                                            <!--<i class="fa fa-tags"></i>-->
                                            <img class="" src="assets/img/tag3.png" style="height: 40px; width: 40px;" />
                                            <span class="d-block">
                                                Unlimited <br />
                                                auction
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="fixed-price-tabcontent">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Price</label>
                                                <div class="price-btn-here">
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter price for one piece" />
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            ETH
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"><img class="" src="assets/img/ETH.png" style="height: 24px; width: 24px; border-radius: 50%;" /> ETH</a>
                                                            <!--<a class="dropdown-item" href="#"><img class="" src="assets/img/DAI.png" style="height:24px;width: 24px;border-radius:50%;"> DAI</a>-->
                                                            <!--<a class="dropdown-item" href="#"><img class="" src="assets/img/USDC.png" style="height:24px;width: 24px;border-radius:50%;"> USDC</a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-fee-receive mt-3">
                                                    <p class="m-0">Service fee <span>0.0%</span></p>
                                                    <p>You will receive <span>0 ETH</span> 0</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="time-auction-tabcontent">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Minimum bid</label>
                                                <div class="price-btn-here">
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter minimum bid" />
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            ETH
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#"><img class="" src="assets/img/ETH.png" style="height: 24px; width: 24px; border-radius: 50%;" /> ETH</a>
                                                            <a class="dropdown-item" href="#"><img class="" src="assets/img/DAI.png" style="height: 24px; width: 24px; border-radius: 50%;" /> DAI</a>
                                                            <a class="dropdown-item" href="#"><img class="" src="assets/img/USDC.png" style="height: 24px; width: 24px; border-radius: 50%;" /> USDC</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-fee-receive mt-3">
                                                    <p>Bids below this amount won’t be allowed.</p>
                                                </div>
                                                <div class="range-dates">
                                                    <div class="col-md-6">
                                                        <div class="starting-date">
                                                            <label for="exampleInputEmail1">Starting Date</label>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Right after listing
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Right after listing</a>
                                                                    <a class="dropdown-item" href="#">Pick specific date</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="expire-date">
                                                            <label for="exampleInputEmail1">Expiration Date</label>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Dropdown button
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="unloack-once-purchased mt-5">
                        <div class="row">
                            <div class="col">
                                <label>Unlock once purchased</label>
                            </div>
                            <div class="col-auto">
                                <div class="switch-here">
                                    <label class="switch">
                                        <input type="checkbox" checked />
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p>Content will be unlocked after successful transaction</p>
                        <label>Choose collection</label>
                        <div class="choose-collection">
                            <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 50 50" fill="rgba(4, 4, 5, 1)">
                                    <path d="M25,2C12.317,2,2,12.317,2,25s10.317,23,23,23s23-10.317,23-23S37.683,2,25,2z M37,26H26v11h-2V26H13v-2h11V13h2v11h11V26z" color="currentColor"></path>
                                </svg>
                                <br />
                                Create <br />
                                <span class="text-muted">ERC-721</span>
                            </button>
                            <button class="btn btn-default border-color-set">
                                <img class="" src="assets/img/fevicon.png" style="height: 40px; width: 40px; border-radius: 5%; object-fit: contain;" />
                                <br />
                                WSUM <br />
                                <span class="text-muted">RARI</span>
                            </button>
                            <!--<input type="text" id="mint22" placeholder="Enter price for one piece" />-->
                            <!--<button class="btn btn-default" id="mint">Create</button>--> 
                        </div>
                        <div class="title_area_create_box py-md-4">
                            <div class="Title_headeing price-btn-here">
                                <h5>Title</h5>
                                <input placeholder="e. g. &quot;Redeemable T-Shirt with logo&quot;" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="title_area_create_box py-md-4">
                            <div class="Title_headeing price-btn-here">
                                <h5>Description <small class="font-weight-normal">(Optional)</small></h5>
                                <input placeholder="e. g. &quot;Redeemable T-Shirt with logo&quote. g. 'After purchasing you’ll be able to get the real T-Shirt' type="text" class="form-control" value="">
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
                                                                <input type="file" name="file-input" id="file-input" class="file-input__input" style="display: none;" />
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

                                        <!-- Modal footer -->
                                        <!--<div class="modal-footer">-->
                                        <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>






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
</script>

<script>
    var wallet = {
        contract_address: "0x857D0DB3255Ef8e54fc52dA00a5f699e32499Ad8",
        contract_abi: [
            {
                inputs: [
                    {
                        internalType: "string",
                        name: "name_",
                        type: "string",
                    },
                    {
                        internalType: "string",
                        name: "symbol_",
                        type: "string",
                    },
                ],
                stateMutability: "nonpayable",
                type: "constructor",
            },
            {
                anonymous: false,
                inputs: [
                    {
                        indexed: true,
                        internalType: "address",
                        name: "owner",
                        type: "address",
                    },
                    {
                        indexed: true,
                        internalType: "address",
                        name: "approved",
                        type: "address",
                    },
                    {
                        indexed: true,
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "Approval",
                type: "event",
            },
            {
                anonymous: false,
                inputs: [
                    {
                        indexed: true,
                        internalType: "address",
                        name: "owner",
                        type: "address",
                    },
                    {
                        indexed: true,
                        internalType: "address",
                        name: "operator",
                        type: "address",
                    },
                    {
                        indexed: false,
                        internalType: "bool",
                        name: "approved",
                        type: "bool",
                    },
                ],
                name: "ApprovalForAll",
                type: "event",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "to",
                        type: "address",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "approve",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "claimfortimebiding",
                outputs: [],
                stateMutability: "payable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "to",
                        type: "address",
                    },
                    {
                        internalType: "string",
                        name: "_tokenURI",
                        type: "string",
                    },
                ],
                name: "create",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "fixbidingclaim",
                outputs: [],
                stateMutability: "payable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "_value",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "fixbidinginfo",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "from",
                        type: "address",
                    },
                    {
                        internalType: "address",
                        name: "to",
                        type: "address",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "safeTransferFrom",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "from",
                        type: "address",
                    },
                    {
                        internalType: "address",
                        name: "to",
                        type: "address",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                    {
                        internalType: "bytes",
                        name: "_data",
                        type: "bytes",
                    },
                ],
                name: "safeTransferFrom",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "operator",
                        type: "address",
                    },
                    {
                        internalType: "bool",
                        name: "approved",
                        type: "bool",
                    },
                ],
                name: "setApprovalForAll",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "_value",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "timebidingcalculation",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "_value",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "_startday",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "_starthour",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "_enddays",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "_endhours",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "timebidinginfo",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                anonymous: false,
                inputs: [
                    {
                        indexed: true,
                        internalType: "address",
                        name: "from",
                        type: "address",
                    },
                    {
                        indexed: true,
                        internalType: "address",
                        name: "to",
                        type: "address",
                    },
                    {
                        indexed: true,
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "Transfer",
                type: "event",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "from",
                        type: "address",
                    },
                    {
                        internalType: "address",
                        name: "to",
                        type: "address",
                    },
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "transferFrom",
                outputs: [],
                stateMutability: "nonpayable",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "owner",
                        type: "address",
                    },
                ],
                name: "balanceOf",
                outputs: [
                    {
                        internalType: "uint256",
                        name: "",
                        type: "uint256",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "",
                        type: "uint256",
                    },
                ],
                name: "bidinginformation",
                outputs: [
                    {
                        internalType: "uint256",
                        name: "currentTime",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "startvalue",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "endvalue",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "claimTime",
                        type: "uint256",
                    },
                    {
                        internalType: "uint256",
                        name: "minimumbidamount",
                        type: "uint256",
                    },
                    {
                        internalType: "address",
                        name: "nftowneraddress",
                        type: "address",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "claimstate",
                outputs: [
                    {
                        internalType: "bool",
                        name: "state",
                        type: "bool",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "",
                        type: "uint256",
                    },
                ],
                name: "fixbidinginformation",
                outputs: [
                    {
                        internalType: "uint256",
                        name: "bidamount",
                        type: "uint256",
                    },
                    {
                        internalType: "address",
                        name: "nftowneraddress",
                        type: "address",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "getApproved",
                outputs: [
                    {
                        internalType: "address",
                        name: "",
                        type: "address",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "address",
                        name: "owner",
                        type: "address",
                    },
                    {
                        internalType: "address",
                        name: "operator",
                        type: "address",
                    },
                ],
                name: "isApprovedForAll",
                outputs: [
                    {
                        internalType: "bool",
                        name: "",
                        type: "bool",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [],
                name: "name",
                outputs: [
                    {
                        internalType: "string",
                        name: "",
                        type: "string",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "ownerOf",
                outputs: [
                    {
                        internalType: "address",
                        name: "",
                        type: "address",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "States",
                outputs: [
                    {
                        internalType: "bool",
                        name: "states",
                        type: "bool",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "bytes4",
                        name: "interfaceId",
                        type: "bytes4",
                    },
                ],
                name: "supportsInterface",
                outputs: [
                    {
                        internalType: "bool",
                        name: "",
                        type: "bool",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [],
                name: "symbol",
                outputs: [
                    {
                        internalType: "string",
                        name: "",
                        type: "string",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [],
                name: "tokenid",
                outputs: [
                    {
                        internalType: "uint256",
                        name: "",
                        type: "uint256",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "tokenId",
                        type: "uint256",
                    },
                ],
                name: "tokenURI",
                outputs: [
                    {
                        internalType: "string",
                        name: "",
                        type: "string",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
            {
                inputs: [
                    {
                        internalType: "uint256",
                        name: "",
                        type: "uint256",
                    },
                ],
                name: "userbidinginformation",
                outputs: [
                    {
                        internalType: "address",
                        name: "addresss",
                        type: "address",
                    },
                    {
                        internalType: "uint256",
                        name: "value",
                        type: "uint256",
                    },
                ],
                stateMutability: "view",
                type: "function",
            },
        ],
    };
</script>

<script>
    $(document).ready(function () {
        $("#mint").click(function () {
            mintthenft();
        });
    });

    const mintthenft = async () => {
        if (window.ethereum) {
            console.log(document.getElementById("mint22").value);
            window.web3 = new Web3(window.ethereum);
            const accounts = await ethereum.request({ method: "eth_requestAccounts" });
            const account = accounts[0];
            let value = parseInt(document.getElementById("mint22").value);
            value = BigInt(value * 1000000000000000000);
            console.log(account);
            var myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
            let url = "https://ramlogics.com/Bet4All/uploads/Landscape-Color.png";
            myContract.methods
                .create(account, url)
                .send({ from: account })
                .on("transactionHash", function (hash) {
                    console.log(hash);
                })
                .then((receipt1) => {
                    //
                    // if()
                    // {
                    // myContract.methods.timebidinginfo(value,0,0,0,1,1).send({from:account})
                    // .on('transactionHash',function(hash)
                    // {
                    //     console.log(hash)
                    // })
                    // .then(receipt2=>{
                    //     swal("Good job!", "You clicked the button!", "success");
                    // }).catch(console.log("error2"))
                    // }
                    //else
                    //{
                    myContract.methods
                        .fixbidinginfo(value, 2)
                        .send({ from: account })
                        .on("transactionHash", function (hash) {
                            console.log(hash);
                        })
                        .then((receipt2) => {
                            swal("Good job!", "You clicked the button!", "success");
                        });
                    //}
                })
                .catch(console.log("error2"));
        }
    };
</script>

<?php 
include "footer.php";
?>
