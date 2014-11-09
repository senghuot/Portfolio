<?php
	session_start();
	
	//get multiple rows from database
	function getRows($query){
		try{
			$db = new PDO("mysql:dbname=senghuot_senghuotlim", "senghuot", "H@tt1890");
			
		} catch (PDOException $e){
			throw new pdoDbException($e);	
		}
		return $db->query($query);
	}
	
	function getUserIP(){
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
	
		if(filter_var($client, FILTER_VALIDATE_IP))
			$ip = $client;
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
			$ip = $forward;
		else
			$ip = $remote;	
		return $ip;
	}

	
?>