<?php query_posts("page_id=101"); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header>
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg">
      <div class="header-layer">
        <div style="position: absolute; z-index: 0; top: 0px;" class="is_overlay">
          <video autoplay="autoplay" loop="">
            <?php $file = get_field('video'); if( $file ): ?>
              <source src="<?php echo $file['url']; ?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
            <?php endif; ?>
            <?php $image = get_field('image_bck'); if( !empty($image) ): ?>
              <img class="header-img" src="<?php echo $image['url']; ?>">
            <?php endif; ?>
          </video>
        </div>
        <div class="container wrapper">
          <div class="row valign">
            <div class="col-md-12 head_right_text">
              <h1 class="white flex-animation main1"><?php the_field('heading'); ?></h1>
              <section class="white flex-animation main2"><?php the_field('small_heading'); ?></section>
              <p class="heading white inpage-two main3"><?php the_field('description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </header>
  <?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
