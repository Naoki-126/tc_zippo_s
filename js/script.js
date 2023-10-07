

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
