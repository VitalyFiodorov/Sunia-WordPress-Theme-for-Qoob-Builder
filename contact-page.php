<?php
/**
 *  
 * Template name: Contact Page Template
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sunia
 */

get_header('page');
?>

	<!-- contact -->
	<div class="w3lscontact">
		<div class="container">
			<div class="contact-agileinfo">
				<div class="col-md-6 contact-grid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.9205873309375!2d26.923190815485462!3d43.27403947913615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a58a8a10911cf1%3A0xc3c1f09028977495!2z0KHRgtGD0LTQuNC-INCX0LAg0JzQsNGB0LDQttC4INCo0YPQvNC10L0!5e0!3m2!1sbg!2sbg!4v1525960993846" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 contact-grid">
					<h3 class="wthree-title">Свържете се с нас</h3>
					<p>Можете да се свържете със Студио за масажи Шумен чрез формата за контакт.</p>
					<?php echo do_shortcode( '[contact-form-7 id="82" title="Contact form 1"]' );?>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile-address">
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>гр.Шумен, ул. „Васил Друмев“ 12, хотел Акцион</li>
					<li><i class="phon">ОБАДЕТЕ НИ СЕ :</i> +359 886316545 </li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@masaj-shumen.com"> info@masaj-shumen.com</a></li>
				</ul>
			</div> 
		</div>
	</div>
	<!-- //contact -->

<?php
get_footer();