<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | Q&A</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-contact.min.css" rel="stylesheet">
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

  <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 4rem;">
      <div class="container">
        <dic class="row">
          <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <ol>
              <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
              <li>お問い合わせ</li>
            </ol>
          </div>
        </div>
      </div>
  </section>



  <section id="contact">
      <div class="container">
          <div class="row">
              <h2 class="text-center mt-5 welcome-message">boneedzで理想のカラダを！</h2>
              <p class="text-center mt-2">あなたのカラダ作りを全力でサポートします</p>              
              <div class="col-lg-8 mx-auto d-flex justify-content-between align-items-center mt-5 mb-5">
                  <?php echo do_shortcode('[contact-form-7 id="65" title="お問い合わせ"]'); ?>
              </div>
          </div>
      </div>
  </section>

</main>

<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php get_footer(); ?>

</body>


