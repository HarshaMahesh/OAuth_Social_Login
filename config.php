<?php

	session_start();
	require_once "Facebook/autoload.php";
	
	$FB=new \Facebook\Facebook([
		'app_id' => '503387063837150',
		'app_secret' => 'fc213a17e2f2a14cf736d0a6d58014b3',
		'default_graph_version' => 'v2.10'
	]);  
	
	$helper=$FB->getRedirectLoginHelper();
	
?>