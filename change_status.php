<?php
	include 'config.php';
  $changeStatusTo = $_GET['changeStatusTo'];
  $order_id = $_GET['order_id'];
  $user_id = $_SESSION['user_id'];
  //echo $changeStatusTo . "<br>" . $order_id;
  if (strcmp($changeStatusTo, "Done") == 0) {
    $queryToDelete = "DELETE FROM orders WHERE order_id = '$order_id'";
    $result = $connect->query($queryToDelete);
  }
  else{
    $queryToGetOrders = "UPDATE orders SET status = '$changeStatusTo' WHERE order_id = '$order_id' and user_id = '$user_id'";
    $result2 = $connect->query($queryToGetOrders);
    if (!$result2) {
      printf("Сообщение ошибки: %s\n", $connect->error);
    }
  }
?>