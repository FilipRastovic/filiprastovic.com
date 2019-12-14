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

<section class="page-section bg-primary" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 position-relative">
				<h2 class="font-weight-bold mb-4 text-white">
					Are we a match?
				</h2>
				<p class="text-white  mb-4">While I welcome inquiries from all types of companies that use landing pages, experience has shown I obtain the best result for clients with the following traits...</p>
				<ul class="list-unstyled text-primary ">
					<li class="text-warning">
						<i class="fas fa-check mr-2"></i>Have an opportunity to build growth through their marketing plan
					</li>
					<li class="text-warning">
						<i class="fas fa-check mr-2"></i>Are running paid advetising
					</li>
					<li class="text-warning">
						<i class="fas fa-check mr-2"></i>Recognize their landing pages are a valuable marketing asset
					</li>
					<li class="mb-5 text-warning">
						<i class="fas fa-check mr-2"></i>Value a structured process to ensure great results
					</li>
				</ul>
				<div class="animated-arrow right show-for-xlarge"><div class="chevron"></div><div class="chevron"></div><div class="chevron"></div></div>
			</div>
			<div class="col-lg-5 offset-lg-1" >
				<form class="shadow rounded wow animated fadeInRight overflow-hidden" data-wow-duration="2s" data-wow-delay=".1s" action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
				method="post">
					<div class="text-center mb-4">
						<p class="h5 text-dark text-center">Schedule <u class="font-weight-bold text-uppercase text-primary">your</u> consultation!</p>
					</div>
					<div class="form-group required pb-3">
						<label class="control-label " for="inputFirstName">Full Name</label>
						<input type="text" class="form-control" name="FNAME" id="inputFirstName" placeholder="" required>
					</div>
					<div class="form-group required pb-3">
						<label class="control-label " for="inputEmail">Email Address</label>
						<input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="">
					</div>
					<button type="submit" class="btn btn-secondary btn-xl shadow btn-block">Start Your Consultation</button>
					<p class="mt-3 mb-0 text-center"> <i class="fa fa-phone text-secondary"></i> Preffer calling? <a class="text-secondary" href="tel:381631714561">+381631714561</a> </p>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
	}
?>

<footer class="footer bg-grey">
	<div class="container text-center text-md-left">
		<div class="row">
			<div class="col-md-3 mt-md-0 mt-3">
				<h5 class="font-weight-bold text-uppercase ">Filip Rastovic</h5>
				<p class=" b-4">Clarity Enhanced</p>
				<p class=" small">I help companies solve their business problems and better communicate complex offers with their customers with great design.</p>

			</div>
			<hr class="clearfix w-100 d-md-none pb-3">
			<div class="col-md-2 offset-md-1  mb-3">
				<h5 class="font-weight-bold text-uppercase">Links</h5>

				<ul class="list-unstyled ">
					<li>
						<a class="small" href="/portfolio"><i class="mr-2 fa fa-paint-brush"></i>Portfolio</a>
					</li>
					<li>
						<a class="small" href="/case-studies"><i class="mr-2 fa fa-book"></i>Case Studies</a>
					</li>
					<li>
						<a class="small" href="/process"><i class="mr-2 fa fa-microchip"></i>Process</a>
					</li>
					<li>
						<a class="small" href="/about"><i class="mr-2 fa fa-user-tie"></i>About</a>
					</li>
				</ul>
			</div>
			<div class="col-md-2 offset-md-1  mb-3">
				<h5 class="font-weight-bold text-uppercase">Social</h5>

				<ul class="list-unstyled ">
					<li>
						<a class="small" target="_blank" href="http://codepen.io/FilipRastovic"><i class="mr-2 fab fa-codepen"></i>CodePen</a>
					</li>
					<li>
						<a class="small" target="_blank" href="https://github.com/FilipRastovic"><i class="mr-2 fab fa-github"></i>GitHub</a>
					</li>
					<li>
						<a class="small" target="_blank" href="https://www.linkedin.com/in/filip-rastovic/"><i class="mr-2 fab fa-linkedin-in"></i>Linkedin</a>
					</li>
					<li>
						<a class="small" target="_blank" href="https://www.behance.net/filiporastovic"><i class="mr-2 fab fa-behance"></i>Behance</a>
					</li>
					<li>
						<a class="small" target="_blank" href="https://dribbble.com/filipo"><i class="mr-2 fab fa-dribbble"></i>Dribbble</a>
					</li>
					<li>
						<a class="small" target="_blank" href="https://twitter.com/FRastovic"><i class="mr-2 fab fa-twitter"></i>Twitter</a>
					</li>
				</ul>
			</div>
			<div class="col-md-2 offset-md-1  mb-3">
				<h5 class="font-weight-bold text-uppercase">Other</h5>
				<ul class="list-unstyled ">
					<!-- <li>
						<a class="small" href="/generative"><i class="mr-2 fa fa-paint-brush"></i>Generative Design</a>
					</li> -->
					<li>
						<a target="_blank" class="small" href="https://store.steampowered.com/app/1131520/Trial_And_Terror/"><i class="mr-2 fa fa-gamepad"></i>My Video Game</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
</body>
</html>