<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EGChat
 */

get_header('else'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="else__wrap err404">
			  <section class="top-else--enclose">
			    <div class="title-sub">
			      <div class="title-sub__img">
			        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/pc-enclosure.svg" alt="gradient enclosure">
			      </div>
			      <div class="title-sub__wrap title-sub__txt">
			        <h1 class="title-sub__txt--big">あなたがアクセスしようとしたページは削除されたかURLが変更されています。</h1>
			      </div>
			    <div>
			  </section>
			  <section class="static__wrap">
			  	<?php if( is_404() ){ ?>
			    <p class="err404__title">EGchatへのご訪問ありがとうございます。<br>大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。<br>お手数をおかけしますが、以下の方法からもう一度目的のページをお探し下さい。</p>
			  <?php }?>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'egchat' ); ?></p>
					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( egchat_categorized_blog() ) :
					?>
					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'egchat' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>
			  </section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('else');
