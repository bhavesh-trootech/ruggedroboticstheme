<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ruggedrobotics
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
<?php 
$site_logo = get_field('site_logo', 'option');
$header_right_cta = get_field('header_right_cta', 'option');
$link_url = $header_right_cta['url'];
$link_title = $header_right_cta['title'];
$link_target = $header_right_cta['target'] ? $link['target'] : '_self';
 ?>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="head_row">
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo $site_logo['url']; ?>" alt="<?php echo $site_logo['alt']; ?>" title="<?php echo $site_logo['title']; ?>"></a>
				</div><!-- .site-branding -->
				<div class="head_menu_wrapper custom_mega_menu">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ruggedrobotics' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								
							)
						);
						?>
						
					</nav><!-- #site-navigation -->
					<!-- get STARTED button -->
                    <?php if(!empty($link_url)): ?>
					<div class="btn_header">
						<a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_outline btn_orange"><?php echo $link_title; ?>
							<span class="btn_arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
								<path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"/>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
								<path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"/>
							</svg></span>
						</a>
					</div>
				   <?php endif; ?>
				</div>
			</div>
		<!-- get STARTED button -->
		</div>
	</header><!-- #masthead -->
