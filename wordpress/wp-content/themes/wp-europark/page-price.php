<?php /* Template Name: Price */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <div id="page-content" class="header-static footer-fixed">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
      <ul class="slides">
        <?php $image = get_field('header_image');  ?>
        <li style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container text text-center">
            <h1 class="white margin-bottom-small inpage">Стоимость услуг</h1>
            <p class="heading white inpage-two"><?php the_field('heading'); ?></p>
          </div>
          <div class="gradient dark"></div>
        </li>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      </ul>
    </div>
    <!--  END Slider  -->
    <div id="post-wrap" class="content-section fullpage-wrap">
      <div class="container">
        <div class="row padding-sm">
          <div class="col-md-12">
            <!--  Tab  -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <?php $i=1; if( have_rows('price_catalog') ): while ( have_rows('price_catalog') ) : the_row(); ?>
                <?php if ($i==1) { $class=' class="active"'; } else { $class=''; } ?>
                <li role="presentation"<?php echo $class; ?>><a href="#tab-<?php echo $i; ?>" aria-controls="tab-one" role="tab" data-toggle="tab"><?php the_sub_field('price_heading'); ?></a></li>
              <?php $i++; endwhile; endif; ?>
            </ul>
            <!--  Nav Tabs  -->
            <!-- Tab panes -->
            <div class="tab-content">
              <?php $i=1; if( have_rows('price_catalog') ): while ( have_rows('price_catalog') ) : the_row(); ?>
                <?php if ($i==1) { $class='active'; } else { $class=''; } ?>
                <div role="tabpanel" class="tab-pane <?php echo $class; ?>" id="tab-<?php echo $i; ?>">
                  <table>
                    <tbody>
                      <tr>
                        <td class="titletr" rowspan="1" colspan="3"><?php the_sub_field('price_subheading'); ?></td>
                      </tr>
                      <tr class="centtd">
                        <td>Название услуги
                        </td>
                        <td>Стоимость
                        </td>
                        <td>Примечания
                        </td>
                      </tr>

                      <?php if( have_rows('price_table') ): while( have_rows('price_table') ): the_row(); ?>
                        <tr>
                          <td><?php the_sub_field('title'); ?></td>
                          <td><?php the_sub_field('price'); ?></td>
                          <td><?php the_sub_field('comments'); ?></td>
                        </tr>
                      <?php endwhile; endif;  ?>
                    </tbody>
                  </table>
                </div>
              <?php $i++; endwhile; endif; ?>

            </div>
            <!-- Tab panes -->
            <!--  Tab  -->
          </div>
          <!-- Accordion -->
          <!-- Accordion -->
        </div>
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
