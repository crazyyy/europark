<?php /* Template Name: About The Base */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
      <ul class="slides">
        <?php $image = get_field('header_image');  ?>
        <li style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container text text-center">
            <h1 class="white flex-animation"><?php the_title(); ?></h1>
            <section class="white flex-animation">Диканька</section>
            <p class="heading white inpage-two"><?php the_field('heading'); ?></p>
          </div>
          <div class="gradient dark"></div>
        </li>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      </ul>
    </div>
    <!--  END Slider  -->
    <div id="post-wrap" class="content-section fullpage-wrap">
      <div class="row margin-leftright-null">
        <div class="container">
          <div class="col-md-12 text padding-bottom-null text-center">
            <h2 class="margin-bottom-null title line center"> О базе отдыха</h2>
          </div>
          <div class="col-lg-8 padding-leftright-null">
            <div data-responsive="parent-height" data-responsive-id="adv" class="text padding-lg-bottom-null text-p20">
              <div class="padding-onlytop-md">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4 padding-leftright-null">
            <div data-responsive="parent-height" data-responsive-id="adv" class="lake-style">
              <div class="">
                <?php $image = get_field('header_image');  ?>
                <img class="img1" src="<?php echo $image['url']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Description Trek -->
      <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
      <div class="row margin-leftright-null grey-background">
        <div class="container">
          <div class="col-md-12 text padding-bottom-null text-center">
            <h2 class="margin-bottom-null title line center"> <?php the_field('block_check_title'); ?></h2>
            <?php the_field('block_check_description'); ?>
          </div>
          <div class="col-lg-6 padding-leftright-null">
            <div data-responsive="parent-height" data-responsive-id="adv" class="text padding-lg-bottom-null text-p20">
              <div class="padding-onlytop-md">
                <ul class="done2">
                  <?php if( have_rows('block_check_list_left') ): while ( have_rows('block_check_list_left') ) : the_row(); ?>
                    <li><?php the_sub_field('item'); ?></li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 padding-leftright-null">
            <div data-responsive="parent-height" data-responsive-id="adv" class="text padding-lg-bottom-null text-p20">
              <div class="padding-onlytop-md">
                <ul class="done2">
                  <?php if( have_rows('block_check_list_right') ): while ( have_rows('block_check_list_right') ) : the_row(); ?>
                    <li><?php the_sub_field('item'); ?></li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Description Trek -->
      <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
      <div id="page-wrap" class="content-section fullpage-wrap">
        <div class="container">
          <div class="col-md-12 text padding-bottom-null text-center mb60">
            <h2 class="margin-bottom-null title line center">Фотогалерея</h2>
            <p class="heading center grey margin-bottom-null"></p>
          </div>
        </div>
        <!--  Gallery Section  -->
        <section id="gallery" data-isotope="load-simple">
          <div class="masonry-items equal four-columns" style="position: relative; height: 600px;">
            <?php $images = get_field('gallery'); if( $images ): ?>
              <?php foreach( $images as $image ): ?>
                <!--  Lightbox trek -->
                <div class="one-item">
                  <div class="image-bg" style="background-image:url(<?php echo $image['sizes']['thumbnail']; ?>)"></div>
                  <div class="content figure">
                    <i class="pd-icon-camera"></i>
                    <a href="<?php echo $image['sizes']['large']; ?>" rel="lightbox" class="link lightbox"></a>
                  </div>
                </div>
                <!--  END Lightbox trek -->
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </section>
        <!--  END Gallery Section  -->
      </div>
      <div id="share">
        <a class="share-btn">
          <i class="icon ion-android-share-alt"></i>
        </a>
        <div class="share-icons" style="display:none">
          <a href="" class="share-google">
            <i class="fa fa-google-plus" aria-hidden="true"></i>
          </a>
          <a href="" class="share-twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="" class="share-linkedin">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
          <a href="" class="share-mail">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <!--  END Share Btn  -->
      <!-- Similar Trips -->
      <!-- END Similar Trips -->
      <?php get_template_part('include-calltoaction'); ?>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <!--  END Page Content, class footer-fixed if footer is fixed  -->

<?php get_footer(); ?>
