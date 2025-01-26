<?php get_header(); ?>
    <div id="main-wrapper" class="wp-page page-not_found">
      <main class="main">

        <section class="section-page_title">
          <div class="container">
            <h1><span>404</span><span>Not Found</span></h1>
          </div><!-- /.container -->
        </section><!-- /.section-page_title -->

        <div class="content-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf01-rev.png" alt="背景" class="bk01 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf02-rev_D.png" alt="背景" class="bk02 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf01-rev_vh.png" alt="背景" class="bk03 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">

          <section class="section-not_found">
            <div class="container">
              <p class="nf">
                お探しのページは見つかりませんでした。
              </p>
              <p>
                 申し訳ございません。<br>
                 ご指定のページは一時的にアクセスできない状況にあるか、移動もしくは削除された可能性がございます。
              </p>
            </div><!-- /.container -->
          </section>

          <div class="btn-wrapper">
            <a href="<?php echo home_url(); ?>" class="btn btn01">
              <span>ホームへ</span>
            </a><!-- /.btn01 -->
          </div><!-- /.btn-wrapper -->

        </div><!-- /.content-wrapper -->
      
      </main><!-- /.main -->
    </div><!-- /#main-wrapper.wp-page -->
<?php get_footer(); ?>