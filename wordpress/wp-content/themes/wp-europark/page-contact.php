<?php /* Template Name: Contact */ get_header(); ?>

  <!--  Page Content, class footer-fixed if footer is fixed  -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
      <ul class="slides">
        <?php $image = get_field('header_image');  ?>
        <li style="background-image:url(<?php echo $image['url']; ?>)">
          <div class="container text text-center">
            <h1 class="white margin-bottom-small inpage">КОНТАКТЫ</h1>
            <p class="heading white inpage-two"><?php the_field('heading'); ?></p>
          </div>
          <div class="gradient dark"></div>
        </li>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      </ul>
    </div>
    <!--  END Slider  -->
    <div id="page-wrap" class="content-section fullpage-wrap">
      <div class="row margin-leftright-null">
        <div class="container">
          <!--  Contact Info  -->
          <div class="col-md-6 padding-leftright-null">
            <div class="text">
              <h2 class="margin-bottom-null title line left  notopborder">Наши контакты</h2>
              <div class="padding-onlytop-md">
                <p class="cont-bold">Адрес: </p>
                <p class="cont-desc"> 211474, Республика Беларусь, Витебская область, Россонский район, д. Демех, ул.Ольховая 11
                  <br> 55°49'17.9"N 29°18'43.8"E 55.821646, 29.312156
                </p>
                <p class="cont-desc"><b>Юридический адрес: </b> 211474, Республика Беларусь, Россонский район, д. Демех, ул.Ольховая 11</p>
                <div style="clear: both;"></div>
                <p class="cont-bold">Телефоны: </p>
                <p class="cont-desc"><b>Организация отдыха</b>
                  <br> +375 (29) 297-61-21
                  <br> +375 (29) 650-93-26</p>
                <p class="cont-desc"><b>Егерьская служба:</b>
                  <br> +375 (29) 297-61-21</p>
                <p class="cont-bold">Электронная почта: </p>
                <p class="cont-desc">europark.by@gmail.com</p>
              </div>
            </div>
          </div>
          <!--  END Contact Info -->
          <!--  Input Form  -->
          <div class="col-md-6 padding-leftright-null">
            <div class="text padding-onlybottom-sm padding-md-top-null">
              <p class="sent-us">Напишите нам</p>
              <form id="contact-form" class="padding-onlytop-md padding-md-topbottom-null">
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-field" name="name" id="name" type="text" placeholder="Ваше имя">
                  </div>
                  <div class="col-md-12">
                    <input class="form-field" name="mail" id="mail" type="text" placeholder="Ваш email">
                  </div>
                  <div class="col-md-12">
                    <input class="form-field" name="subjectForm" id="subjectForm" type="text" placeholder="Тема">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-field" name="messageForm" id="messageForm" rows="6" placeholder="Ваше сообщение"></textarea>
                    <div class="submit-area padding-onlytop-sm">
                      <input type="submit" id="submit-contact" class="btn-alt" value="Отправить">
                      <div id="msg" class="message"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!--  END Input Form  -->
        </div>
      </div>
      <div class="row margin-leftright-null grey-background">
        <div class="container">
          <div class="col-md-12 text padding-bottom-null text-center">
            <h2 class="margin-bottom-null title line center"> Как к нам проехать?</h2>
          </div>
          <div class="col-lg-12 padding-leftright-null">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="map-contact">
        <iframe class="g_maps" src="https://mapsengine.google.com/map/u/1/embed?mid=zqbzk15mfRDY.kuo2pKvDbYV8&scrollwheel=false&output=embed" style="width:100%" height="480"></iframe>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <!--  END Page Content, class footer-fixed if footer is fixed  -->

<?php get_footer(); ?>
