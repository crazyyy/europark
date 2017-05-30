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
              <li role="presentation" class="active"><a href="#tab-one" aria-controls="tab-one" role="tab" data-toggle="tab">Охота</a></li>
              <li role="presentation"><a href="#tab-two" aria-controls="tab-two" role="tab" data-toggle="tab">Рыбалка</a></li>
              <li role="presentation"><a href="#tab-three" aria-controls="tab-three" role="tab" data-toggle="tab">База отдыха "Диканька"</a></li>
              <li role="presentation"><a href="#tab-for" aria-controls="tab-for" role="tab" data-toggle="tab">Дополнительные услуги</a></li>
            </ul>
            <!--  Nav Tabs  -->
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="tab-one">
                <p>
                  <br>
                </p>
                <table>
                  <colgroup>
                    <col>
                      <col>
                        <col>
                  </colgroup>
                  <tbody>
                    <tr>
                      <td class="titletr" rowspan="1" colspan="3">Прайс-лист для граждан Республики Беларусь
                      </td>
                    </tr>
                    <tr class="centtd">
                      <td>Название услуги
                      </td>
                      <td>Стоимость
                      </td>
                      <td>Примечания
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab-two">
                <p>
                  <br>
                </p>
                <table>
                  <colgroup>
                    <col>
                      <col>
                        <col>
                  </colgroup>
                  <tbody>
                    <tr>
                      <td class="titletr" rowspan="1" colspan="3">Прайс-лист для иностранных охотников
                      </td>
                    </tr>
                    <tr class="centtd">
                      <td>Название услуги
                      </td>
                      <td>Стоимость
                      </td>
                      <td>Примечания
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab-three">
                <p>
                  <br>
                </p>
                <table>
                  <colgroup>
                    <col>
                      <col>
                        <col>
                  </colgroup>
                  <tbody>
                    <tr>
                      <td class="titletr" rowspan="1" colspan="3">Прайс-лист для иностранных охотников
                      </td>
                    </tr>
                    <tr class="centtd">
                      <td>Название услуги
                      </td>
                      <td>Стоимость
                      </td>
                      <td>Примечания
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab-for">
                <p>
                  <br>
                </p>
                <table>
                  <colgroup>
                    <col>
                      <col>
                        <col>
                  </colgroup>
                  <tbody>
                    <tr>
                      <td class="titletr" rowspan="1" colspan="3">Прайс-лист для иностранных охотников
                      </td>
                    </tr>
                    <tr class="centtd">
                      <td>Название услуги
                      </td>
                      <td>Стоимость
                      </td>
                      <td>Примечания
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                    <tr>
                      <td>Путевка на платное любительское рыболовство
                      </td>
                      <td>15 евро
                      </td>
                      <td>за 1 сутки до 10 ставок
                      </td>
                    </tr>
                    <tr>
                      <td>Подготовка места проведения рыбалки
                      </td>
                      <td>10 евро
                      </td>
                      <td>за 1 сутки
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
