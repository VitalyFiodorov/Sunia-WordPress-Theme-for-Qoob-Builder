<?php
/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sunia
 */

get_header('page');
?>
<div class="blog">
	<div class="container">
		<div class="blog-agileinfo">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-6 blog-grids agileits">
				<div class="blog-w3img">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('', 'img-responsive zoom-img');?></a>
				</div>
				<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
				<p><?php the_excerpt();?></p>
				<div class="w3lsmore">
					<a href="<?php the_permalink();?>" class="button-pipaluk button--inverted"> Виж още</a>
				</div>
			</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
			<div class="clearfix"> </div> 
		</div>	
	</div>	
</div>
<?php
get_footer();
?>
