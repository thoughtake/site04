<?php get_header(); ?>
    <div id="main-wrapper" class="wp-page page-contact">

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

          <section class="section-attention">
            <div class="container">
              <p>
                ・迷惑メールフィルターを設定の方は「<span class="strong">i.hope.photo0610@gmail.com</span>」から受信ができるように設定をお願いいたします。
              </p>
              <p>
                ・お問い合わせの送信後24時間以内に返信メールが届いていない場合は、お手数ですがお電話にてご連絡ください。
              </p>
              <p>
                ・営業を目的としたお問い合わせはご遠慮ください。
              </p>
            </div><!-- /.container -->
          </section>

          <section class="section-contact">
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