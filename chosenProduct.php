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
<div class="pushmenu pushmenu-left cart-box-container">
    <div class="cart-list">
        <span class="close-left js-close">x</span>
        <h3 class="cart-title">Your Cart</h3>
        <div class="nocart-list">
            <div class="empty-cart">
                <h4 class="nocart-title">No products in the cart.</h4>
                <a href="" class="btn-shop btn-arrow">Start shopping</a>
            </div>
        </div>
        <div class="cart-bottom">
            <a href="#" class="text">Our Shipping & Return Policy</a>
        </div>
        <!-- End cart bottom -->
    </div>
</div>
<!-- End cart -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">SEARCH HERE</h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <form method="get" class="searchform" action="/search" role="search">
                        <input type="hidden" name="type" value="product">
                        <input type="text" name="q" class="form-control control-search">
                        <span class="input-group-btn">
                              <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="fa fa-search"></i></button>
                            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="chosenProduct">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>

<!--END  Modal content-->
<div class="wrappage">
    <header id="header" class="header-v1">
        <div class="sticky-header text-center hidden-xs hidden-sm">
            <div class="text">
                <span class="u-line">Бесплатная доставка</span> на сумму боллее 50.000ТГ
            </div>
        </div>
        <div class="topbar">
            <div class="container container-40">
                <div class="topbar-left">
                    <div class="topbar-option">
                        <div class="topbar-account">
                            <a href="login.html"><i class="icon-user f-15"></i></a>
                        </div>
                        <div class="topbar-wishlist">
                            <a href="#">
                                <i class="icon-heart f-15"></i>
                                <span class="count wishlist-count">0</span>
                            </a>
                        </div>
                        <div class="topbar-language dropdown">
                            <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                <span>RU</span>
                                <span class="fa fa-caret-down f-10"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="label1">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Vietnamese</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end topbar-option-->
                </div>
                <!--end topbar-left-->
                <div class="logo hidden-xs hidden-sm">
                    <a href="" title="home-logo"><img src="img/cosre.png" alt="logo" class="img-reponsive"></a>
                </div>
                <!--end logo-->
                <div class="topbar-right">
                    <div class="topbar-option">
                        <div class="topbar-currency dropdown">
                            <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                <span>KZT</span>
                                <span class="fa fa-caret-down f-10"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="label2">
                                <li><a href="#">KZT</a></li>
                                <li><a href="#">RUB</a></li>
                            </ul>
                        </div>
                        <div class="topbar-search">
                            <div class="search-popup dropdown" data-toggle="modal" data-target="#myModal">
                                <a href="#"><i class="icon-magnifier f-15"></i></a>
                            </div>
                        </div>
                        <div class="topbar-cart">
                            <a href="#" class="icon-cart">
                                <i class="icon-basket f-15"></i>
                                <span class="count cart-count">0</span>
                            </a>
                        </div>
                    </div>
                    <!--end topbar-option-->
                </div>
                <!--end topbar-right-->
            </div>
        </div>
        <div class="header-top">
            <div class="container container-40">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="logo-mobile hidden-lg hidden-md">
                            <a href="" title="home-logo"><img src="img/cosre.png" alt="logo" class="img-reponsive"></a>
                        </div>
                        <!--end logo-->
                        <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-menu"></span>
                        </button>
                        <nav class="navbar main-menu">
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav js-menubar">
                                    <li class="level1 active dropdown"><a href="home-simple.php">Главное</a>
                                        <span class="plus js-plus-icon"></span>

                                    </li>
                                    <li class="level1 dropdown hassub"><a href="shop_flat.php">Каталог</a>
                                        <span class="plus js-plus-icon"></span>
                                        <div class="menu-level-1 dropdown-menu">

                                            <div class="clearfix"></div>
                                        </div>
                                    </li>



                                    <li class="level1 active dropdown">
                                        <a href="#">Блогеры</a>
                                        <span class="plus js-plus-icon"></span>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <?php
        $product_id = $_GET['product_id'];
        $queryToGetProduct = "SELECT * FROM product WHERE product_id = '$product_id'";
        $result = $connect->query($queryToGetProduct);
        $row;
        if($result){
            $row = $result->fetch_assoc();
        }
      ?>
     <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <img src="<?php echo $row['image']; ?>" alt="" />
        </div>
        <div class="thumbnails">
          <div class="thumbnail">
            <img src="" alt="" />
          </div>
          <div class="thumbnail">
            <img src="" alt="" />
          </div>
          <div class="thumbnail">
            <img src="" alt="" />
          </div>
          <div class="thumbnail">
            <img src="" alt="" />
          </div>
        </div>
      </div>

      <div class="right">
        <span></span>
        <h1><?php echo $row['name']; ?></h1>
        <div class="price"><?php echo $row['price']; ?> тг.</div>
        <form action="addToBasket.php?user_id=<?php echo $_SESSION['user_id'] ?>" method="post">
          <div>
            <input type="text" style="display: none;" value="<?php echo $row['product_id']; ?>" name="product_id">
            <select name="size" style="height: 40px;border-radius: 3px;">
              <option value="Select Size">
                Select Size
              </option>

              <option value="32">32</option>
              <option value="42">42</option>
              <option value="52">52</option>
              <option value="62">62</option>
            </select>
            <span><i class="fas fa-chevron-down"></i></span>
          </div>
          <input type="number" style="padding-left: 20px;width: 60px;height: 40px;border-radius: 3px;border: 1px solid black;" name="amount" value="1">
          <button type="submit" class="addCart" style="outline:none;border:none;
          font-size: 17px;cursor: pointer; background-color: #ff4545;color: #ffffff;border-radius: 5px;
          padding: 10px 20px;display: block;margin-top: 20px;">Add to cart</button>
        </form>
        <h3>Product Detail</h3>
        <p><?php echo $row['description']; ?></p>
      </div>
    </div>
    <main class="main-profile">
        <div class="container">
                <form class="form" action="addReview.php?<?php echo "product_id=" . $row['product_id'] . "&" . "user_id=" . $_SESSION['user_id']?>" method="POST">
                        <textarea placeholder="Leave your review here..." class="textOfReview" type="text" name="textOfReview"></textarea>
                        <button class="leaveReviewButton" type="submit">Send</button>
                </form>
        </div>
    </main>
    <main class="main-profile">
        <div class="container">
                <?php
                    $query_to_select = "SELECT * FROM review INNER JOIN users ON review.user_id = users.user_id WHERE product_id = " . $row['product_id'];
                    $result = $connect->query($query_to_select);
                    $rows = array();
                    while($row = $result->fetch_assoc()){
                        $rows[] = $row;
                    }
                    for($i = 0; $i < count($rows); $i++){
                        echo "<div class=\"shadow_wrapper3\">
                        <p class=\"usernameLeftReview\">" . $rows[$i]['firstName'] . " " . $rows[$i]['lastName'] . "</p>
                        <p class=\"textOfReviewLeft\">" . $rows[$i]['textOfReview'] . "</p>
                        <p class=\"timeOfLeft\" style=\"float: right;\">" . $rows[$i]['timeOfLeft'] . "</p>
                        </div>";
                    }
                ?>
        </div>
    </main>

   
    



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>