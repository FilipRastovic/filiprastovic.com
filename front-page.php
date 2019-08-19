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
 * @package filiprastovic
 */

get_header();
?>


<header class="header">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Expert Unbounce Landing Page Design</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
				<p class="font-weight-light text-uppercase mb-5">I increase <strong class="font-weight-bold">quality leads</strong> for your established firm, turning your landing pages into most effective 24/7 salesperson. 
				</p>
				<a href="#content" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>LEARN MORE</a>
			</div>

		</div>
	</div>
</header>

<section class="page-section bg-grey" id="content">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">Your Landing Pages have a unique sales cycle</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="font-weight-light text-muted mb-4">I understand the nuances of landing page transactions. Knowing what motivates buyers to create online purchases, I help you...</p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce">
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10"  >
				<div class="circle-icon">
					<div class="icon">1</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Generate more leads</h5>
						<p class="font-weight-light text-muted">Well-written copy and persuasive calls to action, present your offerings in a way that visitors can't help but follow your sales funnel.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
				<div class="circle-icon">
					<div class="icon">2</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Market your brand</h5>
						<p class="font-weight-light text-muted">You only get one chance to make a first impression. I make sure your landing page provides best possible reflection of your brand.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".5s">
				<div class="circle-icon">
					<div class="icon">3</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Optimize &amp; Grow</h5>
						<p class="font-weight-light text-muted">Unbounce allows you to update the content on your pages and create variation easy, without needing to be coders or designers.</p>
					</div>
				</div>
				
			</div>

			<div class="col-lg-12 mb-3 text-center wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<a href="#recent-work" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-info-circle"></i>SEE PORTFOLIO</a>
			</div>
		</div>
	</div>
</section>

<section class="page-section" id="recent-work">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
					<img class="img-fluid mb-5"
					src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/customr-small.png"
					alt="Portfolio image">
					<div class="row mt-4">
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/0.png" alt="Brand Logo 1">

						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/Crewdox-1.png" alt="Brand Logo 2">
						
						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/download.png" alt="Brand Logo 3">

						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/GearLogoVertical.png" alt="Brand Logo 4">

						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/header-728x180.png" alt="Brand Logo 5">
						
						</div>
						<div class="col-4 col-md-2 mb-3 wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/think3.jpg" alt="Brand Logo 6">

						</div>
					</div>
			</div>
			<div class="col-lg-4">
				<h2 class="text-uppercase font-weight-bold mb-3">
					40+ Satisfied Clients
				</h2>
				<p class="font-weight-light text-muted mb-4">
					Our design process has been critical the to success of y clients. In partnership with you and your team, I guide you from start to finish through the process of 
					designing and developing a landing page that speaks directly to your customers.
				</p>
				<h5 class="text-uppercase font-weight-bold text-primary mb-3">
					Focus on conversions
				</h5>
				<p class="font-weight-light text-muted mb-5">
					Conversion centered design is a combination of both graphic design and marketing principles that are aware of low attention span the average human has today.
					There is too much content on the web, and the way to capture someone's attention is to levarage the principles of visual design with a strong persuasive copy.
				</p>
				<a href="/portfolio" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-eye"></i>SEE MY RECENT WORK</a>

			</div>


		</div>
	</div>
</section>

<section class="page-section bg-grey bg-help-you">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 self-align-end">
				<h2 class="text-uppercase font-weight-bold mb-5">I I can help you to ...</h2>
			</div>
			<div class="col-lg-8 align-self-end">
				<div class="accordion" id="accordionExample">
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn font-weight-bold text-uppercase text-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span>Generate more quality leads</span><i class="fas fa-chevron-up"></i>
								</button>
							</h2>
							
						</div>
					
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<p class="font-weight-light">Your landing pages get a lot of traffic but not enough of these visitors are converted into viable leads? Those that do take action are frequently not ideal clients.</p>
							<p class=" font-weight-light">A good design has:</p>
							<ul>
								<li class=" font-weight-light">Strong Messaging</li>
								<li class=" font-weight-light">Enticing Content</li>
								<li class=" font-weight-light">Authority</li>
								<li class=" font-weight-light">Trustwhortiness</li>
							</ul>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-primary" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Redesign outdated and embarrassing old web design<i class="fas fa-chevron-up"></i>
								</button>
								
							</h2>
							
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<p class="font-weight-light ">Web design trends change over time so it's important to keep up to date. But it is not only the aesthetics that increase conversions, it is the thorough research and strategy behind
								design decisions that make the visitors fall in love with your offerings.</p>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-primary" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Make your pages work on mobile<i class="fas fa-chevron-up"></i>
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<p class="font-weight-light ">People surf the web using mobile devices, it's a fact. Responsive web design is a term coined for this purpose. It's a 
								set of techniques that allow the landing pages to have a fluid layout that changes based on device screen width.
							</p>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-section testimonials">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 text-center wow animated fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
					<img class="img-fluid rounded shadow mb-5" src="<?php echo get_template_directory_uri() ?>/assets/img/molnar.jpeg" alt="Testimonial">
			</div>
			<div class="col-lg-8 wow animated fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4"><i>Filip has a unique combo of skills: design & development. He proactively suggested some great ideas on how to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work with. All All in all great designer-developer with an outstanding sense for client service.</i></p>
				<p class="text-primary font-weight-bold mb-2 text-left">Robert Molnar</p>
				<p class="font-weight-light text-muted text-left">CEO Of Stratolytics</p>
			</div>
		</div>
	</div>
</section>


<section class="page-section bg-grey bg-contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 position-relative">
				<h2 class="font-weight-bold mb-4">
					Are I a got fit for your project?
				</h2>
				<p class="font-weight-light text-muted mb-4">While I welcome inquires from all types of companies that use Unbounce landing pages, experience has shown I obtain the best result for clients with the following traits...</p>
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