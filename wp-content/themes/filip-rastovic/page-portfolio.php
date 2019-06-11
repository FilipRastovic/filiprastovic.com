<?php
/**
 * Template Name: Portfolio template
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

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="section-heading">Portfolio</h1>
        <hr class="my-4">
        <p class="mb-5">Check out some of my work!</p>
      </div>
    </div>
  </div>
</header>

<section class="header">
  <div class="container">
  <div class="row gutter-bot">
		<div class="col-md-6">
			<h2 class="text-thin">Customr.app</h4>
			<hr>
			<p>
				<ul>
					<li>Information architecture</li>
					<li>Wireframing</li>
					<li>UI/UX</li>
					<li>HTML/SCSS/JAVASCRIPT/PHP/Wordpress</li>
				</ul>
				<a href="/case-studies">Read the case study.</a>
			</p>
		</div>
		<div class="col-md-6">
			<div class="portfolio-box">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/customr-small.png" alt="">
			</div>
		</div>
    </div>
    <div class="row gutter-bot">
		<div class="col-md-6">
			<h2 class="text-thin">Bonsall Pool</h4>
			<hr>
			<p>
				<ul>
					<li>Maintainance</li>
					<li>HTML/SCSS</li>
					<li>BEM convention</li>
				</ul>
			</p>
		</div>
		<div class="col-md-6">
			<div class="portfolio-box">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/bonsal-small.png" alt="">
			</div>
		</div>
    </div>
	<div class="row gutter-bot">
		<div class="col-md-6">
			<h2 class="text-thin">Landing Page</h4>
			<hr>
			<p>
				<ul>
				<li>Information architecture</li>
					<li>Wireframing</li>
					<li>UI/UX</li>
					<li>HTML/SCSS/JAVASCRIPT/PHP/Wordpress</li>
				</ul>
			</p>
		</div>
		<div class="col-md-6">
			<div class="portfolio-box">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/filiprastovic-small.png" alt="">
			</div>
		</div>
    </div>
	<div class="row gutter-bot">
		<div class="col-md-6">
			<h2 class="text-thin">Justo</h4>
			<hr>
			<p>
				<ul>
				<li>Information architecture</li>
					<li>Wireframing</li>
					<li>UI/UX</li>
					<li>HTML/SCSS/JAVASCRIPT/PHP/Wordpress</li>
				</ul>
			</p>
		</div>
		<div class="col-md-6">
			<div class="portfolio-box">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/justo-small.png" alt="">
			</div>
		</div>
    </div>
  </div>
</section>



<?php

get_footer();