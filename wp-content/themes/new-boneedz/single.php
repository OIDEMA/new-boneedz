<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>boneeds | お知らせ </title>
  <?php get_header(); ?>
  <?php if( !is_user_logged_in() && !is_bot() ) setPostViews( get_the_ID() ) ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/single-post.min.css" rel="stylesheet">

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

      </div>
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