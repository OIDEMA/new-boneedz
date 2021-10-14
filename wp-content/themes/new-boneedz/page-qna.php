<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | Q&A</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-qna.min.css" rel="stylesheet">
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
        <!-- <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a> -->
        <a href="https://instagram.com/boneedz_t_s?igshid=o18yoxm3cj" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>

<section>
  <div class="container-fluid" id="top-image" style="margin-top: 6rem;">
    <div class="page-title">
      <p style="color: #fff;">FAQ</p>
    </div>
  </div>
</section>

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <dic class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li>FAQ</li>
          </ol>
        </div>
      </div>
    </div>
</section>

<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">

    <!-- <p class="text-center"> - Q&A - </p> -->
  
    <ul class="faq-list mt-5" data-aso="fade-up" data-aos-delay="100">

      <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        ① どれくらいの期間で効果を実感できますか？
        </div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
          <p>
            A1．早い方で１ヶ月ほどで効果を実感されます。</br>
            なお、運動習慣や生活習慣を定着させていただくために可能な限り長い期間をかけて効果を実感していただいております。
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">② 他のパーソナルジムとの違いが知りたいです。
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
          <p>
          A2．短期的な結果ではなく「長期的な変化」を目的としております。</br>
          ボニーズでは「短期集中プラン」もございますが、短期的な結果ではなく「長期的な変化」を目的としております。また、各クライアント様に合ったプランを優秀なトレーナーが考案させていただきます。
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">③ トレーナーは指名できますか？また、変更はできますか？
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        </div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
          <p>
            A3．もちろん指名可能です。</br>
            各トレーナーの空き枠次第ではございますが、クライアント様のご希望や日程が合えば特に問題ございません。
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">④ ウェアやシューズのレンタルはありますか？
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        </div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
          <p>
            A4．男女それぞれレンタルシューズはございます。
            ※ウェアレンタルは現在行っておりません。お忘れの無いようお願い申し上げます。
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">⑤ 高齢でも入会可能ですか？
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        </div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
          <p>
            A5．もちろん大歓迎です。</br>
            ボニーズには様々な年齢層のクライアント様に在籍頂いております。運動不慣れな方でも安心してご入会いただけます。ただ、「怪我・疾病」をお持ちの方はかかりつけ医の診察に沿ってご相談ください
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">⑥ 支払い方法は？カード払い可能ですか？
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        </div>
        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
          <p>
            A6．ボニーズでは一律「口座引き落とし」とさせていただいております。
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">⑦ 女性が筋力トレーニングをしてもムキムキになりませんか？
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        </div>
        <div id="faq7" class="collapse" data-bs-parent=".faq-list">
          <p>
            A7．目的に合ったトレーニングを提案させていただきます。<br>
            その方のご希望にもよりますが、シェイプアップ目的の方や部分痩せ目的の方に合ったトレーニングを提案させていただきますのでご安心ください。
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">⑧ 空いている時間はありますか？
        <span class="question-icon"><i class="bi bi-plus-circle-fill icon-show"></i></span><span class="question-icon"><i class="bi bi-dash-circle-fill icon-close"></i></span>
        </div>
        <div id="faq8" class="collapse" data-bs-parent=".faq-list">
          <p>
          A8．現在どの時間帯でも承っておりますが17:00以降の予約が大変混み合っております。<br>
          14:00～17:00までの時間帯ですと、比較的ご希望に沿った予約をお取りできるかと思います。
          </p>
        </div>
      </li>

    </ul>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <p class="text-center my-4">不明点が解決されない場合、専用フォームよりお問い合わせください</p>
      <div class="triangle"></div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <a href="<?php echo home_url('/contact/'); ?>" id="question-btn" class="btn btn-secondary">
        <button class="btn btn-secondary">ご質問フォームへ</button>
      </a>
    </div>
  </div>
</section>

</main>

<?php get_template_part('template-parts/footer'); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php get_footer(); ?>

</body>