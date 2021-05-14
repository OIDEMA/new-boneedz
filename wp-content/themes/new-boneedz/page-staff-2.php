<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>香川県高松市にあるパーソナルトレーニングジム | スタッフ紹介</title>
  <?php get_header(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/page-staff.css" rel="stylesheet">
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
      <p style="color: #fff;">スタッフ紹介<p>
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
            <li>スタッフ紹介</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

<section id="staff">
    <div class="tab_wrap">
        <input id="tab1" type="radio" name="tab_btn" checked>
        <input id="tab2" type="radio" name="tab_btn">

        <div class="tab_area">
            <label class="tab1_label" for="tab1">高松店</label>
            <label class="tab2_label" for="tab2">坂出店</label>
        </div>
        <div class="panel_area">
            <div id="panel1" class="tab_panel">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/2-e1540437646333-990x1024.jpg" 
                                class="staff-image" alt="森岡 顕志　Kenji Morioka">
                            <div class="staff-name">
                                森岡 顕志　Kenji Morioka
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>ビールを飲む事</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バスケットボール</p>
                            <p>コンテスト入賞歴多数</p>

                            <h3>○座右の銘</h3>
                            <p>筋肉は最高のアクセサリー</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>2000名を超える方のサポートをしてきた経験を活かし、フィットネスの素晴らしさを共有しましょう！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/5-e1540437528262-990x1024.jpg" 
                                class="staff-image" alt="濱田 浩司　Koji Hamada">
                            <div class="staff-name">
                                濱田 浩司　Koji Hamada
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>トレーニング、バスケットボール</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バスケットボール(社会人リーグまで)</p>
                            <p>健康運動実践指導者</p>
                            <p>高齢者運動指導員</p>
                            <p>香川県メンズフィジーク大会準優勝</p>

                            <h3>○座右の銘</h3>
                            <p>継続は力なり</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>元大手フィットクラブでの指導経験と自身の減量体験をもとに、老若男女幅広くトレーニング指導させていただきます。</p>
                            <p>お客様の身体作りのサポートをしながらフィットネスの楽しさをお伝えできればと思います。</p>
                            <p>一緒に新たな自分を発見しましょう‼️</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/6-e1540437404794-990x1024.jpg"
                                class="staff-image" alt="長江 彩香　Ayaka Nagae">
                            <div class="staff-name">
                                長江 彩香　Ayaka Nagae
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>トレーニング、自然巡り</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バトミントン、卓球、水泳</p>
                            <p>保育士免許</p>
                            <p>幼稚園教諭二種免許</p>
                            <p>BBJ スーパーモデ2016日本大会ファイナリスト</p>
                            <p>BBJ 2017 大阪大会三位</p>
                            <p>BBJ 2017、2018 松江大会グランプリ</p>
                            <p>BBJ 2019 徳島大会 グランプリ</p>

                            <h3>○座右の銘</h3>
                            <p>七転八起</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>ヒップアップしたい！ 姿勢改善したい！ 綺麗な歩き方をしたい！女性の悩み、全てお任せください♪</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2018/12/13-e1540437469734-990x1024.jpg"
                                class="staff-image" alt="塩谷 浩三　Kouzou Shiotani">
                            <div class="staff-name">
                                塩谷 浩三　Kouzou Shiotani
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>映画観賞、トレーニング</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バレーボール 空手</p>
                            <p>調理師免許</p>

                            <h3>○座右の銘</h3>
                            <p>ノーペインノーゲイン（痛みなくして成長はない！）</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>大手スポーツクラブにて５年指導歴、スタジオトレーニング、プール指導等得意の話術でしっかり筋肉の意識出来るトレーニングをしていきます！</p>
                            <p>一緒に頑張りましょう！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/山城健人やましろけんと0001.jpg"
                                class="staff-image" alt="山城 健人　Yamashiro Kento">
                            <div class="staff-name">
                                山城 健人　Yamashiro Kento
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>トレーニング、野球観戦</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>野球</p>
                            <p>BBJ 那覇大会準グランプリ</p>
                            <p>BBJ 広島大会準グランプリ</p>
                            <p>BBJ 日本大会出場</p>

                            <h3>○座右の銘</h3>
                            <p>継続は力なり</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>お客様の目標と向き合いながら、カラダの変化、トレーニングの楽しさを感じてもらえるよう全力でサポートさせていただきます！</p>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/廣瀬直人ひろせなおと0001.jpg"
                                class="staff-image" alt="廣瀬 直人　Hirose Naoto">
                            <div class="staff-name">
                                廣瀬 直人　Hirose Naoto
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>ドライブ</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>柔道、格闘技</p>
                            <p>柔道岡山県代表</p>
                            <p>サンボ西日本大会優勝</p>
                            <p>柔術関西選手権優勝</p>

                            <h3>○座右の銘</h3>
                            <p>努力は報われる</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>運動を好きになっていただけるよう楽しくトレーニングをするよう心がけています。</p>
                            <p>なりたい自分になれるよう頑張っていきましょう！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/05/S__46923846.jpg"
                                class="staff-image" alt="藤本 英矩　Fujimoto Hidenori">
                            <div class="staff-name">
                                藤本 英矩　Fujimoto Hidenori
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>トレーニング・ゴルフ</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>野球15年間(大学まで)</p>
                            <p>香川県メンズフィジーク出場</p>

                            <h3>○座右の銘</h3>
                            <p>前後裁断</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>自身のトレーニング・パーソナル経験を生かし、多くの人に指導さしていただいております。</p>
                            <p>笑顔でストイックに楽しくトレーニング指導さしていただきます！</p>
                            <p>一緒に頑張りましょう！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49102851.jpg"
                                class="staff-image" alt="石河 輝彦　Ishikawa Teruhiko">
                            <div class="staff-name">
                                石河 輝彦　Ishikawa Teruhiko
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>YouTube鑑賞</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バスケット, ラグビー, トライアスロン</p>

                            <h3>○座右の銘</h3>
                            <p>今できる事を、一生懸命</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>できた！に立ち合え時がこの仕事の至福の時です。</p>
                            <p>一緒に楽しくトレーニング！！</p>
                            <p>若者には理解出来ない無理が効かない身体を私は、知ってます。</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49102853.jpg"
                                class="staff-image" alt="松本 一司  Matsumoto Kzushi">
                            <div class="staff-name">
                                松本 一司  Matsumoto Kzushi
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>トレーニング・旅行・カラオケ</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>MOS master等ビジネスパソコン資格</p>

                            <h3>○座右の銘</h3>
                            <p>もうこれで満足だという時は、すなわち衰える時である。</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>持ち前の声と掛け声で、お客様のトレーニングを全力でサポート！</p>
                            <p>理想の体まであと一歩！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49102855.jpg"
                                class="staff-image" alt="高畑 里彩 Takabatake Risa">
                            <div class="staff-name">
                                高畑 里彩 Takabatake Risa
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>カフェ巡り、とにかくいろんなところに出かける</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バドミントン, バレーボール, ラクロス, 水泳</p>

                            <h3>○座右の銘</h3>
                            <p>有言実行</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>お客様の体の悩みを解消したり目標を達成できるよう全力で指導させていただきます！</p>
                            <p>トレーニングを楽しみながら一緒に頑張りましょう！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/09/S__49111044.jpg"
                                class="staff-image" alt="大塚 悠夏 Otsuka Yuka">
                            <div class="staff-name">
                                大塚 悠夏 Otsuka Yuka
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>トレーニング、ダンス</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>4歳からダンスを始め, 高校卒業後　アメリカロサンゼルス1年間ダンス留学</p>
                            <p>レズミルズインストラクター</p>
                            <p>FTP Mat Pilatesインストラクター</p>

                            <h3>○座右の銘</h3>
                            <p>今を全力で生きる</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>ポジティブな充実した毎日を送れるように、楽しく時に厳しく、お客様一人一人にあったトレーニングをサポートさせていただきます！keep trying！！</p>
                        </div>
                    </div>

                </div>
            </div>
            <div id="panel2" class="tab_panel">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/05/S__46923853.jpg" 
                                class="staff-image" alt="鈴木 敦博　Suzuki Atsuhiro">
                            <div class="staff-name">
                                【坂出店長】鈴木 敦博　Suzuki Atsuhiro
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>水泳</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>水泳</p>

                            <h3>○座右の銘</h3>
                            <p>雲外蒼天</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>効かし方、フォームを大切にします。</p>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/山田和成やまだかずなり0001.jpg" 
                                class="staff-image" alt="山田 和成　Yamada Kazunari">
                            <div class="staff-name">
                                【坂出副店長】山田 和成　Yamada Kazunari
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>自転車、読書、珈琲</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>ソフトボール</p>
                            <p>レスミルズインストラクター</p>
                            <p>認定ダンス指導初級</p>
                            <p>エアロビクスインストラクター</p>

                            <h3>○座右の銘</h3>
                            <p>いかにいい仕事をしたかよりもどれだけ心を込めたか</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>目標達成できるよう寄り添ったトレーニングを行います！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/野本要輔のもとようすけ0001.jpg" 
                                class="staff-image" alt="野本 要輔　Nomoto yousuke">
                            <div class="staff-name">
                                野本 要輔　Nomoto yousuke
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>料理・映画鑑賞</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>ソフトボール・アメフト</p>

                            <h3>○座右の銘</h3>
                            <p>栄光に近道なし</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>お客様の「こうなりたい」という気持ちを実現するために充実したトレーニングを提供します。</p>
                            <p>一緒に理想の身体を目指しましょう！！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/05/S__46923856.jpg" 
                                class="staff-image" alt="廣田 里美　Hirota Satomi">
                            <div class="staff-name">
                                廣田 里美　Hirota Satomi
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>body jam 料理 読書</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>漕艇、バレーボール、ゴルフ、栄養士免許</p>

                            <h3>○座右の銘</h3>
                            <p>一日一笑</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>自身の三度の出産と子育て経験を活かし、幅広い世代のお客様や同世代のお客様が楽しく、より効果的なトレーニングが出来るように全力で指導させて頂きます。</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/高島華干たかしまはるか0001.jpg" 
                                class="staff-image" alt="高島 華干　Takashima Haruka">
                            <div class="staff-name">
                                高島 華干　Takashima Haruka
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>ライブに行くこと、人間観察！</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>中学時代にバドミントンしてました！（試合は一度も勝ったことありません。笑）</p>

                            <h3>○座右の銘</h3>
                            <p>今も昔も 男は度胸！女は愛嬌！</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>私はまだまだ他のトレーナーたちには実力などは及びませんが自分なりに学んだことを活かして、それぞれの人に合ったトレーニングで指導出来たらいいなと思います！</p>
                            <p>時には楽しくお話しながらトレーニングでもいかがですか？</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/03/小松-亜希子こまつあきこ0001.jpg" 
                                class="staff-image" alt="小松 亜希子 Komatsu Akiko">
                            <div class="staff-name">
                                小松 亜希子 Komatsu Akiko
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>猫と遊ぶ事</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>ZUMBA®インストラクター</p>
                            <p>StrongNationインストラクター</p>
                            <p>プラマイリー(pc)認定</p>

                            <h3>○座右の銘</h3>
                            <p>習慣は第二の天性なり</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>お客様に寄り添いながら理想の身体づくりのサポートを致します。</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2019/10/S__49831976.jpg" 
                                class="staff-image" alt="高井 雄太　Takai Yuta">
                            <div class="staff-name">
                                高井 雄太　Takai Yuta
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>筋トレ、バスケットボール</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>バスケットボール(小学3年生〜現在まで)</p>
                            <p>NESTA PFT(パーソナルフィットネストレーナー)</p>

                            <h3>○座右の銘</h3>
                            <p>初心・謙虚</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>効率の良いトレーニング指導を心がけています！</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center staff-wrapper">
                            <img 
                                src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2020/07/S__48119937.jpg" 
                                class="staff-image" alt="山内 望愛　YAMAUHI NOA">
                            <div class="staff-name">
                                山内 望愛　YAMAUHI NOA
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-start justify-content-center flex-column">
                            <h3>○趣味・特技</h3>
                            <p>料理、カクテル作り</p>

                            <h3>○スポーツ歴・資格・受賞歴</h3>
                            <p>空手道、柔道、テコンドー</p>

                            <h3>○座右の銘</h3>
                            <p>Love the life you live. Live the life you love.</p>

                            <h3>○指導のアピールポイント</h3>
                            <p>お客様のニーズにあった楽しいトレーニングをご提供します。</p>
                        </div>
                    </div>

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