<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script src="https://kit.fontawesome.com/8b6c77030c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css?<?php echo date('Ymd-Hi'); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
  <?php 
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '1.0.0');    
    wp_enqueue_style('date-picker', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css', array(), '1.0.0');    
  ; ?>  
  <?php if (has_post_thumbnail()) : ?>
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
  <?php else: ?>
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if ( is_front_page() ): ?>
  <header id="header">
<?php else: ?>
  <header id="header" class="w">
<?php endif; ?>
    <div class="header-left">
      <a href="<?php echo home_url(); ?>">
        <div class="header-left__symbol">
          <img src="<?php echo get_template_directory_uri(); ?>/img/symbol.png" alt="シンボルマーク">
        </div>
        <h1 class="header-left__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="アイ・ホープ">
        </h1>
      </a>
    </div><!-- /.header-left -->
    <div class="header-right">
      <nav class="header-right__nav">
        <?php 
          $args = array(
            'menu' => 'header-navigation',
            'menu_class' => '',
            'container' => false,
          );
          wp_nav_menu($args);
        ; ?>
      </nav><!-- /.header-right__nav -->
      <div class="openbtn">
        <span></span><span></span><span></span>
      </div><!-- /.openbtn -->
    </div><!-- /.header-right -->

  </header><!-- /#header -->

  <nav id="open-nav">
    <div id="open-nav__list">
      <?php 
        $args = array(
          'menu' => 'header-navigation',
          'menu_class' => '',
          'container' => false,
        );
        wp_nav_menu($args);
      ; ?>
      <div class="under">
        <div class="tel">
          <i class="fa fa-phone"></i>
          <a href="tel:05034923160">050-3492-3160</a>
        </div><!-- /.tel -->
      </div><!-- /.under -->
    </div><!-- /#open-nav__list -->
  </nav><!-- /#open-nav -->