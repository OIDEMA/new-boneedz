<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市・坂出市にあるパーソナルトレーニングジム | コース・料金</title>
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/front-page.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-service.min.css" rel="stylesheet">  
</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <a href="<?php echo home_url('/') ?>" class="logo me-auto align-items-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>
            
            <?php get_template_part('template-parts/navigation'); ?>

        </div>
    </header>

    <main id="main" style="background-color: #f8f8f8;">

    <section　style="margin-top: 6rem;">
        <div class="container-fluid" id="top-image" style="margin-top: 6rem;">
            <div class="page-title">
                <p style="color: #fff; font-weight: bold;">コース・料金<p>
            </div>
        </div>
    </section>

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
        <dic class="row">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <ol>
                <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
                <li>コース・料金</li>
            </ol>
            </div>
        </div>
        </div>
    </section>

        <section id="pricing" class="section">
            <div class="container">

                <div class="section-header">
                    <h3 class="mt-4 mb-4">体験コース</h3>
                    <p class="text-center mb-4" style="font-weight: bold;">完全予約制のパーソナルトレーニングで目的にあったマンツーマントレーニングを行います。</p>
                    <!-- <p class="text-center" style="font-weight: bold;">理想のカラダづくりの第一歩。まずはお気軽にお試しください。</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <table class="menu mb-4">
                            <tr>
                                <th class="initial-th text-center">体験トレーニングコース</th>
                                <td class="initial-td text-center">50分</td>
                                <td class="initial-td text-center">3000円</td>
                            </tr>
                            <tr>
                                <th class="initial-th text-center">必要なもの</th>
                                <td style="background-color: #fff;" colspan="2">
                                    シューズ<br>
                                    運動できる服装<br>
                                    タオルなど
                                </td>
                            </tr>
                            <tr>
                                <th class="initial-th text-center">注意事項</th>
                                <td style="background-color: #fff;" colspan="2">
                                    お一人様１回限り<br>
                                    完全予約制となっておりますので、お電話でお申し込みください。<br>
                                    現在、平日18時以降のご予約がお取りしづらい状況となっております。詳しくはお問い合わせくださいませ。
                                </td>
                            </tr>
                            <tr>
                                <th class="initial-th text-center">その他</th>
                                <td style="background-color: #fff;" colspan="2">
                                    ウォーターサーバーご自由にご利用いただけます。
                                </td>
                            </tr>
                        </table>

                        <p class="text-center" style="color: #880000;">「サイトを見た」とお伝えいただくと、無料で体験トレーニングをお受けいただけます。</p>  
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/service-menu'); ?>

        <?php get_template_part('template-parts/banner'); ?>

    </main>

    <?php get_template_part('template-parts/map'); ?>
    <?php get_template_part('template-parts/sponsor'); ?>
    <?php get_template_part('template-parts/footer'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php get_footer(); ?>
</body>

</html>