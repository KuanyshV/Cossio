<?php
    include 'config.php';
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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
</head>

<body>
<!--push menu cart -->
    <?php
        include 'header.php';
    ?>
    <!-- /header -->
        <!--slide-->
        <div class="slider-homesimple">
            <div class="container container-42">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                        <div class="text-center js-homesimple-slider">
                            <div class="slider-img ">
                                <img src="img/homesimple_1.jpg" alt="" class="img-responsive">
                                <div class="slider-content text-center">
                                    <h3>Распродажа сезона</h3>
                                    <a href="">Закажи сейчас</a>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--endslide-->
        <div class="product-category space-padding-tb-50">
            <div class="container container-42">
                <div class="owl-carousel owl-theme js-owl-category">
                    <div class="box-category-item">
                        <div class="box-category text-center">
                            <img src="img/shirt.png" alt="" class="img-reponsive">
                            <div class="box-category-name">
                                <a href="">Мужчина</a>
                            </div>
                        </div>
                    </div>
                    <div class="box-category-item">
                        <div class="box-category text-center">
                            <img src="img/dress.png" alt="" class="img-reponsive">
                            <div class="box-category-name">
                                <a href="">Женщина</a>
                            </div>
                        </div>
                    </div>
                    <div class="box-category-item">
                        <div class="box-category text-center">
                            <img src="img/high-heel.png" alt="" class="img-reponsive">
                            <div class="box-category-name">
                                <a href="">Обувь</a>
                            </div>
                        </div>
                    </div>

                    <div class="box-category-item">
                        <div class="box-category text-center">
                            <img src="img/circular-eyeglasses.png" alt="" class="img-reponsive">
                            <div class="box-category-name">
                                <a href="">Аксессуары</a>
                            </div>
                        </div>
                    </div>
                    <div class="box-category-item">
                        <div class="box-category text-center">
                            <img src="img/kid.png" alt="" class="img-reponsive">
                            <div class="box-category-name">
                                <a href="">Дети</a>
                            </div>
                        </div>
                    </div>
                    </div>
                                   
                           "                                                                 </div>
        <!--wrapper product-->
        <div class="wrapper-product">
            <div class="container container-42">
                <ul class="product-tab space-v1">
                     <li class="active"><a data-toggle="tab" href="#bestseller">Бестселлеры</a></li>
                    
<li><a data-toggle="tab" href="#new-product">Новинки</a></li>
                </ul>
                <div class="tab-content">
                    <div id="new-product" class="tab-pane fade in active">
                        <div class="product-box product-flat">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 box-left">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_3.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_4.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_2.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 box-right">
                                    <div class="col-xs-12 col-sm-12  col-md-12">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_1.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_5.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_6.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-v v5 text-center">
                                <a class="btn-loadmore"><i class="icon-refresh f-15"></i>Загрузить еще</a>
                            </div>
                        </div>
                    </div>
                    <div id="bestseller" class="tab-pane fade">
                        <div class="product-box product-flat">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 box-left">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_3.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            
<div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_4.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_2.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 box-right">
                                   
 <div class="col-xs-12 col-sm-12  col-md-12">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_1.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_5.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_6.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-v v5 text-center">
                                <a class="btn-loadmore"><i class="icon-refresh f-15"></i>Загрузить еще</a>
                            </div>
                        </div>
                    </div>
                    <div id="sale" class="tab-pane fade">
                        <div class="product-box product-flat">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 box-left">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_3.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_4.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">  Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_2.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#"> Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 box-right">
                                    <div class="col-xs-12 col-sm-12  col-md-12">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_1.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_5.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер  </a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="product-img">
                                            <a href="#" class="hover-images effect"><img src="img/homesimplepd_6.jpg" alt="photo" class="img-reponsive"></a>
                                            <div class="product-info overlay-img ver2 box-center">
                                                <h3 class="product-title"><a href="#">Пуловер</a></h3>
                                                <a href="#" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                            </div>
                                            <div class="ribbon-price ver2"><span>10000 тенге</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-v v5 text-center">
                                <a class="btn-loadmore"><i class="icon-refresh f-15"></i> Загрузить еще</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end wrapper product-->
                <!-- footer -->
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
</body>

</html>