<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WSUM-ART</title>
  <link rel="icon" href="assets/img/fevicon.png" type="image/gif" >
  <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <!--fontawesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <!--fontawesome-->
  
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!--responsive css-->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/custom_nft.css">
  <!--responsive css-->
  
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

  <style>
       .navbar-light .navbar-toggler-icon {
            background-color: #fff;
            border-radius: 2px;
        }

        body.offcanvas-active {
            overflow: hidden;
        }

        .offcanvas-header {
            display: none;
        }

        .screen-overlay {
            width: 0%;
            height: 100%;
            z-index: 30;
            position: fixed;
            top: 0;
            left: 0;
            opacity: 0;
            visibility: hidden;
            background-color: rgba(34, 34, 34, 0.6);
            transition: opacity 0.2s linear, visibility 0.1s, width 1s ease-in;
        }

        .screen-overlay.show {
            transition: opacity 0.5s ease, width 0s;
            opacity: 1;
            width: 100%;
            visibility: visible;
        }
        @media (max-width: 1320px){
            .dummy-missing{
                height: 415px;
            }
        }
         @media (max-width: 1150px) {
             button.btn.btn-primary.wallet-btn {
                font-size: 10px;
            }
            /*.search-setin-nav .input-group {*/
            /*    width: 240px;*/
            /*}*/
            header .navbar-light .navbar-nav .nav-link{
                font-size: 11px;
            }
            .missing1 .view-btn button {
                padding: 1px 7px;
            }
         }
         
        @media all and (max-width: 992px) {
            li.nav-item.saperator {
    display: none;
}
            button.btn.btn-primary.wallet-btn {
                font-size: 15px;
            }
            .offcanvas-header {
                display: block;
            }
            .mobile-offcanvas {
                visibility: hidden;
                transform: translateX(-100%);
                border-radius: 0;
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                z-index: 1200;
                width: 80%;
                overflow-y: scroll;
                overflow-x: hidden;
                transition: visibility 0.2s ease-in-out, transform 0.2s ease-in-out;
                background-color: #102da3 !important;
            }
            html:lang(ar) .mobile-offcanvas {
                transform: translateX(100%);
            }
            .mobile-offcanvas.show {
                visibility: visible;
                transform: translateX(0);
            }
            .nav-cont {
                display: block !important;
                padding-right: auto !important;
                padding-left: auto !important;
            }
            .navbar2 {
                box-shadow: 0px 3px 17px #00000047;
            }
            #navbar_main {
                box-shadow: 0px 3px 17px #00000047;
            }
            .dropdown-menu {
                border: none;
            }
            /*.nav-item {*/
            /*    border-bottom: 1px solid #eaeaea;*/
            /*}*/
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        header {
            width: 100%;
            z-index: 10;
        }

        header .div1 {
            color: 000;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9;
            /*box-shadow: 0px 2px 10px #ccc!important;*/
                border-bottom: 1px solid #0404051a;
            background-color: #fff;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -2px rgba(0,0,0,0.05)!important;
        }
        nav.navbar.navbar-expand-lg.navbar-light {
            padding: 20px 0px;
        }
        .visible-title {
            visibility: visible;
        }
        @media(max-width:992px){
    /*.search-setin-nav .input-group {*/
    /*  width: 100%!important;*/
    /*}*/
    header .navbar-light .navbar-nav .nav-link {
    font-size: 14px;
}
}
/*.dropbtn {*/
/*  background-color: #04AA6D;*/
/*  color: white;*/
/*  padding: 16px;*/
/*  font-size: 16px;*/
/*  border: none;*/
/*}*/

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    left: -240px;
    top:30px;
    background-color: #ffffff;
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
    z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/*.dropdown-content a:hover {background-color: #ddd;}*/

.dropdown:hover .dropdown-content {display: block;}
.search-here-full .form-control:focus {
    border-color: #ffffff;
    box-shadow: 0 0 0 0.2rem rgb(255 255 255);
}

/*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/
  </style>
</head>
<body id="style-3">
<header class="header">
  <div class="div11 sticky-top">
    <div class="container">
    
      <nav class="navbar navbar-expand-lg navbar-light ">
        
        <a class="navbar-brand text-dark" href="index.php" ><img src="assets/img/artlogo.png" height="40px"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Explore<span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="./my_item.php">My items </a>
            </li>
          
            <li class="nav-item saperator">
              <a class="nav-link" href="#">|</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./how-it-work.php" target="_blank">How it works</a>
            </li>
            <li class="nav-item set-community" style="position:relative;">
              <!--<a class="nav-link" href="#">Community</a>-->
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!--Community-->
                  Token Info
                </a>
                <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-uppercase" target="blank" href="https://www.wsum.network/binance-coin/"> BNB</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="https://www.wsum.network/payment-for-the-nfts/">RIT 2.0</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="#">WSBC</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="https://www.wsum.network/meet-wbbw-coin/">WBBW</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="http://www.wsum.network/crypto-with-ejco/">EJCO</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="https://www.wsum.network/crypto-with-qbbw/">QBBW</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="http://www.wsum.network/understanding-busd-the-usd-backed-stable-coin/">BUSD</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="https://www.wsum.network/binances-bitcoin-pegged-token/">BTCb</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="#">BETH</a>
                  <a class="dropdown-item text-uppercase" target="blank" href="https://www.wsum.network/wsum-brings-sumcoin-to-the-defi-world-with-its-wrapped-sum/">WSUM</a>
             
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NFT Vault</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
           
            <a class="nav-link set-pad-here" href="./create-nft.php"><button type="button" class="btn btn-primary wallet-btn py-2 "  >CREATE</button></a>
            <a class="nav-link set-pad-here" href="#"><button type="button" class="btn btn-primary create-btn py-2 text-uppercase"  id="wallet-connect">Connect wallet</button></a>
            
            <!--<span class="nav-link set-pad-here serch-icon"><i class="fa fa-search " style="color: #bcbebf;"></i></span>-->
          </form>
        </div>
      </nav>
      <!--<div class="search-here-full pt-4 pb-3" style="display:none;">-->
      <!--    <form>-->
      <!--    <div class="form-group">-->
      <!--        <div class="d-flex justify-content-between">-->
      <!--            <div class="" style="width:95%"><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Serach..."></div>-->
      <!--            <div class="" style="width:5%"><img src="assets/img/cross-img.png" class="clickcross" style="height:25px;margin-top:10px"></div>-->
      <!--        </div>-->
            
      <!--    </div>-->
          
      <!--  </form>-->
      <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
      <!--  <script>-->
      <!--      $(document).ready(function(){-->
      <!--        $(".serch-icon").click(function(){-->
      <!--          $(".navbar").hide();-->
      <!--          $(".search-here-full").show();-->
      <!--        });-->
      <!--        $(".clickcross").click(function(){-->
      <!--          $(".search-here-full").hide();-->
      <!--          $(".navbar").show();-->
      <!--        });-->
      <!--      });-->
      <!--  </script>-->
      <!--</div>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.3/web3.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
   </div>
  </div>
</header>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// const correctEthNetwork = 3;
const correctBncNetwork = 0x38;
let web3 = new Web3(window.ethereum);
                          web3.eth.getAccounts().then((account) => {
                          var formdata = new FormData();
                          formdata.append("address", account[0]);
                        
                          var requestOptions = {
                          method: 'POST',
                          body: formdata,
                          redirect: 'follow'
                        };
                        
                        fetch("./checkNewUser.php", requestOptions)
                          .then(response => response.text())
                          .then(result=>{
                              if (result==1)
                              {
                                   location.href = "./account-suspended.php"
                              }
                          })
                          .catch(error => console.log('error', error));
                                }).catch(console.log)
         const ethtransfer = async () =>
         {
             if(window.ethereum)
             {
                    window.web3 = new Web3(window.ethereum);
                    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
                   
                    const netId = web3.eth.net.getId();
                    netId.then((result) => {
                    if(result === correctBncNetwork) {
                        $('.swal-overlay--show-modal').css('opacity','0');
                      return;
                    } else {
                        $('.swal-overlay--show-modal').css('opacity','1');
                        window.swal({
                            title: `Please Connect to the Correct Network!`,
                            button: false,
                        })
                    }
                });
                $("#wallet-connect").html(account.substring(0, 5));
                    
             }
        }  ; 

        $(document).ready(function(){
            $("#wallet-connect").click(ethtransfer);
            
         });
                   
                    window.addEventListener('load', async () => {
                    let web3= new window.Web3(window.ethereum);
                    let network = await web3.eth.net.getId();
                    var address="";
                    await window.ethereum.enable().then(result=>{address=result[0]});
                  
                    const netId = web3.eth.net.getId();
                    netId.then((result) => {
               
                    if(result === correctBncNetwork) {
                        $('.swal-overlay--show-modal').css('opacity','0');
                      return;
                    } else {
                        $('.swal-overlay--show-modal').css('opacity','1');
                        window.swal({
                            title: `Please Connect to the Correct Network!`,
                            button: false,
                        })
                    }
                });
                 $("#wallet-connect").html(address.substring(0, 5));
     })

</script>

