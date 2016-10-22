<?php
/*
  Template Name: Reason Page
*/

get_header('else');
?>
<!-- Top area -->
	<div class="else__wrap">
 	<section id="hoge" class="top-else">
		<div class="subtitle">
			<h1 class="subtitle__txt--big">Why EGchat?</h1>
			<p class="subtitle__txt">〜 EGchatが選べれる理由 〜</p>
		</div>
 	</section>
 	<!-- main content -->
  <section class="choosen">
    <div>
      <ul class="choosen__list">
        <li class="choosen__list__item01 imgAni">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bubble01.svg" alt="image of speech bubble">
          <div class="choosen__list__content">
            <h1>Easy & Fast <i class="fa fa-bolt" aria-hidden="true"></i></h1>
            <p>数分の簡単作業ですぐにスタート！
            <br>VIDEOチャットやブラウザ共有など
            <br>一見難しそうなシステムも
            <br>お客様にはワンクリックで提供頂けます。</p>
            <br></p>
          </div>
        </li>
        <li class="choosen__list__item02 imgAni">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bubble03.svg" alt="image of speech bubble">
          <div class="choosen__list__content">
            <h1>多機能 <i class="fa fa-cogs" aria-hidden="true"></i></h1>
            <p>従来からのテキストチャットに加え、
            <br>ビデオチャット、音声チャット、
            <br>更には便利なブラウザ共有や電子署名を
            <br>すぐに取得できるドキュメント取得機能を搭載！
            <br>国内初のビデオチャットツールです。</p>
          </div>
        </li>
      </ul>
      <ul class="choosen__list choosen__list-under">
        <li class="choosen__list__item03 imgAni">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bubble04.svg" alt="image of speech bubble">
          <div class="choosen__list__content">
            <h1>価格 <i class="fa fa-lightbulb-o" aria-hidden="true"></i></h1>
            <p>ビデオ、音声チャット機能が使えて格安。
            <br>エクストラ料金は一切かかりません。
            <br>また3カ月プランからご用意しています。
            </p>
          </div>
        </li>
        <li class="choosen__list__item04 imgAni">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bubble05.svg" alt="image of speech bubble">
          <div class="choosen__list__content">
            <h1>多くの環境 <i class="fa fa-desktop" aria-hidden="true"></i></h1>
            <p>デスクトップ、Web、iOS、Android、
            <br>主要ブラウザとプラットフォーム
            <br>の環境で動作します。</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="choosen__ex">
      <div class="choosen__ex__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/phone-graph.svg" alt="image of speech bubble">
        <div class="choosen__ex__catch">
          <div class="choosen__ex__catch-left">
            <p class="choosenAni">顧客満足度アップ</p>
            <p class="choosenAni">作業スピードの向上</p>
            <p class="choosenAni">ビデオ会議で業務効率化&生産性向上</p>
          </div>
          <div class="choosen__ex__catch-right">
            <p class="choosenAni">売上アップ</p>
            <p class="choosenAni">対面面接・接客数倍増</p>
            <p class="choosenAni">電子署名利用で契約率アップ</p>
          </div>
        </div>
      </div>
      <div class="choosen__ex__txt">
        <h2>一人一人のお客様と短時間で濃く繋がるチャットツールEGchat。<br>
        新テクノロジーを使った次世代のビデオチャットシステムで<br>
        ビジネスの変化を実感下さい。</h2>
      </div>
      <div class="scroll-down">
        <div class="scroll-down__line"></div>
      </div>
    </div>
  </section>
    <?php get_template_part('template-parts/content','trial'); ?>
    <?php get_template_part('template-parts/content','browser'); ?>
  </div>
<?php get_footer(); ?>