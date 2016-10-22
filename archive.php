<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EGChat
 */
get_header('else');
?>
	<div class="else__wrap">
    <section id="hoge" class="top-else">
      <div class="subtitle">
        <h1 class="subtitle__txt--big">Blog</h1>
        <p class="subtitle__txt">〜 最新ニュースをお届けします 〜</p>
      </div>
    </section>
    <div class="single__wrap" id="primary">
      <div id="content" class="single__article">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;?>
				<div class="next-page">
					 <?php posts_nav_link();?>
				</div>

				<?php else :
			get_template_part( 'template-parts/content', 'none' );

		endif;?>
    </div><!-- content -->
		      <!-- SIDEBAR
      ================================================== -->
		<aside class="single__aside">
			<?php get_sidebar(); ?>
		</aside>
  </div>
	<?php get_template_part('template-parts/content','trial'); ?>
  <!-- All browser notice -->
  <?php get_template_part('template-parts/content','browser'); ?>
  </div>
<?php
// get_sidebar();
get_footer();

