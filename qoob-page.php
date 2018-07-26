<?php
/**
 * Template name: Qoob Page
 */

get_header();?>

<?php
	while ( have_posts() ) :
		the_post();

		the_content();

	endwhile; // End of the loop.
	?>
	<script>
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });

		});
	</script>
<?php 
get_footer();

