<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>boneeds | ブログ </title>
  <?php get_header(); ?>
  <?php if( !is_user_logged_in() && !is_bot() ) setPostViews( get_the_ID() ) ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/single-post.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/slick/slick-theme.css" media="screen" />
</head>

<body>

<main id="main" style="background-color: #f8f8f8;">

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    
      <a href="<?php echo home_url('/'); ?>" class="logo me-auto align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid">
      </a>
      
      <?php get_template_part('template-parts/navigation'); ?>

      <div class="social-links">
        <!-- <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a> -->
        <a href="https://instagram.com/boneedz_t_s?igshid=o18yoxm3cj" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>

<section>
  <div class="container-fluid" id="top-image" style="margin-top: 6rem;">
    <div class="page-title">
      ブログ
    </div>
  </div>
</section>

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <dic class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url('/blogs/'); ?>">ブログ</a></li>
            <li><?php the_title(); ?></a></li>
          </ol>
        </div>
      </div>
    </div>
</section>

<section class="mt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto" style="background-color: #fff;">

        <?php $img = get_eyecatch(); ?>
        <img src="<?php echo $img[0]; ?>" class="eyecatch mt-5"/>
          <h2 class="blog-title"><?php the_title(); ?></h2>
          <p class="date"><?php the_date(); ?></p>

          <hr>
        
          <div id="content" class="mt-5 mb-5">
            <?php the_content(); ?>
          </div>

          <hr>

          <section id="popular" class="mt-5 mb-5">            
            <div class="container">
              <h3 style="color: #880000;">人気記事</h3>
              <div class="row slick-wrapper">
                  <?php
                    // views post metaで記事のPV情報を取得する
                    setPostViews(get_the_ID());

                    $args = array(
                        'post_type' => array('post'),
                        'meta_key' => 'post_views_count',
                        'orderby' => 'meta_value_num',
                        'post_status'      => 'publish',
                        'order' => 'DESC',
                        'posts_per_page' => 6

                    );
                    // WP_Queryによるループ
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                ?>
                <?php $img = get_eyecatch(); ?>

                <div class="col-lg-4">
                  <a href="<?php the_permalink() ?>">
                    <img src="<?php echo $img[0]; ?>" class="popular-eyecatch mt-5"/>
                  </a>
                  <h3 class="popular-title"><?php echo wp_trim_words( get_the_title() , 20, '...' ); ?></h3>
                  <p class="popular-excerpt"><?php echo wp_trim_words( get_the_excerpt() , 36, '...' ); ?></p>
                </div>

                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); wp_reset_query(); ?>

              </div>
            </div>
          </section>

      </div>
    </div>
  </div>
</section>

</main>

<?php get_template_part('template-parts/map'); ?>
<?php get_template_part('template-parts/sponsor'); ?>
<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery.min.js"></script>
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
        slidesToShow: 3, // スライドのエリアに画像がいくつ表示されるかを指定
        slidesToScroll: 1, // 一度にスライドする数
        pauseOnHover: true,
        responsive: [
          {
            breakpoint: 968,
            settings: {
              slidesToShow: 2, // スライドのエリアに画像がいくつ表示されるかを指定
              slidesToScroll: 1, // 一度にスライドする数
            },
          },
          {
            breakpoint: 468,
            settings: {
              slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
              slidesToScroll: 1, // 一度にスライドする数
            }
          }]
        });
    });
  </script>
<?php get_footer(); ?>

</body>