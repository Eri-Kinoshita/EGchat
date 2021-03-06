<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EGChat
 */

?>

<article class="single-main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single__head">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		
		<div class="single-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
			
			<i class="fa fa-folder"></i> <?php the_category(', ') ?>
			<i class="fa fa-tags"></i> <?php the_tags(); ?>
		</div><!-- post-details -->
		
		<?php endif; ?>
	</header><!-- .entry-header -->


	<?php if ( has_post_thumbnail() ) { // check for feature image ?> 
	<div class="single-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<div class="single-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- post-excerpt -->
	
</article><!-- #post-## -->