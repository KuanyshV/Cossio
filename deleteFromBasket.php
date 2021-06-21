<?php
	include 'config.php';
	$basket_id = $_GET['basket_id'];
	$user_id = $_SESSION['user_id'];
	$queryToServer = "DELETE FROM basket WHERE basket_id = '$basket_id' and user_id = '$user_id'";
	if ($result = $connect->query($queryToServer)) {
		
	}
	else{
		printf("Сообщение ошибки: %s\n", $mysqli->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: ' .$previousPage);
	exit;
?>