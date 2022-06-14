<?php
	require_once 'jsonRPCClient.php';
	
	$url = "stratum+tcp://bs.poolbinance.com:3333";
	$port = "3333";
	$username = "ath3.001";
	$password = "123456";	

	$bitcoin = new jsonRPCClient('http://'.$username.':'.$password.'@'.$url.':'.$port.'/');
?>
