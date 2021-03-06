<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | Q&A</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-company.min.css" rel="stylesheet">
</head>

<body>

<main id="main">

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
      <p>会社概要</p>
    </div>
  </div>
</section>

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <dic class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li>会社概要</li>
          </ol>
        </div>
      </div>
    </div>
</section>

<section id="company" class="company mt-5">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <table>
                <tr>
                    <th>
                    社名
                    </th>
                    <td>
                    株式会社NBM
                    </td>
                </tr>
                <tr>
                    <th>
                    代表社名
                    </th>
                    <td>
                    代表取締役　玉井　裕一
                    </td>
                </tr>
                <tr>
                    <th>
                    所在地
                    </th>
                    <td>
                    香川県高松市内町1-13　日新内町ビル３F
                    </td>
                </tr>
                <tr>
                    <th>
                    運営サービス
                    </th>
                    <td>
                    パーソナルトレーニングジム 健康事業全般
                    </td>
                </tr>
                <tr>
                    <th>
                    TEL
                    </th>
                    <td>
                    087-851-2345
                    </td>
                </tr>
                <tr>
                    <th>
                    FAX
                    </th>
                    <td>
                    087-887-0119
                    </td>
                </tr>
            </table>
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