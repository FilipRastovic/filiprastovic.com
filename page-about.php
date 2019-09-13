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

<section class="about-me">
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
		<h2 class="font-weight-bold text-primary">Hi I'm Filip Rastovic</h2>
        <p class="font-weight-light">I'm Filip, a passionate web designer and software developer. I've been fascinated with the way technology, especially software, 
			look and feel like since an early age and I always knew my future will have something to do with it. My path lead me to the intersection of visual arts 
			and software engineering, a blade's edge where I feel most comfortable. While designing landing pages is my daily job and a business, in my spare time I enjoy 
			drawing using code and algorithms, writing, making video games with my friends and producing educational youtube videos.
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