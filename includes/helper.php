<?php
	session_start();
	
	//get multiple rows from database
	function getRows($query){
		try{
			$db = new PDO("mysql:dbname=senghuot_senghuotlim", "root", "root");
		} catch (PDOException $e){
			throw new pdoDbException($e);	
		}
		return $db->query($query);
	}
	

	
?>