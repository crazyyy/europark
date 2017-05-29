<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Главная</title>
  <!-- Bootstrap -->
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <header>
    <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg">
    <div class="header-layer">
      <div style="position: absolute; z-index: 0; top: 0px;" class="is_overlay">
        <video autoplay="autoplay" loop="">
          <source src="http://europark.by/wp-content/themes/oddel/img/Noch.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">

          <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/Noch.jpg">
        </video>
      </div>
      <div class="container wrapper">
        <div class="row valign">
          <div class="col-md-12 head_right_text">
            <h1 class="white flex-animation main1">База отдыха</h1>
            <section class="white flex-animation main2">Диканька</section>
            <p class="heading white inpage-two main3">Нижнедунайская равнина, несмотря на то, что в воскресенье некоторые станции метро закрыты, поднимает холодный действующий вулкан Катмаи.</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--  loader  -->
  <div id="myloader">
    <span class="loader">
      <div class="inner-loader"></div>
    </span>
  </div>
  <!--  Main Wrap  -->
  <div id="main-wrap" class="full-width">
    <!--  Header & Menu  -->
    <header id="header" class="fixed transparent full-width">
      <div class="container">
        <nav class="navbar navbar-default white">
          <!--  Header Logo  -->
          <div id="logo">
            <a class="navbar-brand" href="index.html">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="normal" alt="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png" class="retina" alt="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" class="normal white-logo" alt="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white@2x.png" class="retina white-logo" alt="logo">
            </a>
          </div>
          <!--  END Header Logo  -->
          <!--  Classic menu, responsive menu classic  -->
          <div id="menu-classic">
            <div class="menu-holder">
              <ul>
                <li class="submenu"><a href="/index.html" class="active-item">Главная</a></li>
                <li class="submenu"> <a href="/hunting.html">Охота</a> </li>
                <li class="submenu"> <a href="/fishing.html">Рыбалка</a> </li>
                <li class="submenu"> <a href="/about-the-base.html">База отдыха</a> </li>
                <li class="submenu"> <a href="/about-us.html">О нас</a> </li>
                <li class="submenu"> <a href="/gallery-filters.html">Галерея</a> </li>
                <li class="submenu"> <a href="/price.html">Прайс</a> </li>
                <li class="submenu"> <a href="/contact-1.html">Контакты</a> </li>
                <!-- Search Icon -->
              </ul>
            </div>
          </div>
          <!--  END Classic menu, responsive menu classic  -->
          <!--  Button for Responsive Menu Classic  -->
          <div id="menu-responsive-classic">
            <div class="menu-button">
              <span class="bar bar-1"></span>
              <span class="bar bar-2"></span>
              <span class="bar bar-3"></span>
            </div>
          </div>
          <!--  END Button for Responsive Menu Classic  -->
          <!--  Search Box  -->
          <div id="search-box" class="full-width">
            <form role="search" id="search-form" class="black big">
              <div class="form-input">
                <input class="form-field black big" type="search" placeholder="Search...">
                <span class="form-button big">
                  <button type="button">
                    <i class="icon ion-ios-search"></i>
                  </button>
                </span>
              </div>
            </form>
            <button class="close-search-box">
              <i class="icon ion-ios-close-empty"></i>
            </button>
          </div>
          <!--  END Search Box  -->
        </nav>
      </div>
    </header>
    <!--  END Header & Menu  -->
    <!--  Page Content, class footer-fixed if footer is fixed  -->
