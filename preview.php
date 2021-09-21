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
.edit-profile-form label {
    font-size: 22px;
}
.edit-profile-form p {
    border-bottom: 2px solid #ccc;
    padding-bottom: 20px;
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
<section class="wsum-nft-edit-profile-page">
    <div class="banner-content-here py-5 my-5"> 
        <h2 class="text-center text-white">Preview</h2>
        <div class="text-center text-white">
            <a class="text-white" href="/index.php">WSUM-ART</a> > <a class="text-white" href="edit-profile.php">PREVIEW</a>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12" >
                <div class="preview-img text-center "><img id="image"  style="height:300px"></div>
            </div>
            <div class="col-md-12">
                <div class="edit-profile-form">
                    <form method="POST" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Display name</label>
                        <p class="below-text-here pt-2" id="name"></p>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        
                        <p class="below-text-here pt-2" id="bio">You must sign message to view or manage your Bio. </p>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Twitter Username</label>
                        <p class="below-text-here" id="twittername">Link your Twitter account to gain more trust on the marketplace</p>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Personal site or portfolio</label>
                        <p class="below-text-here pt-2" id="portfolio">You must sign message to view or manage your email. </p>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <p class="below-text-here" id="email">Your email for marketplace notifications</p>
                      </div>
                 
                </div>
            </div>
            
        </div>
    </div>
</section>



<?php 
include "footer.php";
?>


<script>
     window.addEventListener('load', async () => {
        let web3= new window.Web3(window.ethereum);
        let network = await web3.eth.net.getId();
        var address="";
        await window.ethereum.enable().then(result=>{address=result[0]});
        // console.log(address);
    
            var formdata = new FormData();
            formdata.append("address", address);
                            
            var requestOptions = {
              method: 'POST',
              body: formdata,
              redirect: 'follow'
            };
             
            fetch("./updateUserDetails.php", requestOptions)
              .then(response => response.json())
              .then(result=>{ 
                //   console.log(result[0].Username);
                  $("#name").text(result[0].Username);
                  $("#bio").text(result[0].Userbio);
                  $("#twittername").text(result[0].Usertwitname);
                  $("#portfolio").text(result[0].Userportfolio);
                  $("#email").text(result[0].Useremail);
                  $("#image").attr("src", result[0].Userimage);
                  
              })
              .catch(console.log);
     })
</script>