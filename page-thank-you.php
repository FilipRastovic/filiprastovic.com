<?php
/**
 * Template Name: Thank you template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package filiprastovic
 */

get_header();
?>

<header class="header" id="thank-you">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">
		<canvas id="displayCanvas">
			
			</canvas>

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Thank you!</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
        <p class="font-weight-light">I'll get to you as soon as possible!</p>
        <p class="font-weight-light">You can read about my services in the meantime:</p>
				<a href="/process" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>Read Blog</a>
			</div>

		</div>
	</div>
</header>

<?php

get_footer();