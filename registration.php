<?php
	include_once 'config.php';

	$first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
	$last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));
	$confirm_password = md5(filter_var(trim($_POST['confirm_password']), FILTER_SANITIZE_STRING));
	$telephone = filter_var(trim($_POST['telephone']), FILTER_SANITIZE_STRING);
	$home_adress = filter_var(trim($_POST['home_adress']), FILTER_SANITIZE_STRING);


	
	$registring = "INSERT INTO users (firstName, lastName, email, password, telephone, address)
	VALUES ('$first_name', '$last_name', '$email', '$password', '$telephone', '$home_adress')";
	
	if($connect->query($registring)){
		$authorizationing = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$result = $connect->query($authorizationing);
		if($result->num_rows == 1){
			$row = $result->fetch_assoc();
			$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['firstName'] = $row["firstName"];
		$_SESSION['lastName'] = $row["lastName"];
		$_SESSION['email'] = $row["email"];
		} 
	}
	
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	exit;
	
	$connect->close();

?>