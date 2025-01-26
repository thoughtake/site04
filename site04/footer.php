    <footer id="footer" class="footer">
      <div class="footer__contact">
        <p class="text">
          お気軽にお問合せください
        </p><!-- /.text -->
        <div class="tel">
          <i class="fa fa-phone"></i>
          <a href="tel:05034923160">050-3492-3160</a>
        </div><!-- /.tel -->
      </div><!-- /.footer__contact -->
      <div class="btn-wrapper">
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn01">
          <span>お問合せフォームはこちら</span>
        </a><!-- /.btn01 -->
      </div><!-- /.btn-wrapper -->
      <nav class="footer__nav">
        <?php 
          $args = array(
            'menu' => 'footer-navigation',
            'menu_class' => '',
            'container' => false,
            'link_before' => '<span>',
            'link_after' => '</span>'
          );
          wp_nav_menu($args);
        ; ?>
      </nav><!-- /.footer__nav -->
      <div class="copyright">
        &copy; アイ・ホープ 2022
      </div><!-- /.copyright -->
    </footer><!-- /.footer -->

    <div id="page-top">
    </div><!-- /#page-top -->

    <?php 
      wp_enqueue_script('jquery');    
      wp_enqueue_script('jquery-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js', array( 'jquery' ), '1.0.0', true);
      wp_enqueue_script('vivus', 'https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.6/vivus.min.js', array( 'jquery' ), '1.0.0', true);
      wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '1.0.0', true);
      wp_enqueue_script('date-picker', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array( 'jquery' ), '1.0.0', true);
      wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true);
      wp_enqueue_script('cmn', get_template_directory_uri() . '/js/common.js', array( 'jquery' ), '1.0.0', true);
      wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), '1.0.0', true);
      if ( is_front_page() ):
        wp_enqueue_script('frontpage', get_template_directory_uri() . '/js/frontpage.js', array( 'jquery' ), '1.0.0', true);
      elseif (is_page('service')):
        wp_enqueue_script('service', get_template_directory_uri() . '/js/page-service.js', array( 'jquery' ), '1.0.0', true);
      elseif (is_page('question')):
        wp_enqueue_script('question', get_template_directory_uri() . '/js/page-question.js', array( 'jquery' ), '1.0.0', true);
      elseif (is_page('contact') || is_page('reserve')):
        wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js', array( 'jquery' ), '1.0.0', true);
        $tmp_path_arr = array(
          'temp_uri' => get_template_directory_uri(),
          'home_url' => home_url()
         );
         wp_localize_script( 'form', 'tmp_path', $tmp_path_arr );
      elseif (is_page('reserve_confirm')):
        wp_enqueue_script('reserve_confirm', get_template_directory_uri() . '/js/reserve_confirm.js', array( 'jquery' ), '1.0.0', true);
      endif;
      wp_footer(); 
    ?>
  </body>
</html>