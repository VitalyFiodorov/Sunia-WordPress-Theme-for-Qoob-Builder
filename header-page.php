<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); echo ' | '; bloginfo('description'); ?></title>	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="home" class="w3banner about-banner">
	<div class="banner-info">
		<!-- navigation -->
		<div class="top-nav">
			<nav>
				<div class="container">
					<div class="navbar-header logo">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only"><?php esc_html_e('Toggle navigation', 'sunia');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php
		if ( is_front_page() && is_home() ) :
			?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			<?php
		endif;
		$vispa_description = get_bloginfo( 'description', 'display' );
		if ( $vispa_description || is_customize_preview() ) :
			?>
			<p><?php echo $vispa_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php 
		                $args = array(
		                    'theme_location' => 'menu-1',
		                    'menu_class'     => 'nav navbar-right',
		                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                    'walker'         => new Sunia_Navwalker()

		                );
		                wp_nav_menu($args);?>
						
						<div class="clearfix"> </div>
					</div>
				</div>
			</nav>
		</div>	
		<!-- //navigation -->
		<div class="banner-text">
			<!-- banner Slider starts Here -->
			<h2><?php wp_title(''); ?></h2>
		</div>	
	</div>
</div>

<div id="content" class="site-content">
