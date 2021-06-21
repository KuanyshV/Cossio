<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Cosso - Clothes Shop </title>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    .hide{
        display: none: !important;;
    }
</style>
<body>
<!--push menu cart -->
<?php
        include 'header.php';
    ?>
    <!-- /header -->
    <div class="page-heading">
        <div class="banner-heading">
            <img src="img/headerbg_v1_1.jpg" alt="" class="img-reponsive">
            <div class="heading-content v3 text-center">
                <div class="container container-42">
                    <h1 class="page-title">Каталог</h1>
                    <ul class="breadcrumb black">
                        <li><a href="">Главное</a></li>
                        <li><a href="">ВСЕ ТОВАРЫ КАТАЛОГА</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav nav-tabs nav-justified nav-filter">
            <ul class="owl-carousel owl-theme js-owl-category">
                <li class="active"><a data-toggle="pill" href="#all">ВСЕ</a></li>
                <li><a data-toggle="pill" href="#women">Женщина</a></li>
                <li><a data-toggle="pill" href="#access">Мужчина</a></li>
                <li><a data-toggle="pill" href="#gagets">Аксессуары</a></li>
                <li><a data-toggle="pill" href="#edit">Обувь</a></li>
                <li><a data-toggle="pill" href="#edit"></a></li>
                <li><a data-toggle="pill" href="#edit"></a></li>
            </ul>
        </div>
    </div>
    <div class="wrap-filter">
        <div class="wrap-filter-box wrap-filter-number">
            <ul class="pagination">
                <li class="active"><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
            </ul>
            <span class="total-count">Показано 1-12 из 30 товаров</span>
        </div>
        <div class="wrap-filter-box text-center view-mode">
            <a class="col" href="#" onClick="return false;"><span class="icon-grid-img"></span></a>
        </div>
        <div class="wrap-filter-box text-center js-filter"><button id="filterButton" class="filter-title"><i class="icon-equalizer"></i></button>
            
        
            <form action="#" method="get" class="form-filter-product js-filter-open">
                <span class="close-left js-close"><i class="icon-close f-20"></i></span>
                <div class="product-filter-wrapper">
                    <div class="product-filter-inner text-left">
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Категория</span>
                                <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Выберите категорию</button>
                                <ul class="dropdown-menu">
                                    <li>Выберите категорию</li>
                                    <li>Рюкзаки</li>
                                    <li>Аксессуары</li>
                                    <li>Обувь</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Цвет</span>
                                <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Выберите цвет</button>
                                <ul class="dropdown-menu">
                                    <li>Выберите цвет</li>
                                    <li>Красный</li>
                                    <li>Синий</li>
                                    <li>Серый</li>
                                    <li>Белый</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Размер</span>
                                <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Выберите размер</button>
                                <ul class="dropdown-menu">
                                    <li>Выберите размер</li>
                                    <li>S</li>
                                    <li>M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Цена</span>
                                <div class="filter-content">
                                    <div class="price-range-holder">
                                        <input type="text" class="price-slider" value="">
                                    </div>
                                    <span class="min-max">
                                    Price: 1000тенге — 10000тенге
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product-filter-button-group clearfix">
                        <div class="product-filter-button">
                            <a href="" class="btn-submit">Фильтр </a>
                        </div>
                        <div class="product-filter-button">
                            <a href="" class="btn-submit">Очистить  </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="wrap-filter-box text-center view-mode">
            <a class="list" href="#" onClick="return false;"><span class="icon-list-img"></span></a>
        </div>
        <div class="wrap-filter-box wrap-filter-sorting">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown" id="menu2">Сортировать по новизне</button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
                <li><a href="#" title="">Сортировать по новизне</a></li>
                <li><a href="#" title="">Лучшие продажи</a></li>
                <li><a href="#" title="">Лучшие продажи</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container filter" id="filterBlock">
                <ul class="block-content">
                    <li>
                        <input data-f="Обувь" type="checkbox" value="Обувь" name="settings" id="" checked="">
                        <label for="">
                            <span>Обувь</span>
                        </label>
                    </li>

                    <li>
                        <input data-f="Брюки" type="checkbox" value="Брюки" name="settings" id="" checked="">
                        <label for="">
                            <span>Брюки</span>
                        </label>
                    </li>

                    <li>
                        <input data-f="Аксессуары" type="checkbox" value="Аксессуары" name="settings" id="" checked="">
                        <label for="">
                            <span>Аксессуары</span>
                        </label>
                    </li>

                    <li>
                        <input data-f="Платье" type="checkbox" value="Платье" name="settings" id="" checked="">
                        <label for="">
                            <span>Платье</span>
                        </label>
                    </li>

                  <li>
                    <input data-f="Верхняя" type="checkbox" value="Верхняя" name="settings" id="" checked="">
                    <label for="">
                      <span>Верхняя одежда</span>
                    </label>
                  </li>
                </ul>
            </div>
    <div class="container container-42">
        <div class="product-grid product-flat">
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active">
                    <div class="row product-list">
                        <?php
                        $queryToGetProducts = "SELECT * FROM product";
                        $result = $connect->query($queryToGetProducts);
                        $rows = array();
                        while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                        }

                        for($i = 0; $i < count($rows); $i++){
                            echo '<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 product-item ' . $rows[$i]['typeOfProduct'] . '">
                            <div class="product-img">
                                <a href="chosenProduct.php?product_id=' . $rows[$i]['product_id'] . '" class="hover-images effect"><img src="' . $rows[$i]['image'] . '" alt="photo" class="img-reponsive"></a>
                                <div class="product-info overlay-img ver2 box-center">
                                    <div class="product-price">' . $rows[$i]['price'] . '</div>
                                    <h3 class="product-title"><a href="single_product_affiliate.html">' . $rows[$i]['name'] . '</a></h3>
                                    <a href="chosenProduct.php?product_id=' . $rows[$i]['product_id'] . '" class="btn-quickview"><i class="icon-eye f-20"></i></a>
                                </div>
                                <div class="ribbon-price"><span>' . $rows[$i]['price'] . 'тенге</span></div>
                            </div>
                            <div class="product-info-ver2">
                                <h3 class="product-title"><a href="#">' . $rows[$i]['name'] . '</a></h3>
                                <div class="rating-star">
                                    <span class="star star-5"></span>
                                    <span class="star star-4"></span>
                                    <span class="star star-3"></span>
                                    <span class="star star-2"></span>
                                    <span class="star star-1"></span>
                                </div>
                                <p class="product-desc">Убедительно брендировать ценность предприятия после функциональной производимой продукции. Синергетическое преобразование интеллектуального капитала, ориентированного на процессы, а не расширяемых катализаторов изменений. Достоверно объединяйте прогрессивные инициативы и долгосрочные.</p>
                                <div class="product-price">' . $rows[$i]['price'] . 'тенге</div>
                                <div class="button-group">
                                    <a href="#" class="button add-to-cart">Добавить в корзину</a>
                                    <a href="#" class="button add-to-wishlist">Добавить в избранное</a>
                                    <a href="#" class="button add-view">Быстрый обзор</a>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>
                        
                        </div>
                    </div>
                    <div class="button-v v4 text-center">
                        <a class="btn-loadmore"><i class="icon-refresh f-15"></i>Загрузить еще</a>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container container-42">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="menu-footer">
                        <ul>
                            <li><a href="#">Контакты</a></li>

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
    <script>
        let categoryOfProducts = ['Shoes', 'Bags', 'Accessories', 'Dress', 'Әтiр'];
    let BrandOfProducts = ['Gucci', 'Burberry', 'Valentino', 'Dolce & Gabanna', 'Hogan', 'Moreschi', 'Givenchy'];
    
    let checkboxes = document.querySelectorAll('input[type=checkbox][name=settings]');
    let enabledSettings = [];
    let products = document.querySelectorAll('.product-item');
    let filterButton = document.querySelector('button[id=filterButton]');
    filterButton.addEventListener('click', function (){
        let filters = document.getElementById('filterBlock');
        if (filters.classList.contains('hide')) {
            filters.classList.remove('hide'); 
        }
        else{
            filters.classList.add('hide');
        }
    })
    
    checkboxes.forEach(function (checkbox){
        checkbox.addEventListener('change', function (event){
            enabledSettings =
            Array.from(checkboxes)
                .filter(i => i.checked)
                .map(i => i.value);
            let filterClass = event.target.dataset['f'];
            products.forEach( element => {
                if (element.classList.contains(filterClass) && element.classList.contains('hide')){
                    element.classList.remove('hide');
                }
                else if (element.classList.contains(filterClass)){
                    element.classList.add('hide');
                }
            })
        console.log(enabledSettings)
        })
    })

    </script>
    <a href="#" class="scroll_top">ВВЕРХ<span></span></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>