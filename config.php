<?php
	$server_name = "localhost";
	$database_username = "root";
	$database_password = "";
	$database_name = "cossio";

	$connect = new mysqli($server_name, $database_username, $database_password, $database_name);

	if($connect->connect_error){
		echo "ERROR";
	}
	if(session_id() == '') {
    	session_start();
	}
?>