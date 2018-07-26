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
<div id="home" class="w3banner">
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
						<?php the_custom_logo(); ?>
                            	<h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                                <p><?php bloginfo('description'); ?></p>
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
			
			<!-- //End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="bnr-agileinfo">
							<h2>Болки в гърба?  Целулит?  Стрес?</h2>	
							<h3>Помогнахме на стотици хора като Вас. Можем да помогнем и на Вас!</h3>	
							<div class="w3lsmore">
								<a href="http://masaj-shumen.com/#services" class="button-pipaluk button--inverted"> Виж повече </a>
							</div>	
						</div>	
					</li>
					<li>
						<div class="bnr-agileinfo">
							<h2>Търсите подарък?</h2>	
							<h3> Не чакайте да ви изпреварват! Подарете здраве. Подарете ваучер за масаж.</h3>	
							<div class="w3lsmore">
								<a href="http://masaj-shumen.com/%D0%B2%D0%B0%D1%83%D1%87%D0%B5%D1%80-%D0%B7%D0%B0-%D0%BC%D0%B0%D1%81%D0%B0%D0%B6-%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D1%8A%D0%BA/" class="button-pipaluk button--inverted"> Ваучери за масаж</a>
							</div>	
						</div>	
					</li>
				</ul>
			</div>
		</div>	
	</div>
</div>