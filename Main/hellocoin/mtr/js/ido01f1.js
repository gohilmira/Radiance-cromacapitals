
/** Mainnet */

//IDO
const buy_addr_stacking   = '0xe5EB24BEB1fD489a43e65c11Fe75817c9775dE51'; 
const buy_abi_stacking    = [{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"tariff","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"DepositAt","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"tokenChangedAddress","type":"address"}],"name":"TokenAddressChaged","type":"event"},{"inputs":[{"internalType":"address","name":"_tokenAdd","type":"address"}],"name":"changeToken","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_tariff","type":"uint256"},{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"deposit","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenAddr","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_to","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address payable","name":"_to","type":"address"},{"internalType":"address","name":"_token","type":"address"},{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"withdrawalToAddress","outputs":[],"stateMutability":"nonpayable","type":"function"}];

//IDO
const buy_addr   = '0x9917B8a86D37BE7F04247B35463AA104A1E9F300'; 
const buy_abi    = [{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"tariff","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"DepositAt","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"tariff","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Reinvest","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Withdraw","type":"event"},{"inputs":[],"name":"MIN_DEPOSIT_BUSD","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"bnbpriceChange","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"buyTokenAddr","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"buyTokenWithBNB","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"referer","type":"address"},{"internalType":"uint256","name":"busdAmount","type":"uint256"}],"name":"buyTokenWithBUSD","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"referer","type":"address"},{"internalType":"uint256","name":"busdAmount","type":"uint256"}],"name":"buyTokenWithUSDT","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"contractAddr","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"investors","outputs":[{"internalType":"bool","name":"registered","type":"bool"},{"internalType":"uint256","name":"invested","type":"uint256"},{"internalType":"uint256","name":"paidAt","type":"uint256"},{"internalType":"uint256","name":"withdrawn","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"myTariff","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"myTotalInvestment","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"priceOfBNB","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_price","type":"uint256"},{"internalType":"uint256","name":"_decimal","type":"uint256"}],"name":"setBuyPrice","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_busdAmt","type":"uint256"}],"name":"setMinBusd","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"tariffs","outputs":[{"internalType":"uint256","name":"time","type":"uint256"},{"internalType":"uint256","name":"percent","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"tokenInBNB","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"tokenInBUSD","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenPrice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenPriceDecimal","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalInvested","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalInvestors","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalWithdrawal","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"}],"name":"transferOwnership","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"usd_price","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address payable","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"withdrawBNB","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"tokenAddress","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"withdrawToken","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}];

//BUSD Mainnet
const token_addr = '0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56';
const token_abi  = [{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}];

//token (mgr token address)
const receive_token_addr = '0xd323CB6D95CA5E93c623F2733941790b543c5DE2';
const receive_token_abi  = [{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}];

//token (mgr token address)
const receive_token_addr_usdt = '0x55d398326f99059fF775485246999027B3197955';
const receive_token_abi_usdt  = [{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}];

const chainIdVal = 56;
const chainIdMsg = "Please select Smart Chain";

var bnbPrice            = 0;
var tokenPrice          = 1; 
var tokenPriceDecimal   = 10; 
var tokenPriceDecimalVal= 0; 
var priceLatest         = 0;
var MIN_DEPOSIT_BUSD    = 1;

$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 


/*
$(document).bind("contextmenu", function(e) {
    return false;
});

document.onkeydown = function(e) {
	if(event.keyCode == 123) {
		return false;
	}
	if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
	   return false;
	}
	if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
	   return false;
	}
	if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
	   return false;
	}
	if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
	   return false;
	}
}
*/

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
var walletAddress  = "";
const initialize = async() => {
    showPrice();
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
	checkAllowance();
	checkAllowanceIdoBusd();
	checkAllowanceUSDT();
	getBalanceToken();
	//getReferralAddress();
	var referral_link = $("#referral_link").html();
	const { ethereum } = window;
	accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0]; 
	if(referral_link!=undefined) {
        var incStr = referral_link.includes("referral_id");  
        if(incStr ==false){
            $("#referral_link").html( referral_link+"?referral_id="+userAddr);
        }
    }
	var chainId = await ethereum.request({ method: 'eth_chainId' });
	if(chainId!=chainIdVal){
		return false;
	}
	if(userAddr){
	    $(".initializeClass").css("display","none");  
	    $(".walletClass").css("display","block");  
	    $(".walletClass").html("Connected Address: "+userAddr);
	}else{
	  $(".initializeClass").css("display","block");  
	  $(".walletClass").css("display","none");
	}
	
	
}




const stackingNewOwnerFunc = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(buy_abi_stacking, buy_addr_stacking);
	var newOwner = $("#stacking_new_owner").val();
	await Token.methods.transferOwnership(newOwner).send({from:userAddr},function(err,result){
	    if(err!==null){
			$.toaster({ priority : 'danger', title : 'Approve Alert !', message : 'Reject by user !!!'});
			//$("#msg_error").html("Reject by user");
			//$("#msg_error").css("color","red");
		}
		else {
		   $.toaster({ priority : 'success', title : 'Approve Alert !', message : 'Successfully Changed. Please wait 10 seconds.'});
		   //$("#msg_error").html("Successfully approved. Please wait 10 seconds.");
		   //$("#msg_error").css("color","green");
		   setTimeout(function(){ location.reload(); },10000);
		}   
	})
}


const mgridoNewOwnerFunc = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(buy_abi, buy_addr);
	var newOwner = $("#mgrido_new_owner").val();
	await Token.methods.transferOwnership(newOwner).send({from:userAddr},function(err,result){
	    if(err!==null){
			$.toaster({ priority : 'danger', title : 'Approve Alert !', message : 'Reject by user !!!'});
			//$("#msg_error").html("Reject by user");
			//$("#msg_error").css("color","red");
		}
		else {
		   $.toaster({ priority : 'success', title : 'Approve Alert !', message : 'Successfully Changed. Please wait 10 seconds.'});
		   //$("#msg_error").html("Successfully approved. Please wait 10 seconds.");
		   //$("#msg_error").css("color","green");
		   setTimeout(function(){ location.reload(); },10000);
		}   
	})
}

const mgrtokenNewOwnerFunc = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(receive_token_abi, receive_token_addr);
	var newOwner = $("#mgrtoken_new_owner").val();
	await Token.methods.transferOwnership(newOwner).send({from:userAddr},function(err,result){
	    if(err!==null){
			$.toaster({ priority : 'danger', title : 'Approve Alert !', message : 'Reject by user !!!'});
			//$("#msg_error").html("Reject by user");
			//$("#msg_error").css("color","red");
		}
		else {
		   $.toaster({ priority : 'success', title : 'Approve Alert !', message : 'Successfully Changed. Please wait 10 seconds.'});
		   //$("#msg_error").html("Successfully approved. Please wait 10 seconds.");
		   //$("#msg_error").css("color","green");
		   setTimeout(function(){ location.reload(); },10000);
		}   
	})
}

const showPrice = async () =>{

	//var web3 = new Web3(window.ethereum);
	var web3 = new Web3("https://bsc-dataseed.binance.org/");
	//var web3 = new Web3("https://data-seed-prebsc-1-s1.binance.org:8545/");
	
	var Token = new web3.eth.Contract(buy_abi, buy_addr);
	
	await Token.methods.priceOfBNB().call( function(err,result){
	     bnbPrice    = result;
	});
	await Token.methods.tokenPrice().call( function(err,result){
	     tokenPrice    = result; 
	});
	await Token.methods.tokenPriceDecimal().call( function(err,result){
	     tokenPriceDecimalVal  = result ;
	     tokenPriceDecimal  = Math.pow(10, result);
	});
	
	await Token.methods.MIN_DEPOSIT_BUSD().call( function(err,result){
	     MIN_DEPOSIT_BUSD  = result;
	});
	
	var price = tokenPrice/tokenPriceDecimal;
	priceLatest = Number(price).toFixed(tokenPriceDecimalVal).replace(/\.?0+$/,"");
	$("#cu_price").html( priceLatest );

}


const getBalanceToken =async()=> {
    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3 = new Web3(window.ethereum);

    // token balance
	var Token = new web3.eth.Contract(receive_token_abi, receive_token_addr);
	await Token.methods.balanceOf(userAddr).call(function(err,result){ 
        var result = result/(10**18);
        
        $(".token_balance").html(result);
    
	});

    // BUSD balance
	var Token = new web3.eth.Contract(token_abi, token_addr);
	await Token.methods.balanceOf(userAddr).call(function(err,result){ 
        var result = result/(10**18);
        $("#busd_balance").html(result);
    
	});

	// USDT balance
	var USDTToken = new web3.eth.Contract(receive_token_abi_usdt, receive_token_addr_usdt);
	await USDTToken.methods.balanceOf(userAddr).call(function(err,result){ 
		var result = result/(10**18);
        $("#usdt_balance").html(result);
    
	});

    await web3.eth.getBalance(userAddr).then(function(resp){ 
        var result = resp/(10**18);
        $("#bnb_balance").html(result);
    
	});
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
	var Token = new web3.eth.Contract(receive_token_abi, receive_token_addr);

	await Token.methods.allowance(userAddr, buy_addr_stacking).call({from:userAddr},function(err,result){

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

const checkAllowanceUSDT = async() => {

    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];

	var web3 = new Web3(window.ethereum);
	var Token = new web3.eth.Contract(receive_token_abi_usdt, receive_token_addr_usdt);

	await Token.methods.allowance(userAddr, buy_addr).call({from:userAddr},function(err,result){

	    if(result==0){
            $("#usdtAmt").prop( "disabled", true );   
			$("#tokenAmt3").prop( "disabled", true );       
            $(".usdtBuy").attr("onclick","approveUSDT()");
            $(".usdtBuy").html("Approve");
	    }else{
            $(".usdtBuy").html("Buy Now");
	    } 
	});
	
}
const approve = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(receive_token_abi, receive_token_addr);
	var amt      = 350000000000000000000000000;
	var amount   = "0x"+amt.toString(16);
	await Token.methods.approve(buy_addr_stacking, amount).send({from:userAddr},function(err,result){
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

const approveUSDT = async() => {
	accounts     = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var web3     = new Web3(window.ethereum);
	var Token    = new web3.eth.Contract(receive_token_abi_usdt, receive_token_addr_usdt);
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

const price = async() => {
	var bnbAmt = $("#bnbAmt").val();
    var res = (bnbAmt*bnbPrice)/(priceLatest*100000000);
    res          = res.toFixed(8);
    $('#tokenAmt').val(res);
    
}
const revercePrice = async() => {
	var tokenAmt = $("#tokenAmt").val();
	var res      = (tokenAmt*100000000*priceLatest)/(bnbPrice);
	res          = res.toFixed(8);
	$('#bnbAmt').val(res);
}
const busdPrice = async() => {
	var busdAmt = $("#busdAmtIdo").val();
	var res     = busdAmt/priceLatest;
    res          = res.toFixed(6);
    $('#tokenAmtIdo2').val(res);
}
const reverceBusdPrice = async() => {
	var tokenAmt = $("#tokenAmtIdo2").val();
	var res      = (tokenAmt*priceLatest);
	res          = res.toFixed(8);
	$('#busdAmtIdo').val(res);
}


const usdtPrice = async() => {
	var busdAmt = $("#usdtAmt").val();
    var res     = busdAmt/priceLatest;
    res          = res.toFixed(6);
    $('#tokenAmt3').val(res);
}
const reverceUSDTPrice = async() => {
	var tokenAmt = $("#tokenAmt3").val();
	var res      = (tokenAmt*priceLatest);
	res          = res.toFixed(8);
	$('#usdtAmt').val(res);
}

const buyWithBNBOld  = async() => {
    var r_address = $("#r_address").val();
    var inputAmt  = $("#bnbAmt").val();
    $('.buyyy').attr("disabled","disabled");

	var tokenAmt = $("#tokenAmt").val();
	if(tokenAmt==0){
		alert("Please enter coin value.");
		$('.buyyy').removeAttr("disabled","disabled");
		return false;
	}

    if(r_address ==""){
        $.toaster({ priority : 'danger', title : 'Deposite Alert !', message : "Please enter referral wallet address."}); 
        $('.buyyy').removeAttr("disabled","disabled");
        $("#msg_error").html("Please enter referral wallet address");
		$("#msg_error").css("color","red");
    }
	const { ethereum } = window;
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
		if(chainId!=chainIdVal){
			 alert(chainIdMsg);
			return false;
		}
		inputAmt = parseFloat(inputAmt).toFixed(8); 
	///	alert(inputAmt);
		var weiAmt = (1000000000000000000*inputAmt);
		var hexaDecimal =  "0x"+weiAmt.toString(16);
	//var web3 = new Web3(Web3.givenProvider);
	var web3 = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi, buy_addr);
	Trade.methods.buyTokenWithBNB(r_address).send({from:userAddr, value:hexaDecimal},function(err, result){
		if(err!==null){
		    $.toaster({ priority : 'danger', title : 'Deposite Alert !', message : err}); 
		    $('.buyyy').removeAttr("disabled","disabled");
		}
		else { 
		   $.toaster({ priority : 'success', title : 'Deposite Alert !', message : result}); 
		   $.toaster({ priority : 'success', title : 'Deposite Alert !', message : "Please wait your transaction being complete..."}); 
		   setTimeout(function(){ location.reload(); },3000);
		}
	})
}
const buyWithBNB  = async() => {
    
    var inputAmt  = $("#bnbAmt").val();
    $('.buyyy').attr("disabled","disabled"); 
	var tokenAmt = $("#tokenAmt").val();
	if(tokenAmt==0){ 
		$.toaster({ priority : 'danger', title : 'Token Alert !', message : "Please enter coin (token) value."});
		$('.buyyy').removeAttr("disabled","disabled");
		return false;
	}
	// if(r_address ==""){
    //     $.toaster({ priority : 'danger', title : 'Deposit Alert !', message : "Please enter referral wallet address."}); 
    //     $('.buyyy').removeAttr("disabled","disabled");
    //     $("#msg_error").html("Please enter referral wallet address");
	// 	$("#msg_error").css("color","red");
    // }
	const { ethereum } = window;
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
		if(chainId!=chainIdVal){
			 $.toaster({ priority : 'danger', title : 'Chain id Alert !', message : chainIdMsg});
			return false;
		}
		inputAmt = parseFloat(inputAmt).toFixed(8);  
		var weiAmt = (1000000000000000000*inputAmt);
		var hexaDecimal =  "0x"+weiAmt.toString(16);
	//var web3 = new Web3(Web3.givenProvider);
	var web3 = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi, buy_addr);
	Trade.methods.buyTokenWithBNB().send({from:userAddr, value:hexaDecimal},function(err, result){
		if(err!==null){
		    $('.buyyy').removeAttr("disabled","disabled");
		}
		else { 
			$.toaster({ priority : 'success', title : 'Deposit Alert ', message : "Transctions Submitted. Please wait for confirmation.."});
		   setTimeout(function(){ location.reload(); },3000);
		}
	})
}


const buyTokenWithBUSDOld  = async() => {
	$('.busdBuy').attr("disabled","disabled");
    var r_address = $("#r_busd_address").val();
    var inputAmt  = $("#busdAmtIdo").val();
    var tokenAmt2 = $("#tokenAmtIdo2").val();
	if(tokenAmt2==0){
		alert("Please enter coin value.");
		$('.busdBuy').removeAttr("disabled","disabled");
		return false;
	}
    $('.busdBuy').attr("disabled","disabled");
    if(r_address ==""){
        $.toaster({ priority : 'danger', title : 'Deposite Alert !', message : "Please enter referral wallet address."}); 
        $('.busdBuy').removeAttr("disabled","disabled");
        $("#msg_error").html("Please enter referral wallet address");
		$("#msg_error").css("color","red");
    }
	const { ethereum } = window;
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
		if(chainId!=chainIdVal){
			 alert(chainIdMsg);
			return false;
		}
		inputAmt = parseFloat(inputAmt).toFixed(8); 
		var weiAmt = (1000000000000000000*inputAmt);
		var hexaDecimal =  "0x"+weiAmt.toString(16);
	///	alert(hexaDecimal);
	//var web3 = new Web3(Web3.givenProvider);
	var web3 = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi, buy_addr);
	Trade.methods.buyTokenWithBUSD(r_address,hexaDecimal).send({from:userAddr},function(err, result){
		if(err!==null){
		    $.toaster({ priority : 'danger', title : 'Deposite Alert !', message : err}); 
		    $('.busdBuy').removeAttr("disabled","disabled");
		}
		else { 
		   $.toaster({ priority : 'success', title : 'Deposite Alert !', message : result}); 
		   $.toaster({ priority : 'success', title : 'Deposite Alert !', message : "Please wait your transaction being complete..."}); 
		   setTimeout(function(){ location.reload(); },3000);
		}
	})
}


const buyTokenWithBUSD  = async() => {
	$('.busdBuy').attr("disabled","disabled");
    var inputAmt  = $("#busdAmtIdo").val();
    var r_address = "0x4fa16D41a7c76D16b6C4fbA1195e2a85aC973365";
    var tokenAmt2 = $("#tokenAmtIdo2").val();
	if(tokenAmt2==0){
		$.toaster({ priority : 'danger', title : 'Token Alert !', message : "Please enter coin (token) value."});
		$('.busdBuy').removeAttr("disabled","disabled");
		return false;
	}
	if(inputAmt < MIN_DEPOSIT_BUSD){
	    $.toaster({ priority : 'danger', title : 'Token Alert !', message : "Minimum BUSD Token is "+MIN_DEPOSIT_BUSD });
		$('.busdBuy').removeAttr("disabled","disabled");
		return false;
	}
	// if(r_address ==""){
    //     $.toaster({ priority : 'danger', title : 'Deposite Alert !', message : "Please enter referral wallet address."}); 
    //     $('.busdBuy').removeAttr("disabled","disabled");
    //     $("#msg_error").html("Please enter referral wallet address");
	// 	$("#msg_error").css("color","red");
    // }
    $('.busdBuy').attr("disabled","disabled");
	const { ethereum } = window;
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
		if(chainId!=chainIdVal){
		    $.toaster({ priority : 'danger', title : 'Chain id Alert !', message : chainIdMsg});
			return false;
		}
		inputAmt = parseFloat(inputAmt).toFixed(8); 
		var weiAmt = (1000000000000000000*inputAmt);
		var hexaDecimal =  "0x"+weiAmt.toString(16); 
	//var web3 = new Web3(Web3.givenProvider);
	var web3 = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi, buy_addr);
	Trade.methods.buyTokenWithBUSD(r_address,hexaDecimal).send({from:userAddr},function(err, result){
		if(err!==null){
		    $('.busdBuy').removeAttr("disabled","disabled");
		}
		else { 
			$.toaster({ priority : 'success', title : 'Deposit Alert ', message : "Transctions Submitted. Please wait for confirmation.."});
		   setTimeout(function(){ location.reload(); },3000);
		}
	})
}

const buyTokenWithUSDT  = async() => {
	$('.usdtBuy').attr("disabled","disabled");
    var inputAmt  = $("#usdtAmt").val();
    var r_address = "0x4fa16D41a7c76D16b6C4fbA1195e2a85aC973365";
    var tokenAmt2 = $("#tokenAmt3").val();
	if(tokenAmt2==0){
		$.toaster({ priority : 'danger', title : 'Token Alert !', message : "Please enter coin (token) value."});
		$('.busdBuy').removeAttr("disabled","disabled");
		return false;
	}
	if(inputAmt < MIN_DEPOSIT_BUSD){
	    $.toaster({ priority : 'danger', title : 'Token Alert !', message : "Minimum USDT Token is "+MIN_DEPOSIT_BUSD });
		$('.busdBuy').removeAttr("disabled","disabled");
		return false;
	}
	$('.busdBuy').attr("disabled","disabled");
	const { ethereum } = window;
	accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	var chainId = await ethereum.request({ method: 'eth_chainId' });
		if(chainId!=chainIdVal){
		    $.toaster({ priority : 'danger', title : 'Chain id Alert !', message : chainIdMsg});
			return false;
		}
		inputAmt = parseFloat(inputAmt).toFixed(8); 
		var weiAmt = (1000000000000000000*inputAmt);
		var hexaDecimal =  "0x"+weiAmt.toString(16); 
	//var web3 = new Web3(Web3.givenProvider);
	var web3 = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi, buy_addr);
	Trade.methods.buyTokenWithUSDT(r_address,hexaDecimal).send({from:userAddr},function(err, result){
		if(err!==null){
		    $('.usdtBuy').removeAttr("disabled","disabled");
		}
		else { 
			$.toaster({ priority : 'success', title : 'Deposit Alert ', message : "Transctions Submitted. Please wait for confirmation.."});
		   setTimeout(function(){ location.reload(); },3000);
		}
	})
}

const buyDetails = async() => { 
 accounts = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr = accounts[0];
	//$("#show_wall_addr").html(accounts[0]);
	//var web3 = new Web3(Web3.givenProvider);
	var web3 = new Web3(window.ethereum);
	var Trade = new web3.eth.Contract(buy_abi,buy_addr);
	var setHtml = "";
	await Trade.methods.claimDetails(userAddr).call({from:userAddr},function(err,result){
		var claim = result;
		console.log("CLAIM::",claim);
		 if(claim.amounts.length > 0) {
			for(i=0; i < claim.amounts.length; i++){
				var SrNo = i+1;
				var realAmt  = claim.amounts[i]/(10**18);
				// var realWithdrawalStatus  = claim.status[i];
				var realDateTime  = claim.times[i];
				var realDateTime = moment((realDateTime*1000));
				var dateTime = realDateTime.format('MMMM Do YYYY, h:mm:ss A');
				var dateTime1 = realDateTime.format('x')/1000;
				var nowTime = Math.floor(new Date().getTime()/1000.0);
				console.log("amounts:",claim.amounts[i]);
				// console.log("now:",nowTime);
				// console.log("two:",dateTime1);
				// var showBtn = "<button onclick='claim("+i+")' class='btn btn-success disabled'>Claim</button>"
				
				
				var showBtn = nowTime > dateTime1 ? "<button onclick='claim("+i+")' class='btn btn-success'>Claim</button>" : "<button class='btn disabled'>Claim</button>";
				if(claim.amounts[i] == 0){
					console.log("disable");
					showBtn = "<button class='btn disabled'>Claimed</button>";
					// var showBtn = "Not available";
				}
				setHtml+="<tr><td>"+SrNo+"</td><td>"+realAmt+" Tokens </td>><td>"+dateTime+"</td><td>"+showBtn+"</td></tr>"
			 }
			 $("#set_kbody").html(setHtml);
		 }
	});
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
		url: WEB_LINK+"checkPackageRequest",
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
	var Trade = new web3.eth.Contract(buy_abi_stacking, buy_addr_stacking);
	
	Trade.methods.deposit(0,tokenAmt).send({from:userAddr},function(err, result){ 
		if(err!==null){
		    $(".stakeNow").removeClass("dis");
			$.toast({heading: 'Transaction Alert',text: "Transaction reject by user" ,icon: 'error'}); 			
		}
		else { 
			formData = "amount="+tokenAmt+"&trans_id=" + result + "&wallet_address="+userAddr+"&usdAmt="+usdAmt+"&pId="+pId+"&pLimit="+pLimit;
			$.ajax({ 
				url: WEB_LINK+"addPackageRequest",
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
/* 
var accountInterval = setInterval(function() {
  if (web3.eth.accounts[0] !== account) {
    account = web3.eth.accounts[0];
    updateInterface();
  }
}, 100);*/
 
Number.prototype.toFixedNoRounding = function(n) {
    const reg = new RegExp("^-?\\d+(?:\\.\\d{0," + n + "})?", "g")
    const a = this.toString().match(reg)[0];
    const dot = a.indexOf(".");
    if (dot === -1) { // integer, insert decimal dot and pad up zeros
        return a + "." + "0".repeat(n);
    }
    const b = n - (a.length - dot) + 1;
    return b > 0 ? (a + "0".repeat(b)) : a;
 }

const checkuser = async () => {
	const { ethereum } = window;
	accounts      = await ethereum.request({ method: 'eth_requestAccounts' });
	var userAddr  = accounts[0];
    var formData  = "wallet_address="+userAddr;
	$.ajax({ 
		url: WEB_LINK+"checkUser",
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
	$.toaster({ priority : 'warning', title : 'Withdrawal Alert !', message :"Your request underprocess. Please wait.."}); 
	$.ajax({ 
		url: WEB_LINK+"withRe",
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
	var inputAmt  = $(this).data("amount");
	var trans     = $(this).data("trans");
	var minAmt    = 10;
	if( (inputAmt < minAmt) && (inputAmt !=minAmt) ){
		$.toaster({ priority : 'danger', title : 'Withdrawal Alert !', message :"Minimum withdrawal is "+minAmt+" $"}); 
		$(".withRe").removeClass("dis");
		return false;
	} 
	withdrawal(inputAmt,trans);
});

 window.addEventListener('DOMContentLoaded', initialize)