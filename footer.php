<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EGChat
 */

?>
<?php wp_footer(); ?>

<!-- Footer area -->
	  <footer class="footer">
	    <div class="footer__wrap footer__txt--white">
	      <div class="footer-left">
	      	<p class="footer__txt--big">メインメニュー</p>
		      <?php wp_nav_menu( array(
		      	'theme_location' => 'secondly',
		      	'container' => 'ul',
		      	'menu_class' => 'footer__txt'
		      )) ?>
	      </div>
	      <div class="footer-mid">
	      	<p class="footer__txt--big">サービス</p>
	        	<?php wp_nav_menu( array(
			      	'theme_location' => 'thirdly',
			      	'container' => 'ul',
			      	'menu_class' => 'footer__txt'
		      	)) ?>
	      </div>
	      <div class="footer-right">
	      	<p class="footer__txt--big">Follow me</p>
	        <div class="footer__txt footer__txt-sns">
              <a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            </div>
	      </div>
	      <div class="footer-ex">
            <div class="footer-ex__wrap">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-white.svg" alt="">
              <div class="footer-ex__txt footer__txt">
                <p>ビデオ・音声チャットが利用できる次世代のライブチャットシステムEGchatでビジネスを加速しましょう！</p>
              </div>
            </div>
          </div>
	    </div>
	    <div class="footer__cr">
	      <p class="footer__txt--big footer__txt--white">Copyright © 2016 EGchat. All rights reserved.</p>
	    </div>
	  </footer>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/particles.min.js" async defer></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js" async defer></script>

  <script src="<?php bloginfo('template_directory'); ?>/assets/js/particles-set.js" async defer></script>

</body>
</html>
