<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Upload</title>


    <meta name="description" content="----">

    <meta name="keywords" content="Premium HTML Template">

    <meta name="author" content="HTMLmate">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css-include -->

    <!-- boorstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- themify-icon.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- light-box -->
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.css">
    <!-- video css -->
    <link rel="stylesheet" type="text/css" href="assets/css/video.min.css">
    <!-- menu.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- responsive.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">


</head>


<body>
    <div id="preloader"></div>
    <!-- Start of nav bar 
		============================================= -->
    <nav id="poppin-nav">
        <div id="nav-off"></div>
        <div id="header-logo-1" class="text-center">
            <a href="#"><img src="assets/img//logo/logo.png" alt="img"></a>
        </div>
        <ul id="menu">
            <li class="has-submenu text-capitalize">
                <a href="index.html">Home</a>
            </li>
            <li><a href="contact.html">Souvenir</a></li>
            <li class="has-submenu"><a href="#">About us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="menu-overlay"></div>
    <!-- End of nav bar 
		============================================= -->



    <!-- Start of header
		============================================= -->
    <header id="site-header" class="not-stuck">
        <div class="container">
            <div class="row">
                <div id="header-logo">
                    <a href="#"><img src="assets/img//logo/logo.png" alt="img"></a>
                </div>

                <div id="menu-burger" class="pull-right not-stuck">
                    <div id="menu-bar">
                        <span class="icon-bar top"></span>
                        <span class="icon-bar middle"></span>
                        <span class="icon-bar bottom"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header
		============================================= -->





    <!-- Start of page head section
		============================================= -->
    <section id="page-head" class="page-head-section">
        <div class="page-head-overlay"></div>
        <div id="page-head-effect" class="page-head-effect">
            <canvas id="demo-canvas"></canvas>
        </div>
        <!-- // page-head-style -->
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <div class="page-head-content">
                        <div class="page-head-title text-capitalize pb40">
                            <h1>Omiya.jp</h1>
                            <a href="index.html">Home</a>
                            <span class="descrip"> - My Page</span>
                        </div>
                        <!-- //title -->

                        <div class="page-head-social">
                            <div class="social-title text-uppercase">
                                <span>menu</span>
                            </div>
                            <!-- //title -->
                            <div class="page-head-social-item ul-li">
                                <ul class="page-head-social-list">
                                    <li><a href="index.html"><span><i class="fas fa-home"></i></span></a></li>
                                    <li><a href="souvenir.html"><span><i class="fas fa-gifts"></i></span></a></li>
                                    <li><a href="favorite.html"><span><i class="far fa-heart"></i></span></a></li>
                                    <li><a href="register.html"><span><i class="far fa-user"></i></span></a></li>
                                </ul><!-- /.page-head-social-list -->
                            </div><!-- /.page-head-social-item -->
                        </div>
                        <!-- /.page-head-social -->
                    </div>
                    <!-- /.page-head-content -->
                </div>
            </div><!--  /.row-->
        </div><!--  /.container -->
    </section>
    <!-- End of page head section
		============================================= -->
    <br><br><br><br>

    <div class="container">
        <div class="card mx-auto" style="width: 50%; margin: auto;">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Brand name</label>
                        <input type="text" name="brand_name" class="form-control">
                        <label for="">Shop name</label>
                        <input type="text" name="shop_name" class="form-control">
                        <label for="">Area</label>
                        <select name="place" id="place" class="form-control">
                            <?php
                            $place = array('All area', 'Hokkaido', 'Aomori', 'Iwate', 'Miyagi', 'Akita', 'Yamagata', 'Fukushima', 'Ibaraki', 'Tochigi', 'Gunma', 'Saitama', 'Chiba', 'Tokyo', 'Kanagawa', 'Niigata', 'Toyama', 'Ishikawa', 'Fukui', 'Yamanashi', 'Nagano', 'Gifu', 'Shizuoka', 'Aichi', 'Mie', 'Shiga', 'Kyoto', 'Osaka', 'Hyogo', 'Nara', 'Wakayama', 'Tottori', 'Shimane', 'Okayama', 'Hitoshima', 'Yamaguchi', 'Tokushima', 'Kagawa', 'Ehime', 'Kochi', 'Fukuoka', 'Saga', 'Nagasaki', 'Kumamoto', 'Oita', 'Miyazaki', 'Kagoshima', 'Okinawa');

                            foreach ($place as $place) {
                                print('<option value = "' . $place . '">' . $place . '</option>');
                            }
                            ?>
                        </select>
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control">
                        <label for="">Tastes</label>
                        <input type="text" name="tastes" class="form-control">
                        <label for="">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="all">All</option>
                            <option value="food">Food</option>
                            <option value="sweets">sweets</option>
                            <option value="clothe">Clothe</option>
                            <option value="goods">Goods</option>
                        </select>
                        <div class="custom-file">
                            <label for="">Select files</label>
                            <input type="file" name="picture" class="custom-file-input" >
                        </div>
                        <label for="">Commnet</label>
                        <textarea name="comment" id="comment" cols="68" rows="10"></textarea>
                        <button type="submit" name="upload" class="btn btn-primary block-right">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

        require_once 'assets/php/user.php';
        $user = new User;

        if(isset($_POST["upload"])){
            $brandName = $_POST["brand_name"];
            $shopName = $_POST["shop_name"];
            $area = $_POST["place"];
            $price = $_POST["price"];
            $tastes = $_POST["tastes"];
            $category = $_POST["category"];
            $picture = $_FILES['picture']['name'];
            $comment = $_POST["comment"];

            $dir = 'assets/img/uploads/';
            $target_file = $dir . basename($_FILES["picture"]["name"]);

            $ans = $user->uploadPost($brandName,$shopName,$area,$price,$tastes,$category,$picture,$comment);

            if($ans){
                move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
            }else{
                echo "Error";
            }
        }
    
    ?>







    <!-- Start of footer section
		============================================= -->
    <footer>
        <div class="footer-area footer-2">
            <div class="container">
                <div class="row">
                    <div class="copy-right-area text-center">
                        <div class="page-head-social-item ul-li">
                            <ul class="page-head-social-list">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                <li><a href="#"><span class="ti-google"></span></a></li>
                                <li><a href="#"><span class="ti-instagram"></span></a></li>
                            </ul><!-- /.page-head-social-list -->
                        </div>
                        <span>© puppin 2018 - All Rights Reserved </span>
                    </div>
                    <!-- //copy-right-area -->
                </div><!--  /.container -->
            </div><!--  /.row-->
        </div><!--  /.footer-area -->
    </footer>
    <!-- End of footer section
		============================================= -->



    <!--  Js Library -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <!-- Include  for bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Include isotope Js -->
    <script src="assets/js/jquery.isotope.min.js"></script>
    <!-- Include lightbox -->
    <script src="assets/js/lightbox.js"></script>
    <!-- Include circle-effect.js -->
    <script src="assets/js/circle-effect.js"></script>
    <!-- Include Video js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Include Owl-carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Include Counter up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>



    <!-- Include script.js -->
    <script src="assets/js/script.js"></script>


</body>

</html>