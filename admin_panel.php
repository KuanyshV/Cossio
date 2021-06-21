<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clothes Shop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: #f6f2f1;">
	<?php
		$additional_class = array("", "", "", "");
		$typeOfQuery;
		$order_status = $_GET['order_status'];
		if (strcmp($order_status, "Ordered") == 0) {
			$typeOfQuery = "Ordered";
			$additional_class[0] = "makeBright";
			$linkStatus = "Delivering";
		}
		elseif (strcmp($order_status, "Delivering") == 0) {
			$typeOfQuery = "Delivering";
			$additional_class[2] = "makeBright";
			$linkStatus = "Delivered";
		}
		elseif (strcmp($order_status, "Delivered") == 0) {
			$typeOfQuery = "Delivered";
			$additional_class[3] = "makeBright";
			$linkStatus = "Done";
		}
	?>
	<style>
		

.information{
	padding-top: 70px;
	padding-bottom: 70px;
}
.changePageButton{
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	width: 80%;
	margin: 0 auto;
	display: block;	
	background-color: rgba(255,255,255,0.35);
	outline: none;
	border: none;
	height: 60px;
}
.changePageButton:hover{
	padding-bottom: 6px;
}
.changePageButton:active{
	padding-bottom: 0px;
}
.first_page{
	width: 100%;
	background-color: #fff;
	border-radius: 5px;
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 40px;
}
.nameOfCourseLabel{
	height: 30px;
	padding-top: 6px;
	padding-left: 20px;
}
.headerTypeOfData{
	font-size: 18px;
}
.infoInput{
	padding-left: 10px;
	height: 30px;
	border: none;
	outline: none;
	width: 70%;
	border-bottom: 1px solid #76405d;
	margin-bottom: 40px;
}
.overflow{
	overflow: hidden;
	height: 670px;
}
.save_button{
	margin-top: 15px;
	outline: none;
	border: none;
	height: 40px;
	width: 180px;
	background-color: #76405d;
	border-radius: 5px;
	color: #fff;
}
.save_button:hover{
	position: relative;
	top: -2px;
}
.second_page{
	width: 100%;
	background-color: #fff;
	border-radius: 5px;
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 40px;
}
.infoInputHeighted{
	border: 1px solid #76405d;
	width: 80%;
	outline: none;
	height: 200px;
	border-radius: 5px;
	padding-top: -100px;
}
.notesForAttestation{

}
.politicsInfo1{
	font-size: 18px;
	height: 200px;
	display: table-cell;
	vertical-align: middle;
	padding-left: 20px;
}
.politicsInfo{
	font-size: 18px;
	height: 70px;
	display: table-cell;
	vertical-align: middle;
	padding-left: 20px;
}
.form-group{
	margin-top: 18px;
	width: 80%;
}
.second_page .headerTypeOfData{
	font-size: 19px;
}
.second_page .save_button{
	margin-top: 50px;
}
.third_page{
	width: 100%;
	background-color: #fff;
	border-radius: 5px;
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 40px;
}
.infoTable{
	width: 100%;
	margin-top: 50px;
}
.infoTable td{
	border: 1px solid #76405d!important;
	width: 16%;
	text-align: center;
	font-size: 20px;
}
.fill_data{
	width: 100%;
	margin-top: 50px;
}
.fill_data td{
	border: 1px solid #76405d!important;
	text-align: center;
	font-size: 20px;
}
.fillInputTable{
	background-color: transparent;
	width: 100%;
	height: 50px;
	border: none;
	outline: none;
	text-align: center;
}
.addTableButton{
	background-color: #76405d;
	color: #fff;
	font-size: 20px;	
	outline: none;
	border: none;
	border-radius: 5px;
	height: 35px;
	width: 35px;
	float: right;
	margin-top: 20px;
}
.addTableButton:hover{
	position: relative;
	top: -2px;
}
.fourth_page{
	width: 100%;
	background-color: #fff;
	border-radius: 5px;
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 40px;
}
.infoInputHeightedProgramm{
	border: 1px solid #76405d;
	width: 80%;
	outline: none;
	height: 80px;
	border-radius: 5px;
	padding-top: -100px;
}
.programm_p{
	padding-top: 26px;
	padding-left: 10px;
	margin-bottom: 50px;
	font-size: 18px;
}
.programm_p_1{
	padding-left: 10px;
	margin-bottom: 50px;
	font-size: 18px;
}
.amountOfCredits{
	border: 1px solid #76405d;
	width: 10%;
	outline: none;
	border-radius: 5px;
	padding-top: -100px;
}
.fifth_page{
	width: 100%;
	background-color: #fff;
	border-radius: 5px;
	padding-left: 30px;
	padding-right: 30px;
	padding-top: 40px;
}
.second_page, .third_page, .fourth_page, .fifth_page{
	display: none;
}
.instructor{
	border: 1px solid #76405d;
	height: 200px;
	border-radius: 5px;
	margin-bottom: 20px;
}
.instructor_img{
	margin-top: 25px;
	margin-left: 20px;
}
.profile_info{
	display: inline-block;
	float: right;
	width: 300px;
	height: 100%;
	padding-top: 30px;
}
#changePageButton1{
	background-color: #fff;
	color: #000;
}
.third_page{
	padding-bottom: 30px;
}
.first_page{
	padding-bottom: 40px;
}

.makeBright{
	background-color: #fff !important;
	color: #000 !important;
}
	</style>
	<script>
		
function showFirst(){
	let first_page = document.getElementById('first_page');
	let second_page = document.getElementById('second_page');
	let third_page = document.getElementById('third_page');
	let fourth_page = document.getElementById('fourth_page');
	let fifth_page = document.getElementById('fifth_page');
	let changePageButton1 = document.getElementById('changePageButton1');
	let changePageButton2 = document.getElementById('changePageButton2');
	let changePageButton3 = document.getElementById('changePageButton3');
	let changePageButton4 = document.getElementById('changePageButton4');
	changePageButton1.style.backgroundColor = '#fff';
	changePageButton1.style.color = '#000';
	changePageButton2.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton2.style.color = 'gray';
	changePageButton3.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton3.style.color = 'gray';
	changePageButton4.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton4.style.color = 'gray';
	first_page.style.display = 'block';
	second_page.style.display = 'none';
	third_page.style.display = 'none';
	fourth_page.style.display = 'none';
	fifth_page.style.display = 'none';
}
function showSecond(){
	let first_page = document.getElementById('first_page');
	let second_page = document.getElementById('second_page');
	let third_page = document.getElementById('third_page');
	let fourth_page = document.getElementById('fourth_page');
	let fifth_page = document.getElementById('fifth_page');
	first_page.style.display = 'none';
	second_page.style.display = 'block';
	third_page.style.display = 'none';
	fourth_page.style.display = 'none';
	fifth_page.style.display = 'none';
	let changePageButton1 = document.getElementById('changePageButton1');
	let changePageButton2 = document.getElementById('changePageButton2');
	let changePageButton3 = document.getElementById('changePageButton3');
	let changePageButton4 = document.getElementById('changePageButton4');
	changePageButton1.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton1.style.color = 'gray';
	changePageButton2.style.backgroundColor = '#fff';
	changePageButton2.style.color = '#000';
	changePageButton3.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton3.style.color = 'gray';
	changePageButton4.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton4.style.color = 'gray';
}
function showThird(){
	let first_page = document.getElementById('first_page');
	let second_page = document.getElementById('second_page');
	let third_page = document.getElementById('third_page');
	let fourth_page = document.getElementById('fourth_page');
	let fifth_page = document.getElementById('fifth_page');
	first_page.style.display = 'none';
	second_page.style.display = 'none';
	third_page.style.display = 'block';
	fourth_page.style.display = 'none';
	fifth_page.style.display = 'none';
	let changePageButton1 = document.getElementById('changePageButton1');
	let changePageButton2 = document.getElementById('changePageButton2');
	let changePageButton3 = document.getElementById('changePageButton3');
	let changePageButton4 = document.getElementById('changePageButton4');
	changePageButton1.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton1.style.color = 'gray';
	changePageButton2.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton2.style.color = 'gray';
	changePageButton3.style.backgroundColor = '#fff';
	changePageButton3.style.color = '#000';
	changePageButton4.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton4.style.color = 'gray';
}
function showFourth(){
	let first_page = document.getElementById('first_page');
	let second_page = document.getElementById('second_page');
	let third_page = document.getElementById('third_page');
	let fourth_page = document.getElementById('fourth_page');
	let fifth_page = document.getElementById('fifth_page');
	
	first_page.style.display = 'none';
	second_page.style.display = 'none';
	third_page.style.display = 'none';
	fourth_page.style.display = 'block';
	fifth_page.style.display = 'none';
	let changePageButton1 = document.getElementById('changePageButton1');
	let changePageButton2 = document.getElementById('changePageButton2');
	let changePageButton3 = document.getElementById('changePageButton3');
	let changePageButton4 = document.getElementById('changePageButton4');
	changePageButton1.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton1.style.color = 'gray';
	changePageButton2.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton2.style.color = 'gray';
	changePageButton3.style.backgroundColor = 'rgba(255,255,255,0.85)';
	changePageButton3.style.color = 'gray';
	changePageButton4.style.backgroundColor = '#fff';
	changePageButton4.style.color = '#000';
}
	</script>
	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<a style="font-size: 25px;color: #000;text-decoration: none;margin-top: 40px;display: inline-block;" href="home-simple.php">Back</a>

				</div>
			</div>
		</div>
	</section>
	<section class="information">
		<div class="container">
			<div class="row">
				<?php 
					echo '<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Ordered" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[0] . ' ">Ordered</button>				
					</div>
				<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Delivering" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[2] . ' ">Delivering</button>
				</div>
				<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Delivered" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[3] . ' ">Delivered</button>
				</div>';
				?>
				
			</div>
			<div class="row">
				<div class="col-lg-12 p-0">
					<div id="first_page" class="first_page">
						<div class="container-fluid">
							<div class="row">
								<?php
								$queryToGetOrders = "SELECT * FROM orders INNER JOIN product ON orders.product_id = product.product_id INNER JOIN users ON orders.user_id = users.user_id WHERE status = '$typeOfQuery'";
								$result = $connect->query($queryToGetOrders);
								while($row = $result->fetch_assoc()){
									$rows[] = $row;
								}
								for($i = 0; $i < count($rows); $i++){
									echo '<div class="col-lg-6">
									<p>Full Name: ' . $rows[$i]['firstName'] . ' ' . $rows[$i]['lastName'] . '</p>
									<p>Adress: ' . $rows[$i]['address'] . '</p>
									<p>Ordered:</p>
									<img width="200px" src="' . $rows[$i]['image'] . '" alt="">
									<p>' . $rows[$i]['name'] . '</p>
									<p style="width: 200px;">Change status to:</p><a style="background-color: #76405d;color: #fff;display: inline-block;margin-bottom: 40px;" class="btn" 
									href="change_status.php?order_id=' . $rows[$i]['order_id'] . '&changeStatusTo=' . $linkStatus . '&user_id=' . $rows[$i]['user_id'] . '">' . $linkStatus .'</a>
									</div>';
								}
								?>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<script src="../js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<!-- <table>
	<tr>
		<td>Ячейка на две строки</td>
		<td>Ячейка 2х2</td>
		<td>Ячейка 2х3</td>
	</tr>
	<tr>
		<td>Ячейка 3х2</td>
		<td>Ячейка 3х3</td>
	</tr>
	<tr>
		<td>Ячейка на две строки</td>
		<td>Ячейка 4х2</td>
		<td>Ячейка 4х3</td>
	</tr>
	<tr>
		<td>Ячейка 5х2</td>
		<td>Ячейка 5х3</td>
	</tr>
</table> -->