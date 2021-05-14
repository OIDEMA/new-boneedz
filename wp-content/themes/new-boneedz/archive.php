<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>boneedz | ブログ</title>
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/archive.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    
      <a href="<?php echo home_url('/'); ?>" class="logo me-auto align-items-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>
     
      <?php get_template_part('template-parts/navigation'); ?>

      <div class="social-links">
        <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>

  <section>
    <div class="container-fluid" id="top-image" style="margin-top: 6rem;">
      <div class="page-title">
        <p>ブログ</p>
      </div>
    </div>
  </section>
  <!--パンクず-->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <dic class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li>ブログ</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <main id="main" style="background-color: #f8f8f8;">
    <!-- 一覧 -->
    <section id="blog">
      <div class="container mt-5">
        <div class="row infinite-scroll"><!--ここにラッパーを記述 -->
        
          <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
          <?php $img = get_eyecatch(); ?>

          <div class="col-lg-3 col-md-4 mb-4 item" style="overflow: hidden;" data-aos="fade-up" data-aos-delay="25">
            <a href="<?php the_permalink(); ?>">
              <img class="card-img-top" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" style="height: 240px; object-fit: cover;" />
              <div class="card-text mt-3 pa-2 ma-2">
                <p class="ma-2"><?php the_time('Y年m月d日'); ?></p>
                <h4 class="card-title mt-2" style="font-size: 20px; font-weight: bold;">
                  <?php echo wp_trim_words( get_the_title() , 28, '...' ); ?>
                </h4>
              </div>
            </a>
          </div>

          <?php endwhile; ?>
          <?php else: ?>
          <p>Not Found.</p>
          <?php endif; ?>
          <?php original_pager() ?>
          <!-- <p class="pagination__next"> Loading </p> -->
        </div>
      </div>
    </section>
  </main>
  <?php get_template_part('template-parts/map'); ?>
  <?php get_template_part('template-parts/sponsor'); ?>
  <?php get_template_part('template-parts/footer'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery-infinite-scroll/infinite-scroll.pkgd.min.js"></script>

  <script>
    $('.infinite-scroll').infiniteScroll({
    path: '.next-link',
    append: '.item',
    history: false, // falseで履歴に残さない
    checkLastPage: '.next-link'
    });
  </script>
</body>

</html>