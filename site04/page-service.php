<?php get_header(); ?>
    <div id="main-wrapper" class="wp-page page-service">
      <main class="main">

        <section class="section-page_title">
          <div class="container">
            <h1><?php the_title(); ?></h1>
          </div><!-- /.container -->
        </section><!-- /.section-page_title -->

        <div class="content-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf01-rev-w.png" alt="背景" class="bk01 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf02-rev_D-w.png" alt="背景" class="bk02 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">
          <img src="<?php echo get_template_directory_uri(); ?>/img/leaf01-rev_vh-w.png" alt="背景" class="bk03 bk wow fadeIn" data-wow-duration="2s" data-wow-offset="100">

          <section class="section-price">
            <div class="container">
              <div class="service-box price">
                <h2 class="service-box__title">料金</h2>
                <div class="price">
                  <div class="price-wrapper">
                    <span class="price__price">
                      25,000
                    </span><!-- /.price__price -->
                    <span class="price__yen">
                      円
                    </span><!-- /.price__yen -->
                    <span class="price__tax">
                      (税込)
                    </span><!-- /.price__tax -->
                  </div><!-- /.price-wrapper -->
                </div><!-- /.price -->
                <div class="text">
                  <p>
                    <span>料金には、以下のサービスが含まれます。</span><br>
                    <span>追加料金が発生することはございませんので、
                    </span><span>ご安心ください。</span>
                  </p>
                  <p class="supplement">
                    <span>※出張先が東京都(島部を除く)・神奈川県以外の場合は、</span><span>実費のみ追加でご請求させていただきます。</span>
                  </p>
                </div>               
              </div><!-- /.service-box -->
            </div><!-- /.container -->
          </section><!-- /.section-price -->

          <section class="section-service" id="js-service">
            <div class="container container-fluid">
              <div class="service-box service">
                <h2 class="service-box__title">サービス</h2>
                <div class="service-box__contents">
                  <div class="service-box__contents__content">
                    <div class="service-box__contents__content__title wow fadeInLeft" data-wow-duration="1s" data-wow-offset="150">
                      <div class="wrapper">
                        <div class="img-wrapper">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/service-train.png" alt="出張イメージ">
                        </div><!-- /.img-wrapper -->
                        <h3>出張</h3>
                      </div><!-- /.wrapper -->
                    </div><!-- /.service-box__contents__content__title -->
                    <p>
                      お客さまのご自宅や施設にお伺いさせていただきます。
                    </p>
                    <p>
                      出張費は<span class="emp">東京都内（島部を除く）・神奈川県内</span>であれば<span class="emp">無料</span>です。<br>
                      その他の地域の方は実費のみご請求させていただきます。
                    </p>
                  </div><!-- /.service-box__contents__content -->
                  <div class="service-box__contents__content">
                    <div class="service-box__contents__content__title wow fadeInLeft" data-wow-duration="1s" data-wow-offset="150">
                      <div class="wrapper">
                        <div class="img-wrapper">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/service-camera.png" alt="撮影イメージ">
                        </div><!-- /.img-wrapper -->
                        <h3>撮影</h3>
                      </div><!-- /.wrapper -->
                    </div><!-- /.service-box__contents__content__title -->
                    <p>
                      <span class="emp">撮影時間・枚数は定めておりません。</span><br>
                      お客様のご都合が許す限り、そしてお客様のお気に入りのお写真が撮れるまで撮影させていただきます。
                    </p>
                    <p>
                      プロのモデルさんではありませんから撮影に慣れてなくて当たり前です。 レンズを向けられるという撮影の雰囲気に慣れていただくため、お客様やご家族の皆様とお話しをしながら、ゆっくり撮影させていただきます。
                    </p>
                    <p class="br">
                      撮影途中に、<span class="emp">お写真の写り具合をタブレットでご覧いただけます。 </span><br>
                      もしその中にお気に入りのお写真がなかった場合は、お客様のご様子とご都合を見ながらお時間の許す限り撮影を続けます。
                    </p> 
                  </div><!-- /.service-box__contents__content -->
                  <div class="service-box__contents__content">
                    <div class="service-box__contents__content__title wow fadeInLeft" data-wow-duration="1s" data-wow-offset="150">
                      <div class="wrapper">
                        <div class="img-wrapper">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/service-frame.png" alt="額装イメージ">
                        </div><!-- /.img-wrapper -->
                        <h3>編集・プリント</h3>
                      </div><!-- /.wrapper -->
                    </div><!-- /.service-box__contents__content__title -->
                    <p>
                      撮影終了後、お客様に<span class="emp">お気に入りのお写真を10枚お選びいただきます。</span>
                    </p>
                    <p>
                      ・<span class="under">お気に入りのお写真10枚</span>は<span class="emp">画像編集</span>いたします。<br>
                      ・画像編集したお写真を<span class="emp">2Lサイズにプリント</span>してお渡しします。
                    </p>
                  </div><!-- /.service-box__contents__content -->
                  <div class="service-box__contents__content">
                    <div class="service-box__contents__content__title wow fadeInLeft" data-wow-duration="1s" data-wow-offset="150">
                      <div class="wrapper">
                        <div class="img-wrapper">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/service-delivery.png" alt="配達イメージ">
                        </div><!-- /.img-wrapper -->
                        <h3>お渡し</h3>
                      </div><!-- /.wrapper -->
                    </div><!-- /.service-box__contents__content__title -->
                    <p>
                      <span class="under">撮影したすべてのお写真とお選びいただいたお気に入りのお写真のデータ</span>は<span class="emp">JPEG形式</span>で<span class="emp">CDやDVD</span>に書き込み、<br><span class="under">プリントしたお写真10枚</span>と一緒に<span class="emp">1週間以内</span>に発送いた します。
                    </p>
                  </div><!-- /.service-box__contents__content -->
                </div><!-- /.service-box__contents -->
                <p>
                  <span>ご要望がございましたら、</span><span>お気軽にご相談ください。</span>
                </p>
              </div><!-- /.service-box service -->
            </div><!-- /.container container-fluid -->
          </section><!-- /.section-service -->
          
          <div class="btn-wrapper">
            <a href="<?php echo home_url('/question'); ?>" class="btn btn01">
              <span>よくあるご質問へ</span>
            </a><!-- /.btn01 -->
          </div><!-- /.btn-wrapper -->

        </div><!-- /.content-wrapper -->

      </main><!-- /.main -->
    </div><!-- /#main-wrapper.wp-page -->
<?php get_footer(); ?>
