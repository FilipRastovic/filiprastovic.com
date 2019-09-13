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
				<h2 class="font-weight-bold">Welcome to my website</h2>
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

<?php

get_footer();