jQuery(function() {

  jQuery('.contact-control.select').each(function() {
    $target = jQuery(this).children('dd');
    var txt = $target.text();
    $target.text(jQuery.trim(txt));
  })

})

jQuery(window).scroll(function() {

})

jQuery(window).on('load', function() {

})