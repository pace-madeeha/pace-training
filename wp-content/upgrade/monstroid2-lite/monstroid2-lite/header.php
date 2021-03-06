<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monstroid2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php monstroid2_lite_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'monstroid2-lite' ); ?></a>
	<header id="masthead" <?php monstroid2_lite_header_class(); ?> role="banner">
		<?php monstroid2_lite_ads_header() ?>
		<?php get_template_part( 'template-parts/header/mobile-panel' ); ?>
		<?php get_template_part( 'template-parts/header/top-panel' ); ?>
		<div class="header-container">
			<div class="header-container_wrap container <?php echo monstroid2_lite_get_invert_class_customize_option( 'header_bg_color' ); ?>">
				<?php get_template_part( 'template-parts/header/layout', monstroid2_lite_get_mod( 'header_layout_type', true ) ); ?>
			</div>
		</div><!-- .header-container -->
	</header><!-- #masthead -->

	<div id="content" <?php monstroid2_lite_content_class(); ?>>
