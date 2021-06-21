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
                        <?php
                            if (isset($_SESSION['user_id'])) {
                                echo '<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    ' . $_SESSION['firstName'] .'
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#"> ' . $_SESSION['firstName'] .  ' ' . $_SESSION['lastName'] . '</a></li>
    <li><a class="dropdown-item" href="myOrders.php">My Orders</a></li>
    <li><a class="dropdown-item" href="admin_panel.php?order_status=Ordered">Admin Panel</a></li>
    <li><a class="dropdown-item" href="quit.php">Quit</a></li>

  </ul>
</div>';
                            }
                            else{
                                echo '<div class="topbar-account">
                            <a href="login.php"><i class="icon-user f-15"></i></a>
                        </div>';
                            }

                        ?>
                        
                        <div class="topbar-wishlist">
                            <a href="#">
                                <i class="icon-heart f-15"></i>
                                <span class="count wishlist-count">0</span>
                            </a>
                        </div>
                        <div class="topbar-language dropdown">
                            <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button"
                             aria-haspopup="true" aria-expanded="false">

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
                            <a href="myBasket.php" class="icon-cart">
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
                                        <a href="blogers.php">Блогеры</a>
                                        <span class="plus js-plus-icon"></span>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>