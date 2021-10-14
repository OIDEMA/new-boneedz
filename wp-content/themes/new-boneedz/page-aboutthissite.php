<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | プライバシーポリシー</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-aboutthissite.min.css" rel="stylesheet">
</head>

<body>

<main id="main" style="background-color: #f8f8f8f;">

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    
      <a href="<?php echo home_url('/'); ?>" class="logo me-auto align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid">
      </a>
      
      <?php get_template_part('template-parts/navigation'); ?>
    </div>
  </header>

<section>
  <div class="container-fluid" id="top-image" style="margin-top: 6rem;">
    <div class="page-title">
      <p>このサイトについて</p>
    </div>
  </div>
</section>

<section id="policy" class="mt-5">
  <div class="container">
    <div class="row">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post (); ?>
                <div class="col-lg-10 d-flex flex-column mx-auto">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</section>

</main>

<?php get_template_part('template-parts/map'); ?>
<?php get_template_part('template-parts/sponsor'); ?>
<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php get_footer(); ?>

</body>