<?php
	require 'config.php';
	

	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));

	$authorizationing = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = $connect->query($authorizationing);

	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['firstName'] = $row["firstName"];
		$_SESSION['lastName'] = $row["lastName"];
		$_SESSION['email'] = $row["email"];
		//echo "SUCCES";
		//echo $_SESSION['user_id'] . "<br>" . $_SESSION['first_name'] . "<br>" . $_SESSION['last_name'];
	} 
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	exit;
?>

