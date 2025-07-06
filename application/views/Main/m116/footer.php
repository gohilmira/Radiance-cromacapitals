 <!-- Footer Section Starts Here -->
<style>

p.email_detail i {
    margin-right: 10px;
    font-size: 20px;
    color: #d7a31f;
}

p.email_detail {
    margin: 0;
}

</style>



 <footer class="footer-section section-bg">
        <div class="footer-top padding-top pb-5 border-bottom border--white">
            <div class="container">
                <div class="row gy-5 justify-content-md-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title"><img src="<?= $this->conn->company_info('logo');?>" class="" alt="<?= $this->conn->company_info('company_name');?>" style="width:<?php echo $this->conn->company_info('logo_width');?>;height:<?php echo $this->conn->company_info('logo_height');?>"></h3>
                            <h3 class="widget-title">About Company</h3>
                            <p>Aliquam orci a nullam tempor sapien graonec enim ipsum porta justo velna an auctor undo congue magna laoreet augue sapien</p>
                           <p class="email_detail"><i class="fa fa-envelope" aria-hidden="true"></i><?= $this->conn->company_info('company_email');?></p>
                          <ul class="social-links">
                                <li><a class="facebook-bg" href="#0"><i class="lab la-facebook-f"></i></a></li>
                                <li><a class="twitter-bg" href="#0"><i class="lab la-twitter"></i></a></li>
                                <li><a class="instagram-bg" href="#0"><i class="lab la-instagram"></i></a></li>
                                <li><a class="pinterest-bg" href="#0"><i class="lab la-pinterest"></i></a></li>
                            </ul>
                        </div>
                       
                    </div>
                   <!-- <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Useful Links</h3>
                            <ul class="footer-links">
                                <li><a href="<?= base_url();?>index">Home</a></li>
                                <li><a href="<?= base_url();?>index#about">About</a></li>
                                <li><a href="<?= base_url();?>why_us">Why Us </a></li>
                            </ul>
                        </div>
                    </div>-->
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Company</h3>
                            <ul class="footer-links">
							
							<li><a href="<?= base_url();?>contact">Contact Us</a></li>
							 
                                   <li><a href="<?= base_url();?>login">Login</a></li>
                                <li><a href="<?= base_url();?>register">Register </a></li> 
						
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright text-center py-3">
                    Copyright &copy; 2022 <?= $this->conn->company_info('company_name');?> All Rights Reserved.
                </p>
            </div>
        </div>
    </footer> 
    
    <!-- <input id="ttt" type="text" value="23">  -->

    <a href="#0" class="scrollToTop"><i class="las la-rocket"></i></a>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= $panel_url;?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= $panel_url;?>assets/js/bootstrap.min.js"></script>
    <script src="<?= $panel_url;?>assets/js/slick.min.js"></script>
    <script src="<?= $panel_url;?>assets/js/nice-select.js"></script>
    <script src="<?= $panel_url;?>assets/js/odometer.min.js"></script>
    <script src="<?= $panel_url;?>assets/js/viewport.jquery.js"></script>
    <script src="<?= $panel_url;?>assets/js/main.js"></script>
               
	<script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/web3modal"></script>
	<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
	<script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>
	<script src="https://cdn.ethers.io/lib/ethers-5.1.umd.min.js" type="text/javascript"></script>
	 
	
	<script>



    $('.check_sponsor_exist').change(function (e) { 
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();        
        $.ajax({
          type: "post",
          url: "<?= base_url('register/check_sponsor_exist');?>",
          data: {u_sponsor:sponsor},          
          success: function (response) {            
             var res = JSON.parse(response);          
            if(res.error==true){
              $('#'+res_area).html(res.msg).css('color','red');              
            }else{
              $('#'+res_area).html(res.msg).css('color','green');              
            }
          }
        });
    });

    $('.check_username_exist').change(function (e) { 
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var username = $(this).val();  
		
        $.ajax({
          type: "post",
          url: "<?= base_url('register/check_username_exist');?>",
          data: {username:username},          
          success: function (response) {  
            //alert(response);
            var res = JSON.parse(response);          
            if(res.error==true){
              $('#'+res_area).html(res.msg).css('color','red');              
            }else{
              $('#'+res_area).html(res.msg).css('color','green');              
            }
          }
        });
    });

    $('.check_mobile_valid').change(function (e) {
         
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var mobile = $(this).val();        
        $.ajax({
          type: "post",
          url: "<?= base_url('register/check_mobile_valid');?>",
          data: {mobile:mobile},          
          success: function (response) {  
            //alert(response);
            var res = JSON.parse(response);          
            if(res.error==true){
              $('#'+res_area).html(res.msg).css('color','red');              
            }else{
              $('#'+res_area).html(res.msg).css('color','green');              
            }
          }
        });
    });

    $('.check_email_valid').change(function (e) {
         
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var email = $(this).val();        
        $.ajax({
          type: "post",
          url: "<?= base_url('register/check_email_valid');?>",
          data: {email:email},          
          success: function (response) {  
            //alert(response);
            var res = JSON.parse(response);          
            if(res.error==true){
              $('#'+res_area).html(res.msg).css('color','red');              
            }else{
              $('#'+res_area).html(res.msg).css('color','green');              
            }
          }
        });
    });

    $('.country').change(function (e) { 
       var rr = $(this).find(':selected').attr('data-phonecode');       
       var mobile_code_sec =  $(this).attr('data-response');      
       $('.'+mobile_code_sec).html(rr);
    });

    $('.no_space').keyup(function (e) {         
         var TCode = $(this).val();
        var res_area = $(this).attr('data-response');
	    if( /[^a-zA-Z0-9@!#$%&?|_\-\/]/.test( TCode ) ) {
			$(this).val('');
			
			$('#'+res_area).html('Space Not Allowed.').css('color','red');
			return false;
		}                
    });


    function handleForm(event) { event.preventDefault(); } 
// form.addEventListener('submit', handleForm);
const contractAddress1 = "0xEa1B309c195dbE0cf70B4740b1cAA204D73f663C";

const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const EvmChains = window.evmChains;
const Fortmatic = window.Fortmatic;
const ethers = window.ethers
const admin ="0x6c3b922e1292dab4d848e9cdcc5715cf3cb0de4a";
// Web3modal instance
let web3Modal

// Chosen wallet provider given by the dialog window
let provider;

let chainId;

let calculateAll

// Address of the selected account
let selectedAccount;

let userAddress;

let userBalance;
/**
 * Setup the orchestra
 */
function init() {

  console.log("Initializing example");
  console.log("WalletConnectProvider is", WalletConnectProvider);
  console.log("Fortmatic is", Fortmatic);

  // Tell Web3modal what providers we have available.
  // Built-in web browser provider (only one can exist as a time)
  // like MetaMask, Brave or Opera is added automatically by Web3modal
  const providerOptions = {
    walletconnect: {
      package: WalletConnectProvider,
      display: {
        name: "Wallet Connect"
      },
      options: {
        // Mikko's test key - don't copy as your mileage may vary
        infuraId: "5f40cd78a0004e3dbe19bd078e6d520a",
      }
    },

    fortmatic: {
      package: Fortmatic,
      options: {
        // Mikko's TESTNET api key
        key: "pk_test_391E26A3B43A3350"
      }
    }
  };

  web3Modal = new Web3Modal({
    cacheProvider: false, // optional
    providerOptions, // required
  });

}


/**
 * Kick in the UI action after Web3modal dialog has chosen a provider
 */
async function fetchAccountData() {

  // Get a Web3 instance for the wallet
  const web3 = new Web3(provider);

  console.log("provider: ",provider);
  window.localStorage.provider = new ethers.providers.Web3Provider(provider);
  console.log("Web3 instance is", web3);
  // Get connected chain id from Ethereum node
  chainId = await web3.eth.getChainId();
  console.log(chainId);
	 
  // Load chain information over an HTTP API
  const chainData = await EvmChains.getChain(chainId);
  // document.querySelector("#network-name").textContent = chainData.name;

  // Get list of accounts of the connected wallet
  const accounts = await web3.eth.getAccounts();

  // MetaMask does not give you all accounts, only the selected account
  console.log("Got accounts", accounts);
  selectedAccount = accounts[0];

  // document.querySelector("#selected-account").textContent = selectedAccount;

  // Get a handl
  // const template = document.querySelector("#template-balance");
  // const accountContainer = document.querySelector("#accounts");

  // Purge UI elements any previously loaded accounts
  // accountContainer.innerHTML = '';

  // Go through all accounts and get their ETH balance
  const rowResolvers = accounts.map(async (address) => {
    userAddress = address;
    const balance = await web3.eth.getBalance(address);
    // ethBalance is a BigNumber instance
    // https://github.com/indutny/bn.js/
    const ethBalance = web3.utils.fromWei(balance, "ether");
    const humanFriendlyBalance = parseFloat(ethBalance).toFixed(4);
    userBalance = humanFriendlyBalance;

    // Fill in the templated row and put in the document
    // const clone = template.content.cloneNode(true);
    // clone.querySelector(".address").textContent = address;
    // clone.querySelector(".balance").textContent = humanFriendlyBalance;
    // accountContainer.appendChild(clone);
  });
  calculateAll = setInterval(calculateToken, 1000);
  calculateAll;

  // Because rendering account does its own RPC commucation
  // with Ethereum node, we do not want to display any results
  // until data for all accounts is loaded
  await Promise.all(rowResolvers);

  // Display fully loaded UI for wallet data
  document.querySelector("#prepare").style.display = "none";
  document.querySelector("#connected").style.display = "block";
}



/**
 * Fetch account data for UI when
 * - User switches accounts in wallet
 * - User switches networks in wallet
 * - User connects wallet initially
 */
async function refreshAccountData() {

  // If any current data is displayed when
  // the user is switching acounts in the wallet
  // immediate hide this data
  document.querySelector("#connected").style.display = "none";
  document.querySelector("#prepare").style.display = "block";

  // Disable button while UI is loading.
  // fetchAccountData() will take a while as it communicates
  // with Ethereum node via JSON-RPC and loads chain data
  // over an API call.
  document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
  await fetchAccountData(provider);
  document.querySelector("#btn-connect").removeAttribute("disabled")
   	
  //alert(userAddress);	
  		
       $.ajax({
          type: "post",
          url: "<?= base_url('register/username_available');?>",
          data: {username:userAddress},          
          success: function (response) {  
            //alert(response);
            var res = JSON.parse(response);          
            if(res.error==true){
				var url_string = window.location.href;
				  var url = new URL(url_string);
				  var c = url.searchParams.get("ref");				  
				  if(c==null){
					$('#exampleModal').modal('show');
				  }              
            }else{
				 var co = res.code;
				 login(co);                          
            }
          }
        });	
	
	
	

}


/**
 * Connect wallet button pressed.
 */
async function onConnect() {

  console.log("Opening a dialog", web3Modal);
  try {
    provider = await web3Modal.connect();
  } catch(e) {
    console.log("Could not get a wallet connection", e);
    return;
  }

  // Subscribe to accounts change
  provider.on("accountsChanged", (accounts) => {
    fetchAccountData();
  });

  // Subscribe to chainId change
  provider.on("chainChanged", (chainId) => {
    fetchAccountData();
  });

  // Subscribe to networkId change
  provider.on("networkChanged", (networkId) => {
    fetchAccountData();
  });


  await refreshAccountData();

}

/**
 * Disconnect wallet button pressed.
 */
async function onDisconnect() {

  console.log("Killing the wallet connection", provider);

  // TODO: Which providers have close method?
  if(provider.close) {
    await provider.close();

    // If the cached provider is not cleared,
    // WalletConnect will default to the existing session
    // and does not allow to re-scan the QR code with a new wallet.
    // Depending on your use case you may want or want not his behavir.
    await web3Modal.clearCachedProvider();
    provider = null;
  }
  clearInterval(calculateAll);
  selectedAccount = null;

  // Set the UI back to the initial state
  document.querySelector("#prepare").style.display = "block";
  document.querySelector("#connected").style.display = "none";
  location ="<?= base_url();?>user/logout";
}


/**
 * Main entry point.
 */
window.addEventListener('load', async () => {
  init();
  document.querySelector("#btn-connect").addEventListener("click", onConnect);
  document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
});

// window.onload = function() {            
//     setInterval(calculateToken, 1000);
// }

console.log("ethers instance: ", ethers);
const AbiOfContract = [{"inputs":[],"name":"register","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"withdraw","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"payable","type":"function"},{"stateMutability":"payable","type":"receive"}];

 
function truncate(input) {
    if (input.length > 5) {
       return input.substring(0, 6) + '.......' + input.substring(input.length - 5);
    }
    return input;
 };


 function toFixed(x) {
  if (Math.abs(x) < 1.0) {
    var e = parseInt(x.toString().split('e-')[1]);
    if (e) {
        x *= Math.pow(10,e-1);
        x = '0.' + (new Array(e)).join('0') + x.toString().substring(2);
    }
  } else {
    var e = parseInt(x.toString().split('+')[1]);
    if (e > 20) {
        e -= 20;
        x /= Math.pow(10,e);
        x += (new Array(e+1)).join('0');
    }
  }
  return x;
}

async function calculateToken() {
	//alert();
  const provider1 = new ethers.providers.Web3Provider(provider);
  var requestOptions = {
    method: 'GET',
    redirect: 'follow'
  };

  let price = [];
  fetch("https://api.binance.com/api/v3/ticker/price?symbol=BNBUSDT", requestOptions)
    .then(response => response.text())
    .then(result => {price.push(JSON.parse(result).price); })
    .catch(error => console.log('error', error));

  // console.log(contractInstance);
  (async () => {
      // Modern dapp browsers...
      if (provider) {
          try {
            var address = userAddress;
            // console.log(price[0]);
           // document.getElementById("ref").innerHTML=("register?ref="+userAddress);
            var url_string = window.location.href;
            var url = new URL(url_string);
            var c = url.searchParams.get("ref");
            
            if(c==null){
              //document.getElementById("ref1").innerHTML="No Valid Joining ID Link - Default 'demo' will be used for joining";
            }else{
              //document.getElementById("ref1").innerHTML="Joining ID Link :" + c;
            }

       const bnbbalhex = await provider1.getBalance(userAddress);      
			  
          } catch (error) {
              console.log(error);
          }

      }
          // Non-dapp browsers...
      else {
          // document.getElementById("priceToken").value = "Connect to Wallet";
      }
  })();
}

$('.register').on('click',function(){
  //alert(userAddress);
  var r = confirm("Are you sure? you wants to Submit.");
  if (r==true)
  {
	  
	$('#register_res').html("Please wait....Do not refresh or reload page!");
    var uu =  $(this).attr('data-pkg');
    register_submit(uu);
  }
  //document.getElementById("ttt").value =
  //register($(this).attr('data-pkg'));


});

$('#cls_mdl').on('click',function(){
  var sp_id = $('input[name=\'sp_id\']').val();
  
  if(sp_id==''){
      $('#ref1').html("No Valid Joining ID Link - Default 'demo' will be used for joining");
  }else{
    $('#ref1').html("Joining ID Link :" + sp_id);//document.getElementById("ref1").innerHTML = "Joining ID Link :" + sp_id;
  }

  $('#exampleModal').modal('hide');
});

$('#sponsorbtn').on('click',function(){
  //alert(userAddress);
  url = "<?= base_url('index?ref=');?>";
  
  var sp_id = $('input[name=\'sp_id\']').val();
  //document.getElementById("ttt").value =
  //register($(this).attr('data-pkg'));
  if (sp_id) {
		url += encodeURIComponent(sp_id);
	}
  location = url;
});



async function register_submit(pkg){
  // var dd= document.getElementById("ttt").value;
  ///alert(fgfgf);
  var c = $('input[name=\'sp_id\']').val();
  //document.getElementById("ttt").value =
  //register($(this).attr('data-pkg'));  
 
  $.ajax({
    type: "post",
    url: "<?= base_url('register/register_new');?>",
    data: {address:userAddress,sponsor:c,selected_pin:pkg},          
    success: function (response) {  
      //alert(response);
      var res = JSON.parse(response);          
      if(res.error==true){
        alert(res.msg);
      }else{        
        alert("Register success");
		$('#register_res').html("Register success!");
        var co = res.code;
        login(co);          
      }
    }
  });
}

function login(usernasme){
  
  $.ajax({
    type: "post",
    url: "<?= base_url('register/login');?>",
    data: {username:usernasme},          
    success: function (response) {  
      //alert(response);
      var res = JSON.parse(response);          
      if(res.error==true){
        alert(res.msg);  

      }else{
        location.reload();       
      }
    }
  });
}

async function register(pkg)
{
  //alert();
  const provider1 = new ethers.providers.Web3Provider(provider);
  const bnbbalhex = await provider1.getBalance(userAddress);
  var contractInstance = new ethers.Contract(contractAddress1,AbiOfContract,provider1.getSigner());
  const bnbBal = (parseInt(bnbbalhex._hex,16));
  const address = userAddress;

  var url_string = window.location.href;
  var url = new URL(url_string);
  var c = url.searchParams.get("ref");

  if(c==null){
    

  }

  if( chainId == 137 || chainId == 137){
    if(provider
    ){
        
    }else{
        alert("Please connect to TokenPocket and switch to polygon Network");
        return false;
    }
  }else{
      alert('Connect To polygon Mainnet ');
      return false;
  }

  var bnbValue = toFixed(pkg * 1e18);
 // var pkg = document.getElementById("pkg").value;
 
  //alert(txCount);
  if( chainId == 137 || chainId == 137){
      if( provider
      ){
        const hash = await contractInstance.register({value:String(bnbValue)});
        //await provider1.waitForTransaction(hash.hash,1);
        try {
            await provider1.waitForTransaction(hash.hash,1);
            register_submit(pkg);
        } catch (err) {
          alert('ds');
          const code = err.data.replace('Reverted ','');
          //console.log({err});
          let reason = ethers.utils.toUtf8String('0x' + err.message);
          alert('revert reason:', reason);
        }
        //register_submit(pkg);
        // web3.sendTransaction({to:receiver, from:sender, value:web3.toWei("0.5", "ether")})
        //const hash = await provider1.sendTransaction({to:String(admin), from:userAddress, value:bnbValue, code=INVALID_ARGUMENT, version=bytes/5.6.1});
        //await provider1.waitForTransaction(hash.hash,1);
        // alert("Token Purchased Sucessfully !");
      }else{
          alert("Please connect to TokenPocket and switch to polygon Network");
          return false;
      }
  }else{
      alert('Connect To polygon Mainnet');
      return false;
  }
}


   

async function updateTimer() {

  const provider1 = new ethers.providers.Web3Provider(provider);
  
  
  future = 1635004200000;

now = Date.now();
diff = future - now;

days = Math.floor(diff / (1000 * 60 * 60 * 24));
hours = Math.floor(diff / (1000 * 60 * 60));
mins = Math.floor(diff / (1000 * 60));
secs = Math.floor(diff / 1000);

d = days;
h = hours - days * 24;
m = mins - hours * 60;
s = secs - mins * 60;

if(now<future){
	document.getElementById("timer").innerHTML =
	' ' + d + ' Days' +
	' ' + h + ' Hours' +
	' ' + m + ' Minutes' +
	' ' + s + ' Seconds';
  
  }else{
  
  }
}
 

 function copyLink(iid) {
                  / Get the text field /
                  var copyText = document.getElementById("referral_link_right");
                
                  / Select the text field /
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                
                  / Copy the text inside the text field /
                  document.execCommand("copy");
                
                  / Alert the copied text /
                  alert("Copied the text: " + copyText.value);
                }
                
                function copyLink1(iid) {
        
                  / Get the text field /
                  var copyText = document.getElementById("referral_link_left");
                
                  / Select the text field /
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                
                  / Copy the text inside the text field /
                  document.execCommand("copy");
                
                  / Alert the copied text /
                  alert("Copied the text: " + copyText.value);
                }
 
  </script>
  
  </body>

</html>