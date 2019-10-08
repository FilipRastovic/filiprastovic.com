<?php
/**
 * Template Name: Contact Template
 *
 *
 * @package filiprastovic
 */

get_header();
?>

<!-- Contact -->
<section class="contact-page" id="contact mb-5">
	<div class="container">
		<div class="row gutter-bot">
		<canvas id="displayCanvas"></canvas>
			<div class="col-md-6">
				<h1 class="font-weight-bold">Welcome to my website</h1>
				<hr class="divider">
				<p class="font-weight-light">Hello there! If you're looking for a <span class="font-weight-bold">landing page expert</span> feel free to get in touch with me filling
					out the form below. Please, the more you can tell me about your project, the better.</p>
      </div>
      <div class="col-md-6">
		  	<div class="col-md-4">
			  </div>
				<form class="contact-form"
					action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
					method="post" id="contactForm" name="sentMessage">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Let's get in touch!</h2>
							<hr class="divider my-4">
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input class="form-control" name="EMAIL" id="email" type="email"
									placeholder="Your Email *" required="required"
									data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" name="FNAME" id="first-name" type="text"
									placeholder="Your First Name *" required="required"
									data-validation-required-message="Please enter your first name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" name="LNAME" id="last-name" type="text"
									placeholder="Your Last Name *" required="required"
									data-validation-required-message="Please enter your last name.">
								<p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
								<textarea rows="6" class="form-control" name="MMERGE3" id="message"
									placeholder="Please describe what you need me for *" required="required"
									data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
								type="submit">Send Message</button>
						</div>
					</div>
				</form>
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
				<p class="font-weight-light text-muted mb-4">Regardless of your industry - if your business sells using Unbounce, I'll make sure to deliver all of the following...</p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce bordered-columns">
			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10">

				<h6 class="text-primary mb-2">More leads</h6>
				<p class="font-weight-light text-muted">By better targeting your core audience and speaking directly to their pain points, I can help your landing pages generate higher quality leads.</p>

			</div>

			<div class="col-lg-4 wow animated fadeIn text-center p-4" data-wow-duration="3s" data-wow-delay=".4s">

				<h6 class="text-primary mb-2">Awesome user experience</h6>
				<p class="font-weight-light text-muted">I design clean, modern and delightful experiences. Your audience will fall in love with your design, resulting in higher conversion rates.</p>	

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

<?php

get_footer();