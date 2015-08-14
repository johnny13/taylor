<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Taylor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'taylor' ); ?></a>

		<header <?php hybrid_attr( 'header' ); ?>>

			<div class="wrap">
				<a href="#" class="menu-toggle"><i class="fa fa-navicon"></i>Menu</a>

				<div <?php hybrid_attr( 'branding' ); ?>>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- .site-branding -->
			</div>

		</header><!-- #masthead -->

		<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template ?>

		<div id="content" class="site-content">

			<div id="primary" class="content-area">

				<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template ?>
