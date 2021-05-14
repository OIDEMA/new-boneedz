<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | 短期集中プログラム</title>
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-extensive.css" rel="stylesheet">
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

<section>
  <div class="container-fluid" id="top-image" style="margin-top: 6rem;">
    <div class="page-title">
      <p style="color: #fff;">短期集中プログラム</p>
    </div>
  </div>
</section>

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <dic class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li>短期集中プログラム</li>
          </ol>
        </div>
      </div>
    </div>
</section>

<section id="extensive" class="extensive" style="background-color: #000;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto d-flex align-items-center justify-content-center">
        <h2>体を変えらえる！</h2>
      </div>
    </div>
  </div>
</section>

</main>

<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php get_footer(); ?>

</body>