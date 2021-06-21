<?php
	include 'config.php';
	$product_id = $_POST['product_id'];
	$size = $_POST['size'];
	$amount = $_POST['amount'];
	$user_id = $_SESSION['user_id'];
	$queryToAddBasket = "INSERT INTO basket (product_id, user_id, size, amount) VALUES ($product_id, $user_id, $size, $amount)";
	$result = $connect->query($queryToAddBasket);
	if ($result) {
		$previousPage = $_SERVER["HTTP_REFERER"];
		header('Location: '.$previousPage);
		exit;
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
?>