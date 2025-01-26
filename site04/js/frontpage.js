function changeColor() {
  jQuery('.section-question').each(function() {
      var elemPos = jQuery(this).offset().top + 500;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll >= elemPos - windowHeight) {
        jQuery('.section-service').addClass('color');
        jQuery(this).addClass('color');
      } else {
        jQuery('.section-service').removeClass('color');
        jQuery(this).removeClass('color');
      }

  })
}

jQuery(function() {

});

jQuery(window).scroll(function() {
  changeColor();
})

jQuery(window).on('load', function() {
  
  changeColor();

  // vivus
  var stroke;
  stroke = new Vivus('vlogo', {
    start: 'manual',
    type: 'scenario',
    duration: 30,
    forceRender: false,
    animTimingFunction: Vivus.LINEAR,
  }
  );
  
  var splash_text = ""
  if (jQuery.cookie('accessdate')) {
    var splash_text = jQuery.cookie('accessdate');
  }
  var myD = new Date();
  var myYear = String(myD.getFullYear());
  var myMonth = String(myD.getMonth() + 1);
  var myDate = String(myD.getDate());

  jQuery('#splash__logo').css("display", "block");

  if (splash_text != myYear + myMonth + myDate) {
      jQuery('#splash').delay(2000).fadeOut(3000);
      jQuery('#splash__logo').delay(2000).fadeOut(3000);
      stroke.play();
      jQuery.cookie('accessdate', myYear + myMonth + myDate);
  } else {
    jQuery('#splash').css("display", "none");
  }

  //slick
  jQuery('.slider').slick({
    fade: true,
    autoplaySpeed: 5000,
    speed: 2000,
    autoplay: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false
  })

  // 1回目以降のオートプレイスピード変更
  jQuery('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
    jQuery('.slider').slick('slickSetOption', 'autoplaySpeed', '3000', true);
  });

  jQuery('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide) {
    jQuery('.slider').slick('slickPlay');
  })

  jQuery(function(){
    jQuery('.gallery').slick({
      autoplay: true, // 自動でスクロール
      autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
      speed: 5000, // スライドが流れる速度を設定
      cssEase: "linear", // スライドの流れ方を等速に設定
      slidesToShow: 4, // 表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, // 矢印非表示
      pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2, // 画面幅576px以下でスライド2枚表示
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
          }
        },
      ]
    });
  });


});