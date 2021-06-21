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
    <section style="margin-top: 100px;margin-bottom: 100px;" class="blogers">
        <div class="container">
            

                <?php
                $bloger_id = $_GET['bloger_id'];
                $queryToGetResult = "SELECT * FROM post INNER JOIN blogers ON post.bloger_id = blogers.bloger_id WHERE post.bloger_id = $bloger_id";
                //$queryToGetResult = "SELECT * FROM book WHERE book_id = '$search_string'";
                $result = $connect->query($queryToGetResult);
                $rows = array();
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                for($i = 0; $i < count($rows); $i++){
                    echo '<div class="row"><div class="col-lg-4">
                    <div class="wrapperOfNews">
                        <a class="wrapperOfImage" href=""><img class="newsImage" style="height: 300px;" src="' . $rows[$i]['image'] . '" alt=""></a>
                        <div class="wrapperOfText">
                            <a href="" class="categoryOfNews">' . $rows[$i]['category'] . '</a>
                            <p class="DateOfPublish">' . $rows[$i]['firstName'] . ' ' . $rows[$i]['lastName'] . '</p>
                            <a href="<%= news.value[i].url %>" class="headerOfNews">' . $rows[$i]['title'] . '</a>
                        </div>
                    </div>
                </div></div>';
                
                }
                ?>
                
            
        </div>
    </section>

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin-bottom: 60px;margin-top: 40px;">Basket</h1>
            </div>
            <div class="col-lg-4">
                    <div class="wrapperOfNews">
                        <a class="wrapperOfImage" href="<%= news.value[i].url %>"><img class="newsImage" style="height: 300px;" src="<%= news.value[i].image.url %>" alt=""></a>
                        <div class="wrapperOfText">
                            <a href="" class="categoryOfNews">Technology</a>
                            <p class="DateOfPublish"><%= news.value[i].datePublished %></p>
                            <a href="<%= news.value[i].url %>" class="headerOfNews"><%= news.value[i].title %></a>
                        </div>
                    </div>
                </div>
        </div>
    </div> -->
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