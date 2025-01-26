function changeColor() {
     $service = jQuery('#js-service');
    //  $other = jQuery('#js-other');

     if ($service) {
       var svPos = $service.offset().top + 600;
      //  var otPos = $other.offset().top + 600;
        var scroll = jQuery(window).scrollTop();
        var windowHeight = jQuery(window).height();
        // if (scroll >= otPos - windowHeight) {
        //   jQuery('.content-wrapper').addClass('other');
        //   jQuery('.content-wrapper').removeClass('service');
        // } 
        if (scroll >= svPos - windowHeight) {
          jQuery('.content-wrapper').addClass('service');
          // jQuery('.content-wrapper').removeClass('other');
        } else {
          jQuery('.content-wrapper').removeClass('service');
          // jQuery('.content-wrapper').removeClass('other');
        }
     }

}

jQuery(function() {

});

jQuery(window).scroll(function() {
  changeColor();
})

jQuery(window).on('load', function() {
  
  changeColor();

});