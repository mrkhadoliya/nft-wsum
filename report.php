<?php 
    include "header.php";
    include "config.php";
    $id=$_GET['id'];
    $query = "SELECT * FROM NFT_user AS nftUser INNER JOIN NFT_info AS nftInfo ON nftUser.Useraddress = nftInfo.NFT_creator_add WHERE nftInfo.NFT_id = '$id'";
$data = mysqli_query($link, $query);
$result = mysqli_fetch_array($data);
?>

<div class="py-md-5 my-4 py-4 report_from__"> 
    <div class="container">
        <div class="row"> 
            <div class="col-md-6 col-12 m-auto">
                <div class="form__report card p-4">
                    <form method="post" action="">
                      
                      <div class="text-center">
                          <h2 class="text_nft_heading">Why are you reporting?</h2>
                          <h5>Describe why you think this item should be removed from marketplace</h5>
                          
                          <div class="buyer-img pt-3">
                              <img class="border" src="<?php echo $result['NFT_image'];?>" height="100" width="100" alt="">
                        </div>
                      </div>
                      <div class="form-group border-bottom">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control border-0 rounded-0" id="message"  name="message" rows="1" placeholder="Tell us some details" required></textarea>
                      </div>
                      
                      <div class="row form-group"> 
                        <div class="col-md">
                            <div class="submit_btn">
                                <!--<input type="submit" name="submit" id="submit" class="btn btn-primary w-100">-->
                                <button type="submit" id="submit"  class="btn onsale-btn w-100">Report</button>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="submit_btn">
                             <a href="./index.php"><button type="button"class="btn onsale-btn w-100" >Cancel</button></a>
                            </div>
                        </div>
                      </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
    include "footer.php";
?>
<script>
             $("#submit").on('click', async function(e) {
                
             e.preventDefault();
                    let Id =<?php echo $_GET['id']?>;
                    let web3 = new window.Web3(window.ethereum);
                    let network = await web3.eth.net.getId();
                    var address = "";
                    await window.ethereum.enable().then((result) => {
                         address = result[0];
                    });
                                                        window.wweb3 = new Web3(window.ethereum);
                                                        const accounts = await ethereum.request({ method: "eth_requestAccounts"});
                                                        const account = accounts[0];
             if(Id!=""&& message!=""){
                                       
                                        var message = $.trim($("#message").val());
                                        var formdata = new FormData();
                                        formdata.append("address", address);
                                        formdata.append("message", message);
                                        formdata.append("Id", Id);
                                
                                        var requestOptions = {
                                            method: "POST",
                                            body: formdata,
                                            redirect: "follow",
                                        };
                                
                                        fetch("./reportsave.php", requestOptions)
                                            .then((response) => response.text())
                                            .then((result) => {
                                             console.log(result);
                                                if (result=='not Okay')
                                                {
                                                    Swal.fire({
                                                                      icon: 'error',
                                                                      title: 'Oops...',
                                                                      text: 'Can Not Sumbit Report, first complete your profile',
                                                                     
                                                                    }).then((ok)=>{
                                                                        location.href="./my_item.php";
                                                                    }).catch(console.log);
                                                   } else{
                                                   
                                                   if (result=="true")
                                                                 {
                                                       
                                                            wweb3.eth.personal.sign("You reported this NFT"+Id, accounts[0], "test password!")
                                                            .then(()=>{
                                                                 Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Thank you For Your Response ',
                                                         
                                                            }).then((ok) => {
                                                                              location.href="./index.php" ;
                                                                            })
                                                            }).catch(console.log);
                                                }
                                                }
                                         }).catch(console.log);
                           
                                
                        }else{
                            swal("warning","Please fill the required fields","warning")
                        }
           
             
         })
     
    
</script>

