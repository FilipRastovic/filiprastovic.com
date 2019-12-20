<?php
/**
 * Template Name: Landing page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package clarity-enhanced
 */

get_header();
?>

<section class="header mb-1 pb-1">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 mx-auto mb-5">
				<h2 class="text-thin text-uppercase">Expert landing page designer</h2>
				<hr>
				<p class="">I offer a full <b>landing page design service</b>, prefferably on Unbounce platform. Here are some examples from my design portfolio.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-12 mx-auto text-center">
				<a href="/contact" class="btn-primary p-3 text-decoration-none text-white">I NEED A LANDING PAGE</a>
			</div>
		</div>
	</div>
</section>

<section class="lp-gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
					<img class="img-fluid mt-4 shadow" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/2.jpg?>" alt="" class="img-fluid">
					<img class="img-fluid shadow mt-4" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/1.jpg?>" alt="" class="img-fluid">
					<img class="img-fluid shadow mt-4" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/3.jpg?>" alt="" class="img-fluid">
					<img class="img-fluid shadow mt-4" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/4.jpg?>" alt="" class="img-fluid">
					<img class="img-fluid shadow mt-4" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/5.jpg?>" alt="" class="img-fluid">
					
			</div>
			<div class="col-md-6 text-center">
				<img class="mt-4 img-fluid shadow" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/8.jpg?>" alt="Fashion Stylist landing page">
				<img class="img-fluid shadow mt-4" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/7.jpg?>" alt="" class="img-fluid">
	
			</div>
		</div>
	</div>
</section>

<?php

get_footer();