<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if (apply_filters('astra_header_profile_gmpg_link', true)) {
	?>
		<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	}
	?>
	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#content" role="link" title="<?php echo esc_attr(astra_default_strings('string-header-skip-link', false)); ?>">
		<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
	</a>
	<div <?php
		echo astra_attr(
			'site',
			array(
				'id'    => 'page',
				'class' => 'hfeed site',
			)
		);
		?>>

		<?php
		astra_header_before();

		astra_header();

		astra_header_after();

		astra_content_before();
		?>

		<div id="content" class="site-content">
			<div class="ast-container">
				<?php astra_content_top(); ?>

				<!-- <header>
					<div class="main-navigation ast-inline-flex">
						<ul id="ast-hf-menu-1" class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border stack-on-mobile">
							<li id="menu-item-920" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-920"><a href="http://localhost:10016/contact-nous-rencontrer/" class="menu-link">Nous
									rencontrer</a></li>
							<li id="menu-item-923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-923"><a class="menu-link" href="http://localhost:10016/wp-admin">Admin</a></li>
							<li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="http://localhost:10016/commander/" class="menu-link">Commander</a></li>
						</ul>
					</div>
				</header> -->