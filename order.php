<?php
	include 'config.php';
	$file = $_FILES['fileForUpload'];
	$fileTmpName = $_FILES['fileForUpload']['tmp_name'];
	$fileName = $_FILES['fileForUpload']['name'];
	move_uploaded_file($fileTmpName, 'checks/' . $fileName);
	$product_id = $_GET['product_id'];
	$size = $_GET['size'];
	$amount = $_GET['amount'];
	$user_id = $_SESSION['user_id'];
	$queryToGetProduct = "SELECT * FROM product WHERE product_id = $product_id";
	$result = $connect->query($queryToGetProduct);
	$row = $result->fetch_assoc();
	$queryToOrder = "INSERT INTO orders (product_id, user_id, status, size, amount) VALUES ($product_id, $user_id, 'Ordered', $size, $amount)";
	if ($connect->query($queryToOrder)) {
		$connect->query("DELETE FROM basket WHERE user_id = $user_id and product_id = $product_id");
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: myOrders.php');
	exit;
?>