

/* クリックイベント
=========================== */
jQuery('#qa__1').click(function(){
  jQuery('#js-qa__2').removeClass('is-show');
  jQuery('#js-qa__3').removeClass('is-show');
  jQuery('#js-qa__4').removeClass('is-show');
  jQuery('#qa__2').removeClass('is-active');
  jQuery('#qa__3').removeClass('is-active');
  jQuery('#qa__4').removeClass('is-active');
  jQuery('#js-qa__1').addClass('is-show');
  jQuery('#qa__1').addClass('is-active');
  return false;
});

jQuery('#qa__2').click (function(){
  jQuery('#js-qa__1').removeClass('is-show');
  jQuery('#js-qa__3').removeClass('is-show');
  jQuery('#js-qa__4').removeClass('is-show');
  jQuery('#qa__1').removeClass('is-active');
  jQuery('#qa__3').removeClass('is-active');
  jQuery('#qa__4').removeClass('is-active');
  jQuery('#js-qa__2').addClass('is-show');
  jQuery('#qa__2').addClass('is-active');
  return false;
});

jQuery('#qa__3').click (function(){
  jQuery('#js-qa__1').removeClass('is-show');
  jQuery('#js-qa__2').removeClass('is-show');
  jQuery('#js-qa__4').removeClass('is-show');
  jQuery('#qa__1').removeClass('is-active');
  jQuery('#qa__2').removeClass('is-active');
  jQuery('#qa__4').removeClass('is-active');
  jQuery('#js-qa__3').addClass('is-show');
  jQuery('#qa__3').addClass('is-active');
  return false;
});

jQuery('#qa__4').click (function(){
  jQuery('#js-qa__1').removeClass('is-show');
  jQuery('#js-qa__2').removeClass('is-show');
  jQuery('#js-qa__3').removeClass('is-show');
  jQuery('#qa__1').removeClass('is-active');
  jQuery('#qa__2').removeClass('is-active');
  jQuery('#qa__3').removeClass('is-active');
  jQuery('#js-qa__4').addClass('is-show');
  jQuery('#qa__4').addClass('is-active');
  return false;
});

jQuery(".p-qa__question").click(function(){
  jQuery(this).next().slideToggle();
  jQuery(this).children('.p-qa__arrow1').toggleClass('is-open');
});

/* smoothscroll
=========================== */
jQuery(function () {
  // ヘッダーの高さを取得
  const height = jQuery(".p-header").height();
  // ヘッダーの高さ分コンテンツを下げる
  jQuery("main").css("margin-top", height);
  // ページ内スクロール
  jQuery('a[href^="#"]').click(function () {
    const speed = 1000;
    let href = jQuery(this).attr("href");
    let target = jQuery(href == "#" || href == "" ? "html" : href);
    // ヘッダーの高さ分下げる
    let position = target.offset().top - height;
    jQuery("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});
