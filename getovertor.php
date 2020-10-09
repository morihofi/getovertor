<?php
/*
GetOverTor(); - Function
==================================

Prerequisites:
	- Tor must be installed
	- Tor must be run as daemon
	
How to use:
	GetOverTor("http://xyzabc.onion"); - Returns the source from "xyzabc.onion"

Github: https://github.com/morihofi/getovertor/
*/



function GetOverTor($url){

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:9050"); // Note the address here is just `IP:port`, not an HTTP URL.
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5_HOSTNAME); // Note use of `CURLPROXY_SOCKS5_HOSTNAME`.
$output = curl_exec($ch);
$curl_error = curl_error($ch);
curl_close($ch);

//print_r($output);
//print_r($curl_error);

if (empty($curl_error)){
	
	$returnstr = $output;
}else{
	
	$returnstr = "curl Error: ".$curl_error." \n\n".$output;
}

return $returnstr;

}



?>
