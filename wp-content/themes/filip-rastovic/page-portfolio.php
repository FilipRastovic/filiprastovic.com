<?php
/**
 * Template Name: Portfolio template
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

<section class="header">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Documentation Interface</h2>
				<hr>
				<p class="mb-5">This is an interface where users of a custom web browser solution come to inform
					themselves about the current status, find out about bugs,report new bugs
					or request new features. I've worked alongside a designer and a backend PHP developer. When the
					Sketch design files were ready they were uploaded to InVision and my job was to
					implement the designs into a fully responsive, semantic HTML, modular SCSS following the BEM
					notation and presentational JavaScript that takes care of animations, interactions
					and few simple ajax calls.
				</p>
				<ul class="list-unstyled">
					<li><i class="fa fa-code"></i> Responsive Design</li>
					<li><i class="fa fa-wordpress"></i> Wordpress Integration</li>
				</ul>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto">
				<img class="img-fluid shadow mb-5"
					src="<?php echo get_template_directory_uri() ?>/assets/img/ib-docs.jpg" alt="Ib docs">
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Pricing Interface</h2>
				<hr>
				<p class="mb-5">Pricing page redesign. I've worked alongside a designer and a backend PHP developer. When the
					Sketch design files were ready they were uploaded to InVision and my job was to
					implement the designs into a fully responsive, semantic HTML, modular SCSS following the BEM
					notation and presentational JavaScript that takes care of animations, interactions
					and few simple ajax calls.
				</p>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto">
				<img class="img-fluid shadow mb-5"
					src="<?php echo get_template_directory_uri() ?>/assets/img/pricing.jpg" alt="Ib docs">
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-12 col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Wordpress Landing Page</h2>
				<hr>
				<p class="mb-5">Fully customizable Wordpress theme. My job was desining as well, then coding this page using gulp.js for efficient implementation alongside SCSS and Bootstrap
					components. The page has multiple customized carrousels that can be easily edited on the backend with advanced custom fields. I also make sure my custom themes have a nice UX on the 
					backend allowing non developers to easily change them.
				</p>
				<ul class="list-unstyled">
					<li><i class="fa fa-code"></i> Responsive Design</li>
					<li><i class="fa fa-wordpress"></i> Wordpress Integration</li>
				</ul>
				<a href="/case-studies">Read the case study.</a>
				<a href="https://customr.app/" target="_blank">Visit Website</a>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/customr-small.png"
						alt="Customrr">
				</div>
			</div>
		</div>
		<div class="row gutter-bot mt-5">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Bonsall Pool</h4>
					<hr>
					<p>While working for an advertising agency I maintained and contributed to this large scale website powered by Expression Engine CMS. The website used gulp.js to organise SCSS and JavaScript
						partials and easily compile them into single files, with minification and other automated task included in the task runner.
					</p>
					<a href="https://bonsallpool.com/" target="_blank">Visit Website</a>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/bonsal-small.png" alt="Bonsall Img">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Landing Page</h4>
				<hr>
				<ul class="list-unstyled">
					<li><i class="fa fa-code"></i> Responsive Design</li>
					<li><i class="fa fa-wordpress"></i> Wordpress Integration Design</li>
				</ul>
				<a href="https://filiprastovic.github.io/stargazerworkshop-freelancer-landing-page/" target="_blank">Visit Website</a>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/filiprastovic-small.png"
						alt="">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Justo</h4>
				<hr>
				<ul class="list-unstyled">
					<li><i class="fa fa-code"></i> Responsive Design</li>
					<li><i class="fa fa-wordpress"></i> Wordpress Integration Design</li>
				</ul>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/justo-small.png" alt="">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Natours</h4>
					<hr>
					<p>
						<ul>
							<li>Semantic HTML</li>
							<li>SCSS architecture</li>
						</ul>
					</p>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/natours-small.png"
						alt="Portfolio Pics">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Home Manufacturer</h4>
					<hr>
					<p>
						<ul>
							<li>Wireframes</li>
							<li>Mockups/UX/UI</li>
							<li>Implementation</li>
						</ul>
					</p>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/ipad.png"
						alt="Portfolio Pics">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Web Agency</h4>
					<hr>
					<p>
						<ul>
							<li>UX/UI</li>
							<li>Maintainance &amp; Implementation</li>
						</ul>
					</p>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/synico-small.png"
						alt="Portfolio Pics">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Landing Page</h4>
					<hr>
					<p>
						<ul>
							<li>Wireframes</li>
							<li>UX/UI</li>
							<li>mplementation</li>
						</ul>
					</p>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/wadeLP-small.png"
						alt="Portfolio Pics">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">Interactive Guides Software</h4>
					<hr>
					<a href="https://solutionbay.com/" target="_blank">Visit Website</a>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid"
						src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/solutionbay-small.png"
						alt="Portfolio Pics">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-8 mx-auto mb-5">
				<h2 class="text-thin">eCommerce UI</h4>
				<hr>
			</div>
			<div class="col-md-8 mx-auto mb-5">
				<div class="portfolio-box">
					<img class="img-fluid mb-3" src="<?php echo get_template_directory_uri() ?>/assets/img/ecom-1.jpg"
						alt="Portfolio Pics">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/ecom-2.jpg"
						alt="Portfolio Pics">
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-3 mb-5">
				<img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/new-portfolio-imgs/jpg.jpg"
					alt="Portfolio Pics">
			</div>
			<div class="col-md-3 mb-5">
				<img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/new-portfolio-imgs/customr.jpg"
					alt="Portfolio Pics">
			</div>
			<div class="col-md-3 mb-5">
				<img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/new-portfolio-imgs/national.jpg"
					alt="Portfolio Pics">
			</div>
			<div class="col-md-3 mb-5">
				<img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/new-portfolio-imgs/qwd.png"
					alt="Portfolio Pics">
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-12 text-center">
				<h4>Generative Design ( JavaScript Pseudorandomness )</h4>
				<hr>
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/gene.png"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/question.png"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/1.jpg"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/2.jpg"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/3.jpg"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/4.jpg"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/5.jpg"
					alt="Generative img">
			</div>
			<div class="col-md-6 mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/6.jpg"
					alt="Generative img">
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-12 text-center">
				<h4 class="mb-4">My Video Game</h4>
				<hr>
			</div>
			<div class="col-md-6 mx-auto">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/IBT5_B90JJg" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
					</iframe>
				</div>
			</div>
		</div>
		<div class="row gutter-bot">
			<div class="col-md-12 text-center">
				<h4 class="mb-4">How I Create Websites Free eBook</h4>
				<hr>
			</div>
			<div class="col-md-4 mx-auto">
				<a
					href="<?php echo get_template_directory_uri() ?>/assets/download/Filip Rastovic - Website Creation eBook.pdf"><img
						class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/ebook.png"
						alt="Ebook Cover"></a>
			</div>
		</div>
	</div>
</section>



<?php

get_footer();