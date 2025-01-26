// ヘッダー色
function FixedAnime() {
  var headerH = jQuery('#header').outerHeight(true);
  var scroll = jQuery(window).scrollTop();
  if (scroll >= headerH) {
    jQuery('#header').addClass('ntop');
  } else {
    jQuery('#header').removeClass('ntop');
  }
}


jQuery(function() {

  //スマホメニュー
  jQuery('.openbtn').click(function() {
    jQuery(this).toggleClass('active');
    jQuery('#open-nav').toggleClass('panelactive');
    jQuery('#header').toggleClass('panelactive');
  })

  jQuery('#open-nav a').click(function() {
    jQuery(this).removeClass('active');
    jQuery('#open-nav').removeClass('panelactive');
    jQuery('#header').removeClass('panelactive');
  })

})

jQuery(window).scroll(function() {
  FixedAnime();
})
jQuery(window).on('load', function() {
  FixedAnime();
})