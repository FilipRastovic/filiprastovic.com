<?php
/**
 * Template Name: Front Page Template
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
<div class="container-fluid">
	<div class="row d-none d-lg-block">
		<div class="position-absolute col-lg-2 offset-lg-9 u-mt-96">
			<!-- <figure class="text-center">
				<img class="filipo img-fluid rounded-circle shadow mb-4"
					src="<?php bloginfo('template_url'); ?>/assets/img/profilna.jpg" alt="Filip Rastovic">
				<figcaption class="text-white">Hi, I'm Filip, welcome to my website! </figcaption>
			</figure> -->
		</div>
	</div>
</div>
<header class="header">
	<div class="container h-100">

		<div class="row h-100 justify-content-center text-center">
			<canvas id="displayCanvas">

			</canvas>

			<div class="col-lg-8 align-self-end">
				<h1 class="text-uppercase font-weight-bold mb-5 text-white">Conversion optimized web design and A/b testing</h1>
			</div>

			<div class="col-lg-10 align-self-baseline">
				<!-- <p class=" mb-5">
					I'm a designer who helps businesses better communicate ideas with their customers.
				</p> -->
				<a href="/portfolio" class="btn btn-secondary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
					<i class="fas fa-info-circle"></i>See Portfolio
				</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="<?php bloginfo('template_url'); ?>/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>

		</div>
		<div class="row d-block d-lg-none">
			<div class="col-6 offset-5 u-mt-96">
				<!-- <figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-4"
						src="<?php bloginfo('template_url'); ?>/assets/img/profilna.jpg" alt="Filip Rastovic">
					<figcaption>
						<div class="text-white">Hi, I'm Filip, welcome to my website!</div>
					</figcaption>
				</figure> -->
			</div>
		</div>
	</div>
</header>

<section class="page-section" id="content">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">Your landing pages have a unique selling cycle</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="text-muted font-weight-light mb-4">Apply best practices or risk wasting cash on paid advertising that doesn't convert.
					But it doesn't have to be like that. We can help you: </p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce">
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".3s"
				data-wow-offset="10">
				<div class="circle-icon">
					<div class="icon">1</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Generate more leads</h5>
						<p class="font-weight-light text-muted">Users are overwhelmed by too much choice. What do I read? Where do I click? Remove
							distractions and you'll convert more.</p>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
				<div class="circle-icon">
					<div class="icon">2</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Market your brand</h5>
						<p class="font-weight-light text-muted">Associate your brand with clarity. Users love brands they can understand and
							leaving a great first impression is crucial.</p>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".5s">
				<div class="circle-icon">
					<div class="icon">3</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Optimize &amp; Grow</h5>
						<p class="font-weight-light text-muted">Start with a hypothesis and test until you're satisfied with the results. Applying
							scientific method can help you grow. Leverage Big Data. </p>
					</div>
				</div>

			</div>

			<div class="col-lg-12 mb-3 text-center wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<a href="/portfolio" class="btn btn-secondary btn-xl shadow js-scroll-trigger"><i
						class="fas fa-info-circle"></i>SEE PORTFOLIO</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="<?php bloginfo('template_url'); ?>/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>
		</div>
	</div>
</section>

<section class="page-section bg-grey" id="what-we-do">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">Turn your landing pages into your best salesperson</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="font-weight-light text-muted mb-4">Regardless of your industry - if your business sells using Unbounce, We'll make sure to deliver all of the following...</p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce bordered-columns">
			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10">

				<h6 class="text-primary mb-2">More leads</h6>
				<p class="font-weight-light text-muted">By better targeting your core audience and speaking directly to their pain points, We can help your landing pages generate higher quality leads.</p>

			</div>

			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".4s">

				<h6 class="text-primary mb-2">Awesome user experience</h6>
				<p class="font-weight-light text-muted">We design clean, modern and delightful experiences. Your audience will fall in love with your design, resulting in higher conversion rates.</p>	

			</div>

			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".5s">

					<h6 class="text-primary mb-2">Consistent brand identity</h6>
					<p class="font-weight-light text-muted">Your landing pages will visually aligned with your branding guidelines ando ther marketing initiatives, ensuring your customers receive a consistent marketing message.</p>

			</div>

			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10">

				<h6 class="text-primary mb-2">Easily edit content</h6>
				<p class="font-weight-light text-muted">Unbounce's drag and drop builder allows you to very easily edit the copywriting and images on your pages, as well as duplicate them and make new variations for split testing.</p>

			</div>

			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".4s">

				<h6 class="text-primary mb-2">Compliance with standards</h6>
				<p class="font-weight-light text-muted">Avoid penalties and fines by complying with all governmental guidelines as well as web accessibility standards and requirements.</p>	

			</div>

			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".5s">

					<h6 class="text-primary mb-2">Post-launch support</h6>
					<p class="font-weight-light text-muted">After you landing pages are live, we'll resolve any unexpected issues and be around to answer your questions.</p>
					
			</div>
		</div>
	</div>
</section>


<section class="page-section testimonials">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">What they said about us</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="text-muted font-weight-light mb-4">Once we start working together we're a team </p>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/molnar.jpeg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="testimonial-paragraph font-weight-light text-muted text-left mb-4">Filip has a unique combo of skills: design &amp;
					development. He proactively suggested some great ideas on how to make the website not just
					functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and
					then coded all of it into a superb website. Throughout the process Filip was a charm to work with.
					All All in all great designer-developer with an outstanding sense for client service.</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Robert Molnar</p>
				<p class="  text-left">CEO Of Stratolytics</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/Maria.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph font-weight-light text-muted text-left mb-4">
					I needed someone who can design AND develop a landing page and upload it to my website. Filip did a
					great work in doing the above. It is pleasure working with Filip, he understands what needs to be
					done and does it in very quick and efficient way.
					For my next projects for landing pages I would would with him again.
					Thank you Filip!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Maria Davidson</p>
				<p class="  text-left">Justo</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/liam.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph font-weight-light text-muted text-left mb-4">
					Filip was AMAZING! The only reason we are ending the contract is because he got too busy with bigger
					projects. I am sad to loose him as he is awesome. I would definitely hire again and again. If you
					have the opportunity to work with Filip, you should absolutely do it, he will make you proud!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Liam Shy</p>
				<p class="  text-left">Flight Collective</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/andrew.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph font-weight-light text-muted text-left mb-4">
					Fillip understood the project, understood my needs and made it happen. Created a really beautiful
					landing page that is going to work well with my ad campaign.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Andrew Semaan</p>
				<p class="  text-left">Practice Cultivator</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/battista.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph font-weight-light text-muted text-left mb-4">
					Whaou ! Working with Filip is just GREAT ! Everything is easy and simple. Thanks a lot for your
					great work, we will be booking you again very soon!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Battista Ravane</p>
				<p class="  text-left">USBFactory</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/gari-designer.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph font-weight-light text-muted text-left mb-4">
					Working with Filip has been a very smooth process. He is quick and clear with communication and
					works through revisions easily and without any hiccups.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Mike Hutter</p>
				<p class="  text-left">ConvertMore</p>
			</div>
		</div>
	</div>
</section>


<?php

get_footer();