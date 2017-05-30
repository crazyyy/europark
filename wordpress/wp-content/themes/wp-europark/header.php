<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

  <?php if (is_page('101')) { ?>
    <?php get_template_part('include-header'); ?>
  <?php }; ?>

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
            <?php query_posts("page_id=101"); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                  <?php $image = get_field('logo'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" class="normal" alt="logo">
                  <?php endif; ?>
                  <?php $image = get_field('logo2x'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" class="retina" alt="logo">
                  <?php endif; ?>
                  <?php $image = get_field('logo_white'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" class="normal white-logo" alt="logo">
                  <?php endif; ?>
                  <?php $image = get_field('logo_white2x'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" class="retina white-logo" alt="logo">
                  <?php endif; ?>
                </a>
              <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
          </div>
          <!--  END Header Logo  -->
          <!--  Classic menu, responsive menu classic  -->
          <div id="menu-classic">
            <div class="menu-holder">
              <?php wpeHeadNav(); ?>
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

