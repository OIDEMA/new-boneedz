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

<section id="pricing" class="section" style="background-color: #000;">
  <div class="container">

    <div class="section-header">
      <h3 class="mt-4 mb-4">Pergect Boneedz</h3>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">

        <table class="mb-5">
          <tr>
            <th class="initial-th text-center">初期登録料</th>
            <td class="initial-td text-center">10,000円</td>
          </tr>
        </table>

        <table class="menu">
          <tr>
            <th class="initial-th text-center"></th>
            <td class="initial-td text-center" style="font-weight: bold">30分</td>
            <td class="initial-td text-center" style="font-weight: bold">60分</td>
          </tr>

          <tr>
            <th class="initial-th text-center">まずは週1回</th>
            <td class="initial-td text-center">11,200円／月4回</td>
            <td class="initial-td text-center">19,400円／月4回</td>
          </tr>

          <tr>
            <th class="initial-th text-center">向上への一歩！</th>
            <td class="initial-td text-center">15,300円／月6回</td>
            <td class="initial-td text-center">26,500円／月6回</td>
          </tr>

          <tr>
            <th class="initial-th text-center">しっかりトレーニング！！週2回</br>［おすすめ］</th>
            <td class="initial-td text-center">19,400円／月8回</td>
            <td class="initial-td text-center">33,600円／月8回</td>
          </tr>

          <tr>
            <th class="initial-th text-center">短期集中型！効果絶大！！</th>
            <td class="initial-td text-center">26,500円／月12回</td>
            <td class="initial-td text-center">40,700円／月12回</td>
          </tr>

        </table>

        <div class="section-header mt-5">
          <h3 class="mt-4">（ジュニア）コース・料金</h3>
          <p class="mb-4">※高校生以上は大人料金</p>
        </div>

        <table class="junior-menu">

          <tr>
            <th class="initial-th text-center">対象</th>
            <td class="initial-td text-center">小学生・中学生</td>
          </tr>

          <tr>
            <th class="initial-th text-center">料金</th>
            <td class="initial-td text-center">
              10,200円／30分コース月4回</br>
              14,300円／30分コース月6回</br>
              18,300円／30分コース月8回
            </td>
          </tr>

          <tr>
            <th class="initial-th text-center">初期登録料	</th>
            <td class="initial-td text-center">10,000円</td>
          </tr>

        </table>

      </div>
    </div>
  </div>
</section>

</main>

<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php get_footer(); ?>

</body>