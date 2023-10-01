/* top画面スライダー_Swiper
=========================== */
const topSwiper = new Swiper('.top-swiper', {
  // Optional parameters
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000, //4秒後に次の画像へ
    disableOnInteraction: false //ユーザー操作後に自動再生を再開する
  },
  speed: 2000, //２秒かけながら次の画像へ移動
  // allowTouchMove: false, //マウスでのスワイプを禁止
});

/* swiper
=========================== */
const slider = new Swiper('.slider', {
  loop: true,

  slidesPerView: 3, // 一度に表示する枚数
  spaceBetween: 3,
  speed: 10000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  autoplay: {
    delay: 0, // 途切れなくループ
    disableOnInteraction: false,
  },

  //breakpoint
  breakpoints: {
    415: {
      // slidesPerView: 4,
      // spaceBetween: 3
    },

    768: {
      slidesPerView: 1.3,
      spaceBetween: 3
    },

    1441: {
      slidesPerView: 1.8,
      // slidesPerView: 8,
      spaceBetween: 3,
    }
  }

});

/* drawer
=========================== */
//アイコンクリックで開閉
$('#js-drawer').on('click', function(e) {
  e.preventDefault();
  $('.c-drawer').toggleClass('is-open');
  $('.p-drawer__menu').toggleClass('is-open');
  $('.p-drawer__content').toggleClass('is-open');
  $('.p-drawer__button').toggleClass('is-open');
  $('.p-drawer__background').toggleClass('is-open');
  return false;
});

$('.p-drawer__list').on('click', function(e) {
  e.preventDefault();
  $('.c-drawer').removeClass('is-open');
  $('.p-drawer__menu').removeClass('is-open');
  $('.p-drawer__content').removeClass('is-open');
  $('.p-drawer__button').removeClass('is-open');
  $('.p-drawer__background').removeClass('is-open');
  return false;
});
