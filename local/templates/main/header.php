<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);
?>

<!doctype html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">

<head>
    <?$APPLICATION->ShowHead();?>
	
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
	
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
	<?
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/gijgo.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/nice-select.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/flaticon.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slicknav.css');
	
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
	
	?>
	
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	
	<!-- JS here -->
	
	<?
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-3.5.0.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery-1.12.4.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/popper.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/isotope.pkgd.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/ajax-form.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/waypoints.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.counterup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/imagesloaded.pkgd.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scrollIt.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.scrollUp.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/wow.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/gijgo.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/nice-select.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.slicknav.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/js/plugins.js');
	?>
	
	<!--contact js-->
	<?
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/contact.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.ajaxchimp.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.form.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.validate.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mail-script.js');
	
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
	?>
	
 	
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
<?$APPLICATION->ShowPanel();?>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="header_bottom_border">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">Главная</a></li>
                                            <li><a href="catalog/index.php">Меню</a></li>
                                            <li><a href="#">О ресторане <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="about/index.php">О нас</a></li>
                                                    <li><a href="about/contact.php">Контакты</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="reviews/index.php">Отзывы</a></li>
                                            <li><a href="events/index.php">Мероприятия</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="events/index.php">Наши мероприятия</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
	
	<!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Ресторан "Морская кухня"</h3>
                                <a href="/catalog/index.php" class="boxed-btn3">Наше меню</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Ресторан "Морская кухня"</h3>
                                <a href="/catalog/index.php" class="boxed-btn3">Наше меню</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Ресторан "Морская кухня"</h3>
                                <a href="catalog/index.php" class="boxed-btn3">Наше меню</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->