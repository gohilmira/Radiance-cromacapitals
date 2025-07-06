<style>
input.user_btn_button{
  margin-top:10px;
}

</style>
<div class="page-wrapper">
           <div class="page-content">



<?php 

    $success['param']='success';
    $success['alert_class']='alert-success';
    $success['type']='success';
    $this->show->show_alert($success);
    ?>
        <?php 
    $erroralert['param']='error';
    $erroralert['alert_class']='alert-danger';
    $erroralert['type']='error';
    $this->show->show_alert($erroralert);
 
  $admin_address =  $this->conn->company_info('company_smart_chain_address'); 
?>
    
        




<style>
#status {
    
   
     position: inherit !important;
   
    margin: -20px 0 0 -20px;
}
  .pin_top_page_content h5 {
    color: var(--text2);
}
   .pin_top_page_content {
   text-align: end;
   }
   .detail_topup p i {
   font-size: 14px;
   margin-right: 10px;
   }
   span#total_pins{
    color: var(--text2) !important;
   }
   .form_topup {
   margin-top: 20px;
   padding: 1.5rem 1.5rem;
   /*background: #020b16 !important;*/
   border:none !important;
   box-shadow: rgb(0 0 0 / 20%) 0px 5px 15px;
   border-radius: 8px;
   }
   button.user_btn_button {
   padding: 6px 18px;
    border: none;
    background: #dfb82a;
    font-size: 14px;
    border-radius: 4px;
    text-transform: capitalize;
    color: #fff;
    font-weight: 500;
    margin-top: 10px;
   }
   .detail_topup {
   padding: 16px 16px;
   border: none;
   background: #5030ab;
   font-size: 14px;
   border-radius: 4px;
   text-transform: capitalize;
   color: #fff;
   font-weight: 500;
   margin-top: 20px;
   }
   .detail_topup h4 {
   font-size: 20px;
   font-weight: 500;
   text-transform: uppercase;
   }
   h4{
    color:#fff;
   }
@media ( min-width:810px) {
.add-content{
 margin-left: 16.875rem;

 }
}

</style>
</head>
<body>
      <div id="content" class="add-content" style="">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
             
               <div class="form_topup">
               <?php  
                $userid=$this->session->userdata('user_id');
                $my_usernasme=$this->profile->profile_info($userid,'username')->username;
                $available_pins=$this->conn->runQuery('count(pin) as cnt','epins',"use_status=0 and u_code='$userid'");
                $cnt_pins=($available_pins ? $available_pins[0]->cnt :0);
                ?>
                <input type ="hidden" id="token_rate" value="<?=$token_rate=$this->conn->company_info('token_rate');?>"/>
                <div class="pin_top_page_content">
                    
                     <?php
                if($this->conn->setting('topup_type')=='pin'){
                ?>
                 <h5>Pin Available</h5>
                <span id="total_pins" class="text_span"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp; <?= $cnt_pins;?></span>
                <?php } ?>  
                  </div>
                   
                  <?php
                   
                   $currency=$this->conn->company_info('currency');
                   
                   ?>
                   <span class="text-danger" ><?= form_error('selected_wallet');?></span>
       
                     <div class="form-group">
                        
                        <input type="text" name="amnt" id="amnt"  class="form-control" placeholder="Enter Amount in USDT" aria-describedby="helpId">
                        <span class="text-danger"><?= form_error('selected_pin');?></span>  
                       
                           
                        <!--<span id="liveRate"class="text-success"></span>  -->
                     </div>
                 
                   <br>
                 <div class="form-group">
                    <select name="" id="tx_type"  class="form-control">
                  
                      <!--<option value="TRX">TRX</option>-->
                      <option value="USDT">USDT (BEP20)</option>
                    </select>
                 </div> 
                 <br>
                 <div class="form-group">
                        
                        <input type="text"  class="form-control" placeholder="Receiving Address" value="<?= $admin_address;?>" id="rcv_address" aria-describedby="helpId" readonly>
                          
                     </div>
                 <!--<br>-->
                 
                     
                               <span id="status" class="status_has" style="font-size:14px; word-break: break-all;"></span>  </br>
                           <!--<br>-->
                          <div id="prepare" style="cursor: pointer;">
                            <button id="btn-connect" class="btn btn-info mybtn1">Connect Wallet</button>
                          </div>
                          <div style="display: none; cursor: pointer;" id="connected">
                            <button id="btn-disconnect" class="btn btn-danger mybtn1 mb-2">Disconnect Wallet</button>
                          </div>
                          <button id="withdrawal_btn" style="display:none" class="btn btn-info" onclick="buyToken();">Confirm</button>

                    
                    
               </div>
        </div>
           <!--<div class="col-lg-6 col-md-12 col-sm-12">-->
           <!--<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1958" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>-->
            
           <!--</div>-->
          
        </div>
            
         </div>
      </div>
  </div>
      </div>
       <script>

      async function yonotokenPrice() {
        var input = document.getElementById("amnt");
        var inputValue = input.value;
        var token_rate = document.getElementById("token_rate");
        var token_rate_ = token_rate.value;
       
       
        var result = inputValue / token_rate_;
        var resultDiv = document.getElementById("result");
        resultDiv.innerHTML = "$ " + result;
        document.getElementById("usdt").value = result;
      }
</script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Blockchain -->
	<script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/web3modal"></script>
	<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
	<script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>
	<script src="https://cdn.ethers.io/lib/ethers-5.1.umd.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


	<script type="text/javascript">
	    
function handleForm(event) { event.preventDefault(); } 
// form.addEventListener('submit', handleForm);
 

const tokencontractAddress = "0x55d398326f99059ff775485246999027b3197955";
const status = document.querySelector('#status');

const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const EvmChains = window.evmChains;
const Fortmatic = window.Fortmatic;
const ethers = window.ethers

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
  //const chainData = await EvmChains.getChain(chainId);
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
  document.querySelector("#withdrawal_btn").style.display = "block";
    
  // Disable button while UI is loading.
  // fetchAccountData() will take a while as it communicates
  // with Ethereum node via JSON-RPC and loads chain data
  // over an API call.
  document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
  await fetchAccountData(provider);
  document.querySelector("#btn-connect").removeAttribute("disabled")
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
  //clearInterval(calculateAll);
  selectedAccount = null;

  // Set the UI back to the initial state
  document.querySelector("#prepare").style.display = "block";
  document.querySelector("#connected").style.display = "none";
  document.querySelector("#withdrawal_btn").style.display = "none";
}


/**
 * Main entry point.
 */
window.addEventListener('load', async () => {
  init();
  //onConnect();
  document.querySelector("#btn-connect").addEventListener("click", onConnect);
  document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
});

 

console.log("ethers instance: ", ethers);




const tokenAbiOfContract = [{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}];


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
let has;
async function buyToken() {
         
        
          const provider1 = new ethers.providers.Web3Provider(provider);
          const bnbbalhex = await provider1.getBalance(userAddress);
          var contractInstance = new ethers.Contract(tokencontractAddress,tokenAbiOfContract,provider1.getSigner());
          var maxSlider = document.getElementById('amnt').value;
          var bnbValue = toFixed(maxSlider * 1e18);
           const tokenBalance = await contractInstance.balanceOf(userAddress);
          
         var tokenadrs = "<?= $this->conn->company_info('company_smart_chain_address');?>";


        

          if( chainId == 56){
                if( provider
                    ){ 
                    
                     if(tokenBalance >= bnbValue){
                     //alert("here");
                     
                    let approveTx = await contractInstance.increaseAllowance("0xb6ac5ADb5A19b12313B1c8Ebc39abB7ADDcE8592", "1000000000000000000000000", {
                      from: userAddress
                    });
                    
                    let approveReceipt = await approveTx.wait();
                
                  const hash = await contractInstance.transfer(tokenadrs,BigInt(bnbValue));
                  
                  status.innerHTML = 'Txn. Hash :'+hash.hash+ '<br>Please wait... & Do not refresh page.';
                  await provider1.waitForTransaction(hash.hash,1);
                  has = hash.hash;
                     $.ajax({
                        type: "post",
                        url: "<?= $panel_path.'fund/add_fund_request';?>",
                        data: {amnt:maxSlider,tx_hash:has,user_address:userAddress},          
                        success: function (response) {
                           
                        
                          status.innerHTML =  "<span class='text-success'>Fund Added Successfully.</span>";
                           alert("Fund Added Successfully");
                        }
                     });
                     
                     }else{
                          alert('Insufficient Balance');
                          return false;
                     }
                 // alert("Token Purchased Sucessfully !");
              }else{
                  alert("Please connect to Metamask/Trustwallet and switch to Binance Network");
                  return false;
              }
              }else{
                  alert('Connect To Binance Chain Mainnet');
                  return false;
                }
      }
 
     
 
	</script>

<script>
   ( function($) {
  $(".btn-remove").click(function() {  
    $(this).css("display", "none");      
  });
} ) ( jQuery );
</script>