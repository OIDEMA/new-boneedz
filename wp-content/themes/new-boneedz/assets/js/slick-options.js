jQuery(function() {
  jQuery('.slick-wrapper').slick({
    autoplaySpeed: 3000, // 自動再生で切り替えをする時間
    speed: 400, // 自動再生でスライドさせるスピード
    infinite: true, // 無限スクロール
    dots: true, // 画像下のドット（ページ送り）を表示
    arrows: true, // 左右の次へ、前へボタンを表示
    autoplay: true, // 自動再生
    slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
    slidesToScroll: 1, // 一度にスライドする数
    // responsive: [
    //   {
    //     breakpoint: 968,
    //     settings: {
    //       slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
    //       slidesToScroll: 1, // 一度にスライドする数
    //     },
    //   },
    //   {
    //     breakpoint: 468,
    //     settings: {
    //       slidesToShow: 1, // スライドのエリアに画像がいくつ表示されるかを指定
    //       slidesToScroll: 1, // 一度にスライドする数
    //     }
    //   }]
    });
});