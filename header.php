<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EGChat
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Google font -->
<link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<!-- Font Awsome -->
<script src="https://use.fontawesome.com/ebb79c99c3.js"></script>
<!-- Widget Code -->
<script async src="https://lml.io/a-a58cb/init.js"></script>
<script async src="https://lml.io/main.js"></script>
<!-- Google analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-78514148-1', 'auto');
ga('send', 'pageview');

</script>
<?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'egchat' ); ?></a>

	<main class="main">
	<!-- Header area -->
  <header id="topHead" class="header">
    <div class="inner navbar-fixed-top">
      <div class="mobile-head">
        <div id="navToggle" class="nav-toggle">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <?php wp_nav_menu( array(
      	'theme_location' => 'primary',
      	'container' => 'nav',
      	'container_class' => 'nav-global nav-global__txt'
      )) ?>
    </div>
    <!-- end of .inner -->
  </header><!-- end of .header -->
