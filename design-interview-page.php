<?php
/**
 * Template Name: Design Interview Page Template
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
			<canvas id="displayCanvas">

			</canvas>
			<div class="col-lg-10 align-self-baseline">

				<!-- Multi step form -->
				<section class="multi_step_form">
					<form id="msform">
						<!-- Tittle -->
						<div class="tittle">
							<h2>Verification Process</h2>
							<p>In order to use this service, you have to complete this verification process</p>
						</div>
						<!-- progressbar -->
						<ul id="progressbar">
							<li class="active">1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
							<li>9</li>
							<li>10</li>
							<li>11</li>
						</ul>
						<!-- fieldsets -->
						<fieldset>
							<h3>Setup your phone</h3>
							<h6>We will send you a SMS. Input the code to verify.</h6>
							<div class="form-row">
								<div class="form-group col-md-12">
									<input type="tel" id="phone" class="form-control" placeholder="+880">
								</div>
							</div>
							<button type="button" class="next action-button">Continue</button>
						</fieldset>
						<fieldset>
							<h3>Setup your phone</h3>
							<h6>We will send you a SMS. Input the code to verify.</h6>
							<div class="form-row">
								<div class="form-group col-md-12">
									<input type="tel" id="phone" class="form-control" placeholder="+880">
								</div>
							</div>
							<button type="button" class="action-button previous previous_button">Back</button>
							<button type="button" class="next action-button">Continue</button>
						</fieldset>
						<fieldset>
							<h3>Setup your phone</h3>
							<h6>We will send you a SMS. Input the code to verify.</h6>
							<div class="form-row">
								<div class="form-group col-md-12">
									<input type="tel" id="phone" class="form-control" placeholder="+880">
								</div>
							</div>
							<button type="button" class="action-button previous previous_button">Back</button>
							<a href="#" class="action-button">Finish</a>
						</fieldset>
					</form>
				</section>
				<!-- End Multi step form -->
			</div>
		</div>
	</div>
</header>

<?php

get_footer();