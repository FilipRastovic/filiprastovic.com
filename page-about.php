<?php
/**
 * Template Name: About
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

<section class="about-me pretty-gradient">
  <div class="container">
    <div class="row">
	<canvas id="displayCanvas"></canvas>
	<div class="col-6 offset-3 col-lg-2 offset-lg-3">
			<figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-4" src="/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg" alt="Filip Rastovic">
					<figcaption><a class="text-primary" id="haircut" >Click to cut my hair!</a></figcaption>
				</figure>
      </div>
      <div class="col-md-5">
		<h1 class="font-weight-bold text-primary">Hi I'm Filip Rastovic</h1>
        <p class="font-weight-light">I'm Filip, designer who helps startupts grow with great design. I can help you communicate complex products and services to your customers without making them feel overwhelmed or unsure about what you're all about.
		 
		</p>
		<p class="font-weight-light mb-5">
			Looking forward to hearing from you.
		</p>
      </div>

	</div>
	<div class="row">
		<div class="col-lg-4 offset-lg-2">
			<img class=" img-fluid shadow rounded mb-4" src="/wp-content/themes/filip-rastovic/assets/img/lala.jpg" alt="Filip Rastovic">
		</div>
		<div class="col-lg-4">
			<img class=" img-fluid shadow rounded mb-4" src="/wp-content/themes/filip-rastovic/assets/img/hunter.jpg" alt="Filip Rastovic">
		</div>
	</div>
  </div>
</section>

<?php

get_footer();