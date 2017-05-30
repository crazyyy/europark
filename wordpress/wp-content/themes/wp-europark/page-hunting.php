<?php /* Template Name: Hunting */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
      <ul class="slides">
        <?php $image = get_field('header_image');  ?>
        <li style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container text text-center">
            <h1 class="white margin-bottom-small inpage"><?php the_title(); ?></h1>
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
            <h2 class="margin-bottom-null title line center"> Об охотничьем хозяйстве</h2>
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
                <ul class="done">
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
                <ul class="done">
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
      <div class="row margin-leftright-null grey-background">
        <?php $image = get_field('block_service_image');  ?>
        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container">
            <div class="col-md-12 text padding-bottom-null text-center">
              <h2 class="margin-bottom-null title line center color_white"><?php the_field('block_service_title'); ?></h2>
              <p class="heading center grey margin-bottom-null color_white"><?php the_field('block_service_description'); ?></p>
            </div>
            <!-- Trek data -->
            <div class="text trek-data text-center" id="p1">
              <div class="col-md-1"></div>

              <?php if( have_rows('block_service_list') ): while ( have_rows('block_service_list') ) : the_row(); ?>
                <div class="col-sm-4 col-md-2">
                  <i class="icon <?php the_sub_field('block_service_ico'); ?> service white"></i>
                  <em class="color"><?php the_sub_field('block_service_content'); ?></em>
                </div>
              <?php endwhile; endif; ?>

              <div class="col-md-1"></div>
              <div style="clear: both;"></div>
            </div>
            <!-- END Trek data -->
          </div>
        </div>
      </div>
      <div class="row margin-leftright-null">
        <div class="container">
          <div class="col-md-12 text padding-bottom-null text-center">
            <h2 class="margin-bottom-null title line center"><?php the_field('block_double_title'); ?>
            <a target="_blank" href="<?php echo $file['url']; ?>" class="add_photo calenar">Календарь</a>
          </div>
          <!-- About -->
          <div class="col-lg-6 padding-leftright-null">
            <div data-responsive="parent-height" data-responsive-id="adv" class="text padding-lg-bottom-null">
              <div class="padding-onlytop-md">
                <?php the_field('block_double_left'); ?>
              </div>
            </div>
          </div>
          <!-- END About -->
          <div class="col-lg-6 padding-leftright-null">
            <div data-responsive="parent-height" data-responsive-id="adv" class="text padding-lg-bottom-null">
              <div class="padding-onlytop-md">
                <?php the_field('block_double_right'); ?>
              </div>
            </div>
          </div>
        </div>
        <a href="<?php echo home_url(); ?>/prajs.htm" class="show-price">Ознакомиться с прайсом</a>
      </div>
      <div class="row margin-leftright-null grey-background">
        <div class="container">
          <div class="col-md-12 text padding-bottom-null text-center">
            <h2 class="margin-bottom-null title line center">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</h2>
            <p class="heading center grey margin-bottom-null"></p>
          </div>
          <div style="clear: both;"></div>
          <p class="dopd text"> Мы всегда рады иностранным гостям и делаем все от нас зависящее, чтобы пребывание в охотничьем хозяйстве EUROPARK было не только по-домашнему комфортным, но и беззаботно-приятным. Поэтому на правах радушных хозяев мы с удовольствием берем на себя следующие организационные моменты:</p>
          <!-- Trek Data -->
          <div class="text padding-bottom-null trek-data text-center">
            <div class="col-sm-4 col-md-2">
              <i class="icon ion-ios-printer-outline service  letsize"></i>
              <em class="em1">Подготовка документов на получение визы и страховки</em>
            </div>
            <div class="col-sm-4 col-md-2">
              <i class="icon ion-ios-paw-outline service  letsize"></i>
              <em class="em1">Оформление пакета документов по ввозу и вывозу оружия и собак</em>
            </div>
            <div class="col-sm-4 col-md-2">
              <i class="icon ion-ios-navigate-outline service  letsize"></i>
              <em class="em1">Встреча и сопровождение (можно от границ РФ)</em>
            </div>
            <div class="col-sm-4 col-md-2">
              <i class="icon ion-ios-shuffle service  letsize"></i>
              <em class="em1">Трансфер Минск (аэропорт/вокзал) — охотхозяйство — Минск (аэропорт/вокзал)</em>
            </div>
            <div class="col-sm-4 col-md-2">
              <i class="icon ion-ios-bookmarks-outline service  letsize"></i>
              <em class="em1">Оформление трофейного листа на вывоз трофеев</em>
            </div>
            <div class="col-sm-4 col-md-2">
              <i class="icon ion-ios-flask-outline service  letsize"></i>
              <em class="em1">Ветеринарное освидетельствование и выдача талонов на вывоз мяса</em>
            </div>
          </div>
          <!-- END Trek Data -->
          <div class="col-md-12 text">
            <p class="way">Кроме выше перечисленных услуг , мы предлагаем эксклюзивные программы , которые проводят опытные охотники на территории наших угодий:</p>
            <ul class="seeul">
              <li>Недельный курс молодого охотника с изучением этики и культуры поведения в лесу, основ безопасности , поиска и выслеживания добычи</li>
              <li>Индивидуальные , групповые туры- охоты, как для начинающих охотников, так и для опытных, желающих добыть достойный трофей</li>
              <li>Школу лесного выживания для подростков и людей, которые просто хотят научиться ориентироваться и выживать в диких природных условиях</li>
            </ul>
            <a href="<?php echo home_url(); ?>/prajs.htm" class="show-price">Ознакомиться с прайсом</a>
          </div>
        </div>
      </div>
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
                    <a href="<?php echo $image['sizes']['full']; ?>" class="link lightbox"></a>
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
      <!-- Call to Action -->
      <div class="row text margin-leftright-null color-background">
        <div class="col-md-12 text-center">
          <h4 class="big white moby">Остались вопросы?</h4>
          <h4 class="big margin-bottom-small white moby1">Свяжитесь с нами <a href="" class="btn-pro simple white moby2">+375 (29) 506-47-07</a></h4>
          <a href="#" target="_blank" class="btn-alt small white margin-null active shadow moby3">Контакты</a>
        </div>
      </div>
      <!-- END Call to Action -->
    </div>
  </div>
  <?php endwhile; endif; ?>
  <!--  END Page Content, class footer-fixed if footer is fixed  -->

<?php get_footer(); ?>
