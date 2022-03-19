Moralis.initialize("z6fV6y9ovhMNWcw9NlMbbAhAm55sXlAG9cF2n7eV"); // Application id from moralis.io
Moralis.serverURL = "https://r7s8pthvpnws.usemoralis.com:2053/server"; //Server url from moralis.io


var nft_contract_address  = "";
  


/*
Available deployed contracts
Ethereum Rinkeby 0x90Ff7fc5420855BAAf09CA97699944107a6d1180
Polygon Mumbai 0x351bbee7C6E9268A1BF741B098448477E08A0a53
BSC Testnet 0x3353e62F16109d7313285aE77E629B7BF6CC287D
Ropsten  :  0x37e3b8C80724C68C1a161c61067f33BBB85b78e2
*/

const web3 = new Web3(window.ethereum);

//frontend logic
async function upload_my(){
	
	var network = $("#network").val();
	if(network == "ETH"){
 nft_contract_address = "0x37e3b8C80724C68C1a161c61067f33BBB85b78e2";//NFT Minting Contract Use This One "Batteries Included", code of this contract is in the github repository under contract_base for your reference.
}
else{
	//bsc contract
	//alert(network);
 nft_contract_address = "0x3353e62F16109d7313285aE77E629B7BF6CC287D";//NFT Minting Contract Use This One "Batteries Included", code of this contract is in the github repository under contract_base for your reference.
	
} 
  const fileInput = document.getElementById("customFile");
  const data = fileInput.files[0];
  if( fileInput.files.length == 0 ){
    alert("Please select an Image or a Video file.");
	return false;
}
if( document.getElementById("mint_address").value == "" ){
    alert("Please connect metamask wallet to continue.");
	return false;
}
  const imageFile = new Moralis.File(data.name, data);
  //document.getElementById('upload').setAttribute("disabled", null);
  //document.getElementById('file').setAttribute("disabled", null);
  //document.getElementById('name').setAttribute("disabled", null);
  //document.getElementById('description').setAttribute("disabled", null);
  await imageFile.saveIPFS();
  const imageURI = imageFile.ipfs();
  const metadata = {
    "name":document.getElementById("name").value,
    "description":document.getElementById("description").value,
    "image":imageURI
  }
  const metadataFile = new Moralis.File("metadata.json", {base64 : btoa(JSON.stringify(metadata))});
  await metadataFile.saveIPFS();
  const metadataURI = metadataFile.ipfs();
  const txt = await mintToken(metadataURI).then(notify)
}


function logout(){
	
	window.location.reload();
}

async function login(){
	
	
 
  Moralis.Web3.authenticate().then(function (user) {
	  
	    console.log("hhhhhhhhhhhhhhhhhhhhhh",user);
		var address = user.get('ethAddress');
		document.getElementById('mint_address').value = address;
		var html = "<button class='theme-button1 btn btn-grad btn-sm' id='lout' onclick='logout();'><i class='ri-wallet-3-line'></i>"+address+"(Logout)</button>";
        document.getElementById("bdiv").innerHTML = html;
		
		/*
		amount: 1
		     contract_type: "ERC1155"
name: "Rarible"
symbol: "RARI"
token_address: "0x6a94ac200342ac823f909f142a65232e2f052183"
token_id: "3131071769850032022329638819306898299507957372276181497801821260522614423575"
token_uri: "https://ipfs.moralis.io:2053/ipfs/QmfKvDbxTie8TxQyptrtfbxzqE7DaGmEorMFud472s6gq8"
		
		
		*/
		
		var network = $("#network").val();
		
	if(network == "ETH"){
	var mychain = { chain: 'ropsten' }	;
}
else{
	var mychain = { chain: 'Binance Smart Chain Testnet' }	;
	
}
		
		
  /*Moralis.Web3.getNFTs(mychain).then(function (nfts){
	 
	 
	 var itemHTML = "";
      for (x=0 ;x<nfts.length; x++) {
          
           var symbol = nfts[x].symbol;
		   var contract_type = nfts[x].contract_type;
		   var name = nfts[x].name;
		   var token_address = nfts[x].token_address;
		   var token_id  =  nfts[x].token_id;
		   var token_uri = nfts[x].token_uri;
		   
		   $.getJSON(token_uri, function(data) {
                console.log("sssssssss",symbol);
				var imageUri = data.image;
				
				var imgArr = imageUri.split( '//' );
				console.log("AAAAAAAAAAAAA",imgArr);
				
				var ipfsImgUri = imgArr[1];
				
				var finalImage ="";
				
				if (ipfsImgUri.indexOf("moralis") > -1){
					
					//break it again 
					
					ipfsImgArr = ipfsImgUri.split('/');
					finalImage = "https://ipfs.io/"+"ipfs/"+ipfsImgArr[2];
				}
               else{ 
			   finalImage = "https://ipfs.io/"+ipfsImgUri;
			   }

               
                  itemHTML =   `<div class="swiper-slide1" style="margin-left:1%">
			                                            <div class="card__item eight">
			                                                <div class="card_body space-y-10">
			                                                    <!-- =============== -->
			                                                    <div class="card_head space-y-10">
			                                                        <span class="txt_xs color_text
			                                                            numbering"></span>
			                                                        <a href="Item-details.html">
			                                                            <img class="product__img"
			                                                                src=${finalImage}
			                                                                alt="">
			                                                        </a>
			                                                        <div>
			                                                            <p class="txt_xs level"> </p>
			                                                        </div>
			                                                        <div class="progress">
			                                                            <div class="progress-bar"
			                                                                role="progressbar" style="width:
			                                                                70%" aria-valuenow="70"
			                                                                aria-valuemin="0"
			                                                                aria-valuemax="100"></div>
			                                                        </div>
			                                                    </div>
			                                                    <!-- =============== -->
			                                                    <div class="card_footer
			                                                        justify-content-between">
			                                                        <div class="space-y-3">
			                                                            <div class="space-x-5 d-flex">
			                                                                <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
			                                                                <span class="color_brand
			                                                                    txt_xs">${symbol}</span>
			                                                            </div>
			                                                            <a href="Profile.html">
			                                                                <p class="product__name txt_sm">${name}</p>
			                                                            </a>
			                                                        </div>
			                                                        <div class="price__content space-x-5">
			                                                            <img class="eth__img"
			                                                                src="assets/img/icons/ETH.svg"
			                                                                alt="eth">
			                                                            <p class="price txt_sm _bold">			                                                                ETH</p>
			                                                        </div>
			                                                    </div>
			                                                </div>
			                                            </div>
			                                        </div>`

  //console.log("jjjjjjjjjjjjjjjjjjjjjjjjjjj",itemHTML);
	   $("#mynfts").append(itemHTML);
                         			   
           });
		   
		   
           

      }
       
  });*/
		
  });
}

async function upload_my(){
	
	
	
	var network = $("#network").val();
	if(network == "ETH"){
 nft_contract_address = "0x37e3b8C80724C68C1a161c61067f33BBB85b78e2";//NFT Minting Contract Use This One "Batteries Included", code of this contract is in the github repository under contract_base for your reference.
}
else{
	//bsc contract
	//alert(network);
 nft_contract_address = "0x3353e62F16109d7313285aE77E629B7BF6CC287D";//NFT Minting Contract Use This One "Batteries Included", code of this contract is in the github repository under contract_base for your reference.
	
}
  const fileInput = document.getElementById("customFile");

  
  if( fileInput.files.length == 0 ){
    alert("Please select an Image or a Video file.");
	return false;
}
if( document.getElementById("mint_address").value == "" ){
    alert("Please connect metamask wallet to continue.");
	return false;
}
  const data = fileInput.files[0];
  const imageFile = new Moralis.File(data.name, data);
  //document.getElementById('upload').setAttribute("disabled", null);
  //document.getElementById('file').setAttribute("disabled", null);
  //document.getElementById('name').setAttribute("disabled", null);
  //document.getElementById('description').setAttribute("disabled", null);
  await imageFile.saveIPFS();
  const imageURI = imageFile.ipfs();
  const metadata = {
    "name":document.getElementById("item-name").value,
    "description":document.getElementById("description").value,
    "image":imageURI
  }
  const metadataFile = new Moralis.File("metadata.json", {base64 : btoa(JSON.stringify(metadata))});
  await metadataFile.saveIPFS();
  const metadataURI = metadataFile.ipfs();
  const txt = await mintToken(metadataURI).then(notify)
}

async function mintToken(_uri){
	
  const encodedFunction = web3.eth.abi.encodeFunctionCall({
    name: "mintToken",
    type: "function",
    inputs: [{
      type: 'string',
      name: 'tokenURI'
      }]
  }, [_uri]);

  const transactionParameters = {
	  
	
    to: nft_contract_address,
    from: ethereum.selectedAddress,
    data: encodedFunction
  };
  const txt = await ethereum.request({
    method: 'eth_sendTransaction',
    params: [transactionParameters]
  });
  return txt
}

async function notify(_txt){
	document.getElementById("upload").style.display = 'none' 
	document.getElementById("sub1").style.display = 'block' 
  document.getElementById("resultSpace").innerHTML =  
  `<input disabled = "true" id="result" type="text" class="form-control" placeholder="Description" aria-label="URL" aria-describedby="basic-addon1" value="Your NFT was minted in transaction ${_txt}"> Please press create button to list this art on marketplace`;
} 