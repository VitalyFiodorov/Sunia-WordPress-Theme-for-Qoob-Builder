<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sunia
 */

get_header('page');
?>

	<div class="single-page blog">
		<div class="container">			
			<div class="col-md-8 single-page-left">
				<div class="single-agileinfo">
					<img src="images/g6.jpg" alt=""/>
					<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

		endwhile; // End of the loop.
		?> 
				</div>	
				
			</div>	
			<div class="col-md-4 blog-right">
					<h3>Предложения</h3>
					<?php get_sidebar(); ?>
			</div>
				<div class="clearfix"> </div>
		</div>	
	</div>

<?php
get_footer();
