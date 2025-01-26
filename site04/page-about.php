<?php get_header(); ?>
    <div id="main-wrapper" class="wp-page page-about">
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

          <!-- パンクズ -->
          <div class="container container-fluid">
            <?php get_template_part('template-parts/breadcrumb'); ?>
          </div><!-- /.container -->

          <section class="section-profile">
            <div class="container container-fluid">
              <img src="<?php echo get_template_directory_uri(); ?>/img/water01.png" alt="背景" class="bk pho01 wow fadeIn" data-wow-duration="2s" data-wow-offset="400" data-wow-delay="1s">
              <img src="<?php echo get_template_directory_uri(); ?>/img/water02.png" alt="背景" class="bk pho02 wow fadeIn" data-wow-duration="2s" data-wow-offset="400" data-wow-delay="2s">
              <p class="motto">
                <span>いつもの服で、</span><span>いつもの自分らしい笑顔で。</span>
              </p><!-- /.motto -->
              <div class="texts">
                <div class="texts__wrapper">
                  <p class="text text01">
                    <span>私は『街の写真屋さん』を25年間営んできました。</span><br><br>
                    <span>様々なご注文の中で、</span><span>お客様もそして私たちも一番困ってしまうご注文が「遺影写真」でした。</span><br><br>
                    <span>ご本人がお亡くなりになってから</span><span>ご遺族の方が慌てて写真を探しても良い写真が見つからない...</span><br>
                    <span>そんな場面を数多く体験し、</span><span>「なんとかそのような皆さんのお役に立ちたい」という願いから</span><br>
                    <span>出張生前写真専門店『アイ・ホープ』を立ち上げました。</span>
                  </p><!-- /.text -->
                  <p class="text text02">
                    <span>私たちは写真スタジオを持ちません。</span><br>
                    <span>お客さまのご自宅や施設に直接お伺いさせていただき、</span><span>レンズに慣れていただけるよう、</span><span>急がず、慌てず、のんびりと</span><span>お客さまの体調にあわせて撮影させていただきます。</span><br><br>
                    <span>「スタジオまで行くのが大変」</span><br>
                    <span>「スタジオでの撮影は苦手」</span><br>
                    <span>「老人施設・介護施設に入居していて外出できない」</span><br>
                    <span>等々、スタジオまで来られない方がたくさんいらっしゃいます。</span><br><br>
                    <span>また、普段とは異質な空間スタジオで、</span><span>大がかりな照明で照らされ、</span><span>緊張した雰囲気で、 </span><span>バリバリのメイクをし、</span><span>着慣れない服を着て、</span><span>ぎこちない笑顔を写真に収める...</span><br>
                    <span>のではなく、</span><span>ありのままの自然な表情の写真をお撮りしたいと私たちは願っています。</span><br>
                    <span>そんな想いから『アイ・ホープ』は生まれました。</span>
                  </p><!-- /.text -->
                  <p class="name">
                    <span>代表</span>武石 雅美（たけいし まさみ）
                  </p><!-- /.name -->
                </div><!-- /.texts__wrapper -->
              </div><!-- /.content -->
              <div class="picture">
                <img src="<?php echo get_template_directory_uri(); ?>/img/masami01.jpg" alt="武石雅美の写真">
              </div><!-- /.picture -->
            </div><!-- /.container -->
          </section><!-- /.section-profile -->
          <section class="section-information">
            <div class="container">
              <div class="content-blocks">
                <div class="content-blocks__block">
                  <div class="block-title">社名</div><!-- /.block-title -->
                  <p>アイ・ホープ</p>
                </div><!-- /.content-blocks__block -->
                <div class="content-blocks__block">
                  <div class="block-title">代表</div><!-- /.block-title -->
                  <p><span>武石 雅美</span><span>（たけいし まさみ）</span></p>
                </div><!-- /.content-blocks__block -->
                <div class="content-blocks__block">
                  <div class="block-title">住所</div><!-- /.block-title -->
                  <p>
                    〒152-0035<br>
                    東京都目黒区自由が丘2-16-12 RJ3
                  </p>
                </div><!-- /.content-blocks__block -->
                <div class="content-blocks__block">
                  <div class="block-title">電話</div><!-- /.block-title -->
                  <p>
                    <span>050-3492-3160</span><span>（営業時間 10:00〜18:00）</span>
                  </p>
                </div><!-- /.content-blocks__block -->
                <div class="content-blocks__block">
                  <div class="block-title">E-mail</div><!-- /.block-title -->
                  <p>
                    i.hope.photo0610@gmail.com
                  </p>
                </div><!-- /.content-blocks__block -->
              </div><!-- /.content-blocks -->
            </div><!-- /.container -->
          </section><!-- /.section-information -->

          <div class="btn-wrapper">
            <a href="<?php echo home_url('/service'); ?>" class="btn btn01">
              <span>料金とサービスへ</span>
            </a><!-- /.btn01 -->
          </div><!-- /.btn-wrapper -->

        </div><!-- /.content-wrapper -->
      </main><!-- /.main -->
    </div><!-- /#main-wrapper.wp-page -->
<?php get_footer(); ?>
