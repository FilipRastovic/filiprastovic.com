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
 * @package clarity-enhanced
 */

get_header();
?>

<section class="about-me bg-primary">
  <div class="container">
    <div class="row">
	<canvas id="displayCanvas"></canvas>
	<div class="col-6 offset-3 col-lg-2 offset-lg-3">
			<figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-4" src="<?php bloginfo('template_url'); ?>/assets/img/profilna.jpg" alt="Filip Rastovic">
					<figcaption class="text-white">Hi there!</figcaption>
				</figure>
      </div>
      <div class="col-md-5">
		<h1 class="font-weight-bold text-white">Hi I'm Filip Rastovic</h1>
        <p class="font-weight-light text-white">I'm Filip, a designer who helps startups grow with great design. I can help you communicate complex products and 
			services to your customers without making them feel overwhelmed or unsure about what you're all about.
		</p>
		<p class="font-weight-light mb-5 text-white">
			Looking forward to hearing from you.
		</p>
      </div>

	</div>
	<div class="row">
		<div class="col-lg-4 offset-lg-2">
			<img class=" img-fluid shadow rounded mb-4" src="<?php bloginfo('template_url'); ?>/assets/img/lala.jpg" alt="Filip Rastovic">
		</div>
		<div class="col-lg-4">
			<img class=" img-fluid shadow rounded mb-4" src="<?php bloginfo('template_url'); ?>/assets/img/hunter.jpg" alt="Filip Rastovic">
		</div>
	</div>
  </div>
</section>


<section class="pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="font-weight-light">With background in computer science and engineering, and a huge passion for design
					I help my clients stand out in the crowd. Nowdays I work with companies all around the world, helping them simplify their user interfaces 
					and offer delightful web experiences to their users. I beleive web of today is cluttered with too much information, 
					thus comes the name of my company: <span class="font-weight-bold">Clarity Enhanced</span> which stands for what I believe in, communicating with clarity.
				</p>
			</div>
			<div class="col-md-6">
				<p class="font-weight-light">
					I'm based in Novi Sad, Serbia, running my design studio from a local co-working space. When I'm not working I host meetups of local design community,
					create video games, read, play guitar and produce educational videos for my youtube channel. I'm a music lover and an avid reader.
				</p>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();