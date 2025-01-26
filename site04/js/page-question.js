jQuery(function() {

  jQuery('.ac-title').on('click', function() {
    var findElm = jQuery(this).next('.ac-box');
    jQuery(findElm).slideToggle();
    if(jQuery(this).hasClass('close')) {
      jQuery(this).removeClass('close'); 
    } else {
      jQuery(this).addClass('close');
    }
  })

});

jQuery(window).scroll(function() {

})

jQuery(window).on('load', function() {


});