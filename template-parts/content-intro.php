<!-- Custom Fields -->
<?php
  $catch = get_post_meta(4, 'catch', true);
?>
<!-- Top area -->
<section class="intro">
  <div class="intro__wrap">
    <div class="intro-left">
      <div class="intro-left__wrap">
        <div class="logo">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-white.svg" alt="logo">
        </div>
        <div class="catch catch__txt--white">
          <h1 class="catch__txt--big">次世代チャットサポート</h1>
          <div class="catch__detail">
             <p class="catch__txt"><?php echo $catch; ?></p>
          </div>
          <a href='#trial' id="btnTrial" class="btn-top btn-top--blue">14日間無料トライアル</a>
        </div>
      </div>
    </div><!-- end of .intro-left -->
    <div class="intro-right">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/chat-top.png" alt="iphone screen with EGchat">
    </div>
  </div>
  <div class="intro__border"></div>
</section>