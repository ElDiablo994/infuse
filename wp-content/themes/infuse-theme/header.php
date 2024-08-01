<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infuse_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'infuse-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'infuse-theme' ); ?></button>
			<div class="contactus-menu_desktop">
				<div class="inner-contactus-menu">
					<span class="inner_menu-item contactus-text contacus-menu_item">
						<a href="#">What We Do</a>
						<span class="contactus-item_arrow">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_down.svg"
								alt="Vector361124"
								class="contactus-vector361"
							/>
						</span>
					</span>
					<span class="inner_menu-item contactus-text"><a href="#">Our Clients</a></span>
					<span class="inner_menu-item contactus-text04"><a href="#">Our Audience</a></span>
					<span class="inner_menu-item contactus-text02"><a href="#">Our Model</a></span>
				</div>
				<div class="inner-contactus-menu">
					<div class="contactus-insights contacus-menu_item">
						<span class="inner_menu-item contactus-text06"><a href="#">Insights</a></span>
						<span class="contactus-item_arrow">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_down.svg"
								alt="Vector361124"
								class="contactus-vector361"
							/>
						</span>
					</div>
					<div class="contactus-group39618 contacus-menu_item">
						<span class="inner_menu-item contactus-text10"><a href="#">What We Do</a></span>
						<span class="contactus-item_arrow">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_down.svg"
								alt="Vector361124"
								class="contactus-vector361"
							/>
						</span>
					</div>
					<div class="contactus-group39601 contacus-menu_item">
						<span class="inner_menu-item contactus-text12"><a href="#">Our Company</a></span>
						<span class="contactus-item_arrow">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_down.svg"
								alt="Vector361124"
								class="contactus-vector361"
							/>
						</span>
					</div>
					<div class="contactus-group39619">
						<button class="contactus-button">
							<span class="contactus-text15"><a href="#">Contact Us</a></span>
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/vector361124-ro8u.svg"
								alt="Vector361124"
								class="contactus-vector361"
							/>
						</button>
					</div>
				</div>
            </div>
			<div class="contactus-menu_mobile">
				<div class="contactus-menu-mail">
					<a href="javascript:;" class="contactus-menu_mailer">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/mailer.png"
							alt="Vector361124"
							class="contactus-vector361"
						/>
					</a>
				</div>
				<div class="contactus-menu-burger">
					<a href="javascript:;" class="contactus-menu_opener">
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png"
							alt="Vector361124"
							class="contactus-vector361"
						/>
					</a>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
