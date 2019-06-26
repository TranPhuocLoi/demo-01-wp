<!doctype html>
<html lang="en" <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="author" content="">
  <meta name="keywords" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/lib/images/logo.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen"
    href="<?php echo get_template_directory_uri()?>/lib/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_template_directory_uri()?>/lib/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_template_directory_uri()?>/lib/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_template_directory_uri()?>/lib/plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/lib/css/slider.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/lib/css/plugin.scss.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/lib/css/base.scss.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/lib/css/style.scss.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/lib/css/home-page.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <!-- <?php var_dump( get_template_directory_uri())?> -->
  <!-- <?php wp_head(); ?> -->
  <!-- <script>
  // conditionizr.com
  // configure environment tests
  conditionizr.config({
    assets: '<?php echo get_template_directory_uri(); ?>',
    tests: {}
  }); -->
  </script>
</head>

<body>
  <main class="medisan-web">
    <div class="op_login "></div>
    <!-- header -->
    <section class="header">
      <div class="container-fluid">
        <div class="row add-border">
          <div class="container">
            <div class="row">
              <div class="top-header">
                <div class="col-md-8 col-lg-9 head-title">
                  <span>Chào mừng bạn đến với Phòng Khám Đa Khoa Quốc Tế Medisan!</span>
                </div>
                <div class="col-md-4 col-lg-3 head-icon">
                  <ul class="list-inline ">
                    <li>
                      <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://plus.google.com/?hl=vi">
                        <i class="fab fa-google-plus-g"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com">
                        <i class="fab fa-youtube"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="header-main">
            <div class="row header-items">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                <div class="logo">
                  <a href="#" class="logo-wrapper ">
                    <img src="<?php echo get_template_directory_uri()?>/lib/images/home/logo.png" alt="logo Medisan">
                  </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-12 col-sm-9 hidden-xs hidden-sm">
                <div class="service_head">
                  <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-4 col-xs-12 add-padding-0">
                      <div class="wrapper">
                        <div class="img-header">
                          <img src="<?php echo get_template_directory_uri()?>/lib/images/home/icon_head_1.png"
                            data-lazyload="" alt="ico" />
                        </div>
                        <div class="content-header">
                          <p>Địa chỉ phòng khám:</p>
                          <span>Tầng 6 Ladeco, 266 Đội Cấn, Hà Nội, Việt Nam</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 add-padding-0">
                      <div class="wrapper">
                        <div class="img-header">
                          <img src="<?php echo get_template_directory_uri()?>/lib/images/home/icon_head_2.png"
                            data-lazyload="" alt="ico" />
                        </div>
                        <div class="content-header">
                          <p>Giờ làm việc:</p>
                          <span>8h00 - 21h00, thứ 2 - CN (Kể cả lễ, Tết)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 add-padding-0">
                      <div class="wrapper">
                        <div class="img-header">
                          <img src="<?php echo get_template_directory_uri()?>/lib/images/home/icon_head_3.png"
                            data-lazyload="" alt="ico" />
                        </div>
                        <div class="content-header">
                          <p>Hotline tư vấn:</p>
                          <a href="tel:18006750">1800 6750</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="container-fluid bg-navbar">
        <div class="row">
          <div class="container nav-header active-m-0">
            <div class="row">
              <nav class="navbar navbar-expand-lg custom-nav ">
                <div class="search_menu">
                  <div class="search_inner">
                    <i class="fa fa-search"></i>
                    <div class="search-box">
                      <div class="header_search search_form">
                        <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                          <input type="search" name="query" value="" placeholder="Tìm kiếm dịch vụ... "
                            class="input-group-field st-default-search-input search-text" autocomplete="off">
                          <span class="input-group-btn">
                            <button class="btn icon-fallback-text">
                              <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active hvr-underline-from-left">
                      <a class="nav-link" href="#">Trang chủ </a>
                    </li>
                    <li class="nav-item hvr-underline-from-left">
                      <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown hvr-underline-from-left">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hạng mục điều trị
                      </a>
                      <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item hvr-underline-from-left" href="#">Bệnh tim mạch</a>
                        <a class="dropdown-item hvr-underline-from-left" href="#">Bệnh thận</a>
                      </div>
                    </li>
                    <li class="nav-item hvr-underline-from-left">
                      <a class="nav-link " href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item hvr-underline-from-left">
                      <a class="nav-link " href="#">Bảng giá dịch vụ</a>
                    </li>
                    <li class="nav-item dropdown hvr-underline-from-left">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tin tức
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item hvr-underline-from-left" href="#">Kỹ thuật hiện đại</a>
                        <a class="dropdown-item hvr-underline-from-left" href="#">Dịch vụ tiêu biểu</a>
                        <a class="dropdown-item hvr-underline-from-left" href="#">Sức khỏe sinh sản</a>
                        <a class="dropdown-item hvr-underline-from-left" href="#">Nhịp cầu nhân ái</a>
                      </div>
                    </li>
                    <li class="nav-item hvr-underline-from-left">
                      <a class="nav-link " href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">

                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    <div class="container-fluid background-navbar p-0 m-0">
      <div class="row m-0 p-0">
        <div class="container nav-header reset-width p-0">
          <div class="row m-0">
            <div class="wrapper-header">
              <!-- search -->
              <div class="search_menu">
                <div class="search_inner">
                  <i class="fa fa-search"></i>
                  <div class="search-box">
                    <div class="header_search search_form">
                      <form class="input-group search-bar search_form" action="/search" method="get" role="search">
                        <input type="search" name="query" value="" placeholder="Tìm kiếm dịch vụ... "
                          class="input-group-field st-default-search-input search-text" autocomplete="off">
                        <span class="input-group-btn">
                          <button class="btn icon-fallback-text">
                            <i class="fa fa-search"></i>
                          </button>
                        </span>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- btn -->
              <button class="meunu-toggler" type="button" data-toggle="collapse-show-hidden"
                data-target="#navbarSupported">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
              </button>
              <div class="wrapper-menu collapse-show-hidden" id="#navbarSupported">
                <?php echo wp_nav_menu();?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>