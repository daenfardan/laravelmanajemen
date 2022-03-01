<!doctype html>
<html class="no-js" lang="en,id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="Fardan Abdillah">
    <!-- description -->
    <meta name="description" content="Manajemen">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- title -->
    <title>Manajemen UIN SGD Bandung</title>
    <!-- favicon -->
    <link rel="icon" href="images/fav-icon.ico">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.min.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css"/>
    <!-- cube Portfolio -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
    <!-- revolution slider -->
    <link rel="stylesheet" href="revolution/css/settings.css"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
    <!-- bundle css -->
    <link rel="stylesheet" href="css/core.css"/>
    <!-- style -->
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="css/orange.css"/>
    <script src="https://kit.fontawesome.com/1beff9acae.js"></script>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav">

<div id="loader">
    <div class="loader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>

<!-- start header -->
<header class="header-with-topbar">

    <div class="top-header-area bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 xs-no-padding-lr text-right xs-text-center hidden-xs hidden-sm" aria-hidden="true">
                    <a href="https://salam.uinsgd.ac.id/" class="text-white xs-width-100 text-small">Portal Salam</a>
                    <div class="separator-line-verticle-large bg-extra-light-gray display-inline-block hidden-xs position-relative vertical-align-middle margin-5px-lr"></div>
                    <a href="https://wisuda.uinsgd.ac.id/login.php" class="text-white xs-width-100 text-small">Daftar Wisuda</a>
                    <div class="separator-line-verticle-large bg-extra-light-gray display-inline-block hidden-xs position-relative vertical-align-middle margin-5px-lr"></div>
                    <a href="https://sapa.uinsgd.ac.id/" class="text-white xs-width-100 text-small">Portal Sapa</a>
                    <div class="separator-line-verticle-large bg-extra-light-gray display-inline-block hidden-xs position-relative vertical-align-middle margin-5px-lr"></div>
                    <a href="https://lc.uinsgd.ac.id/" class="text-white xs-width-100 text-small">Pusat Bahasa</a>
                    <div class="separator-line-verticle-large bg-extra-light-gray display-inline-block hidden-xs position-relative vertical-align-middle margin-5px-lr"></div>
                    <a href="https://ict.uinsgd.ac.id/" class="text-white xs-width-100 text-small">ICT</a>
                    <div class="separator-line-verticle-large bg-extra-light-gray display-inline-block hidden-xs position-relative vertical-align-middle margin-5px-lr"></div>
                    <a href="https://skpi.uinsgd.ac.id/" class="text-white xs-width-100 text-small">SKPI</a>
                </div>
            </div>
        </div>
    </div>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent bg-transparent nav-box-width nav_line">
        <div class="container nav-header-container">
            <div class="row">
                <div class="col-md-2 col-xs-5">
                    <a href="{{ url('/rumah') }}" title="Logo" class="logo scroll"><img src="images/logo.png" class="logo-dark default"></a>
                </div>
                <!-- end logo -->
                <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right hidden-sm hidden-xs">
                    <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                            data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <li class="active">
                                <a href="{{ url('/rumah#home') }}" class="scroll">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/rumah#fitur') }}" class="scroll">Fitur</a>
                            </li>
                            <li>
                                <a href="#profil" class="scroll">Profil</a>
                            </li>
                            <li>
                                <a href="#akademik" class="scroll">Akademik</a>
                            </li>
                            <li>
                                <a href="#jurnal" class="scroll">Jurnal</a>
                            </li>
                            <li>
                                <a href="#publisher" class="scroll">Publisher</a>
                            </li>
                            <li>
                                <a href="#stakeholder" class="scroll">Stakeholder</a>
                            </li>
                            <li>
                                <a href="#blog" class="scroll">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-5 width-auto sm-width-15 xs-width-20 no-padding-left">
                    <div class="header-searchbar">
                        <a href="#search-header" title="Search" class="header-search-form"><i class="fa fa-search search-button"></i></a>
                        <!-- search input-->
                        <form id="search-header" method="post" action="#." name="search-header" class="search-form-result mfp-hide">
                            <div class="search-form position-relative">
                                <button type="submit" class="fa fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div>
                <!--side nav -->
                <div id="menu_bars" class="right menu_bars">
                    <span class="t1"></span>
                    <span class="t2"></span>
                    <span class="t3"></span>
                </div>
                <div class="sidebar_menu">
                    <nav class="pushmenu pushmenu-right">
                        <a class="push-logo" href="#."><img src="images/logo-blue-white.png" alt="logo"></a>
                        <div class="medium-icon side-nav-social-icon list-inline">
                            <a class="facebook-bg-hvr" href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a>

                            <a class="pinterest-bg-hvr" href="#."><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>

                            <a class="instagram-bg-hvr" href="#."><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <ul class="push_nav centered">
                            <li class="clearfix">
                                <a href="#home" class="scroll"><span>01.</span>Home</a>

                            </li>
                            <li class="clearfix">
                                <a href="#feature" class="scroll"> <span>02.</span>Fitur</a>

                            </li>
                            <li class="clearfix">
                                <a href="#about" class="scroll"> <span>03.</span>Profil</a>

                            </li>
                            <li class="clearfix">
                                <a href="#work" class="scroll"> <span>04.</span>Akademik</a>

                            </li>

                            <li class="clearfix">
                                <a href="#price" class="scroll"> <span>05.</span>Jurnal</a>

                            </li>
                            <li class="clearfix">
                                <a href="#blog" class="scroll"> <span>06.</span>Blog</a>

                            </li>
                            <li class="clearfix">
                                <a href="#contact" class="scroll"> <span>07.</span>Contact</a>

                            </li>

                        </ul>

                        <p class="push-bottom text-white text-small">Manajemen Universitas Sunan Gunung Djati Bandung</p>
                    </nav>
                </div>
            </div>
        </div>
    </nav>

</header>
<!-- end header -->
@yield('container')

<!--footer Start-->
<footer class="bg-extra-dark-gray padding-30px-tb text-center">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="medium-icon social-icon-style-3 social_icon list-inline margin-20px-top">
                    <a class="facebook text-white facebook-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="#."><i class="fa fa-facebook"
                                                                                                                     aria-hidden="true"></i><span></span></a>
                    <a class="twitter text-white twitter-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-twitter"
                                                                                                                     aria-hidden="true"></i><span></span></a>
                    <a class="pinterest text-white pinterest-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="#."><i class="fa fa-pinterest-p"
                                                                                                                       aria-hidden="true"></i><span></span></a>
                    <a class="google text-white google-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-google"
                                                                                                                   aria-hidden="true"></i><span></span></a>
                </div>
            </div>
            <p class="text-white text-large margin-10px-bottom margin-20px-top">Manajemen Universitas Islam Negeri Sunan Gunung Djati Bandung</p>
            <p class="text-light-gray margin-10px-bottom">Made With Love by Fardan Abdillah</p>
        </div>
    </div>

</footer>
<!-- end footer -->

<!-- javascript libraries -->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.min.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- fancybox -->
<script src="js/jquery.fancybox.min.js"></script>
<!-- wow -->
<script src="js/wow.js"></script>
<!-- parallax -->
<script src="js/parallaxie.min.js"></script>
<!-- equal hieght -->
<script src="js/jquery.matchHeight-min.js"></script>
<!-- text-rotate -->
<script src="js/morphext.min.js"></script>
<!-- text-rotate -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- revolution -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- revolution extension -->
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- setting -->
<script src="js/main.js"></script>

</body>
</html>