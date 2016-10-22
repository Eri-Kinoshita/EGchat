<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EGChat
 */

?>
<div class="else__wrap">
  <section class="top-else--enclose">
    <div class="title-sub">
      <div class="title-sub__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/pc-enclosure.svg" alt="gradient enclosure">
      </div>
      <div class="title-sub__wrap title-sub__txt">
        <h1 class="title-sub__txt--big"><?php echo get_the_title(); ?> </h1>
        <!-- <p>下記入力後、登録いただいたアドレスに完了メールが届きます。</p> -->
      </div>
    <div>
  </section>
  <section class="static__wrap">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'egchat' ),
						'after'  => '</div>',
					) );
				?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
	</section>
</div>