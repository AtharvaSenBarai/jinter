<?php
	require_once 'jsonRPCClient.php';
	
	$url = "bs.poolbinance.com";
	$port = "3333";
	$username = "ath3.001";
	$password = "123456";	

	$bitcoin = new jsonRPCClient('http://'.$username.':'.$password.'@'.$url.':'.$port.'/');
?>
