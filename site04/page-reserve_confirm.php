<?php get_header(); ?>
    <div id="main-wrapper" class="wp-page page-reserve">
      <main class="main">

        <section class="section-page_title">
          <div class="container">
            <h1><?php the_title(); ?></h1>
          </div><!-- /.container -->
        </section><!-- /.section-page_title -->

        <div class="content-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf01-rev.png" alt="背景" class="bk01 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf02-rev_D.png" alt="背景" class="bk02 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf01-rev_vh.png" alt="背景" class="bk03 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">

          <section class="section-attention confirm">
            <div class="container">
              <p>
                <span>以下の内容でよろしければ、</span><span>「送信する」を選択してください。</span>
              </p>
            </div><!-- /.container -->
          </section>

          <section class="section-reserve confirm">
            <div class="container">
              <div class="form-wrapper wp-form">
                <!-- wp-form -->
                <?php the_content(); ?>
              </div><!-- /.form-wrapper -->
            </div><!-- /.container -->
          </section><!-- /.section-contact -->

        </div><!-- /.content-wrapper -->
      
      </main><!-- /.main -->
    </div><!-- /#main-wrapper.wp-page -->
<?php get_footer(); ?>