<?php 
include "header.php";
include "config.php";

if(isset($_POST['submit'])){
    
 if(!empty($_POST['Accounts'])){
                $valid_extensions = array('jpeg', 'jpg', 'png','gif'); // valid extensions
                $path = './uploads/'; // upload directory
                // echo $_FILES['image']['name'];
                $img = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                
                $userDESC = $_POST['description'];
                $Owneradd=$_POST['Accounts'];
                $Displayname=$_POST['Name'];
                $Twittername=$_POST['tweetname'];
                $portfolio=$_POST['portfolio'];
                $email=$_POST['email'];
                $insta=$_POST['instaname'];
                date_default_timezone_set("Asia/Kolkata");
                $date=date("Y/m/d");
                
                if($img=="")
                { 
                 
                  $Accounts=$_POST['Accounts'];
                  $queryy="SELECT * FROM NFT_user WHERE Useraddress='$Accounts'"; 
                  $myresult1 = mysqli_query($link,$queryy);
                  $res=$myresult1->fetch_assoc();
                  $path=$res['Userimage'];
                  
            $query="UPDATE NFT_user SET  `Username`='".$Displayname."',`Userimage`='".$path."',`Userbio`='".$userDESC."' ,`Usertwitname`='".$Twittername."',`Userinstaname`='".$insta."',`Userportfolio`='".$portfolio."',`Useremail`='".$email."' WHERE Useraddress ='".$Owneradd."' ";
            $myresult=mysqli_query($link,$query);
            
            $query1="UPDATE NFT_buy SET `Username`='".$Displayname."', `image`='".$path."' WHERE Address='".$Owneradd."'";
            $result1=mysqli_query($link,$query1);  
            
            $query2="UPDATE NFT_info SET `NFT_creator`='".$Displayname."' ,`Nft_creator_image`='".$path."' WHERE NFT_creator_add='".$Owneradd."' ";
            $result2=mysqli_query($link,$query2);
            
            $query3="UPDATE NFT_info SET `NFT_owner`='".$Displayname."',`Nft_owner_image`='".$path."' WHERE NFT_owner_address ='".$Owneradd."'";
            $result3=mysqli_query($link,$query3);
           
            $query4="UPDATE Nft_sell SET `Username`='".$Displayname."',`Userimage`='".$path."' WHERE Address='".$Owneradd."' ";
            $result4=mysqli_query($link,$query4);
            
            $query5="UPDATE `User_follow` SET `User_image`='".$path."',`User_name`='".$Displayname."' WHERE User_address= '".$Owneradd."' ";
            $result5=mysqli_query($link,$query5);
            
            
            $query6="UPDATE `User_follow` SET `Followers_image`='".$path."',`Followers_name`='".$Displayname."' WHERE Follower_address= '".$Owneradd."' ";
            $result6=mysqli_query($link,$query6);
            
            if($myresult){
                   echo "<script>swal('success','Profile Updated Successfully','success')</script>";
                    
                
            } else{
                            echo "<script>swal('error','profile not created','error')</script>";
                        }
                }else{
                $valid_extensions = array('jpeg', 'jpg', 'png','gif'); // valid extensions
                $path = './uploads/'; // upload directory
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                $final_image = rand(1000,1000000).$img;
                $path = $path.strtolower($final_image); 
                if(in_array($ext, $valid_extensions)){ 
          
        if(true){move_uploaded_file($tmp,$path);
           
            $path="uploads/".strtolower($final_image);
            
         
            
            $query="UPDATE NFT_user SET  `Username`='".$Displayname."',`Userimage`='".$path."',`Userbio`='".$userDESC."' ,`Usertwitname`='".$Twittername."',`Userinstaname`='".$insta."',`Userportfolio`='".$portfolio."',`Useremail`='".$email."' WHERE Useraddress ='".$Owneradd."' ";
            $myresult=mysqli_query($link,$query);
            
            $query1="UPDATE NFT_buy SET `Username`='".$Displayname."', `image`='".$path."' WHERE Address='".$Owneradd."'";
            $result1=mysqli_query($link,$query1);  
            
            $query2="UPDATE NFT_info SET `NFT_creator`='".$Displayname."' ,`Nft_creator_image`='".$path."' WHERE NFT_creator_add='".$Owneradd."' ";
            $result2=mysqli_query($link,$query2);
            
            $query3="UPDATE NFT_info SET `NFT_owner`='".$Displayname."',`Nft_owner_image`='".$path."' WHERE NFT_owner_address ='".$Owneradd."'";
            $result3=mysqli_query($link,$query3);
           
            $query4="UPDATE Nft_sell SET `Username`='".$Displayname."',`Userimage`='".$path."' WHERE Address='".$Owneradd."' ";
            $result4=mysqli_query($link,$query4);
            
            
            $query5="UPDATE `User_follow` SET `User_image`='".$path."',`User_name`='".$Displayname."' WHERE User_address= '".$Owneradd."' ";
            $result5=mysqli_query($link,$query5);
            
            
            $query6="UPDATE `User_follow` SET `Followers_image`='".$path."',`Followers_name`='".$Displayname."' WHERE Follower_address= '".$Owneradd."' ";
            $result6=mysqli_query($link,$query6);
            
            if($myresult){
                   echo "<script>swal('success','Profile Updated Successfully','success')</script>";
               
                } else{
                            echo "<script>swal('error','profile not created','error')</script>";
                        }
           
                        }
                    }
                
                }
             
     
            }else{
                echo "<script>swal('warning','Please Connect Wallet First','warning')</script>";
            }
}
if(isset($_POST['Unverify'])){
    
 if(!empty($_POST['Accounts'])){
                $valid_extensions = array('jpeg', 'jpg', 'png','gif'); // valid extensions
                $path = './uploads/'; // upload directory
                // echo $_FILES['image']['name'];
                $img = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                
                $userDESC = $_POST['description'];
                $Owneradd=$_POST['Accounts'];
                $Displayname=$_POST['Name'];
                $Twittername=$_POST['tweetname'];
                $portfolio=$_POST['portfolio'];
                $email=$_POST['email'];
                $insta=$_POST['instaname'];
                date_default_timezone_set("Asia/Kolkata");
                $date=date("Y/m/d");
                
                if($img=="")
                { 
                 
                  $Accounts=$_POST['Accounts'];
                  $queryy="SELECT * FROM NFT_user WHERE Useraddress='$Accounts'"; 
                  $myresult1 = mysqli_query($link,$queryy);
                  $res=$myresult1->fetch_assoc();
                  $path=$res['Userimage'];
                  
            $query="UPDATE NFT_user SET  `Username`='".$Displayname."',`Userimage`='".$path."',`Userbio`='".$userDESC."' ,`Usertwitname`='".$Twittername."',`Userinstaname`='".$insta."',`Userportfolio`='".$portfolio."',`Useremail`='".$email."' WHERE Useraddress ='".$Owneradd."' ";
            $myresult=mysqli_query($link,$query);
            
            $query1="UPDATE NFT_buy SET `Username`='".$Displayname."', `image`='".$path."' WHERE Address='".$Owneradd."'";
            $result1=mysqli_query($link,$query1);  
            
            $query2="UPDATE NFT_info SET `NFT_creator`='".$Displayname."' ,`Nft_creator_image`='".$path."' WHERE NFT_creator_add='".$Owneradd."' ";
            $result2=mysqli_query($link,$query2);
            
            $query3="UPDATE NFT_info SET `NFT_owner`='".$Displayname."',`Nft_owner_image`='".$path."' WHERE NFT_owner_address ='".$Owneradd."'";
            $result3=mysqli_query($link,$query3);
           
            $query4="UPDATE Nft_sell SET `Username`='".$Displayname."',`Userimage`='".$path."' WHERE Address='".$Owneradd."' ";
            $result4=mysqli_query($link,$query4);
            
            $query5="UPDATE `User_follow` SET `User_image`='".$path."',`User_name`='".$Displayname."' WHERE User_address= '".$Owneradd."' ";
            $result5=mysqli_query($link,$query5);
            
            
            $query6="UPDATE `User_follow` SET `Followers_image`='".$path."',`Followers_name`='".$Displayname."' WHERE Follower_address= '".$Owneradd."' ";
            $result6=mysqli_query($link,$query6);
            
            $query7="UPDATE NFT_user SET  `verify`=0 WHERE Useraddress ='".$Owneradd."' ";
            $myresult7=mysqli_query($link,$query7);
            
            if($myresult){
                   echo "<script>swal('success','Profile Updated Successfully','success')</script>";
                    
                
            } else{
                            echo "<script>swal('error','profile not created','error')</script>";
                        }
                }else{
                $valid_extensions = array('jpeg', 'jpg', 'png','gif'); // valid extensions
                $path = './uploads/'; // upload directory
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                $final_image = rand(1000,1000000).$img;
                $path = $path.strtolower($final_image); 
                if(in_array($ext, $valid_extensions)){ 
          
        if(true){move_uploaded_file($tmp,$path);
           
            $path="uploads/".strtolower($final_image);
            
         
            
            $query="UPDATE NFT_user SET  `Username`='".$Displayname."',`Userimage`='".$path."',`Userbio`='".$userDESC."' ,`Usertwitname`='".$Twittername."',`Userinstaname`='".$insta."',`Userportfolio`='".$portfolio."',`Useremail`='".$email."' WHERE Useraddress ='".$Owneradd."' ";
            $myresult=mysqli_query($link,$query);
            
            $query1="UPDATE NFT_buy SET `Username`='".$Displayname."', `image`='".$path."' WHERE Address='".$Owneradd."'";
            $result1=mysqli_query($link,$query1);  
            
            $query2="UPDATE NFT_info SET `NFT_creator`='".$Displayname."' ,`Nft_creator_image`='".$path."' WHERE NFT_creator_add='".$Owneradd."' ";
            $result2=mysqli_query($link,$query2);
            
            $query3="UPDATE NFT_info SET `NFT_owner`='".$Displayname."',`Nft_owner_image`='".$path."' WHERE NFT_owner_address ='".$Owneradd."'";
            $result3=mysqli_query($link,$query3);
           
            $query4="UPDATE Nft_sell SET `Username`='".$Displayname."',`Userimage`='".$path."' WHERE Address='".$Owneradd."' ";
            $result4=mysqli_query($link,$query4);
            
            
            $query5="UPDATE `User_follow` SET `User_image`='".$path."',`User_name`='".$Displayname."' WHERE User_address= '".$Owneradd."' ";
            $result5=mysqli_query($link,$query5);
            
            
            $query6="UPDATE `User_follow` SET `Followers_image`='".$path."',`Followers_name`='".$Displayname."' WHERE Follower_address= '".$Owneradd."' ";
            $result6=mysqli_query($link,$query6);
            
            $query7="UPDATE NFT_user SET  `verify`=0 WHERE Useraddress ='".$Owneradd."' ";
            $myresult7=mysqli_query($link,$query7);
            
            if($myresult){
                   echo "<script>swal('success','Profile Updated Successfully','success')</script>";
               
                } else{
                            echo "<script>swal('error','profile not created','error')</script>";
                        }
           
                        }
                    }
                
                }
             
     
            }else{
                echo "<script>swal('warning','Please Connect Wallet First','warning')</script>";
            }
}

?>
 <style>
 .container {
    max-width: 1140px!important;
}

 </style>
 <script>
 
(function($) {
    $(document).ready(async function() {
      window.web3 = new Web3(window.ethereum);
                    const accounts = await ethereum.request({ method: "eth_requestAccounts"});
                    const account = accounts[0];
                   
                    var formdata = new FormData();
                            formdata.append("address",account);
                            
                            var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./tree.php", requestOptions)
                              .then(response => response.json())
                              .then(result =>{
                                  
                                 document.getElementById("Name").value = result.Username;
                                 document.getElementById("description").value = result.Userbio;
                                 document.getElementById("tweetname").value = result.Usertwitname;
                                 document.getElementById("portfolio").value = result.Userportfolio;
                                 document.getElementById("email").value = result.Useremail;
                                 document.getElementById("instaname").value = result.Userinstaname;
                                 })
                              .catch(error => console.log('error', error));
    });
})(jQuery);
  
 </script>
<section class="wsum-nft-edit-profile-page">
    <div class="banner-content-here py-md-5 py-3"> 
        <h2 class="text-center text-white">Edit profile</h2>
        <div class="text-center text-white">
            <a class="text-white" href="/index.php">WSUM-NFT</a> > <a class="text-white" href="edit-profile.php">EDIT PROFILE</a>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center pb-5">You can set preferred display name, create your branded profile URL <br> and manage other personal settings</h5>
            </div>
            <div class="col-md-7">
                <div class="edit-profile-form">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Display name</label>
                        <input type="text" class="form-control " id="Name" name="Name" aria-describedby="emailHelp" placeholder="Enter the maximum 18 characters" maxlength="18" value="" required>
                    </div>
                      <!--<div class="form-group">-->
                      <!--  <label for="exampleInputEmail1">Custom URL</label>-->
                      <!--  <input type="text" class="form-control" id="Url" name="Url" aria-describedby="emailHelp" placeholder="Enter your custom URL">-->
                      <!--</div>-->
                      <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <textarea type="text" class="form-control " id="description" aria-describedby="emailHelp" value=""  name="description" placeholder="Tell about yourself in a few words" required></textarea>
                         <input type="text" name="Accounts" id="Accounts" value="" hidden/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Twitter Username</label>
                        <p class="below-text-here">Link your Twitter account to gain more trust on the marketplace</p>
                        <input type="text" class="form-control " id="tweetname" name="tweetname" aria-describedby="emailHelp" value=""  placeholder="@" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Instagram Username</label>
                        <p class="below-text-here">Link your Instagram account to gain more trust on the marketplace</p>
                        <input type="text" class="form-control " id="instaname" name="instaname" aria-describedby="emailHelp" value=""  placeholder="" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Personal site or portfolio</label>
                        <input type="text" class="form-control " id="portfolio" name="portfolio" aria-describedby="emailHelp" value="" placeholder="https://" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <p class="below-text-here">Your email for marketplace notifications</p>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="" placeholder="email" required>
                        <p class="below-text-here pt-2">You must sign message to view or manage your email.</p>
                      </div>
                      <div class="form-group">
                        <div class="varification-section">
                            <div class="row">
                                <div class="col">
                                    <div class="varification-text">
                                        <label >Verification</label>
                                       <p>Proceed with verification process to get more visibility and gain trust on WSUM Marketplace. 
                                        Please allow up to several weeks for the process.</p>
                                    </div>
                               
                                </div>
                                <div class="col-auto">
                                    <div class="varified-btn" id="userverify">verified</div>
                                </div>
                               <div class="col-auto">
                                    <div class="varified-btn" id="userverify2">Not verified</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <button type="submit" id="update" class="btn btn-primary form-control upload-profile" name="submit">Update profile</button>
                      <button type="submit" id="Unverify" class="btn btn-primary form-control upload-profile" name="Unverify">Save</button>
                      <div class="">
                          <p class="text-danger" id="inceficinet"> Can Not update profile after varification,If you want to change profile then you have to again go through verify process </p>
                      </div>
                 
                </div>
            </div>
            <div class="col-md-5">
                <div class="upload-image-profile ">
                    <!--<img src="assets/img/img-here (1).png" style="height:100px">-->
                    <label for="">Upload Image</label>
                    <p class=" pt-2">We recommend an image of at least 400x400. Gifs work too.</p>
                    <!--<input type="file" id="myfile" name="myfile">-->
                    
                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                    <main class="main_full">
                      <div class="container">
                        <div class="panel">
                          <div class="button_outer">
                            <div class="btn_upload">
                              <input type="file" id="upload_file" name="image">
                              Choose file
                            </div>
                            <div class="processing_bar"></div>
                            <div class="success_box"></div>
                          </div>
                        </div>
                        <div class="error_msg"></div>
                        <div class="uploaded_file_view" id="uploaded_view">
                          <span class="file_remove">X</span>
                          
                        </div>
                      </div>
                    </form>
                    </main>
                    <script>
                        var btnUpload = $("#upload_file"),
                            btnOuter = $(".button_outer");
                            btnUpload.on("change", function(e){
                            var ext = btnUpload.val().split('.').pop().toLowerCase();
                            if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                              $(".error_msg").text("Not an Image...");
                            } else {
                              $(".error_msg").text("");
                              btnOuter.addClass("file_uploading");
                              setTimeout(function(){
                                btnOuter.addClass("file_uploaded");
                              },3000);
                              var uploadedFile = URL.createObjectURL(e.target.files[0]);
                              setTimeout(function(){
                                $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
                              },3500);
                            }
                          });
                          $(".file_remove").on("click", function(e){
                            $("#uploaded_view").removeClass("show");
                            $("#uploaded_view").find("img").remove();
                            btnOuter.removeClass("file_uploading");
                            btnOuter.removeClass("file_uploaded");
                          });
                          
// $(function () {

//     var timer = 0;
//     var sensor_word = ['Hardcore' , 'Anal', 'fuck','sexuality','erotic','screw','eroticism','love','erogenous','lust','lay','sex','bed','make','libido','asexual','concupiscence','shag','lovemaking'
// ,'foreplay','chaste','bang','sexless','commerce','Passion','hanky-panky','aphrodisiac','copulate','celibate','intercourse','venery','root','venereal','hump','promiscuous','desire','intimate','couple','liaison','know','erotomania','lascivious','poontang','mate'
// ,'congress','sleep','bonk','ball','physical','Eros','ass','amatory','sexually','anaphrodisiac','fornicate','have','sexed','nooky','virgin','libidinous','abuse','pervert','unsex','lover'
// ,'oversexed','nymphomania','boff','ride','relationship','undersexed','jump','erotogenic','sexology','raunchy','coitus','lechery','vice','continent','perversion','orgasm','booty','proposition','celibacy','intimacy','amorous','salacious','sexy','knowledge','masturbate','hot'
// ,'seduce','lewd','tail','promiscuity','bedroom','company','union','access','kinky','passionate','coupling','climax','pornography','nudity'];
//     var sensor_replace = ['a***', 'po**', 'se*'];

//     $('.restrict').on('keyup', function () {
//         clearTimeout(timer);
//         var new_value = this.value;
//         var new_sensor = $('.restrict').val();

//         $.each(sensor_word, function (idx, word) {
//             //new_sensor = new_sensor.replace(word, '***');
//             console.log(typeof(new_sensor.search(word)));
//             console.log((new_sensor.search(word)));
//             if(Number(new_sensor.search(word))>0){
                
//                 $('.restrict').val(new_sensor);
//                 $("#update").prop('disabled', true);
//             }else{
              
//              $("#update").prop('disabled', false);
//             }
             
//         });

//         timer = setTimeout(function () {
           
             
//         }, 0);

//     });

//     $('.restrict').on('keydown', function () {
//         clearTimeout(timer);
//     });
    
//     $('.restrict1').on('keyup', function () {
//       clearTimeout(timer);
//         var new_value = this.value;
//         var new_sensor = $('.restrict1').val();

//         $.each(sensor_word, function (idx, word) {
//           new_sensor = new_sensor.replace(word, '***');
//              $('.restrict1').val(new_sensor);
//         });

//         timer = setTimeout(function () {
//           $("#update").prop('disabled', true);
             
//         }, 0);

//     });

//     $('.restrict1').on('keydown', function () {
//         clearTimeout(timer);
//     });


// })
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
     window.addEventListener('load', async () => {
        let web3= new window.Web3(window.ethereum);
        let network = await web3.eth.net.getId();
        var address="";
        await window.ethereum.enable().then(result=>{address=result[0]});
        
        $('#Accounts').val(address);
            var formdata = new FormData();
            formdata.append("address", address);
                            
            var requestOptions = {
              method: 'POST',
              body: formdata,
              redirect: 'follow'
            };
             
            fetch("./getUserDetails.php", requestOptions)
              .then(response => response.json())
              .then(result=>{
                   let verify =result[0].verify;
                   if(result[0].verify=='1'){
                    document.getElementById('userverify').style.display="block";
                    document.getElementById('userverify2').style.display="none";
                    document.getElementById('update').style.display="none";
                    document.getElementById('Unverify').style.display="block";
                    document.getElementById('inceficinet').style.display="block";
                  }else{
                       document.getElementById('userverify').style.display="none";
                       document.getElementById('userverify2').style.display="block";
                     document.getElementById('update').style.display="block";
                    document.getElementById('inceficinet').style.display="none";
                    document.getElementById('Unverify').style.display="none";
                    }
              })
              .catch(console.log);
     })
</script>

<?php 
include "footer.php";
?>
