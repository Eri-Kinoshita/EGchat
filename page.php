<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EGChat
 */

get_header('else'); ?>
	<div class="else__wrap">
    <section id="hoge" class="top-else">
      <div class="subtitle">
        <h1 class="subtitle__txt--big">Blog</h1>
        <p class="subtitle__txt">〜 EGchat全ての機能を紹介 〜</p>
      </div>
    </section>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_template_part('template-parts/content','trial'); ?>
  <!-- All browser notice -->
  <?php get_template_part('template-parts/content','browser'); ?>
  </div>
<?php get_footer(); ?>
