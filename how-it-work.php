<?php include "header.php";?>
<style>
    .card { 
        background-color: #eaedf7; 
        border: 1px solid rgb(234 237 247); 
    }
    button, .btn-primary { 
        border: none !important;
    }
    .btn-link { 
        color: #50579e; 
    }
    .card-header { 
        background-color: rgb(80 87 158 / 8%);
        border-bottom: 0;
    }
    button:hover, .btn-primary:hover {
        border-color: #4c549c;
        background-color:transparent;
        color: #4c549c;
    }
    .btn-link:hover {
        color: #4c549c;
        text-decoration: none;
    }
    .btn.focus, .btn:focus {
        outline: none;
        box-shadow: none;
    }
</style>

<section class="how_work py-md-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-md-auto col-12">
                <div class="how_it_work_area"> 
                    <div class="contant_how_it py-md-5 py-4">
                        <h2 class="font-weight-bold text-center">WSUM.ART &nbsp; <span>FAQ</span></h2>
                    </div>
                    <div class="accro_how_work">
                        <h2>Marketplace</h2>
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <i class="far fa-chevron-down"></i> &nbsp;NFT? BEP-721 tokens?
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <p>NFT stands for non-fungible tokens like BEP-721 (a smart contract standard) tokens which are hosted on BNB own blockchain. NFTs are unique digital items such as collectibles or artworks or game items.
                                As an artist, by tokenizing your work you both ensure that it is unique and brand it as your work. The actual ownership is blockchain-managed.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <i class="far fa-chevron-down"></i> &nbsp;What does “minting” mean?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                    <p>The process of tokenizing your work and creating an NFT (see above).</p>
                               </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsBNBree" aria-expanded="false" aria-controls="collapsBNBree">
                                  <i class="far fa-chevron-down"></i> &nbsp;Can I create an NFT on WSUMART.com without putting it on sale?
                                </button>
                              </h5>
                            </div>
                            <div id="collapsBNBree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p> Yes, you can and it is up to you if you decide to sell it later or not.</p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingfour">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                  <i class="far fa-chevron-down"></i> &nbsp;Can I change the price of an already created collectible?
                                </button>
                              </h5>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                <div class="card-body">
                                     <p>Absolutely, you can lower the price free of transaction costs at any time. You just need to sign the signature request via your wallet.</p>
                                </div>
                            </div>
                          </div>
                          <!--<div class="card">-->
                          <!--  <div class="card-header" id="headingfive">-->
                          <!--    <h5 class="mb-0">-->
                          <!--      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">-->
                          <!--        <i class="far fa-chevron-down"></i> &nbsp;Can I gift or send a collectible to someone?-->
                          <!--      </button>-->
                          <!--    </h5>-->
                          <!--  </div>-->
                          <!--  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">-->
                          <!--      <div class="card-body">-->
                          <!--           <p>Yes, just go on the detail page of a collectible you own, open the “...” menu and select “transfer token”</p>-->
                          <!--      </div>-->
                          <!--  </div>-->
                          <!--</div>-->
                          <!--<div class="card">-->
                          <!--  <div class="card-header" id="headingsix">-->
                          <!--    <h5 class="mb-0">-->
                          <!--      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">-->
                          <!--        <i class="far fa-chevron-down"></i> &nbsp;What does “burn a token” mean?-->
                          <!--      </button>-->
                          <!--    </h5>-->
                          <!--  </div>-->
                          <!--  <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">-->
                          <!--      <div class="card-body">-->
                          <!--          <p>The BEP-721 standard does not only allow the creation of NFTs, but also includes a possibility to destroy them - i.e. burning the token.</p>-->
                          <!--      </div>-->
                          <!--  </div>-->
                          <!--</div>-->
                          <div class="card">
                            <div class="card-header" id="headingseven">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                  <i class="far fa-chevron-down"></i> &nbsp;Do you have an integration?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
                                <div class="card-body">
                                   <p>Yes, you can view the collectibles you have created on WSUMART.com on manage them there as well.
                                   Additionally, it is possible to list your collectibles on only in BNB but also in WSUMART.</p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingeight">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                  <i class="far fa-chevron-down"></i> &nbsp;What is “unlockable content”?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
                                <div class="card-body">
                                  <p>As a content creator, you can add unlockable content to your collectibles, that only becomes visible after a transfer of ownership (i.e. selling or gifting your NFT).
                                  Artists use this feature to include high res files, making ofs. videos, secret messages etc.</p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingnine">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                  <i class="far fa-chevron-down"></i> &nbsp;How does the royalty system work?
                                </button>
                              </h5>
                            </div>
                            <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordion">
                                <div class="card-body">
                                  <p>Whenever you create a collectible you can set a certain percentage as royalty for secondary sales. Example: You
                                  create a digital painting and sell it for 0.2 BNB, the royalty is 10 percent. Your buyer then sells your painting at a higher price point for 0.5 BNB.
                                  Here, the royalty system kicks in. As the original content creator you receive 10% of that sale, being 0.05 BNB.</p>

                                <p>NB: Royalties set on don’t carry over to WSUMART.com at the moment. However, the team is working on a cross-platform royalties implementation.</p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingten">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                  <i class="far fa-chevron-down"></i> &nbsp;Can I report an artwork or collectible?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordion">
                                <div class="card-body">
                                  <p>Yes, go on the detail page of the token you want to report, click on the “...” button and select “Report”.</p> 
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingeleven">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                  <i class="far fa-chevron-down"></i> &nbsp;What is verification?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordion">
                                <div class="card-body">
                                  <p>Verified badges are granted to creators and collectors that show enough proof of authenticity and active dedication to the marketplace.
                                  We are looking at multiple factors such as active social media presence and following, 
                                  dialogue with community members,number of minted and sold items. </p> 
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingtwolve">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetwolve" aria-expanded="false" aria-controls="collapsetwolve">
                                  <i class="far fa-chevron-down"></i> &nbsp;How to get a "verified" badge? 
                                </button>
                              </h5>
                            </div>
                            <div id="collapsetwolve" class="collapse" aria-labelledby="headingtwolve" data-parent="#accordion">
                                <div class="card-body">
                                  <p>The only way to get verified is to fill out this form. </p> 
                                  <p>Here are some tips on getting it right.</p> 
                                  <p>You need to submit: </p> 
                                  <ol>
                                    <li> Filled-in profile on WSUMART: user pic + cover + custom link </li>
                                    <li>Links to at least **2** social media profiles
                                        What we're looking for is active social media presence with a history, sharing your artworks, participating in the community. Large followers base is a plus. Mass-following raises questions.
                                    <li>Behind the screens/work in progress </li>
                                        If you're a creator, show us the backstage of the work process on one of the minted items. 
                                        If you’re a collector and it's not applicable, we will take a look at the items you previously purchased.  </li> 
                                    <li>The story behind your account
                                    Tell us about yourself! Why are you on WSUMART? What are you selling/collecting? What is the concept of your art?</li>
                                  </ol>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingthirteen">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsBNBirteen" aria-expanded="false" aria-controls="collapsBNBirteen">
                                  <i class="far fa-chevron-down"></i> &nbsp;It's been a while and I don't get verified. Why? 
                                </button>
                              </h5>
                            </div>
                            <div id="collapsBNBirteen" class="collapse" aria-labelledby="headinBNBirteen" data-parent="#accordion">
                                <div class="card-body">
                                  <p>If you're not verified within a week since submitting your request, most likely you didn't provide enough information, or your 
                                  WSUMART account is not active enough. </p>
                                    <p>Please note that the team reserves the right to not grant the verified badges without further explanation, as we receive hundreds
                                    of requests on a daily basis. </p> 
                                  <p>However, don't let it discourage you! The verified badge is not the key to success on the marketplace. Fill in your profiles, 
                                  make more sales or purchases, and try one more time later.</p> 
                                  <p>Good luck!</p> 
                                   
                                </div>
                            </div>
                          </div>
                        <div class="governence_how py-3">
                            <h2>Governance</h2>
                        </div>
                          <div class="card">
                            <div class="card-header" id="headingFourteen">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                  <i class="far fa-chevron-down"></i> &nbsp;What is WSUMART governance system? How does it work?
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion">
                              <div class="card-body">
                                <p>The ultimate goal of WSUMART is to evolve into a fully Decentralized Autonomous Organization (DAO), where all governance and decision rights belong to the platform users. By providing creators and collectors with the opportunity to propose and vote on platform upgrades, 
                                we make sure that the platform becomes a public good, responsive directly to its community members. On WSUMART, you have a voice, and your voice is heard.</p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFifteen">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                  <i class="far fa-chevron-down"></i> &nbsp;I’m a WSUMART user. Can I share my idea/proposal?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion">
                              <div class="card-body">
                                    <p>We encourage self expression on any matter: whBNBer you have an idea or a concern, if you want to support a project or disagree with others — share, express, and push it. Every opinion is counted, heard and valued. </p>
                               </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingSixteen">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                  <i class="far fa-chevron-down"></i> &nbsp;I have an idea. Where should I start?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion">
                                <div class="card-body">
                                    <p> Got an idea? Awesome –– now, go advocate! Initiate a discussion in WSUMART Discord, in WSUMART Telegram and Twitter.
                                    Convince other participants to support you, get them to express their voice & upvote.
                                    Hear feedback. Make sure that your proposal will make the platform better for everyone.</p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingSeventeen">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                  <i class="far fa-chevron-down"></i> &nbsp;How to submit my proposal?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordion">
                                <div class="card-body">
                                    <h5> (1) Got an idea? Awesome –– now, go advocate! </h5>
                                     <p>Initiate a discussion in WSUMART Discord, in Telegram and Twitter. Convince other participants to support you, get them to express their 
                                     voice & upvote. Hear feedback. Make sure that your proposal will make the platform better for everyone.</p>
                                    <h5> (2) Create your proposal pitch in WSUMART Discussion</h5>
                                    <ul>
                                        <li>Choose the right tags, clear title, and make sure there is no ongoing or rejected proposal on the same subject already.</li>
                                        <li>Proposal Category: Platform development / new features Moderation Community / governance Technical upgrades</li>
                                        <li>Describe your proposal</li>
                                        <li>Summary [what is being proposed?]</li>
                                        <li>Motivation [why do you want this implemented? how will the WSUMART community benefit from it? offer convincing arguments]</li>
                                        <li>How can it be implemented? How difficult is it?</li>
                                        <li>Other points to consider, pictures and images</li>
                                    </ul>
                                     <p>Mention your credentials & the number of WSUMART you hold for other community members. To submit an official proposal, you can't be anonymous.</p>
                                    <h5> (3) Get feedback from the team </h5>
                                     <p>If your idea clicked with the community, and we see active interest and feedback, the request is granted the "proposal candidate" status. At this point, the team evaluates if implementing the idea is technically possible at the moment.</p>
                                    <h5> (4) Vote </h5>
                                     <p>The proposal is put for a final vote.</p>
                                </div>
                            </div>
                          </div>
                          
                          <div class="py-3">
                              <h2>WSUMART token</h2>
                          </div>
                          
                          <div class="card">
                            <div class="card-header" id="headingEighteen">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                  <i class="far fa-chevron-down"></i> &nbsp;What is WSUMART, and why is it being distributed?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordion">
                                <div class="card-body">
                                     <p>WSUMART is the native governance token of the NFT marketplace WSUMART, designed to reward active platform users with a voice on the platform's future.
                                     As we are growing in numbers and expanding our presence on the market, we decided to take a shift towards a becoming a fully Decentralized Autonomous Organization.
                                     WSUMART has been created to give WSUMART community the power to influence decisions and incentivize active participation. </p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingNineteen">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                  <i class="far fa-chevron-down"></i> &nbsp;How is WSUMART distributed? 
                                </button>
                              </h5>
                            </div>
                            <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The majority (60%) of WSUMART's total supply is reserved for sellers and buyers on WSUMART marketplace. 75,000 tokens are
                                    distributed every Monday by 12pm San Francisco time to creators 
                                    and collectors who made a sale or a purchase on WSUMART during the past week. Both buyers and sellers equally receive 50% of the weekly distributed amount. </p>
                                    <p>To kick-start the token launch, we are also conducting a<b> WSUMART airdrop to
                                    all NFT holders </b>out there. 10% of the total WSUMART supply is distributed among everyone who has purchased NFTs, regardless of the platform they used. </p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwenty">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                  <i class="far fa-chevron-down"></i> &nbsp;Who is eligible to receive WSUMART?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion">
                                <div class="card-body">
                                   <p>In order to participate, you have to be either 1) an active WSUMART users or 2) to own NFTs with a price —
                                   meaning that you should have bought them on any platform that records data on-chain (on a marketplace, in a game pre-sale, etc). </p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwenty-one">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty-one" aria-expanded="false" aria-controls="collapseTwenty-one">
                                  <i class="far fa-chevron-down"></i> &nbsp;What do I need to do to receive WSUMART as WSUMART user? 
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwenty-one" class="collapse" aria-labelledby="headingTwenty-one" data-parent="#accordion">
                                <div class="card-body">
                                  <p>You can't purchase WSUMART on WSUMART — it can only be earned by active participation on the platform. We call it 
                                  Marketplace Liquidity Mining. Buy and sell items, and every Sunday you will receive 
                                  your portion of 75,000 WSUMART distributed weekly, according to the volume of your sales & purchases for the past week. </p>
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwenty-two">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty-two" aria-expanded="false" aria-controls="collapseTwenty-two">
                                  <i class="far fa-chevron-down"></i> &nbsp;I own NFTs. Can I receive WSUMART?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwenty-two" class="collapse" aria-labelledby="headingTwenty-two" data-parent="#accordion">
                                <div class="card-body">
                                  <p>Short answer: yes. 10% of the total WSUMART supply is distributed among NFT holders.  In order to participate, you have to own NFTs with a 
                                  price — meaning that you should have bought them on any platform that records data on-chain (on a marketplace, in a game pre-sale, etc). </p>
                                    <p>Airdrop is conducted in 3 stages: </p>
                                    <p>1) 15/08/2021--existing WSUMART users</p>
                                    <p>Active users received 2% of the total WSUMART supply according to the Liquidity Mining principle: based on the previous volume 
                                    on WSUMART marketplace. </p>
                                    <p>2) by Monday 20/09/2021 — documented NFT holders/buyers </p>
                                    <p>In this stage, 4% is distributed amoung BNB addresses of all NFTs with documented sales on Dune Analytics.</p>
                                    <p>3) To be announced — remaining NFT owners</p>
                                    <p>As we believe that Dune Analytics might not hold all the data, we introduced the third stage with another 4% reserved for 
                                    corrections. If you haven't found yourself on the list, but you know you have significant NFT holdings — please reach out to
                                    us via! The distribution dates will be announced later.</p>
                                </div>
                            </div>
                          </div>
                          <!--<div class="card">-->
                          <!--  <div class="card-header" id="headingTwenty-three">-->
                          <!--    <h5 class="mb-0">-->
                          <!--      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty-three" aria-expanded="false" aria-controls="collapseTwenty-three">-->
                          <!--        <i class="far fa-chevron-down"></i> &nbsp;I own NFTs, but I haven't received WSUMART in the airdrop. -->
                          <!--      </button>-->
                          <!--    </h5>-->
                          <!--  </div>-->
                          <!--  <div id="collapseTwenty-three" class="collapse" aria-labelledby="headingTwenty-three" data-parent="#accordion">-->
                          <!--      <div class="card-body">-->
                          <!--        <p>If you haven't received your WSUMART in the first waves of the airdrop, but you know you have significant NFT holdings that you purchased on a platform that records data on-chain (check eligibility criteria above!),</p> -->
                          <!--          <p>If you comply with the requirements, you will receive WSUMART in the third wave of the aidrop. The exact dates are to be announced later. </p>-->
                          <!--      </div>-->
                          <!--  </div>-->
                          <!--</div>-->
                          <div class="card">
                            <div class="card-header" id="headingTwenty-four">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty-four" aria-expanded="false" aria-controls="collapseTwenty-four">
                                  <i class="far fa-chevron-down"></i> &nbsp;What rights do I have as a WSUMART holder?
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwenty-four" class="collapse" aria-labelledby="headingTwenty-four" data-parent="#accordion">
                                <div class="card-body">
                                  <p>The key part of token holder rights is to have influence over the platform development. If community wants it — everything
                                  is possible. As WSUMART holder, you are entitled to: </p>
                                  <p>1) Submit on proposals about:</p>
                                  <ul>
                                      <li>WSUMART’s trading fees</li>
                                      <li>new WSUMART features to be developed or implemented by our team</li>
                                      <li>the use of WSUMART to further decentralize the governance and development of WSUMART</li>
                                  </ul>
                                  <p>2) Vote on proposals </p>
                                  <p>3) Moderate creators on WSUMART</p>
                                  <p>4) Curate featured artworks </p>
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


<?php 
include "footer.php";
?>