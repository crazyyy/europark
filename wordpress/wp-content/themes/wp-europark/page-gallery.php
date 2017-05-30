<?php /* Template Name: Gallery */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
      <ul class="slides">
        <?php $image = get_field('header_image');  ?>
        <li style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container text text-center">
            <h1 class="white margin-bottom-small inpage">Фотогалерея</h1>
            <p class="heading white inpage-two"><?php the_field('heading'); ?></p>
          </div>
          <div class="gradient dark"></div>
        </li>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      </ul>
    </div>
    <!--  END Slider  -->
    <div id="page-wrap" class="content-section fullpage-wrap">
      <section id="masonry-filters" class="text">
        <!--  Filters  -->
        <div class="row margin-null">
          <div class="col-sm-12 padding-leftright-null text-center">
            <ul class="col-md-12 filters padding-leftright-null">
              <li data-filter="*" class="is-checked">Все фото</li>
              <li data-filter=".nature">Охота</li>
              <li data-filter=".adventure">Рыбалка</li>
              <li data-filter=".lake">База отдыха "Диканька"</li>
            </ul>
          </div>
        </div>
        <!--  END Filters  -->
      </section>
      <!--  Gallery Section  -->
      <section id="gallery" data-isotope="load-simple">
        <div class="masonry-items equal three-columns">

          <!--  Lightbox trek -->
          <?php $images = get_field('gallery', 113); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="one-item mountain adventure">
                <div class="image-bg" style="background-image:url(<?php echo $image['sizes']['thumbnail']; ?>)"></div>
                <div class="content figure">
                  <i class="pd-icon-camera"></i>
                  <a href="<?php echo $image['sizes']['full']; ?>" class="link lightbox"></a>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <!--  END Lightbox trek -->
          <!--  Lightbox trek -->
          <?php $images = get_field('gallery', 111); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="one-item mountain nature">
                <div class="image-bg" style="background-image:url(<?php echo $image['sizes']['thumbnail']; ?>)"></div>
                <div class="content figure">
                  <i class="pd-icon-camera"></i>
                  <a href="<?php echo $image['sizes']['full']; ?>" class="link lightbox"></a>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <!--  END Lightbox trek -->
          <!--  Lightbox trek -->
          <?php $images = get_field('gallery', 115); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="one-item mountain lake">
                <div class="image-bg" style="background-image:url(<?php echo $image['sizes']['thumbnail']; ?>)"></div>
                <div class="content figure">
                  <i class="pd-icon-camera"></i>
                  <a href="<?php echo $image['sizes']['full']; ?>" class="link lightbox"></a>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <!--  END Lightbox trek -->

        </div>
      </section>
      <!--  END Gallery Section  -->
    </div>
  </div>
  <?php endwhile; endif; ?>
  <!--  END Page Content, class footer-fixed if footer is fixed  -->

<?php get_footer(); ?>
