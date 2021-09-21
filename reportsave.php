<?php 
include "config.php";

$NFTid=$_POST['Id'];
$message=$_POST['message'];
$address=$_POST['address'];

            $sql5="SELECT * FROM `NFT_user` WHERE Useraddress='{$address}'";
            $data2 = mysqli_query($link,$sql5);
            $res=$data2->fetch_assoc();

            $Useremail=$res['Useremail'];
            $Usertwitname=$res['Usertwitname'];
            $Userportfolio=$res['Userportfolio'];
          
           if ($Useremail==''){
               echo "not Okay"; 
           }
           else{
               
                    $myquery="SELECT * FROM NFT_info WHERE NFT_id ='$NFTid'";
                    $result1 = $link->query($myquery);
                    $res=$result1->fetch_assoc();
                    $Nftauction= $res['NFT_auction'];
                    $subject = "Nft Reported";
$query="INSERT INTO  `NFT_report` (`NFT_id`,`Email`,`Subject`,`Message`,`Address`) VALUES ('$NFTid','$Useremail','$subject','$message','$address')";
$result=mysqli_query($link,$query);
echo json_encode($result);

$to="divya.makhija22@gmail.com";


if($Nftauction==0){
$txt=  '<html>
        <body>
        <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" bgcolor="#F5F6FB">
            <tbody>
                <tr>
                    <td align="center" valign="top">
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="550" class="m_45504504110266303W100P" style="margin: 0 auto;">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top">
                                        <table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                 
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#ffffff" height="30" style="line-height: 30px; font-size: 30px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="color: #c7ced9; font-family: "Rubik", sans-serif; font-size: 14px; line-height: 150%; font-weight: 400;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" align="center" style="color: #50579e; font-family: "Rubik", sans-serif; font-size: 20px; line-height: 150%; font-weight: 400; text-align: center;">
                                                                        Welcome to
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <table cellpadding="0" cellspacing="0" border="0" class="m_45504504110266303w95">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" height="5" style="line-height: 5px; font-size: 5px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="480" align="center" style="color: #50579e; font-family: "Rubik", sans-serif; font-size: 35px; line-height: 150%; font-weight: 400;">
                                                                        <a href="http://wsum.art/index.php" target="_blank">
                                                                            <img src="http://wsum.art/assets/img/artlogo.png"
                                                                                width="171"
                                                                                height="40"
                                                                                style="width: 171px; height: 40px; max-width: 237px; font-family: "Rubik", sans-serif; font-size: 24px; line-height: 40px;"
                                                                                alt="WSUM NFT"
                                                                                border="0"
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" height="10" style="line-height: 10px; font-size: 10px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="480" align="center" style="color: #50579e; font-family: "Rubik", sans-serif; font-size: 35px; line-height: 150%; font-weight: 400;">
                                                                       Nft Reported
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#ffffff">
                                            <tbody>
                                                <tr> 
                                                    <td align="left" valign="top" width="30">&nbsp;</td>
                                                    <td align="left" valign="top" width="233">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" class="m_45504504110266303h10" height="25" style="line-height: 25px; font-size: 25px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" valign="top">
                                                                        <a href="" target="_blank" data-saferedirecturl="">
                                                                            <img src="http://wsum.art/assets/img/artlogo.png" border="0" height="26" width="175" style="display: block;" class="m_45504504110266303w80P CToWUd" />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" class="m_45504504110266303h10" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="m_45504504110266303fvwa"
                                                                        align="left"
                                                                        valign="top"
                                                                        style="color: #1c1e29; font-family: "Rubik", sans-serif; font-size: 16px; line-height: 150%; font-weight: 400; text-align: left;"
                                                                    >
                                                                        '.$message.'
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" class="m_45504504110266303h10" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" valign="top">
                                                                        <table border="0" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" style="border-radius: 22px; padding:9px 15px" bgcolor="#50579e">
                                                                                         <a href="http://wsum.art//buy_description.php?id='.$NFTid.'" style="font-size:14px; color:white; text-decoration:none">
                                                                                            CLICK HERE
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td align="left" valign="top" width="277">
                                                        <a href="" target="_blank" data-saferedirecturl="">
                                                            <img src="http://wsum.art/assets/img/newWsum5.jpg" border="0" height="263" width="277" style="display: block;"
                                                                class="m_45504504110266303w100P m_45504504110266303height CToWUd"
                                                            />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" class="m_45504504110266303w100P" bgcolor="#4e9d66">
                                                        <table cellpadding="0" cellspacing="0" border="0" class="m_45504504110266303w100P" width="85%">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center">
                                                                        <table cellpadding="0" cellspacing="0" border="0" class="m_45504504110266303w95">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" align="center" style="color: #ffffff; font-family: "Rubik", sans-serif; font-size: 24px; line-height: 150%; font-weight: 400;">
                                                                                        Get More From WSUM NFT
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" height="10" style="line-height: 10px; font-size: 10px;">&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" align="center"
                                                                                        style="color: #f0fff4; font-family: "Rubik", sans-serif; font-size: 16px; line-height: 150%; font-weight: 400;"
                                                                                    >
                                                                                        Fully protect yourself from writing mistakes<br />
                                                                                        by activating all WSUM NFT features.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="border-bottom: #d6d6d6 solid 1px;" width="100%">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#F5F6FB">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F5F6FB" height="30" style="line-height: 30px; font-size: 30px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center" style="color: #999999; font-family: "Rubik", sans-serif; font-size: 14px; line-height: 120%; font-weight: 400;">
                                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" width="64" style="line-height: 100%;">
                                                                                        <a href="https://www.facebook.com/wrappedsum" style="text-decoration: none;" target="_blank" data-saferedirecturl="">
                                                                                            <img src="http://wsum.art/assets/img/unnamed.png" border="0" width="12" height="24" style="display: block;" alt="f" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                    <td align="left" width="64" style="line-height: 100%;">
                                                                                        <a href="https://www.instagram.com/wsumuk/" style="text-decoration: none;" target="_blank" data-saferedirecturl="">
                                                                                            <img src="http://wsum.art/assets/img/insta.png" border="0" width="26" height="25" style="display: block;" alt="i" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                    <td align="left" width="64" style="line-height: 100%;">
                                                                                        <a
                                                                                            href="https://www.linkedin.com/showcase/wrappedsumcoin"
                                                                                            style="text-decoration: none;"
                                                                                            target="_blank"
                                                                                            data-saferedirecturl=""
                                                                                        >
                                                                                            <img src="http://wsum.art/assets/img/linkdin.png" border="0" width="19" height="18" style="display: block;" alt="in" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                    <td align="left" width="32" style="line-height: 100%;">
                                                                                        <a href="https://twitter.com/wsumcoin" style="text-decoration: none;" target="_blank" data-saferedirecturl="">
                                                                                            <img src="http://wsum.art/assets/img/twitter.png" border="0" width="23" height="20" style="display: block;" alt="t" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F5F6FB" height="10" style="line-height: 10px; font-size: 30px;">&nbsp;</td>
                                                                </tr>
                                                                <tr></tr>
                                                                <tr>
                                                                    <td bgcolor="#F5F6FB" height="10" style="line-height: 10px; font-size: 30px;">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                <tr></tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" align="center" style="color: #999999; font-family: "Rubik", sans-serif; font-size: 14px; line-height: 120%; font-weight: 400;">
                                                        Learn more about WSUM NFT, interact with the WSUM NFT team, engage in community discussions, and have your say in shaping the future of decentralized finance.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" align="center" valign="top" style="font-family: "Rubik", sans-serif; font-weight: 400; font-size: 14px; line-height: 20px;">
                                                        <a href="#" style="text-decoration: none; color: #4e9d66;" target="_blank">
                                                            © 2021 WSUM NFT. All Rights Reserved.
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';
}  

if($Nftauction>0){
    $txt=  '<html>
        <body>
        <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" bgcolor="#F5F6FB">
            <tbody>
                <tr>
                    <td align="center" valign="top">
                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="550" class="m_45504504110266303W100P" style="margin: 0 auto;">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top">
                                        <table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                 
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#ffffff" height="30" style="line-height: 30px; font-size: 30px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="color: #c7ced9; font-family: "Rubik", sans-serif; font-size: 14px; line-height: 150%; font-weight: 400;">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" align="center" style="color: #50579e; font-family: "Rubik", sans-serif; font-size: 20px; line-height: 150%; font-weight: 400; text-align: center;">
                                                                        Welcome to
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <table cellpadding="0" cellspacing="0" border="0" class="m_45504504110266303w95">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" height="5" style="line-height: 5px; font-size: 5px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="480" align="center" style="color: #50579e; font-family: "Rubik", sans-serif; font-size: 35px; line-height: 150%; font-weight: 400;">
                                                                        <a href="http://wsum.art/index.php" target="_blank">
                                                                            <img 
                                                                                src="http://wsum.art/assets/img/artlogo.png"
                                                                                width="171"
                                                                                height="40"
                                                                                style="width: 171px; height: 40px; max-width: 237px; font-family: "Rubik", sans-serif; font-size: 24px; line-height: 40px;"
                                                                                alt="WSUM NFT"
                                                                                border="0"
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" height="10" style="line-height: 10px; font-size: 10px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="480" align="center" style="color: #50579e; font-family: "Rubik", sans-serif; font-size: 35px; line-height: 150%; font-weight: 400;">
                                                                        NFT REPORTED
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#ffffff">
                                            <tbody>
                                                <tr> 
                                                    <td align="left" valign="top" width="30">&nbsp;</td>
                                                    <td align="left" valign="top" width="233">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" class="m_45504504110266303h10" height="25" style="line-height: 25px; font-size: 25px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" valign="top">
                                                                        <a href="" target="_blank" data-saferedirecturl="">
                                                                            <img src="http://wsum.art/assets/img/artlogo.png" border="0" height="26" width="175" style="display: block;" class="m_45504504110266303w80P CToWUd" />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" class="m_45504504110266303h10" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="m_45504504110266303fvwa"
                                                                        align="left"
                                                                        valign="top"
                                                                        style="color: #1c1e29; font-family: "Rubik", sans-serif; font-size: 16px; line-height: 150%; font-weight: 400; text-align: left;"
                                                                    >
                                                                      '.$message.'
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff" class="m_45504504110266303h10" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" valign="top">
                                                                        <table border="0" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" style="border-radius: 22px; padding:9px 20px" bgcolor="#50579e">
                                                                                         <a href ="http://wsum.art/bid_description.php?id='.$NFTid.'"  style="font-size:14px; color:white; text-decoration:none">
                                                                                            CLICK HERE
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td align="left" valign="top" width="277">
                                                        <a href="" target="_blank" data-saferedirecturl="">
                                                            <img src="http://wsum.art/assets/img/newWsum5.jpg" border="0" height="263" width="277" style="display: block;"
                                                                class="m_45504504110266303w100P m_45504504110266303height CToWUd"
                                                            />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" class="m_45504504110266303w100P" bgcolor="#4e9d66">
                                                        <table cellpadding="0" cellspacing="0" border="0" class="m_45504504110266303w100P" width="85%">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center">
                                                                        <table cellpadding="0" cellspacing="0" border="0" class="m_45504504110266303w95">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" align="center" style="color: #ffffff; font-family: "Rubik", sans-serif; font-size: 24px; line-height: 150%; font-weight: 400;">
                                                                                        Get More From WSUM NFT
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" height="10" style="line-height: 10px; font-size: 10px;">&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" align="center"
                                                                                        style="color: #f0fff4; font-family: "Rubik", sans-serif; font-size: 16px; line-height: 150%; font-weight: 400;"
                                                                                    >
                                                                                        Fully protect yourself from writing mistakes<br />
                                                                                        by activating all WSUM NFT features.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="#4e9d66" height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="40" style="line-height: 40px; font-size: 40px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="border-bottom: #d6d6d6 solid 1px;" width="100%">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#F5F6FB">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F5F6FB" height="30" style="line-height: 30px; font-size: 30px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center" style="color: #999999; font-family: "Rubik", sans-serif; font-size: 14px; line-height: 120%; font-weight: 400;">
                                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" width="64" style="line-height: 100%;">
                                                                                        <a href="https://www.facebook.com/wrappedsum" style="text-decoration: none;" target="_blank" data-saferedirecturl="">
                                                                                            <img src="http://wsum.art/assets/img/unnamed.png" border="0" width="12" height="24" style="display: block;" alt="f" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                    <td align="left" width="64" style="line-height: 100%;">
                                                                                        <a href="https://www.instagram.com/wsumuk/" style="text-decoration: none;" target="_blank" data-saferedirecturl="">
                                                                                            <img src="http://wsum.art/assets/img/insta.png" border="0" width="26" height="25" style="display: block;" alt="i" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                    <td align="left" width="64" style="line-height: 100%;">
                                                                                        <a
                                                                                            href="https://www.linkedin.com/showcase/wrappedsumcoin"
                                                                                            style="text-decoration: none;"
                                                                                            target="_blank"
                                                                                            data-saferedirecturl=""
                                                                                        >
                                                                                            <img src="http://wsum.art/assets/img/linkdin.png" border="0" width="19" height="18" style="display: block;" alt="in" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                    <td align="left" width="32" style="line-height: 100%;">
                                                                                        <a href="https://twitter.com/wsumcoin" style="text-decoration: none;" target="_blank" data-saferedirecturl="">
                                                                                            <img src="http://wsum.art/assets/img/twitter.png" border="0" width="23" height="20" style="display: block;" alt="t" class="CToWUd" />
                                                                                        </a>
                                                                                    </td>
                                                                                    <td width="20" class="m_45504504110266303hide"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F5F6FB" height="10" style="line-height: 10px; font-size: 30px;">&nbsp;</td>
                                                                </tr>
                                                                <tr></tr>
                                                                <tr>
                                                                    <td bgcolor="#F5F6FB" height="10" style="line-height: 10px; font-size: 30px;">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                <tr></tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" align="center" style="color: #999999; font-family: "Rubik", sans-serif; font-size: 14px; line-height: 120%; font-weight: 400;">
                                                        Learn more about WSUM NFT, interact with the WSUM NFT team, engage in community discussions, and have your say in shaping the future of decentralized finance.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" align="center" valign="top" style="font-family: "Rubik", sans-serif; font-weight: 400; font-size: 14px; line-height: 20px;">
                                                        <a href="#" style="text-decoration: none; color: #4e9d66;" target="_blank">
                                                            © 2021 WSUM NFT. All Rights Reserved.
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#F5F6FB" height="20" style="line-height: 20px; font-size: 20px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8 \r\n";
$headers .= "From: $Useremail" . "\r\n" ;
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";
mail($to,$subject,$txt,$headers);

             
}
  




?>