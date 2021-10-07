$(document).ready(function () {
// swiperをイニシャライズ
var mySwiper = new Swiper ('.swiper-container', {
  // オプションのパラメーターを指定
  slidesPerView: 4,
  direction: 'horizontal',
  loop: true,
  // spaceBetween: 15,
  breakpoints: {
  // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    960: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
  // centeredSlides: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  // pagination: {
  //   el: '.swiper-pagination',
  //   dynamicBullets: true,
  //   clickable: true,
  // },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  })
});