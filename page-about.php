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
	<div class="col-lg-2 offset-lg-3">
			<figure class="text-center">
						<img class="filipo img-fluid rounded-circle shadow mb-4" src="/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg" alt="Filip Rastovic">
						<figcaption><a class="text-primary" id="haircut" >Click to cut my hair!</a></figcaption>
					</figure>
      </div>
      <div class="col-md-5">
		<h2 class="font-weight-bold text-primary">Hi I'm Filip Rastovic</h2>
        <p class="font-weight-light">I'm Filip, a passionate web designer and software developer. I've been fascinated with the way technology, especially software, 
			look and feel like since an early age and I always knew my future will have something to do with it. My path lead me to the intersection of visual arts 
			and software engineering, a blade's edge where I feel most comfortable. While desining landing pages is my daily job and a business, in my spare time I enjoy 
			drawing using code and algorthims, writing, making video games with my friends and producting educational youtube videos.
		</p>
		<p class="font-weight-light mb-5">
			Looking forward to hearing from you.
		</p>
      </div>

	</div>
	<div class="row">
		<div class="col-lg-4 offset-2">
			<img class="filipo img-fluid shadow rounded mb-4" src="/wp-content/themes/filip-rastovic/assets/img/lala.jpg" alt="Filip Rastovic">
		</div>
		<div class="col-lg-4">
			<img class="filipo img-fluid shadow rounded mb-4" src="/wp-content/themes/filip-rastovic/assets/img/hunter.jpg" alt="Filip Rastovic">
		</div>
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