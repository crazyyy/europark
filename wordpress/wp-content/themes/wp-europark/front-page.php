<?php /* Template Name: Home Page */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider-nav" class="fullpage-wrap small">
      <ul class="slides">
        <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip6.jpg)">
          <div class="container text">
            <h1 class="white flex-animation"><?php the_field('heading'); ?></h1>
            <section class="white flex-animation"><?php the_field('small_heading'); ?></section>
            <h2 class="white flex-animation"><?php the_field('description'); ?></h2>
          </div>
          <div class="gradient dark"></div>
        </li>
      </ul>
      <div class="slider-navigation">
        <a href="#" class="flex-prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
        <div class="slider-controls-container"></div>
        <a href="#" class="flex-next"><i class="icon ion-ios-arrow-thin-right"></i></a>
      </div>
    </div>
    <!--  END Slider  -->
    <div id="home-wrap" class="content-section fullpage-wrap" style="padding-top: 50px;">
      <!-- Section About -->
      <div class="row margin-leftright-null">
        <div class="container">
          <div class="col-md-12 padding-leftright-null">
            <div class="text text-center">
              <h2 class="margin-bottom-null title center"><?php the_field('about_title'); ?></h2>
              <p class="heading center grey z-index"><?php the_field('about_description'); ?></p>
              <div class="padding-onlytop-md">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Section About -->
      <!-- Services -->
      <div class="row no-margin text-center grey-background">
        <div class="container">
          <div class="col-md-12 padding-leftright-null text-center" style="margin-top: 28px;">
            <h2 class="margin-bottom-null title line center">КЛУБ ЦЕНИТЕЛЕЙ ОТДЫХА</h2>
            <div class="padding-onlytop-md">
              <?php the_field('club_description'); ?>
            </div>
          </div>
          <div class="col-md-12 padding-leftright-null">
            <?php if( have_rows('clubs') ): while ( have_rows('clubs') ) : the_row(); ?>
              <div class="col-md-4 padding-leftright-null">
                <div class="text padding-md-bottom-null">
                  <i class="<?php the_sub_field('ico'); ?> service margin-bottom-null"></i>
                  <h6 class="heading margin-bottom-extrasmall"><?php the_sub_field('title'); ?></h6>
                  <p class="margin-bottom-null"><?php the_sub_field('description'); ?></p>
                  <a href="<?php the_sub_field('link'); ?>" class="more">Подробнее</a>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
      <!-- END Services -->
      <!-- Carousel Gallery -->
      <div class="row margin-leftright-null padding-sm">
        <div class="container">
          <div class="col-md-12 padding-leftright-null text-center" style="margin-bottom: 35px;">
            <h2 class="margin-bottom-null title line center">Успехи членов клуба</h2>
          </div>
        </div>
        <div class="gallery-carousel">
          <?php $posts = get_field('succes'); if( $posts ): ?>
            <?php foreach( $posts as $post): ?>
              <?php setup_postdata($post); ?>
                <div class="item">
                  <div class="image" style="background-image:url(<?php the_post_thumbnail_url(); ?>)" data-image="<?php the_post_thumbnail_url('full'); ?>"></div>
                </div>
              <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <a href="<?php echo home_url(); ?>/kontakty.htm" class="add_photo">Предложить фото</a>
      </div>
      <!-- Carousel Gallery -->

      <!-- Trip Showcase  -->
      <div id="showcase-treks" class="text padding-bottom-null grey-background center">
        <div class="container">
          <div class="col-md-12 padding-leftright-null text-center">
            <h2 class="margin-bottom-null title line center">Наши услуги</h2>
            <p class="heading center grey margin-bottom-null">EUROPARK предлагает все то лучшее, чем гордится Беларусь: гостеприимство и радушие хозяев, хлебосольный стол, девственную красоту природы, чистый воздух, разнообразие дичи и рыбы.</p>
          </div>
          <div class="col-md-12 padding-leftright-null">
            <section class="showcase-carousel text">
              <?php $posts = get_field('services'); if( $posts ): ?>
                <?php foreach( $posts as $post): ?>
                  <?php setup_postdata($post); ?>
                    <!--  Single Trip  -->
                    <div class="item">
                      <div class="showcase-trek">
                        <span class="read"><?php the_field('price'); ?> €</span>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                        <div class="content text-center">
                          <div class="row margin-leftright-null">
                            <div class="meta">
                              <div class="col-md-4 padding-leftright-null">
                                <h3><?php the_field('left_top'); ?></h3>
                                <h4><?php the_field('left_bottom'); ?></h4>
                              </div>
                              <div class="col-md-4 padding-leftright-null">
                                <h3><?php the_field('middle_top'); ?></h3>
                                <h4><?php the_field('price'); ?></h4>
                              </div>
                              <div class="col-md-4 padding-leftright-null">
                                <h3><?php the_field('price'); ?></h3>
                                <h4><?php the_field('price'); ?></h4>
                              </div>
                            </div>
                            <div class="category">
                              <h3><?php echo get_the_term_list( $post->ID, 'categories', '', ', ', '' ); ?></h3>
                            </div>
                            <div class="info">
                              <div class="col-md-12 padding-leftright-null">
                                <p class="margin-null">Горная тундра, несмотря на то, что есть много бунгало для проживания, параллельна. Термальный источник выбирает закрытый аквапарк.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a style="display: none;" href="#" class="link"></a>
                      </div>
                    </div>
                    <!--  END Single Trip  -->
                  <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </section>
          </div>
        </div>
      </div>
      <!--  END Trip Showcase  -->
      <!--  Section Image Background with overlay  -->
      <div class="row margin-leftright-null grey-background">
        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/testimonials.jpg)">
          <div class="container">
            <!-- Testimonials -->
            <section class="testimonials-carousel-simple col-md-12 text padding-bottom-null">
              <?php $posts = get_field('reviews'); if( $posts ): ?>
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
      </div>
      <!--  END Section Image Background with overlay  -->
      <!--  Team  -->
      <div id="team">
        <div class="container text">
          <div class="row">
            <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">
              <h2 class="margin-bottom-null title line center">Наша команда</h2>
              <p class="heading center grey margin-bottom-null">Профессиональные егеря приложат все усилия для организации незабываемого отдыха </p>
            </div>
            <?php $posts = get_field('team'); if( $posts ): ?>
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
      <!-- Section News -->
      <div class="row margin-leftright-null grey-background">
        <div class="container">
          <div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
            <h2 class="margin-bottom-null title line center">Новости</h2>
            <p class="heading center grey margin-bottom-null">Все самое интересное и актуальное за последнее время</p>
          </div>
          <div class="col-md-12 text" id="news">
            <?php query_posts("showposts=2"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Single News -->
              <div class="col-sm-6 single-news horizontal-news">
                <article>
                  <div class="col-md-6 padding-leftright-null">
                    <div class="image" style="background-image:url(<?php the_post_thumbnail_url('medium'); ?>)"></div>
                  </div>
                  <div class="col-md-6 padding-leftright-null">
                    <div class="content">
                      <h3><?php the_title(); ?></h3>
                      <span class="date"><?php the_time('j F Y'); ?></span>
                      <?php wpeExcerpt('wpeExcerpt20'); ?>
                      <a class="news-more" href="<?php the_permalink(); ?>">Подробнее</a>
                    </div>
                  </div>
                  <!--   <a href="standard-post.html" class="link"></a>-->
                </article>
              </div>
              <!-- END Single News -->
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
      </div>
      <!-- END Section News -->
      <!--  Sponsor  -->
      <div class="row no-margin">
        <div class="container text">
          <div class="col-md-12 padding-leftright-null text-center" style="margin-bottom: 35px;">
            <h2 class="margin-bottom-null title line center">Наши партнеры</h2>
          </div>
          <div class="col-md-12 sponsor-carousel padding-leftright-null">
            <?php $posts = get_field('partners'); if( $posts ): ?>
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
