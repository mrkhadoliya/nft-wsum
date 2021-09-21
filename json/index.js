var fs = require('fs');
const mysql = require('mysql');
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'ramlogic_princevijay',
  password: 'princevijay@123',
  database: 'ramlogic_nftwsum'
});
connection.connect((err) => {
  if (err) throw err;
  console.log('Connected!');
});
var qq=`SELECT CONCAT("[", GROUP_CONCAT(CONCAT("{id:'",ID,"'"),CONCAT(",NFT_name:'",NFT_name,"'"),CONCAT(",NFT_likes:'",NFT_likes,"'"),CONCAT(",NFT_price:'",NFT_price,"'"),CONCAT(",NFT_payment:'",NFT_payment,"'"), CONCAT(",NFT_royalties:'",NFT_royalties,"'"), CONCAT(",NFT_treeplant:'",NFT_treeplant,"'"), CONCAT(",NFT_resell:'",NFT_resell,"'"),CONCAT(",NFT_auction:'",NFT_auction,"'"), CONCAT(",NFT_highest_bid:'",NFT_highest_bid,"'"),CONCAT(",NFT_highest_bidder:'",NFT_highest_bidder,"'"),CONCAT(",NFT_owner:'",NFT_owner,"'"),CONCAT(",Nft_owner_image:'",Nft_owner_image,"'"), CONCAT(",NFT_owner_address:'",NFT_owner_address,"'"), CONCAT(",NFT_creator:'",NFT_creator,"'"), CONCAT(",Nft_creator_image:'",Nft_creator_image,"'}"),CONCAT(",NFT_creator_add:'",NFT_creator_add,"'"), CONCAT(",NFT_discription:'",NFT_discription,"'"), CONCAT(",NFT_id:'",NFT_id,"'"), CONCAT(",NFT_image:'",NFT_image,"'"), CONCAT(",NFT_type:'",NFT_type,"'"), CONCAT(",NFT_time:'",NFT_time,"'"), CONCAT(",NFT_advancesize:'",NFT_advancesize,"'"), CONCAT(",NFT_advanceproperties:'",NFT_advanceproperties,"'"), CONCAT(",NFT_advancedesc:'",NFT_advancedesc,"'"), CONCAT(",User_name:'",User_name,"'"), CONCAT(",User_address:'",User_address,"'"), CONCAT(",User_bio:'",User_bio,"'"), CONCAT(",User_address:'",User_address,"'"), CONCAT(",User_bio:'",User_bio,"'"), CONCAT(",User_image:'",User_image,"'}")  )
    ,"]") as json FROM NFT_info` ;
connection.query(qq, (err,rows) => {
  if(err) throw err;
  console.log(rows);
  var jsonString=JSON.stringify(rows);
fs.writeFile('./data.json', jsonString, err => {
  if (err) {
    console.log('Error writing file', err)
  } else {
    console.log('Successfully wrote file')
  }
});
  
});