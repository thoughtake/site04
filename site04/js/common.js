function anime() {
  jQuery('.animeTrigger').each(function() {
    var anime = jQuery(this).attr('data-anime');
    var offset = jQuery(this).attr('data-offset');
    var duration = jQuery(this).attr('data-duration');
    var delay = jQuery(this).attr('data-delay');

    if (anime) {
      jQuery(this).css('animation-duration', duration ? duration : '1s');
      jQuery(this).css('animation-delay', delay ? delay : '0s');
      var elemPos = jQuery(this).offset().top + (offset ? offset : 0);
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll >= elemPos - windowHeight) {
        jQuery(this).addClass(anime);
      } 
    }

  })
}

function pageTopAnime() {
  var scroll = jQuery(window).scrollTop();
  if (scroll >= 200) {
    jQuery('#page-top').removeClass('downMove');
    jQuery('#page-top').addClass('upMove');
  } else {
    if (jQuery('#page-top').hasClass('upMove')) {
      jQuery('#page-top').removeClass('upMove');
      jQuery('#page-top').addClass('downMove');
    }
  }
}


jQuery(function() {
  new WOW().init();

  jQuery('#page-top').click(function() {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 500);
  })


})

jQuery(window).scroll(function() {
  anime();
  pageTopAnime();
})

jQuery(window).on('load', function() {
  anime();
  pageTopAnime();
})