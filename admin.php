

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WSUM-NFT</title>
    <!--<link rel="icon" href="assets/img/fevicon01.png" type="image/gif">-->
    <link rel="icon" href="assets/img/fevicon.png" type="image/gif" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom_nft.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.6/web3.min.js" integrity="sha512-jMEcX0Bev3VsCrACqEM3BFZvAMFXJSuTsMu0SttkAdMjquip6p3Oty5bbXrfg4T8n4g5BQYkGKxzLsrSqQgLUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    body{
        background-color: #eaedf7 !important;
    }
   
    </style>
    

</head>


<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                
                <div class="mx-auto"><a class="navbar-brand text-dark" href="index.php" ><img src="assets/img/logo1001.png" height="40px"></a></div>
            
            </nav>
        </div>
    </header>
  <script>
    setTimeout(async ()=>{
    window.web3=new Web3(window.ethereum)
        web3.eth.getAccounts().then(account=>{
            console.log(account[0]);
            document.getElementById("artistAddress").innerHTML=account[0];
        }).catch(console.log)
        
        },1000)
        
        
        
    </script>   


    <section class="admin-page my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="admin-top">
                        <div class="row">
                            <!--<div class="col-md-5"><h5 class=""><span>Admin Name :</span> <span id="artistName"></span></h5></div>-->
                            <div class="col-md-7"><h5 class=" tron-address"><span>Admin Address :</span> <a href="#" class=""><span id="artistAddress"></span></a></h5>
                            
                            </div>
                            <!--<div class="col-md-5">-->
                            <!--    <div class="bell_icon"> -->
                            <!--        <ul class="notification-drop">-->
                            <!--            <li class="item">-->
                            <!--              <i class="fal fa-bell notification-bell" aria-hidden="true"></i> <span class="btn__badge pulse-button ">4</span>     -->
                            <!--              <ul>-->
                            <!--                <li>-->
                                                <!--<form>-->
                            <!--                        <div class="row">-->
                            <!--                            <div class="col-auto">-->
                            <!--                                <div class="username_area pt-2">-->
                            <!--                                    <span class="text_nft_heading"><i class="fad fa-user"></i> &nbsp;  Divya</span>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="col">-->
                            <!--                                <div class="username_address pt-2">-->
                            <!--                                    <span class="text_nft_heading"><i class="fas fa-home-lg-alt"></i> &nbsp; 0x81abA8A124cDa74f39600479A91AB9bDAc63e8B8</span>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <div class="col-auto">-->
                            <!--                                <div class="username_btn">-->
                            <!--                                    <input type="submit" class="btn btn-primary w-100"> -->
                            <!--                                </div> -->
                            <!--                            </div>-->
                            <!--                            <div class="col-auto">-->
                            <!--                                <div class="username_btn"> -->
                            <!--                                    <input type="submit" class="btn btn-primary w-100">-->
                            <!--                                </div> -->
                            <!--                            </div>-->
                            <!--                        </div> -->
                                                <!--</form>-->
                            <!--                </li> -->
                            <!--              </ul>-->
                            <!--            </li>-->
                            <!--          </ul>-->
                            <!--    </div>-->
                                
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class=" mb-3 mt-5">NFT Creation Fees</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="creatingFees" name="creating_fees" aria-describedby="emailHelp" placeholder="Enter NFT creation fees">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="myCreationFees()" name="reset_Creation_fees"class="btn btn-primary form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
              
                <div class="col-md-12">
                    <h4 class=" mb-3 mt-5">NFT Selling</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="sellingFees" name="selling_fees" aria-describedby="emailHelp" placeholder="Enter NFT selling Percenatge">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="mySellFees()" name="reset_selling_fees" class="btn btn-primary form-control">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <h4 class=" mb-3 mt-5">Owners Address</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="OwnerAddress" name="owner" aria-describedby="emailHelp" placeholder="Set Owners Tron Address">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="myOwnerAddress()" name="address" class="btn btn-primary form-control">Submit</button>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
              
                <div class="col-md-12">
                    <h4 class=" mb-3 mt-5">NFT Tree Plant Address</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="treePlantAddress" name="owner" aria-describedby="emailHelp" placeholder="Set Owners Tron Address">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="setTreePlantAddress()" name="address" class="btn btn-primary form-control">Submit</button>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                            
                
            </div>
        </div>
      
    </section>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="assets/slick/slick.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    
    <script>
        $(document).ready(function() {
          $(".notification-drop .item").on('click',function() {
            $(this).find('ul').toggle();
          });
        });
    </script>
    
<script>
          var wallet = {
        contract_address: "0xA92280Ed47339F886D19D844Ff284A0f114cc358",
        contract_abi: [
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "name_",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "symbol_",
				"type": "string"
			},
			{
				"internalType": "address payable",
				"name": "_admin",
				"type": "address"
			},
			{
				"internalType": "address payable",
				"name": "_tree",
				"type": "address"
			}
		],
		"stateMutability": "payable",
		"type": "constructor"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "approved",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "Approval",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "operator",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "bool",
				"name": "approved",
				"type": "bool"
			}
		],
		"name": "ApprovalForAll",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "approve",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			},
			{
				"internalType": "address payable",
				"name": "artist",
				"type": "address"
			}
		],
		"name": "buyNFTWsum",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "string",
				"name": "_tokenURI",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "startday",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "starthour",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "enddays",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "endhours",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "royal",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "_feesauction",
				"type": "uint256"
			}
		],
		"name": "createAuction",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "string",
				"name": "_tokenURI",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "tokenid",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "_royalties",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "_feesfix",
				"type": "uint256"
			}
		],
		"name": "createFix",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			},
			{
				"internalType": "address payable",
				"name": "artist",
				"type": "address"
			}
		],
		"name": "fixbidingclaim",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "safeTransferFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			},
			{
				"internalType": "bytes",
				"name": "_data",
				"type": "bytes"
			}
		],
		"name": "safeTransferFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address payable",
				"name": "_adminAdd",
				"type": "address"
			}
		],
		"name": "setAdminAddress",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "operator",
				"type": "address"
			},
			{
				"internalType": "bool",
				"name": "approved",
				"type": "bool"
			}
		],
		"name": "setApprovalForAll",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_creationFess",
				"type": "uint256"
			}
		],
		"name": "setCreatonFees",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_sellingFess",
				"type": "uint256"
			}
		],
		"name": "setSellingFees",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address payable",
				"name": "_treePlant",
				"type": "address"
			}
		],
		"name": "setTreePlantAddress",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_value",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "timebidingcalculation",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "transferFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "adminAddress",
		"outputs": [
			{
				"internalType": "address payable",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "bidinginformation",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "currentTime",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "startvalue",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "endvalue",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "claimTime",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "minimumbidamount",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "nftowneraddress",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "claimstate",
		"outputs": [
			{
				"internalType": "bool",
				"name": "state",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "creationFess",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "fixbidinginformation",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "bidamount",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "nftowneraddress",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "getApproved",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "operator",
				"type": "address"
			}
		],
		"name": "isApprovedForAll",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "name",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "ownerOf",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "royalties",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "sellingFess",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "States",
		"outputs": [
			{
				"internalType": "bool",
				"name": "states",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes4",
				"name": "interfaceId",
				"type": "bytes4"
			}
		],
		"name": "supportsInterface",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "symbol",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "tokenId",
				"type": "uint256"
			}
		],
		"name": "tokenURI",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "treePlant",
		"outputs": [
			{
				"internalType": "address payable",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "treePlantFess",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "userbidinginformation",
		"outputs": [
			{
				"internalType": "address",
				"name": "addresss",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	}
],
    };



   
                    
    
async function myCreationFees ()
{
   
    let create= document.getElementById("creatingFees").value;
    if(window.ethereum)
             {
                 
      window.web3 = new Web3(window.ethereum);
    let myContract2 = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
                    create = BigInt(create*1000000000000000000)
   myContract2.methods.setCreatonFees(create).send({from:account})
                    .on('transactionHash', function(hash)
                        {
                            console.log(hash);
                        })   
                    .then( receipt1 =>
                    {
                         swal("Good job!", "Creation percentage is set!", "success");
                            
                    }).catch(console.log("error2"))
             }
    
}
async function mySellFees()
{   
     if(window.ethereum)
             {
    let sell = document.getElementById("sellingFees").value;
    sell=sell*10;
    console.log(sell);
      window.web3 = new Web3(window.ethereum);
    let myContract = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
   myContract.methods.setSellingFees(sell).send({from:account})
                    .on('transactionHash', function(hash)
                        {
                            console.log(hash);
                        })   
                    .then( receipt1 =>
                    {
                         swal("Good job!", "Selling percentage is set!", "success");
                            
                    }).catch(console.log("error2"))
             }

}
async function myOwnerAddress ()
{
    let address= document.getElementById("OwnerAddress").value;
     if(window.ethereum)
             {

      window.web3 = new Web3(window.ethereum);
    let myContract = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
   myContract.methods.setAdminAddress(address).send({from:account})
                    .on('transactionHash', function(hash)
                        {
                            console.log(hash);
                        })   
                    .then( receipt1 =>
                    {
                         swal("Good job!", "Owner address is chanaged ", "success");
                            
                    }).catch(console.log("error2"))
             }
  }
async function setTreePlantAddress ()
{
    let address= document.getElementById("treePlantAddress").value;
     if(window.ethereum)
             {

      window.web3 = new Web3(window.ethereum);
    let myContract = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
   myContract.methods.setTreePlantAddress(address).send({from:account})
                    .on('transactionHash', function(hash)
                        {
                            console.log(hash);
                        })   
                    .then( receipt1 =>
                    {
                         swal("Good job!", "Tree Plant address is chanaged ", "success");
                            
                    }).catch(console.log("error2"))
             }
  }
  
 


</script>
</body>
</html>