<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Clothes Shop</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
</head>

<body>
<!--push menu cart -->
<?php
        include 'header.php';
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin-bottom: 60px;margin-top: 40px;">Payment</h1>
            </div>
    <!-- /header -->
    <?php 
    $user_id = $_SESSION['user_id'];
    $basket_id = $_GET['basket_id'];
    $queryToGetResult = "SELECT * FROM basket INNER JOIN product ON product.product_id = basket.product_id WHERE user_id = '$user_id' and basket_id = $basket_id";
    //$queryToGetResult = "SELECT * FROM book WHERE book_id = '$search_string'";
    $result = $connect->query($queryToGetResult);
    $available = "";
    $row = $result->fetch_assoc();
    //echo $rows[1]['download_link'] . "";
        echo '
            
            <div class="col-lg-3">
                <img style="width: 200px;" src="' . $row['image'] . '" alt="">
            </div>
            <div style="padding-top: 40px;padding-left: 30px;" class="col-lg-8">
                <p style="font-size: 20px;">' . $row['name'] . '</p>
                <p style="display: inline-block;">Total: </p>
                <p style="font-size: 18px;color: #ff4545;display: inline-block">' . 
                ($row['price'] * $row['amount'])  . ' тг.</p>
                <p>Amount: ' . $row['amount'] . '</p>
                <p>Size: ' . $row['size'] . '</p>
                <br>
            </div>
            <hr>';
            echo '
        </div>
        <div class="row">
            <div class="col-lg-5">    ';
    $paymentAmount = ($row['price'] * $row['amount']) + 900;
            echo "  <h4 style='margin-top:30px;font-size: 25px;'>Please send the order amount to this card.<br>
            Card number: 5169 4971 5277 3044<br>
            Shipping amount 900 тг.<br>
            Payment amount: " . $paymentAmount . " тг.
            <br>And upload a check</h4></div>
        ";
    ?>

                <div class="col-lg-3">
                    <form action="order.php?product_id=<?php echo $row['product_id']."&amount=".$row['amount']."&size=".$row['size'];?>" method="POST" enctype="multipart/form-data">
                        <input class="btn btn-light" type="file" name="fileForUpload">
                        <button class="btn btn-warning" type="submit">Paid up</button>
                    </form>
                </div>
            </div></div>
</section>

        <!--slide-->
        <footer>
            <div class="container container-42">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="menu-footer">
                            <ul>
                                <li><a href="#">Доставка</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="newletter-form">
                            <h3 class="footer-title text-center">Новостная рассылка</h3>
                            <form action="#">
                                <input type="text" name="s" placeholder="Почта..." class="form-control">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="social">
                            <a href="#" title="twitter">
                            <i class="fa fa-instagram"></i>
                        </a>
                                    
                            <a href="#" title="google plus">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                                                                              <a href="#" title="rss">
                            <i class="fa fa-vk"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--end footer-->
    </div>
    <a href="#" class="scroll_top">Вверх<span></span></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>