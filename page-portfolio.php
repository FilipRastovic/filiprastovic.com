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
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">

			<div class="col-lg-10 align-self-end mb-5">
				<h1 class="text-uppercase font-weight-bold">Portfolio</h1>
			</div>

			<div class="col-lg-10 align-self-baseline">
				<a href="#portfolio" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>VIEW PORTFOLIO</a>
			</div>

		</div>
	</div>
</header>

<section class="page-section--portfolio bg-grey" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="font-weight-bold">Customr.app</h2>
				<p class="font-weight-light text-muted">Customrr.app is a SAAS solution for market analysis. Company CEO wanted a modern landing page to start collecting leads. I had to break down complex documents into easy to digest design.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-info-circle mr-2"></i></i>Information Architecture, Wireframes</li>
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				<a href="https://customr.app" target="_BLANK" class="btn btn-outline-primary btn-sm mb-5">Visit Page</a>
				<a href="/case-studies#customr" target="_BLANK" class="btn btn-primary btn-sm mb-5">Read Case Study</a>
			</div>
			<div class="col-lg-7 offset-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
					<img class="img-fluid shadow mb-5" src="<?php bloginfo('template_url'); ?>/assets/img/case-studies/customr-case-study.jpg" alt="Portfolio image">
			
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section--portfolio">
	<div class="container">
		<div class="row">
			<div class="order-2 col-lg-7 order-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
					<img class="img-fluid shadow" src="<?php echo get_template_directory_uri() ?>/assets/img/landing-pages/8.jpg?>" alt="Fashion Stylist landing page">
			
				</div>
			</div>
			<div class="order-1 col-lg-4 order-lg-2 offset-lg-1">
				<h2 class="font-weight-bold">Drapper</h2>
				<p class="font-weight-light text-muted">Draper is a clothing brand. I was hired to improve the performance of their existing Unbounce pages and create new variations for split testing. The conversion rates of this page are around 40%.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-cogs mr-2"></i>Maintenance</li>
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				<a target="_BLANK" href="https://discover.mrdraper.com/your-stylist/" class="btn btn-outline-primary btn-sm mb-5">Visit Page</a>
				<a href="/case-studies#drapper" target="_BLANK" class="btn btn-primary btn-sm mb-5">Read Case Study</a>
			</div>
		</div>
	</div>
</section>

<section class="page-section--portfolio bg-grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="font-weight-bold">Justo</h2>
				<p class="font-weight-light text-muted">Justo is a Canadian SaaS real estate provider. I was given a wireframe of the landing page the company wanted and designed an elegant mockup which was later implemented using Unbounce and Wordpress.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				<a target="_BLANK" href="http://www.justopromo.ca/promo/" class="btn btn-outline-primary btn-sm mb-5">Visit Page</a>
				<a href="/case-studies#justo" target="_BLANK" class="btn btn-primary btn-sm mb-5">Read Case Study</a>
			</div>
			<div class="col-lg-7 offset-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
				<img class="img-fluid shadow mb-5"
					src="<?php bloginfo('template_url'); ?>/assets/img/case-studies/justo-case-study.jpg"
					alt="Justo landing page">
			
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-section--portfolio">
	<div class="container">
		<div class="row">
			<div class="order-2 col-lg-7 order-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
					<img class="img-fluid shadow mb-5" src="<?php echo get_template_directory_uri() ?>/assets/img/velo.jpg" alt="Ib docs">

				</div>
			</div>
			<div class="order-1 col-lg-4 order-lg-2 offset-lg-1">
				<h2 class="font-weight-bold">Velo</h2>
				<p class="font-weight-light text-muted">Velo creates hand dryers. I was hired to implement few existing designs and build new Unbounce landing pages for different lines of their hand dryer products.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				<a target="_BLANK" href="https://www.velohanddryers.com.au/page/hand-dryers" class="btn btn-outline-primary btn-sm mb-5">Visit Page</a>
			</div>
		</div>
	</div>
</section>

<section class="page-section--portfolio bg-grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="font-weight-bold">Tourist Agency</h2>
				<p class="font-weight-light text-muted">This is a tourist agency landing page with a purpose to collect leads for a special travel offer.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-info-circle mr-2"></i>Wireframes</li>
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				
			</div>
			<div class="col-lg-7 offset-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
				<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/natours.jpg" alt="Bonsall Img">
			
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section--portfolio">
	<div class="container">
		<div class="row">
			<div class="order-2 col-lg-7 order-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
					<img class="img-fluid shadow mb-5" src="<?php echo get_template_directory_uri() ?>/assets/img/brolen.jpg" alt="Ib docs">

				</div>
			</div>
			<div class="order-1 col-lg-4 order-lg-2 offset-lg-1">
				<h2 class="font-weight-bold">Brolen Homes</h2>
				<p class="font-weight-light text-muted">Brolen Homes is a home manufacturer, my job was designing this landing page for their summer marketing campaign.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-info-circle mr-2"></i>Wireframes</li>
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				<a target="_BLANK" href="http://unbouncepages.com/test-brief/" class="btn btn-outline-primary btn-sm mb-5">Visit Page</a>
			</div>
		</div>
	</div>
</section>

<section class="page-section--portfolio bg-grey">
	<div class="container">
		<div class="row">
		<div class="col-lg-4">
				<h2 class="font-weight-bold">Pricing Page</h2>
				<p class="font-weight-light text-muted">This is a pricing landing page for a software product, our job was working closely with another designer in coming up with this awesome implementation.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
			</div>

			<div class="col-lg-7 offset-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
					<img class="img-fluid shadow mb-5" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing.jpg" alt="Ib docs">

				</div>
			</div>

		</div>
	</div>
</section>

<section class="page-section--portfolio">
	<div class="container">
		<div class="row">
			<div class="order-2 col-lg-7 order-lg-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<div class="screenshot">
					
				<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/radiance.jpg" alt="Bonsall Img">
			
				</div>
			</div>

			<div class="order-1 col-lg-4 order-lg-2 offset-lg-1">
				<h2 class="font-weight-bold">Radiance</h2>
				<p class="font-weight-light text-muted">Radiance is a health &amp; beauty salon based in Toronto. I was hired to design a series of landing pages for their special offers.</p>
				<ul class="list-unstyled text-primary">
					<li><i class="fas fa-info-circle mr-2"></i>Wireframes</li>
					<li><i class="fas fa-paint-brush mr-2"></i>Design Mockups</li>
					<li><i class="fas fa-edit mr-2"></i>Unbounce Implementation</li>
				</ul>
				<a target="_BLANK" href="http://www.woodlandsradiancespa.com/info-event/" class="btn btn-outline-primary btn-sm mb-5">Visit Page</a>
				<a href="/case-studies#radiance" target="_BLANK" class="btn btn-primary btn-sm mb-5">Read Case Study</a>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();