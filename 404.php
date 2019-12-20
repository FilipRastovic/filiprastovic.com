<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package clarity-enhanced
 */

get_header();
?>

<header class="header" id="thank-you">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Page not found!</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
      			  <p class="font-weight-light">Go back home?</p>
				<a href="/" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>Go Back</a>
			</div>

		</div>
	</div>
</header>

<?php
get_footer();
