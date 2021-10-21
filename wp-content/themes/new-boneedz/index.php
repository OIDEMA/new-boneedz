<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | boneedz</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/front-page.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick-theme.css" media="screen" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    
      <a href="<?php echo home_url('/'); ?>" class="logo me-auto align-items-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>
     
      <?php get_template_part('template-parts/navigation'); ?>

    </div>
  </header>

  <main id="main">

    <!-- メインビジュアル　-->
    <section id="top" style="margin-top: 6rem;">
      <a href="<?php echo home_url('/contact/'); ?>">
        <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/07/boneeds-main-visual02.jpg" alt="" class="img-fluid">
      </a>
    </section>

    <section id="news" class="section">
      <div class="container">
        <div class="row d-flex justify-content-centetr slick-wrapper mx-auto">
        <?php
            $args = array(
            'post_type' => 'news',
            'posts_per_page' => 4
          );
            $posts = get_posts( $args );
            foreach ( $posts as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
          ?>
          <div class="col-lg-4 news-item">
              <p class="text-center"> お知らせ | <?php the_date(); ?></p>
              <a href="<?php the_permalink(); ?>" style="font-weight: bold;">
                <?php the_title(); ?>
              </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- どの店舗？　-->
    <!-- <section id="whGym" class="section section-bg">
      <div class="container">
        <div class="row mx-auto">
          <div class="col-lg-5 mx-auto mt-2">
            <div class="gymWrapper d-flex justify-content-center align-items-center">
              高松店はこちら▷
            </div>
          </div>
          <div class="col-lg-5 mx-auto mt-2">
          <div class="gymWrapper d-flex justify-content-center align-items-center">
              坂出店はこちら▷
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- メッセージ -->
    <section class="section-bg" style="padding-bottom: 3rem">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-center mt-4 mb-4">シェイプアップ・体質改善・減量・ボディメイクなど、カラダの悩みを短期解決！</h2>
            <p class="text-center mt-2 mb-2">ボニーズは、高松市中心部に位置するアクセス便利なパーソナルジム</p>
            <p class="text-center mt-2 mb-2">理想の体型、必要なパフォーマンスなど、会員様のニーズに合わせたトレーニングプログラムを作成。</p>
            <p class="text-center mt-2 mb-2">オールマンツーマンのパーソナルトレーニングで、美容と健康、鍛えられた美しいカラダづくりはもちろん、</p>
            <p class="text-center mb-4"> その先にある豊かなライフスタイルまでサポートします。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ブログ -->
    <section id="blog" class="section">
      <div class="container">

        <div class="section-header">
          <h3 class="mt-4 mb-4">ブログ</h3>
        </div>

        <div class="row swiper-container">
          <div class="swiper-wrapper">

            <?php
              $args = array(
              'posts_per_page' => 6
            );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): // ループの開始
              setup_postdata( $post ); // 記事データの取得
            ?>
            <?php $img = get_eyecatch(); ?>

            <div class="col-lg-3 swiper-slide card" style="margin: 0 0.5rem; height: 400px;">
              <img src="<?php echo $img[0]; ?>" class="card-img-top" alt="<?php the_title(); ?>" style="height: 240px; object-fit: cover;" />
              <p style="padding: 0.25rem"><?php the_date('Y/m/d'); ?></p>
              <h4 class="card-title" style="padding: 0.25rem; font-weight: bold;"><?php echo wp_trim_words( get_the_title() , 25, '...' ); ?></h5>
              <p claa="card-text" style="padding: 0.25rem"><?php echo wp_trim_words( get_the_excerpt() , 36, '...' ); ?></p>
            </div>
            <?php endforeach; ?>

          </div>

          <!-- <div class="swiper-pagination"></div> -->
          <div class="swiper-button-prev" style="color: #000; font-weight: bold;"></div>
          <div class="swiper-button-next" style="color: #000; font-weight: bold;"></div>
          <!-- <div class="swiper-scrollbar"></div> -->

        </div>
      </div>
    </section>

    <!-- スタッフ紹介 -->
    <section id="team" class="team section section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3 class="mt-4 mb-4">高松店スタッフ</h3>
        </div>

        <div class="row swiper-container">

          <div class="swiper-wrapper">

            <div class="col-lg-3 col-md-4 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/2-e1540437646333-990x1024.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>森岡 顕志　Kenji Morioka</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6　swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/5-e1540437528262-990x1024.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>濱田 浩司　Koji Hamada</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6　swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/6-e1540437404794-990x1024.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>長江 彩香　Ayaka Nagae</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/13-e1540437469734-990x1024.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>塩谷 浩三　Kouzou Shiotani</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/廣瀬直人ひろせなおと0001.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>廣瀬 直人　Hirose Naoto</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/山城健人やましろけんと0001.jpg"
                 class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>山城 健人 Yamashiro Kento</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/05/S__46923846.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>藤本 英矩　Fujimoto Hidenori</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49102851.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>石河 輝彦　Ishikawa Teruhiko</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49102853.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>松本 一司  Matsumoto Kzushi</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49102855.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>高畑 里彩 Takabatake Risa</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49111044.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>大塚 悠夏 Otsuka Yuka</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div><!-- Swiper Wrapper -->

        <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-button-prev" style="color: #fff; font-weight: bold;"></div>
        <div class="swiper-button-next" style="color: #fff; font-weight: bold;"></div>
        <!-- <div class="swiper-scrollbar"></div> -->

        </div>
      </div>
    </section><!-- End Team Section -->

    <section id="team" class="team section section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3 class="mt-4 mb-4">坂出店スタッフ</h3>
        </div>

        <div class="row swiper-container">

          <div class="swiper-wrapper">

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/05/S__46923853.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>鈴木 敦博　Suzuki Atsuhiro</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6　swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/山田和成やまだかずなり0001.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>山田 和成　Yamada Kazunari</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6　swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/野本要輔のもとようすけ0001.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>野本 要輔　Nomoto yousuke</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/05/S__46923856.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>廣田 里美　Hirota Satomi</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/高島華干たかしまはるか0001.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>高島 華干　Takashima Haruka</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/小松-亜希子こまつあきこ0001.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>小松 亜希子 Komatsu Akiko</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/10/S__49831976.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>高井 雄太　Takai Yuta</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 swiper-slide">
              <div class="member">
                <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/07/S__48119937.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <span>山内 望愛　YAMAUHI NOA</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- Swiper Wrapper -->

        <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-button-prev" style="color: #fff; font-weight: bold;"></div>
        <div class="swiper-button-next" style="color: #fff; font-weight: bold;"></div>
        <!-- <div class="swiper-scrollbar"></div> -->

        </div>
      </div>
    </section><!-- End Team Section -->

    <?php get_template_part('template-parts/service-menu'); ?>

    <?php get_template_part('template-parts/banner'); ?>

  </main>

  <?php get_template_part('template-parts/map'); ?>
  <?php get_template_part('template-parts/sponsor'); ?>
  <?php get_template_part('template-parts/footer'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
  <script>
    jQuery(function() {
      jQuery('.slick-wrapper').slick({
        autoplaySpeed: 3000, // 自動再生で切り替えをする時間
        speed: 400, // 自動再生でスライドさせるスピード
        infinite: true, // 無限スクロール
        dots: true, // 画像下のドット（ページ送り）を表示
        arrows: true, // 左右の次へ、前へボタンを表示
        autoplay: true, // 自動再生
        slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
        slidesToScroll: 1, // 一度にスライドする数
        // responsive: [
        //   {
        //     breakpoint: 968,
        //     settings: {
        //       slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
        //       slidesToScroll: 1, // 一度にスライドする数
        //     },
        //   },
        //   {
        //     breakpoint: 468,
        //     settings: {
        //       slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
        //       slidesToScroll: 1, // 一度にスライドする数
        //     }
        //   }]
        });
    });
  </script>

  <?php get_footer(); ?>

  <script>
    $(document).ready(function () {
    // swiperをイニシャライズ
    var mySwiper = new Swiper ('.swiper-container', {
      // オプションのパラメーターを指定
      slidesPerView: 4,
      direction: 'horizontal',
      loop: true,
      // spaceBetween: 15,
      breakpoints: {
      // when window width is >= 320px
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        960: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
      // centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      // pagination: {
      //   el: '.swiper-pagination',
      //   dynamicBullets: true,
      //   clickable: true,
      // },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      })
    });
  </script>
</body>

</html>