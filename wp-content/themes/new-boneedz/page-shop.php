<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | Q&A</title>
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-shop.min.css" rel="stylesheet">
</head>

<body>

<main id="main">

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    
      <a href="<?php echo home_url('/'); ?>" class="logo me-auto align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid">
      </a>
      
      <?php get_template_part('template-parts/navigation'); ?>

      <div class="social-links">
        <a href="https://instagram.com/boneedz_t_s?igshid=o18yoxm3cj" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>

  <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 6rem;">
      <div class="container">
        <dic class="row justify-content-center align-items-center">
          <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <ol>
              <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
              <li>オンラインショップ</li>
            </ol>
          </div>
        </div>
      </div>
  </section>

<?php if (have_posts()): ?>
   <?php while (have_posts()): the_post(); ?>
     <div class="container">
       <div class="row justify-content-center align-items-center">
          <h2 class="text-center mt-5 shop-message">オンラインショップ</h2>
          <p class="text-center mt-2 shop-message-subtext">健康を支える商品を提供しております</p>

          <div class="container">
            <div class="row justify-content-center align-items-center mx-auto">
              <div class="col-12 col-lg-8 col-md-10 pt-3 pb-3 mt-5 mb-5 coupon-box">
                <div class="pt-3 pb-3 coupon-box_dot">
                  <h2 class="text-center">WEBを見てくださっった方限定クーポン</h2>
                </div>
              </div>
            </div>
          </div>

          <div class="container"><!-- クーポンコード -->
            <div class="row">
              <div class="col-12 col-lg-8 col-md-10 mt-2 mb-2 d-flex justify-content-center align-items-center mx-auto">
              <table>
                <tr>
                  <th class="coupon-left">クーポンコード</th><td class="coupon-right">2345</td>
                </tr>
              </table>
            </div>
            </div>
          </div><!-- クーポンコード終わり -->

          <p class="text-center mt-2">※プロテインにクーポンは適用できません。</p>

          <div class="col-12 col-lg-8 col-md-10 mx-auto mt-5 mb-5" id="content">
            <?php echo do_shortcode('[BASE_ITEM]'); ?>
          </div>

         </div>
       </div>
     </div>
   <?php endwhile; ?>
 <?php endif; ?>

</main>

<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php get_footer(); ?>

</body>