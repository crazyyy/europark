<?php /* Template Name: About Us */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
      <ul class="slides">
        <?php $image = get_field('header_image'); ?>
        <li style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container text text-center">
            <h1 class="white margin-bottom-small inpage"><?php the_title(); ?></h1>
            <p class="heading white inpage-two"><?php the_field('description'); ?></p>
          </div>
          <div class="gradient dark"></div>
        </li>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      </ul>
    </div>
    <!--  END Slider  -->
    <div id="home-wrap" class="content-section fullpage-wrap">
      <!-- Services -->
      <div class="row no-margin text-center grey-background" id="au">
        <div class="container">
          <div class="col-md-12 padding-leftright-null text-center" style="margin-top: 35px;">
            <h2 class="margin-bottom-null title line center">О НАС</h2>
          </div>
          <div class="col-md-12 padding-leftright-null">
            <div class="col-md-6 padding-leftright-null">
              <div class="text padding-md-bottom-null">
                <?php the_content(); ?>
              </div>
            </div>
            <div class="col-md-6 padding-leftright-null">
              <div class="text padding-md-bottom-null">
                <?php $image = get_field('image_description'); ?>
                <img class="about-img" src="<?php echo $image['url']; ?>">
              </div>
            </div>
            <div style="clear: both;"></div>
            <div class="col-md-6 padding-leftright-null">
              <div class="text padding-md-bottom-null">
                <?php $image = get_field('image_content_right'); ?>
                <img class="about-img" src="<?php echo $image['url']; ?>">
              </div>
            </div>
            <div class="col-md-6 padding-leftright-null">
              <div class="text padding-md-bottom-null">
                <?php the_sub_field('description_second'); ?>
                <p class="bold-b">В лесах хозяйства EUROPARK обитают дикие животные и птицы: <b>лось, кабан, косуля, волк, лисица, енотовидная собака, заяц, бобр, глухарь, тетерев, утка, вальдшнеп</b>. В наших водоемах водятся различные виды рыб: <b>сом, судак, щука, окунь, лещ, угорь, красноперка, плотва, язь, густера, ёрш, голавль, селява и жерех</b>. Леса богаты грибами и ягодами.</p>
                <p class="bold-b">Профессиональная егерская служба хозяйства устроит для Вас незабываемую охоту или рыбалку, наши специалисты организуют Ваш приезд ― позаботятся о необходимой документации, визах, страховке, предоставят по необходимости трансфер. </p>
                <p class="bold-b">Повара угостят традиционными белорусскими блюдами, а также деликатесами из свежей рыбы и дичи.</p>
              </div>
            </div>
            <div style="clear: both;"></div>
            <div class="text" style="padding-top: 0;">
              <?php the_sub_field('description_wide'); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- END Services -->
      <!--  Team  -->
      <div id="team">
        <div class="container text">
          <div class="row">
            <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">
              <h2 class="margin-bottom-null title line center">Наша команда</h2>
              <p class="heading center grey margin-bottom-null">Профессиональные егеря приложат все усилия для организации незабываемого отдыха </p>
            </div>

            <?php $posts = get_field('team', 101); if( $posts ): ?>
              <?php foreach( $posts as $post): ?>
              <?php setup_postdata($post); ?>
                <div class="col-md-4 single-person">
                  <div class="content">
                    <img src="<?php the_post_thumbnail_url('small'); ?>" alt="">
                    <ul class="social">
                      <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                      <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                      <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                      <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                    </ul>
                  </div>
                  <div class="description text-center">
                    <h5><?php the_title(); ?></h5>
                    <h6><?php the_field('post'); ?></h6>
                  </div>
                </div>
                <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
      <!--  END Team  -->
      <!-- Section Image Background with overlay -->
      <div class="bg-img overlay simple-parallax responsive" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/testimonials.jpg)">
        <div class="container">
          <!-- Testimonials -->
          <section class="testimonials-carousel-simple col-md-12 text padding-bottom-null">
            <?php $posts = get_field('reviews', 101); if( $posts ): ?>
              <?php foreach( $posts as $post): ?>
                <?php setup_postdata($post); ?>
                  <div class="item padding-leftright-null">
                    <div class="padding-top-null padding-bottom-null">
                      <blockquote class="margin-bottom-small white"><?php wpeExcerpt('wpeExcerpt200'); ?><em class="small grey-light"><?php the_title(); ?></em></blockquote>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </section>
          <!-- END Testimonials -->
        </div>
      </div>
      <!--  END Section Image Background with overlay  -->
      <!-- Showcase Trip -->
      <!-- END Showcase Trip -->
      <!--  Sponsor  -->
      <div class="row no-margin">
        <div class="container text">
          <div class="col-md-12 padding-leftright-null text-center" style="margin-bottom: 35px;">
            <h2 class="margin-bottom-null title line center">Наши партнеры</h2>
          </div>
          <div class="col-md-12 sponsor-carousel padding-leftright-null">
            <?php $posts = get_field('partners', 101); if( $posts ): ?>
            <?php foreach( $posts as $post): ?>
              <?php setup_postdata($post); ?>
                <div class="item">
                  <img class="center" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!--  Sponsor  -->
    </div>
  </div>
  <?php endwhile; endif; ?>
  <!--  END Page Content, class footer-fixed if footer is fixed  -->

<?php get_footer(); ?>
