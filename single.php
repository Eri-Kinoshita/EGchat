<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EGChat
 */

get_header('else');
?>
	<div class="else__wrap">
		<div class="container top-else--single">
        <div class="single__wrap" id="primary">
          <div id="content" class="single__article">
	        <?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-single', get_post_format() );
					// the_post_navigation();

					// // If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
			?>
			<?php
			  $prev_post = get_previous_post();
			  $next_post = get_next_post();
			?>
			<div class="single__add">
				<div class="next-article">
				<?php if( $prev_post) : ?>
				  <?php previous_post_link('%link','<i class="fa fa-chevron-circle-left"></i> %title'); ?>
				<?php else : ?>
				  この記事が一番古い記事です。
				<?php endif; ?>
				<?php if( $next_post  ) : ?>
				  <?php next_post_link('%link','%title <i class="fa fa-chevron-circle-right"></i>'); ?>
				<?php else : ?>
				  <i></i> この記事が最新です。
				<?php endif; ?>
				</div>
			</div>
				<?php endwhile; ?>
          </div><!-- content -->
      <!-- SIDEBAR
      ================================================== -->
		<aside class="single__aside">
			<?php get_sidebar(); ?>
		</aside>
        </div><!-- primary -->
      </div><!-- container -->
	<?php get_template_part('template-parts/content','trial'); ?>
  <!-- All browser notice -->
  <?php get_template_part('template-parts/content','browser'); ?>
  </div>
<?php
// get_sidebar();
get_footer();
