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
			<div class="col-md-6">
				<div class="col-md-5">
					<figure class="text-center">
						<img class="filipo img-fluid rounded-circle shadow mb-4"
							src="<?php bloginfo('template_url'); ?>/assets/img/profilna.jpg" alt="Filip Rastovic">
						
					</figure>
				</div>
				<h1 class="font-weight-bold text-white">Hi I'm Filip Rastovic</h1>
				<p class="font-weight-light text-white">I'm Filip, a designer who helps startups grow with great design.
					I can help you communicate complex products and
					services to your customers without making them feel overwhelmed or unsure about what you're all
					about.
				</p>
				<p class="font-weight-light mb-5 text-white">
					Looking forward to hearing from you.
				</p>
			</div>
			<div class="col-md-6">

				<img class=" img-fluid rounded mb-4"
					src="<?php bloginfo('template_url'); ?>/assets/img/clarity-enhanced.png" alt="Filip Rastovic">
			</div>

		</div>
		<div class="row">

			<!-- <div class="col-lg-4 offset-lg-2">
			<img class=" img-fluid shadow rounded mb-4" src="<?php bloginfo('template_url'); ?>/assets/img/lala.jpg" alt="Filip Rastovic">
		</div>
		<div class="col-lg-4">
			<img class=" img-fluid shadow rounded mb-4" src="<?php bloginfo('template_url'); ?>/assets/img/hunter.jpg" alt="Filip Rastovic">
		</div> -->
		</div>
	</div>
</section>


<section class="pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="font-weight-light">Hi, you're a small to medium-sized business that relies on your web presence and paid advertising in order to generate leads? You're overwhelmed by too much choice and finding the right person to take care of your web related graphic design problems? I can help.

					I'm Filip, a <b>graphic designer</b> with an academic background in computer science and engineering. I understand it's a dice-roll to trust the design of your most profitable customer touchpoints to a designer from Eastern Europe, but my multi-disciplinary skillset can help you strategize, plan and execute successful solutions for your next marketing campaign.
					
					The plan I have for you is the following: leverage the latest technologies when building websites, landing pages, and app UI, adopt a scientific approach to problem-solving, develop a hypothesis, test and then optimize. When it comes to web design - starting with a simple user interface and then slightly tweaking it, driving traffic to it and then improving based on insights collected is the only way to develop useful user interfaces.
					
					
				</p>
			</div>
			<div class="col-md-6">
				<p class="font-weight-light">
					So let's get in touch. Don't hesitate to send me a message, <b>I'm here to consult you</b>. If you're having doubts, feel free to watch the video on my profile about the landing page design process and read past client reviews on my profile. Also, check out my portfolio at clarity-enhanced.com/portfolio
					
					We will work together to achieve successful results, generate more leads, reduce the cost of customer acquisition and avoid wasting your budget on driving traffic to interfaces that just don't work.
					
					Best
					Filip
				</p>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();