<?php 
include "header.php";
?>

<style>
    .auction-btn button.btn.btn-primary {
    font-size: 10px;
    background-color: #004ae1;
    border-color: #004ae1;
}
.auction-btn button.btn.btn-primary:hover {
    background-color: #fff;
    border-color: #004ae1;
    color: #004ae1
}
</style>

<section class="profile-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"> User Profile </h1>
        <h3 class="text-color text-center">@Username</h3>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="user-profile">
          <div class="row">
            <div class="col-md-6"><div class="profile-img"><img class="d-block w-100 " src="assets/img/img3.png" alt=""></div></div>
            <div class="col-md-6">
              <div class="profile-content">
                <h4>User Profile <br>Points</h4>
                <p><span class="text-color" id="useraddress"></span>(copy)</p>
                <p>link to main website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
          <div class="border-between "></div>
      </div>
    </div>
  </div>
  <div class="forsale-collectin-mission py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="forsale-tab" data-toggle="tab" href="#forsale" role="tab" aria-controls="forsale" aria-selected="true">Forsale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="collection-tab" data-toggle="tab" href="#collection" role="tab" aria-controls="collection" aria-selected="false">Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Mission</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="forsale" role="tabpanel" aria-labelledby="forsale-tab">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="tab-profile-content">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-pro-content mt-4">
                            <div class="pro-img">
                              <img class="d-block w-100 " src="assets/img/img3.png" alt="">
                            </div>
                            <div class="auction-btn pt-3 bb-2">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-primary px-3">Auction Start</button>
                                
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary px-3">Auction End</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="pro-content">
                              <div class="row">
                                <div class="col">Title</div>
                                <div class="col-auto"><p>share</p></div>
                              </div>
                              <div class="row">
                                <div class="col"><p>@Creator</p></div>
                                <div class="col-auto"><p>follow</p></div>
                              </div>
                            </div> -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-pro-content mt-4">
                            <div class="pro-img">
                              <img class="d-block w-100 " src="assets/img/img1.png" alt="">
                            </div>
                            <div class="auction-btn pt-3 bb-2">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-primary px-3">Auction Start</button>
                                
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary px-3">Auction End</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="collection" role="tabpanel" aria-labelledby="collection-tab">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="tab-profile-content">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-pro-content mt-4">
                            <div class="pro-img">
                              <img class="d-block w-100 " src="assets/img/img1.png" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-pro-content mt-4">
                            <div class="pro-img">
                              <img class="d-block w-100 " src="assets/img/img2.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <div class="tab-profile-content">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-pro-content mt-4">
                            <div class="pro-img">
                              <img class="d-block w-100 " src="assets/img/img2.png" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-pro-content mt-4">
                            <div class="pro-img">
                              <img class="d-block w-100 " src="assets/img/img3.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="border-between1 "></div>
              <div class="chart-in-tab pt-5">
                <div class="row">
                  <div class="col-md-3">
                    <div class="connect1">
                        <div class="obtained">
                      <div class="obtain-img">
                        <img class="d-block " src="assets/img/img1.png" alt="">
                      </div>
                    </div>
                    </div>
                    
                  </div>
                  <div class="col-md-3">
                      <div class="connect2">
                          <div class="empty-obtained">
                      <i class="fa fa-question"></i>
                    </div>
                      </div>
                    
                  </div>
                  <div class="col-md-3">
                      <div class="connect3">
                          <div class="obtained">
                      <div class="obtain-img">
                        <img class="d-block " src="assets/img/img2.png" alt="">
                      </div>
                    </div>
                      </div>
                    
                  </div>
                  <div class="col-md-3">
                      <div class="connect4">
                          <div class="obtained">
                      <div class="obtain-img">
                        <img class="d-block " src="assets/img/img3.png" alt="">
                      </div>
                    </div>
                      </div>
                    
                  </div>
                </div>
                <div class="row py-5">
                  <div class="col-md-3">
                  </div>
                  
                  <div class="col-md-3">
                      <div class="connect5">
                          <div class="obtained">
                              <div class="obtain-img">
                                <img class="d-block " src="assets/img/img2.png" alt="">
                              </div>
                            </div>
                      </div>
                    
                  </div>
                  <div class="col-md-3">
                      <div class="connect6">
                          <div class="empty-obtained">
                              <i class="fa fa-question"></i>
                            </div>
                      </div>
                    
                  </div>
                  <div class="col-md-3">
                  </div>
                </div>

                <div class="row pb-5">
                  <div class="col-md-4">
                  </div>
                  
                  <div class="col-md-4">
                      <div class="connect7">
                          <div class="one-of_kind">
                          <div class="complete-mission">
                            <i class="fa fa-question"></i>
                          </div>
                          <p class="text-center mt-4">Complete the mission to unlock</p>
                          <h4 class="text-center"> One-of-A-Kind</h4>
                        </div>
                      </div>
                    
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

console.log("hello");
 window.addEventListener('load', async () => {
             if(window.BinanceChain){
                console.log("wallet connect");
                let web3= new window.Web3(window.BinanceChain);
                let network = await web3.eth.net.getId();
                if(network==56 || network==97){
                    var dd=""; var ddd="";
                    await window.BinanceChain.enable().then(result=>{dd=result[0]});
                    console.log(dd);
                    document.getElementById('useraddress').innerHTML=dd;
                    
                     var formdata = new FormData();
                        formdata.append("Address", dd);
                        
                        var requestOptions = {
                          method: 'POST',
                          body: formdata,
                          redirect: 'follow'
                        };
                        
                        fetch("https://ramlogics.com/crypto-z/fetch.php", requestOptions)
                          .then(response => response.json())
                          .then(result => {
                               console.log(result);
                                 let html = "";
                            for(i=0;i<result.length;i++){
                                console.log(result[i]['Token_image']);
                                
                                  let html = "";
              
                                  for(i=0;i<result.length;i++)
                                  {
                                      html += `
                                      <div class="col-md-3 mt-4">
                                        <div class="demo_here">
                                        <div class="card" style="">
                                        <img class="card-img-top" src="${result[i].Token_image}" alt="Card image cap">
                                        <div class="card-body">
                                          
                                         <div class="">
                                            <div class="user-id-name">
                                      <div class="row">
                                        <div class="col">
                                          <p><strong >Name :</strong></p>
                                          <p><strong>Id :</strong></p>
                                        </div>
                                        <div class="col-auto">
                                          <p class="text-right">${result[i].Token_name}</p>
                                          <p class="text-right">${result[i].Token_id}</p>
                                        </div>
                                      </div>
                                    </div>
                                
                            }
                               
                               
                               
                               
                               
                               
                          })
                          
                               
                }else {
                    swal('warning','Please choose BSC network First','warning');
                 }
             }
        })
           
    
   
    
    
</script>

<?php 
include "footer.php";
?>
