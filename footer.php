<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package filiprastovic
 */

?>

<?php wp_footer(); 

	if ( ! is_page( 'contact' ) ) { ?>

<section class="page-section bg-grey bg-contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 position-relative">
				<h2 class="font-weight-bold mb-4">
					Am I a got fit for your project?
				</h2>
				<p class="font-weight-light text-muted mb-4">While I welcome inquiries from all types of companies that use Unbounce landing pages, experience has shown I obtain the best result for clients with the following traits...</p>
				<ul class="list-unstyled text-primary font-weight-light">
					<li class="mb-3">
						<i class="fas fa-check mr-2"></i>Are small to medium in size ( approximately 1 - 100 employees)
					</li>
					<li class="mb-3">
						<i class="fas fa-check mr-2"></i>Have an opportunity to build growth through their marketing plan
					</li>
					<li class="mb-3">
						<i class="fas fa-check mr-2"></i>Recognize their landing pages are a valuable marketing asset
					</li>
					<li class="mb-5">
						<i class="fas fa-check mr-2"></i>Value a structured process to ensure great results
					</li>
				</ul>
				<div class="animated-arrow right show-for-xlarge"><div class="chevron"></div><div class="chevron"></div><div class="chevron"></div></div>
			</div>
			<div class="col-lg-5 offset-lg-1 wow animated fadeInRight" data-wow-duration="2s" data-wow-delay=".1s">
				<form class="shadow rounded" action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
				method="post">
					<div class="text-center mb-4">
						<p class="h5 font-weight-light text-primary text-center">Schedule <u class="font-weight-bold text-uppercase">your</u> consultation!</p>
					</div>
					<div class="form-row">
						<div class="form-group required col-md-6">
							<label class="control-label text-muted" for="inputFirstName">First Name</label>
							<input type="text" class="form-control" name="FNAME" id="inputFirstName" placeholder="" required>
						</div>
							<div class="form-group required col-md-6">
							<label class="control-label text-muted" for="inputLastName">Last Name</label>
							<input type="text" class="form-control" name="LNAME" id="inputLastName" placeholder="">
						</div>
					</div>
					<div class="form-group required pb-3">
						<label class="control-label text-muted" for="inputEmail">Email Address</label>
						<input type="email" class="form-control" name="EMAIL" name="EMAIL" id="inputEmail" placeholder="">
					</div>
					<button type="submit" class="btn btn-primary btn-xl shadow btn-block">Start Your Consultation</button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
	}
?>

<footer class="footer">
	<div class="container text-center text-md-left">
		<div class="row">
			<div class="col-md-5 mt-md-0 mt-3">
				<h5 class="font-weight-bold text-uppercase ">Filip Rastovic</h5>
				<p class="font-weight-light mb-4">Expert Landing Page Design</p>
				<p class="font-weight-light text-muted small">As expert in conversion centered design, We aim to improve your business by designing and developing you landing pages that will act as your most effective sales person.</p>

			</div>
			<hr class="clearfix w-100 d-md-none pb-3">
			<div class="col-md-3 offset-md-1 mb-md-0 mb-3">
				<h5 class="font-weight-bold text-uppercase">Social</h5>

				<ul class="list-unstyled font-weight-light">
					<li>
						<a class="small" href="http://codepen.io/FilipRastovic"><i class="mr-2 fab fa-codepen"></i>CodePen</a>
					</li>
					<li>
						<a class="small" href="https://github.com/FilipRastovic"><i class="mr-2 fab fa-github"></i>GitHub</a>
					</li>
					<li>
						<a class="small" href="https://www.linkedin.com/in/filip-rastovic/"><i class="mr-2 fab fa-linkedin-in"></i>Linkedin</a>
					</li>
					<li>
						<a class="small" href="https://dribbble.com/filipo"><i class="mr-2 fab fa-dribbble"></i>Dribbble</a>
					</li>
					<li>
						<a class="small" href="https://twitter.com/FRastovic"><i class="mr-2 fab fa-twitter"></i>Twitter</a>
					</li>
					<li>
						<a class="small" href="https://www.upwork.com/fl/filiprastovic">Upwork</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</body>
</html>