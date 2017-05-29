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
  <header>
    <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg">
    <div class="header-layer">
      <div style="position: absolute; z-index: 0; top: 0px;" class="is_overlay">
        <video autoplay="autoplay" loop="">
          <source src="http://europark.by/wp-content/themes/oddel/img/Noch.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">

          <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/Noch.jpg">
        </video>
      </div>
      <div class="container wrapper">
        <div class="row valign">
          <div class="col-md-12 head_right_text">
            <h1 class="white flex-animation main1">База отдыха</h1>
            <section class="white flex-animation main2">Диканька</section>
            <p class="heading white inpage-two main3">Нижнедунайская равнина, несмотря на то, что в воскресенье некоторые станции метро закрыты, поднимает холодный действующий вулкан Катмаи.</p>
          </div>
        </div>
      </div>
    </div>
  </header>
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
            <a class="navbar-brand" href="index.html">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="normal" alt="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png" class="retina" alt="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" class="normal white-logo" alt="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white@2x.png" class="retina white-logo" alt="logo">
            </a>
          </div>
          <!--  END Header Logo  -->
          <!--  Classic menu, responsive menu classic  -->
          <div id="menu-classic">
            <div class="menu-holder">
              <ul>
                <li class="submenu"><a href="/index.html" class="active-item">Главная</a></li>
                <li class="submenu"> <a href="/hunting.html">Охота</a> </li>
                <li class="submenu"> <a href="/fishing.html">Рыбалка</a> </li>
                <li class="submenu"> <a href="/about-the-base.html">База отдыха</a> </li>
                <li class="submenu"> <a href="/about-us.html">О нас</a> </li>
                <li class="submenu"> <a href="/gallery-filters.html">Галерея</a> </li>
                <li class="submenu"> <a href="/price.html">Прайс</a> </li>
                <li class="submenu"> <a href="/contact-1.html">Контакты</a> </li>
                <!-- Search Icon -->
              </ul>
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

    <!--  Page Content, class footer-fixed if footer is fixed  -->
    <div id="page-content" class="header-static footer-fixed">
      <!--  Slider  -->
      <div id="flexslider-nav" class="fullpage-wrap small">
        <ul class="slides">
          <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip6.jpg)">
            <div class="container text">
              <h1 class="white flex-animation">База отдыха</h1>
              <section class="white flex-animation">Диканька</section>
              <h2 class="white flex-animation">Нижнедунайская равнина, несмотря на то, что в воскресенье некоторые станции метро закрыты, поднимает холодный действующий вулкан Катмаи.</h2>
              <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation">ПОДРОБНЕЕ</a>
            </div>
            <div class="gradient dark"></div>
          </li>
          <!--

                        <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/home2.jpg)">
                            <div class="text container">
                                <h1 class="white flex-animation no-opacity">Wild nature<br> safe adventure</h1>
                                <h2 class="white flex-animation no-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Veniam, facilis.</h2>
                                <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a>
                            </div>
                            <div class="gradient dark"></div>
                        </li>

                        -->
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
                <h2 class="margin-bottom-null title center">О базе отдыха</h2>
                <p class="heading center grey z-index">Добро пожаловать в мир природной гармонии ― охотничье хозяйство EUROPARK!</p>
                <div class="padding-onlytop-md">
                  <p>Хозяйство расположено в краю голубых озер ― на севере Витебской области ― и граничит с территорией России.
                    <br> Угодья нашего охотничье-туристического комплекса занимают площадь в 18 тысяч гектар. Здесь лесной массив перемежается с живописными полями, болотистыми участками, поросшими камышом, и водной гладью озер и рек. В лесах хозяйства EUROPARK обитают дикие животные и птицы: лось, кабан, косуля, волк, лисица, енотовидная собака, заяц, бобр, глухарь, тетерев, утка, вальдшнеп. В наших водоемах водятся различные виды рыб: сом, судак, щука, окунь, лещ, угорь, красноперка, плотва, язь, густера, ёрш, голавль, селява и жерех. Леса богаты грибами и ягодами.</p>
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
                <p>Добро пожаловать в клуб ценителей отдыха в стиле « EUROPARK»!
                  <br> Вступив в наш клуб, Вы получите возможность общаться на сайте с другими рыбаками и охотниками и размещать собственные фотографии.
                  <br> Чтобы стать членом клуба, достаточно <a href="#" class="reg">зарегистрироваться</a></p>
              </div>
            </div>
            <div class="col-md-12 padding-leftright-null">
              <div class="col-md-4 padding-leftright-null">
                <div class="text padding-md-bottom-null">
                  <i class="pd-icon-cloudy-day service margin-bottom-null"></i>
                  <h6 class="heading margin-bottom-extrasmall">РЫБАЛКА</h6>
                  <p class="margin-bottom-null">Нижнедунайская равнина, несмотря на то, что в воскресенье некоторые станции метро закрыты, поднимает холодный действующий вулкан Катмаи. </p>
                  <a href="#" class="more">Подробнее</a>
                </div>
              </div>
              <div class="col-md-4 padding-leftright-null">
                <div class="text padding-md-bottom-null">
                  <i class="pd-icon-camp-bag service margin-bottom-null"></i>
                  <h6 class="heading margin-bottom-extrasmall">ОХОТА</h6>
                  <p class="margin-bottom-null">Нижнедунайская равнина, несмотря на то, что в воскресенье некоторые станции метро закрыты, поднимает холодный действующий вулкан Катмаи. </p>
                  <a href="#" class="more">Подробнее</a>
                </div>
              </div>
              <div class="col-md-4 padding-leftright-null">
                <div class="text">
                  <i class="pd-icon-camping-knief service margin-bottom-null"></i>
                  <h6 class="heading  margin-bottom-extrasmall">БАЗА ОТДЫХА</h6>
                  <p class="margin-bottom-null">Нижнедунайская равнина, несмотря на то, что в воскресенье некоторые станции метро закрыты, поднимает холодный действующий вулкан Катмаи. </p>
                  <a href="#" class="more">Подробнее</a>
                </div>
              </div>
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
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip5-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip6-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip7-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip8-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip9-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip10-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip11-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip12-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip2-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip8-small.jpg)"></div>
            </div>
            <div class="item">
              <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/trip9-small.jpg)"></div>
            </div>
          </div>
          <a href="#" class="add_photo">Предложить фото</a>
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
                <!--  Single Trip  -->
                <div class="item">
                  <div class="showcase-trek">
                    <span class="read">
                                                15 €
                                            </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/trip1.jpg" alt="">
                    <div class="content text-center">
                      <div class="row margin-leftright-null">
                        <div class="meta">
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Одни</h3>
                            <h4>сутки</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Два</h3>
                            <h4>человека</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Полное</h3>
                            <h4>снаряжение</h4>
                          </div>
                        </div>
                        <div class="category">
                          <h3>Прогулка на мотолодке с егерем</h3>
                        </div>
                        <div class="info">
                          <div class="col-md-12 padding-leftright-null">
                            <p class="margin-null">Горная тундра, несмотря на то, что есть много бунгало для проживания, параллельна. Термальный источник выбирает закрытый аквапарк.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="single-trek.html" class="link"></a>
                  </div>
                </div>
                <!--  END Single Trip  -->
                <div class="item">
                  <div class="showcase-trek">
                    <span class="read">
                                                20 €
                                            </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/trip2.jpg" alt="">
                    <div class="content text-center">
                      <div class="row margin-leftright-null">
                        <div class="meta">
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Одни</h3>
                            <h4>сутки</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Два</h3>
                            <h4>человека</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Полное</h3>
                            <h4>снаряжение</h4>
                          </div>
                        </div>
                        <div class="category">
                          <h3>Организация экотура на катере</h3>
                        </div>
                        <div class="info">
                          <div class="col-md-12 padding-leftright-null">
                            <p class="margin-null">Горная тундра, несмотря на то, что есть много бунгало для проживания, параллельна. Термальный источник выбирает закрытый аквапарк.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="single-trek-2.html" class="link"></a>
                  </div>
                </div>
                <div class="item">
                  <div class="showcase-trek">
                    <span class="read">
                                                30 €
                                            </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/trip3.jpg" alt="">
                    <div class="content text-center">
                      <div class="row margin-leftright-null">
                        <div class="meta">
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Одни</h3>
                            <h4>сутки</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Два</h3>
                            <h4>человека</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Полное</h3>
                            <h4>снаряжение</h4>
                          </div>
                        </div>
                        <div class="category">
                          <h3>Трансфер Полоцк-Демех- Полоцк</h3>
                        </div>
                        <div class="info">
                          <div class="col-md-12 padding-leftright-null">
                            <p class="margin-null">Горная тундра, несмотря на то, что есть много бунгало для проживания, параллельна. Термальный источник выбирает закрытый аквапарк.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="single-trek.html" class="link"></a>
                  </div>
                </div>
                <div class="item">
                  <div class="showcase-trek">
                    <span class="read">
                                                40 €
                                            </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/trip4.jpg" alt="">
                    <div class="content text-center">
                      <div class="row margin-leftright-null">
                        <div class="meta">
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Одни</h3>
                            <h4>сутки</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Два</h3>
                            <h4>человека</h4>
                          </div>
                          <div class="col-md-4 padding-leftright-null">
                            <h3>Полное</h3>
                            <h4>снаряжение</h4>
                          </div>
                        </div>
                        <div class="category">
                          <h3>Организация загонной охоты</h3>
                        </div>
                        <div class="info">
                          <div class="col-md-12">
                            <p class="margin-null">Горная тундра, несмотря на то, что есть много бунгало для проживания, параллельна. Термальный источник выбирает закрытый аквапарк.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="single-trek-2.html" class="link"></a>
                  </div>
                </div>
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
                <div class="item padding-leftright-null">
                  <div class="padding-top-null padding-bottom-null">
                    <blockquote class="margin-bottom-small white">Охота — это отдых. Для меня это в первую очередь отдых с друзьями на природе. Мне повезло и с природой, и с компанией. Отдельного описания заслуживают условия проживания. В директорском доме, где мы жили, обеспечены прекрасные условия для отдыха. В деревянном доме отлично дышится, приятно выпивается и сладко спится. Банька на берегу реки позволяет после целого дня охоты пропарить свое тело с веничком под чаек. Отличные трофеи, добытые нами за два дня охоты, явились заслуженным подарком всем участникам охоты.<em class="small grey-light">Анатолий Белых, Осиповичи</em></blockquote>
                  </div>
                </div>
                <div class="item padding-leftright-null">
                  <div class="padding-top-null padding-bottom-null">
                    <blockquote class="margin-bottom-small white">Хорошо отохотились в эти выходные. Что касается организации охоты и быта: все было на высоте. Косули много, но она вся в высокой траве и определить коза или козел было сложно, тем не менее, несколько козликов добыли. Приятель взял козлика с интересными рожками. Видели очень много лосей. Обязательно приедем на загонную! Андрей, тебе и егерям спасибо за организацию охот!<em class="small grey-light">Евгений Осипов, Минск</em></blockquote>
                  </div>
                </div>
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
              <div class="col-md-4 single-person">
                <div class="content">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/hiker1.jpg" alt="">
                  <ul class="social">
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                  </ul>
                </div>
                <div class="description text-center">
                  <h5>Евгений Керней</h5>
                  <h6>Егерь с подружейными собаками</h6>
                </div>
              </div>
              <div class="col-md-4 single-person">
                <div class="content">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/hiker2.jpg" alt="">
                  <ul class="social">
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                  </ul>
                </div>
                <div class="description text-center">
                  <h5>Ольга Знарок</h5>
                  <h6>Охотовед</h6>
                </div>
              </div>
              <div class="col-md-4 single-person">
                <div class="content">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/hiker3.jpg" alt="">
                  <ul class="social">
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                  </ul>
                </div>
                <div class="description text-center">
                  <h5>Станислав Карпенко</h5>
                  <h6>Егерь с гончими</h6>
                </div>
              </div>
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
              <!-- Single News -->
              <div class="col-sm-6 single-news horizontal-news">
                <article>
                  <div class="col-md-6 padding-leftright-null">
                    <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/news1.jpg)"></div>
                  </div>
                  <div class="col-md-6 padding-leftright-null">
                    <div class="content">
                      <h3>Правила ведения охоты</h3>
                      <span class="date">02.11.2016</span>
                      <p>Осень – пора активной охоты. Уже открыт сезон на пернатых, копытных (из засады, с подхода), бобра и выдру. А с 1 октября стартует коллективная загонная охота.</p>
                      <a class="news-more">Подробнее</a>
                    </div>
                  </div>
                  <!--   <a href="standard-post.html" class="link"></a>-->
                </article>
              </div>
              <!-- END Single News -->
              <div class="col-sm-6 single-news horizontal-news">
                <article>
                  <div class="col-md-6 padding-leftright-null">
                    <div class="image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/news2.jpg)"></div>
                  </div>
                  <div class="col-md-6 padding-leftright-null">
                    <div class="content">
                      <h3>В Беларуси осталось только 20 медведей</h3>
                      <span class="date">05.07.2016</span>
                      <p>Белстат опубликовал данные о количестве основных видов животных. Кого в белорусских лесах стало больше, а кого меньше? Наибольшее...</p>
                      <a class="news-more">Подробнее</a>
                    </div>
                  </div>
                  <!--  <a href="video-post.html" class="link"></a>-->
                </article>
              </div>
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
              <div class="item">
                <img class="center" src="<?php echo get_template_directory_uri(); ?>/img/sponsor1.png" alt="client logo">
              </div>
              <div class="item">
                <img class="center" src="<?php echo get_template_directory_uri(); ?>/img/sponsor2.png" alt="client logo">
              </div>
              <div class="item">
                <img class="center" src="<?php echo get_template_directory_uri(); ?>/img/sponsor3.png" alt="client logo">
              </div>
              <div class="item">
                <img class="center" src="<?php echo get_template_directory_uri(); ?>/img/sponsor4.png" alt="client logo">
              </div>
            </div>
          </div>
        </div>
        <!--  Sponsor  -->
      </div>
    </div>
    <!--  END Page Content, class footer-fixed if footer is fixed  -->

<?php get_footer(); ?>
