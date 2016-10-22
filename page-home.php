<?php
/*
  Template Name: Home Page
 */
// Custom Fields
$customer_name01 = get_post_meta(21, 'customer_name01', true);
$customer_voice01 = get_post_meta(21, 'customer_voice01', true);
$customer_name02 = get_post_meta(21, 'customer_name02', true);
$customer_voice02 = get_post_meta(21, 'customer_voice02', true);
$customer_name03 = get_post_meta(21, 'customer_name03', true);
$customer_voice03 = get_post_meta(21, 'customer_voice03', true);
$customer_name04 = get_post_meta(21, 'customer_name04', true);
$customer_voice04 = get_post_meta(21, 'customer_voice04', true);
$customer_name05 = get_post_meta(21, 'customer_name05', true);
$customer_voice05 = get_post_meta(21, 'customer_voice05', true);
get_header(); ?>


<?php get_template_part('template-parts/content','intro'); ?>

<?php get_template_part('template-parts/content','service'); ?>

<?php get_template_part('template-parts/content','reason'); ?>

<?php get_template_part('template-parts/content','solution'); ?>

<?php get_template_part('template-parts/content','reputation'); ?>

<?php get_template_part('template-parts/content','trial'); ?>

<?php get_template_part('template-parts/content','news'); ?>

<?php get_footer();
