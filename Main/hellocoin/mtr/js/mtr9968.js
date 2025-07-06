/*Testnet*/
const buy_addr   = '0xe5EB24BEB1fD489a43e65c11Fe75817c9775dE51'; 
const buy_abi    = [{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"tariff","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"DepositAt","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"tokenChangedAddress","type":"address"}],"name":"TokenAddressChaged","type":"event"},{"inputs":[{"internalType":"address","name":"_tokenAdd","type":"address"}],"name":"changeToken","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_tariff","type":"uint256"},{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"deposit","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenAddr","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_to","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address payable","name":"_to","type":"address"},{"internalType":"address","name":"_token","type":"address"},{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"withdrawalToAddress","outputs":[],"stateMutability":"nonpayable","type":"function"}];
const token_addr = '0xd323CB6D95CA5E93c623F2733941790b543c5DE2';
const token_abi  = [{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}];
const { ethereum } = window
const chainIdVal = 56;
const chainIdMsg = "Please select Binance Smart Chain"; 
const tokenPrice = 1;

$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 






ethereum.on('accountsChanged', (accounts) => {
	// Handle the new accounts, or lack thereof.
	// "accounts" will always be an array, but it can be empty.
	location.reload();	
  });

window.ethereum.on('networkChanged', function (networkId) {
	//location.reload();
});
const WEB_LINK   = "https://mgrcoins.com/";
const isMetaMaskInstalled = () => {
	//Have to check the ethereum binding on the window object to see if it's installed
	const { ethereum } = window;
	
	return Boolean(ethereum && ethereum.isMetaMask);
}; 
const initialize = async() => {
	let accounts
	const isMetaMaskConnected = () => accounts && accounts.length > 0	
	//Created check function to see if the MetaMask extension is installed
	const isMetaMaskInstalled = () => {
		//Have to check the ethereum binding on the window object to see if it's installed
		const { ethereum } = window;		
		return Boolean(ethereum && ethereum.isMetaMask);
	};
	const MetamaskClientCheck = async() => {
	  //Now we check to see if Metmask is installed
	  if (!isMetaMaskInstalled()) {
		//If it isn't installed we ask the user to click to install it
		//onboardButton.innerText = 'Click here to install MetaMask!';
		onClickInstall();
	  } else if(!isMetaMaskConnected()) {
		//If MetaMask is installed we ask the user to connect to their wallet
		//onboardButton.innerText = 'Connect';
		onClickConnect();
	  }
	};
	MetamaskClientCheck();	 
	const { ethereum } = window;
	accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
	
	if(chainId!=chainIdVal){
		$.toaster({ priority : 'danger', title : 'Chain Alert !', message :  chainIdMsg });   
		return false;
	} 
}


const getReferralAddress = async() => {
    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3 = new Web3(window.ethereum);
	var Token = new web3.eth.Contract(buy_abi, buy_addr);
	await Token.methods.investors(userAddr).call(function(err,result){ 
	    if(result[1] ==0x0000000000000000000000000000000000000000){
	    }else{
	        $("#r_address").val(result[1]);
	        $("#r_address").attr("disabled","disabled");
	        $("#r_busd_address").val(result[1]);
	        $("#r_busd_address").attr("disabled","disabled");
	    }
	});
	
}

const checkAllowance = async() => {

    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];

	var web3 = new Web3(window.ethereum);
	var Token = new web3.eth.Contract(token_abi, token_addr);

	await Token.methods.allowance(userAddr, buy_addr).call({from:userAddr},function(err,result){

	    if(result==0){
            $("#busdAmt").prop( "disabled", true );   
			$("#tokenAmt2").prop( "disabled", true );       
            $(".busdBuy").attr("onclick","approve()");
            $(".busdBuy").html("Approve");

            $(".depositRe").attr("onclick","approve()");
            $(".depositRe").html("Approve");
	    }else{
            $(".busdBuy").html("Buy Now");
            $(".depositRe").html("Buy Now");
	    } 
	});
	
}


const checkAllowanceIdoBusd = async() => {

    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];

	var web3 = new Web3(window.ethereum);
	var Token = new web3.eth.Contract(token_abi, token_addr);

	await Token.methods.allowance(userAddr, buy_addr).call({from:userAddr},function(err,result){

	    if(result==0){
            $("#busdAmtIdo").prop( "disabled", true );   
			$("#tokenAmtIdo2").prop( "disabled", true );       
            $(".busdIdoBuy").attr("onclick","approveIdo()");
            $(".busdIdoBuy").html("Approve");

            $(".depositRe").attr("onclick","approveIdo()");
            $(".depositRe").html("Approve");
	    }else{
            $(".busdIdoBuy").html("Buy Now");
            $(".depositRe").html("Buy Now");
	    } 
	});
	
}


const approve = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(token_abi, token_addr);
	var amt      = 350000000000000000000000000;
	var amount   = "0x"+amt.toString(16);
	await Token.methods.approve(buy_addr, amount).send({from:userAddr},function(err,result){
	    if(err!==null){
			$.toaster({ priority : 'danger', title : 'Approve Alert !', message : 'Reject by user !!!'});
			//$("#msg_error").html("Reject by user");
			//$("#msg_error").css("color","red");
		}
		else {
		   $.toaster({ priority : 'success', title : 'Approve Alert !', message : 'Successfully approved. Please wait 10 seconds.'});
		   //$("#msg_error").html("Successfully approved. Please wait 10 seconds.");
		   //$("#msg_error").css("color","green");
		   setTimeout(function(){ location.reload(); },10000);
		}   
	})
}


const approveIdo = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(token_abi, token_addr);
	var amt      = 350000000000000000000000000;
	var amount   = "0x"+amt.toString(16);
	await Token.methods.approve(buy_addr, amount).send({from:userAddr},function(err,result){
	    if(err!==null){
			$.toaster({ priority : 'danger', title : 'Approve Alert !', message : 'Reject by user !!!'});
			//$("#msg_error").html("Reject by user");
			//$("#msg_error").css("color","red");
		}
		else {
		   $.toaster({ priority : 'success', title : 'Approve Alert !', message : 'Successfully approved. Please wait 10 seconds.'});
		   //$("#msg_error").html("Successfully approved. Please wait 10 seconds.");
		   //$("#msg_error").css("color","green");
		   setTimeout(function(){ location.reload(); },10000);
		}   
	})
}



const deposit  = async(inputAmt,limit) => {
	
	$(".stakeNow").addClass("dis");
	/* var pId   = $("#pId").val();
	if(pId>8){
		var minAmt    = 10000;
		if(inputAmt <= minAmt){
			$.toaster({ priority : 'danger', title : 'Invest Alert !', message :"Minimum invest is "+minAmt+" $"}); 
			$(".stakeNow").removeClass("dis");
			return false;
		}
	} */	
	const { ethereum } = window;
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });

	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
	if(chainId!=chainIdVal){
		$.toaster({ priority : 'danger', title : 'Chain Alert !', message : chainIdMsg }); 
		return false;
	}
	var formData  = "wallet_address="+userAddr+"&limit="+limit+"&amount="+inputAmt;
	
	$.ajax({ 
		//url: WEB_LINK+"checkPackageRequest",
		url: "checkPackageRequest",
		data: formData,
		type: 'post',
		success: function(result)
		{ 
			if(result.type !='error'){
				deposit_2( result.tokenAmt,result.amount,limit );
			}else{
				$.toaster({ priority : 'danger', title : 'Invest Alert !', message : result.msg}); 
				$(".stakeNow").removeClass("dis");
			}
		}
	});
}
const deposit_2  = async(tokenAmt,usdAmt,pLimit) => {
	tokenAmt = parseInt(tokenAmt);
	const { ethereum } = window;
	var pId  = $("#pId").val();
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
	if(chainId!=chainIdVal){
		$.toaster({ priority : 'danger', title : 'Chain Alert !', message : chainIdMsg }); 
		return false;
	}
	var web3  = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi, buy_addr);
	
	Trade.methods.deposit(0,tokenAmt).send({from:userAddr},function(err, result){ 
		if(err!==null){
		    $(".stakeNow").removeClass("dis");
			$.toaster({ priority : 'danger', title : 'Transaction Alert !', message :"Transaction reject by user"});		
		}
		else { 
			formData = "amount="+tokenAmt+"&trans_id=" + result + "&wallet_address="+userAddr+"&usdAmt="+usdAmt+"&pId="+pId+"&pLimit="+pLimit;
			$.ajax({ 
				//url: WEB_LINK+"addPackageRequest",
				url: "addPackageRequest",
				data: formData,
				type: 'post',
				success: function(resp)
				{ 
					if(resp.type !='error'){
						$.toaster({ priority : 'success', title : 'Invest Alert !', message :resp.msg}); 
						setTimeout(function () {
							window.location.href = WEB_LINK+"users";
						}, 2000);
						
					}else{
						$.toaster({ priority : 'danger', title : 'Invest Alert !', message :resp.msg}); 
						$(".stakeNow").removeClass("dis");
					}
				}
			});
		}
	})
}
$("#depositAmount").on("keyup",function(){
	var amt  = $("#depositAmount").val(); 
	amt  = (tokenPrice*amt).toFixed(2); 
	$("#tokenAmount").val(amt);
	checkAllowance();
});
//This will start the onboarding proccess
const onClickInstall = () => {
	onboardButton.innerText = 'Onboarding in progress';
	onboardButton.disabled = true;
	//On this object we have startOnboarding which will start the onboarding process for our end user
	onboarding.startOnboarding();
};
const onClickConnect = async () => {
	try {		
		//Will Start the MetaMask Extension
		accounts = await ethereum.request({ method: 'eth_requestAccounts' });
		if(accounts[0]!= ''){
			$("#connect_wallet").html("Connected");
			// $("#connect_wallet").prop( "disabled", true );  
		}		
	} catch (error) {
		console.error(error);
	}
};
const registeration = async ( ) => {
	const { ethereum } = window;
	accounts           = await ethereum.request({ method: 'eth_requestAccounts' });
	var currentWalletAddress = accounts[0];
	if(currentWalletAddress==""){ 
		$.toaster({ priority : 'danger', title : 'Registration Alert !', message : "Please login to Metamask or Truswallet App"});
		return false;
	}	
	var wallerAddress = currentWalletAddress;
	var registerId = $("#registerId").val();	
	//var position   = $("#position").val();	
	$.ajax({
		//url:WEB_LINK+"registerFrm",
		url:"registerFrm",
		type:'POST',
		dataType:'JSON',
		data:{wallet_address:wallerAddress,registerId:registerId},
		success:function(resp){
			if(resp.type=="success"){  
				$.toaster({ priority : 'success', title : 'Registration Alert !', message :  resp.msg });   
				setTimeout(function(){
					location.href= WEB_LINK;
				},3000);
			}
			else {		
				$.toaster({ priority : 'danger', title : 'Registration Alert !',  message : resp.msg });    
			}
		}
	});
}
const login = async () => { 
	
	$('.clickClass_1').addClass("hover_btn");
	const { ethereum } = window;
	accounts           = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr       = accounts[0];
	
	if (userAddr !="") {
		
	   $.ajax({
		   //url:WEB_LINK+"login",
		   url:"login",
		   type:'POST',
		   dataType:'JSON',
		   data:{wallet_address:userAddr},
		   headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		   success:function(resp){ 
		   	 
			   if(resp.type=="success"){ 
			   	$.toaster({ priority : 'success', title : 'Login Alert !', message :  resp.msg });  
					 
					setTimeout(function(){
						location.href= WEB_LINK+"users";
					},1000);


			   }
			   else {
					$.toaster({ priority : 'danger', title : 'Login Alert !', message : resp.msg});
			   }
		   },
		   error:function(err){
			   //alert(JSON.stringify(err));
			   //alert(WEB_LINK+"login");
		   }
	   });
	}
	else {
		$('.clickClass_1').removeClass("hover_btn");
		$.toast({
			heading: 'Error',
			text: "Metamask Not Connected",
			icon: 'error'
		});
	}
}
const checkuser = async () => {
	const { ethereum } = window;
	accounts      = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr  = accounts[0];
    var formData  = "wallet_address="+userAddr;
	$.ajax({ 
		//url: WEB_LINK+"checkUser",
		url: "checkUser",
		data: formData,
		type: 'post',
		success: function(result)
		{ 
			if(result.type=="error"){
				window.location.href = WEB_LINK+"index";                     
			}                    
		}
	});
    
};
const withdrawal = async(inputAmt,trans)=>{
	const { ethereum } = window;
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId  = await ethereum.request({ method: 'eth_chainId' });
	if(chainId  != chainIdVal){
		$.toaster({ priority : 'danger', title : 'Chain Alert !', message : chainIdMsg });
		$(".withRe").removeClass("dis");
		return false;
	}
	var formData  = "wallet_address="+userAddr+"&amt="+inputAmt+"&trans="+trans;
	//$.toaster({ priority : 'warning', title : 'Withdrawal Alert !', message :"Your request underprocess. Please wait.."}); 
	//console.log();
	$.ajax({ 
		//url: WEB_LINK+"withRe",
		url: "withRe",
		data: formData,
		type: 'post',
		success: function(result)
		{ 
			if(result.type =='success'){
				$.toaster({ priority : 'success', title : 'Withdrawal Alert !', message :result.msg}); 
				setTimeout(function () {
					window.location.href = WEB_LINK+"users";
				}, 2000);
			}else{
				$.toaster({ priority : 'danger', title : 'Withdrawal Alert !', message : result.msg}); 
				$(".withRe").removeClass("dis");
			}
		}
	});
}
$(".withRe").on("click",function(){

	$(".withRe").prop('disabled', true);
		setTimeout(function() {
        $(".withRe").prop('disabled', false);
    	}, 10000);

	var inputAmt  = $(this).data("amount");
	var trans     = $(this).data("trans");
	var minAmt    = 1;
	if( (inputAmt < minAmt) && (inputAmt !=minAmt) ){
		$.toaster({ priority : 'danger', title : 'Withdrawal Alert !', message :"Minimum withdrawal is "+minAmt+" $"}); 
		$(".withRe").removeClass("dis");
		return false;
	} 
	withdrawal(inputAmt,trans);
});
window.addEventListener('DOMContentLoaded', initialize)