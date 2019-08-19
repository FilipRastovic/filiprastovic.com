<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package filiprastovic
 */

get_header();
?>

<section class="single-post">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">

        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

			</div>
    </div>
</section>

<section class="page-section bg-grey bg-contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 position-relative">
				<h2 class="font-weight-bold mb-4">
					Am I a got fit for your project?
				</h2>
				<p class="font-weight-light text-muted mb-4">While we welcome inquires from all types of companies that use Unbounce landing pages, experience has shown we obtain the best result for clients with the following traits...</p>
				<ul class="list-unstyled text-primary font-weight-light">
					<li class="mb-3">
						<i class="fas fa-check mr-2"></i>Are small to medium in size ( approximately 10 - 100 employees)
					</li>
					<li class="mb-3">
						<i class="fas fa-check mr-2"></i>Have a opportunity to build growth through their marketing plan
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
						<p class="h5 font-weight-light text-primary text-center">Schedule your <u class="font-weight-bold text-uppercase">free</u> consultation!</p>
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

get_footer();