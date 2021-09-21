<?php 
include "header.php";
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "SELECT * FROM NFT_info Where NFT_id = '$id'";
$data = mysqli_query($link, $query);
$result = mysqli_fetch_array($data);

?>
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

.panel {margin: 20px auto 40px; max-width: 500px; text-align: center;}
.button_outer {background: #4c549c; border-radius:30px; text-align: center; height: 45px; width: 160px; display: inline-block; transition: .2s; position: relative; overflow: hidden;}
.btn_upload {padding: 10px 30px 12px; color: #fff; text-align: center; position: relative; display: inline-block; overflow: hidden; z-index: 3; white-space: nowrap;}
.btn_upload input {position: absolute; width: 100%; left: 0; top: 0; width: 100%; height: 105%; cursor: pointer; opacity: 0;}
.file_uploading {width: 100%; height: 10px; margin-top: 20px; background: #ccc;}
.file_uploading .btn_upload {display: none;}
.processing_bar {position: absolute; left: 0; top: 0; width: 0; height: 100%; border-radius: 30px; background:#4c549c; transition: 3s;}
.file_uploading .processing_bar {width: 100%;}
.success_box {display: none; width: 50px; height: 50px; position: relative;}
.success_box:before {content: ''; display: block; width: 9px; height: 18px; border-bottom: 6px solid #fff; border-right: 6px solid #fff; -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -ms-transform:rotate(45deg); transform:rotate(45deg); position: absolute; left: 20px; top: 15px;}
.file_uploaded .success_box {display: inline-block;}
.file_uploaded {margin-top: 0; width: 50px; background:#4c549c; height: 50px;}
.uploaded_file_view {max-width: 200px; margin: 40px auto; text-align: center; position: relative; transition: .2s; opacity: 0; border: 2px solid #ddd; padding: 15px;}
.file_remove{width: 30px; height: 30px; border-radius: 50%; display: block; position: absolute; background: #aaa; line-height: 30px; color: #fff; font-size: 12px; cursor: pointer; right: -15px; top: -15px;}
.file_remove:hover {background: #222; transition: .2s;}
.uploaded_file_view img {max-width: 100%;}
.uploaded_file_view.show {opacity: 1;}
.error_msg {text-align: center; color: #f00}
 </style>
 
 <script>
let NFT_name ="<?php echo $result['NFT_name'];?>";
let NFT_price ="<?php echo $result['NFT_price'];?>";
let NFT_royalties ="<?php echo $result['NFT_royalties'];?>";
let NFT_treeplant ="<?php echo $result['NFT_treeplant'];?>";
let NFT_discription ="<?php echo $result['NFT_discription'];?>";
let NFT_advancesize ="<?php echo $result['NFT_advancesize'];?>";
let NFT_advanceproperties ="<?php echo $result['NFT_advanceproperties'];?>";
let NFT_advancedesc ="<?php echo $result['NFT_advancedesc'];?>";


setTimeout(function(){ 
    
 document.getElementById("Name").value = NFT_name;
 document.getElementById("price").value = NFT_price;
 document.getElementById("description").value = NFT_discription;
 document.getElementById("royalties").value =NFT_royalties;
 document.getElementById("treeroyalties").value =NFT_royalties;
 document.getElementById("advanc1").value =NFT_advancesize;
 document.getElementById("advanc2").value =NFT_advanceproperties;
 document.getElementById("advanc3").value =NFT_advancedesc;

    
}, 2000);

 </script>
 
<section class="wsum-nft-edit-profile-page pt-0">
    <div class="banner-content-here py-5"> 
        <h2 class="text-center text-white">Edit NFT</h2>
        <div class="text-center text-white">
            <a class="text-white" href="/index.php">WSUM-NFT</a> EDIT NFT
        </div>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row"> 
            <div class="col-md-7">
                <div class="edit-profile-form">
                    <form method="POST" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        `<input type="text" class="form-control" id="Name" name="Name" aria-describedby="emailHelp" placeholder="Enter Your NFT Name" maxlength="18" value="" required>
                        <small>Enter the maximum 18 characters</small>
                      </div>
                       <div class="price-btn-here form-group py-4">
                            <label for="exampleInputEmail1">Price</label>
                             <input type="text" class="form-control" id="price" placeholder="Enter price" value="" required />
                        </div>
                     
                      <div class="title_area_create_box form-group" bis_skin_checked="1">
                            <div class="Title_headeing price-btn-here" bis_skin_checked="1">
                                 <label for="exampleInputEmail1">Description</label>
                                <input maxlength="2147483" placeholder="e. g. &quot;Redeemable T-Shirt with logo&amp;quote. g. 'After purchasing you’ll be able to get the real T-Shirt'" type="text" id="description" class="form-control" value="">
                                <small>With preserved line-breaks</small><br>
                                <small>Enter the maximum 2147483 characters</small>
                            </div>
                        </div>
                      <div class="title_area_create_box " bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-md-12 col-12 pt-3" bis_skin_checked="1">
                                    <div class="Title_headeing price-btn-here" bis_skin_checked="1">
                                         <label for="exampleInputEmail1">Royalties</label>
                                        <input placeholder="10" type="text" class="form-control" id="royalties" value=""><span class="float-right" style="position: relative; bottom: 37px;">%</span>
                                        <small >Maximum 50% royalties</small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 pt-3" bis_skin_checked="1">
                                    <div class="Title_headeing price-btn-here" bis_skin_checked="1">
                                         <label for="exampleInputEmail1"> Tree Plant Royalties</label>
                                        <input placeholder="5" type="text" class="form-control" id="treeroyalties" value=""><span class="float-right" style="position: relative; bottom: 37px;">%</span>
                                        <small>Enter the maximum 50% tree plant royalties</small>               
                                    </div>
                                    <div class="advance-settings-here" >
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Properties(Optional)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="properties-set-input">
                                            <input type="text" class="form-control" id="advanc1" aria-describedby="emailHelp" placeholder="e.g Size"  value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="properties-set-input">
                                            <input type="text" class="form-control" id="advanc2" aria-describedby="emailHelp" placeholder="e.g Size"  value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Alternative text for NFT(Optional)</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="properties-set-input">
                                            <input type="text" class="form-control" id="advanc3" aria-describedby="emailHelp" placeholder="Image Description In Detail"  value=""/>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
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
                  
                      <div class="pt-5">
                          <button type="button" onclick="Myfunction(1)" class="btn btn-primary form-control upload-profile" name="submit">Update NFT</button>
                      </div>
               </div>
            </div>
            <div class="col-md-5">
                <div class="delete_nft_btn">
                    <div class="delete_img">
                        <img src="<?php echo $result['NFT_image'];?>" class="img-fluid border" alt="">
                    </div>
                    <div class="btn_nft_delete py-3">
                        <button type="button" onclick="Myfunction(0)" class="btn btn-primary form-control upload-profile">Delete And Burn NFT</button>
                    </div> 
                    <!--<div class="btn_nft_delete py-3">-->
                    <!--    <button type="button" onclick="burnNFT()" class="btn btn-primary form-control upload-profile">Burn NFT</button>-->
                    <!--</div> -->
                    <div class="btn_nft_delete py-3">
                        <button type="button"  class="btn btn-primary form-control upload-profile" onclick="Myfunction(2)">Upload Additional Content</button>
                    </div> 
                    <div class="btn_nft_delete py-3">
                        <button type="button" class="btn btn-primary form-control upload-profile" onclick="download()">Download NFT Content</button>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 var wallet = {
        contract_address: "0xEaee76099220659e80C2faa55F9d042c4754aF5D",
        contract_abi:[ { "inputs": [], "stateMutability": "payable", "type": "constructor" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "approved", "type": "address" }, { "indexed": true, "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "operator", "type": "address" }, { "indexed": false, "internalType": "bool", "name": "approved", "type": "bool" } ], "name": "ApprovalForAll", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": true, "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "Transfer", "type": "event" }, { "inputs": [], "name": "adminAddress", "outputs": [ { "internalType": "address payable", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "approve", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" } ], "name": "balanceOf", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address payable", "name": "_artist", "type": "address" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" } ], "name": "bidingclaim", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_from", "type": "uint256" }, { "internalType": "uint256", "name": "_to", "type": "uint256" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" }, { "internalType": "address payable", "name": "artist", "type": "address" }, { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "buyMultipleThroughBNB", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "uint256", "name": "_from", "type": "uint256" }, { "internalType": "uint256", "name": "_to", "type": "uint256" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" }, { "internalType": "uint256", "name": "buyAmount", "type": "uint256" }, { "internalType": "address", "name": "paymentCurrency", "type": "address" }, { "internalType": "address payable", "name": "_artist", "type": "address" } ], "name": "buyMultipleThroughCurrencies", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "string", "name": "_tokenURI", "type": "string" }, { "internalType": "uint256", "name": "value", "type": "uint256" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address", "name": "_paymentCurrency", "type": "address" }, { "internalType": "uint256", "name": "state", "type": "uint256" } ], "name": "createAuction", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "string", "name": "_tokenURI", "type": "string" }, { "internalType": "uint256", "name": "value", "type": "uint256" }, { "internalType": "uint256", "name": "startId", "type": "uint256" }, { "internalType": "uint256", "name": "endId", "type": "uint256" }, { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "address", "name": "_paymentCurrency", "type": "address" } ], "name": "createFix", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [], "name": "creationFess", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address payable", "name": "artist", "type": "address" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" } ], "name": "fixclaim", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "getApproved", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "operator", "type": "address" } ], "name": "isApprovedForAll", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "name", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "ownerOf", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "safeTransferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "bytes", "name": "_data", "type": "bytes" } ], "name": "safeTransferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "sellingFess", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address payable", "name": "_adminAdd", "type": "address" } ], "name": "setAdminAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "operator", "type": "address" }, { "internalType": "bool", "name": "approved", "type": "bool" } ], "name": "setApprovalForAll", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_creationFess", "type": "uint256" } ], "name": "setCreatonFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_sellingFess", "type": "uint256" } ], "name": "setSellingFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address payable", "name": "_treePlant", "type": "address" } ], "name": "setTreePlantAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "bytes4", "name": "interfaceId", "type": "bytes4" } ], "name": "supportsInterface", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "tokenURI", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "total", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "transferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "treePlant", "outputs": [ { "internalType": "address payable", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" } ]
    };
</script>
<script>

$('#checked').on('change',()=>{
    $('#checked').val($('#checked').val()==="on"?"off":"on");
});
    async function  Myfunction(status)
    {
        let sell=$("#checked").val()
        
         let NFT_name=document.getElementById("Name").value;
         let NFT_price=document.getElementById("price").value;
         let NFT_description=document.getElementById("description").value;
         let NFT_royalties=document.getElementById("royalties").value;
         let NFT_treeplant=document.getElementById("treeroyalties").value;
         let NFT_id ="<?php echo $result['NFT_id'];?>";
         let NFT_advancesize =document.getElementById("advanc1").value;
         let NFT_advanceproperties =document.getElementById("advanc2").value;
         let NFT_advancedesc =document.getElementById("advanc3").value;
        
        
          if(status==1)
        {
     
         var formdata = new FormData();
                formdata.append("NFT_name", NFT_name);
                formdata.append("NFT_price",NFT_price);
                formdata.append("NFT_description", NFT_description);
                formdata.append("NFT_royalties",NFT_royalties);
                formdata.append("NFT_treeplant",NFT_treeplant);
                formdata.append("status", "1");
                formdata.append("NFT_id", NFT_id);
                formdata.append("sell", sell);
                
                var requestOptions = {
                  method: 'POST',
                  body: formdata,
                  redirect: 'follow'
                };
                
                fetch("./updateNFT.php", requestOptions)
                  .then(response => response.text())
                  .then(result => {
                       Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Congratulation! NFT Successfully Updated ðŸŽ‰',
                                                         
                                                            }).then((ok) => {
                                                                             location.href = "./my_item.php";
                                                                            })
                      
                  })
                  .catch(error => console.log('error', error));
        }
        else if(status==0){
            
            window.web3= new Web3(window.ethereum)
            const accounts= await ethereum.request({method: 'eth_requestAccounts'});
            const account=accounts[0];
            console.log(account);
            var mycontract= new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
            
            mycontract.methods.transferFrom(account,"0x000000000000000000000000000000000000dead",NFT_id).send({from:account}).on('transactionHash',function(hash){
                console.log(hash);
            }).then(result=>{
                console.log("DELECTING process is started");
             var formdata = new FormData();
                formdata.append("NFT_name", NFT_name);
                formdata.append("NFT_price",NFT_price);
                formdata.append("NFT_description", NFT_description);
                formdata.append("NFT_royalties",NFT_royalties);
                formdata.append("NFT_treeplant",NFT_treeplant);
                formdata.append("status", "0");
                formdata.append("NFT_id", NFT_id);
                formdata.append("sell", sell);
                
                var requestOptions = {
                  method: 'POST',
                  body: formdata,
                  redirect: 'follow'
                };
                
                fetch("./updateNFT.php", requestOptions)
                  .then(response => response.text())
                  .then(result =>{
                      
                       Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Congratulation! NFT Successfully Deleted ðŸŽ‰',
                                                         
                                                            }).then((ok) => {
                                                                             location.href =  "./my_item.php";
                                                                            })
                  } )
                  .catch(error => console.log('error', error));
            }).catch(console.log)
            
        }
        else if(status==2){
            
              var formdata = new FormData();
                formdata.append("NFT_advancesize", NFT_advancesize);
                formdata.append("NFT_advanceproperties",NFT_advanceproperties);
                formdata.append("NFT_advancedesc", NFT_advancedesc);
                formdata.append("status", "2");
                formdata.append("NFT_id", NFT_id);
             
                
                var requestOptions = {
                  method: 'POST',
                  body: formdata,
                  redirect: 'follow'
                };
                
                fetch("./updateNFT.php", requestOptions)
                  .then(response => response.text())
                  .then(result => {
                      Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Congratulation!Additional content of NFT Updated ðŸŽ‰',
                                                         
                                                            }).then((ok) => {
                                                                             location.href =  "./my_item.php";
                                                                           
                                                                            })
                  })
        }
    }
    
// async function burnNFT(){
    
//     let id ="<?php echo $result['NFT_id'];?>";
//     let NFT_creator_add ="<?php echo $result['NFT_creator_add'];?>";
//     var myContract = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
//     let address="0x3737373737373737373737373737373737373737"
//     console.log("address                     ",address);
//     console.log("NFT_creator_add          "+NFT_creator_add);
//     console.log("wallet.contract_address"+     wallet.contract_address);
//     myContract.methods.buyMultipleThroughBNB(id,id,0,0,NFT_creator_add,0,0).send({from:wallet.contract_address,value:1})
 
//     .on('transactionHash', function(hash)
//         {console.log(hash);}).then(result=>{
//             console.log(result);
//             Myfunction(0);
//         }).catch(console.log)
// }
        

</script>
<!--<script type="text/javascript" src="//cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>-->
<!--<script type="text/javascript" src="https://unpkg.com/jspdf@2.0.0/dist/jspdf.umd.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script>
function download(){
   
  
        let NFT_name=document.getElementById("Name").value;
        let NFT_price=document.getElementById("price").value;
        let NFT_description=document.getElementById("description").value;
        let NFT_royalties=document.getElementById("royalties").value;
        let NFT_treeplant=document.getElementById("treeroyalties").value;
        let NFT_id ="<?php echo $result['NFT_id'];?>";
        let NFT_image="<?php echo $result['NFT_image'];?>";
        let NFT_advancesize =document.getElementById("advanc1").value;
        let NFT_advanceproperties =document.getElementById("advanc2").value;
        let NFT_advancedesc =document.getElementById("advanc3").value;
        let NFT_unlock="<?php echo $result['NFT_unlockcontent'];?>";
        var doc = new jsPDF();
        var img = new Image();
        var img2=new Image();
       
        if(NFT_unlock==""){
            img2.src='http://wsum.art/assets/img/artlogo.png';
            img.src = NFT_image;
            doc.addImage(img, 'png', 60, 30, 100, 80)
            doc.addImage(img2, 'png', 80, 5, 60, 20)
            doc.save(NFT_name+'.pdf');
          }else{
                img.src = NFT_image;
                img2.src='http://wsum.art/assets/img/artlogo.png';
                doc.addImage(img2, 'png', 80, 5, 60, 20)
                doc.addImage(img, 'png', 60, 30, 100, 80)
                doc.setFontType('Times-Roman');
                doc.text('Hidden Content', 20, 130);
                doc.text('=>', 60, 130);
                doc.setFontType('Times-Roman');
                doc.text(80, 130, NFT_unlock);  
                  
                  
                // doc.setFontSize(18);
                // doc.setFontType('Times-Roman');
                // doc.text('NFT Id', 20, 130);
                // doc.text('NFT Name', 20, 140);
                // doc.text('NFT Price', 20, 150);
                // doc.text('NFT Description', 20, 160);
                // doc.text('NFT Royalties', 20, 170);
                // doc.text('NFT Treeplant', 20, 180);
                // doc.text('Image height', 20, 190);
                // doc.text('Image width', 20, 200);
                // doc.text('Image Description', 20, 210);
                
                // doc.setFontType('Times-Roman');
                // doc.setFontSize(16);
                // doc.text(80, 130, NFT_id);
                // doc.text(80, 140, NFT_name);
                // doc.text(80, 150, NFT_price);
                // doc.text(80, 160, NFT_description);
                // doc.text(80, 170, NFT_royalties);
                // doc.text(80, 180, NFT_treeplant);
                // doc.text(80, 190, NFT_advancesize);
                // doc.text(80, 200, NFT_advanceproperties);
                // doc.text(80, 210, NFT_advancedesc);
                doc.save(NFT_name+'.pdf');  
              
              
          }
    
   
 
 }

</script>

<?php 
include "footer.php";
?>