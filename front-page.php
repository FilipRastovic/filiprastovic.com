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
			<!-- <canvas id="displayCanvas">
			
			</canvas> -->

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Expert landing page design</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
				<p class="font-weight-light mb-5">
					I increase <strong class="font-weight-bold">quality leads</strong> 
					for your next campaign, optimizing your landing pages for conversion, turning them into effective sales machines. 
				</p>
				<a href="/process" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>LEARN HOW</a>
			</div>

		</div>
	</div>
</header>

<section class="page-section bg-grey" id="content">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">Your landing pages have a unique selling cycle</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="font-weight-light text-muted mb-4">Generate more leads utilizing conversion centered design practices and modern aesthetic trends, desining your pages I help you... </p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce">
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10"  >
				<div class="circle-icon">
					<div class="icon">1</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Generate more leads</h5>
						<p class="font-weight-light text-muted">Web is a messy place. Combining your copywriting, calls to action and conversion centered design, visitors can't help but follow your sales funnel. </p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
				<div class="circle-icon">
					<div class="icon">2</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Market your brand</h5>
						<p class="font-weight-light text-muted">You only get one chance to make a first impression. Make sure your landing page provides best possible reflection of your brand.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".5s">
				<div class="circle-icon">
					<div class="icon">3</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Optimize &amp; Grow</h5>
						<p class="font-weight-light text-muted">Start with a hypothesis and test until you're satisfied with the results. Applying scientific method can help you grow. </p>
					</div>
				</div>
				
			</div>

			<div class="col-lg-12 mb-3 text-center wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<a href="/portfolio" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-info-circle"></i>SEE PORTFOLIO</a>
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
					My design process has been critical to success of my clients. In partnership with you and your team, I guide you from start to finish through the process of 
					designing and developing a landing page that converts your visitors into leads.
				</p>
				<h5 class="text-uppercase font-weight-bold text-primary mb-3">
					Focus on conversions
				</h5>
				<p class="font-weight-light text-muted mb-5">
					Conversion centered design is a combination of both graphic design and marketing principles that are aware of low attention span the average human has today.
					There is too much content on the web, and the way to capture someone's attention is to leverage the principles of visual design with a strong persuasive copy.
				</p>
				<a href="/case-studies" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-book"></i>READ CASE STUIDY</a>

			</div>


		</div>
	</div>
</section>

<section class="page-section bg-grey bg-help-you">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 self-align-end">
				<h2 class="text-uppercase font-weight-bold mb-5">I can help you to ...</h2>
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
							<p class="font-weight-light">You're throwing cash on campaigns and not getting your ROI? Your landing pages might lack some of the elements of conversion centered design: </p>
							<p class=" font-weight-light">A conversion centered design has:</p>
							<ul>
								<li class=" font-weight-light">Strong Messaging</li>
								<li class=" font-weight-light">Clear Calls To Action</li>
								<li class=" font-weight-light">Authority</li>
								<li class=" font-weight-light">Social Proof</li>
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
		<div class="row">
			<div class="col-lg-12 wow animated fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
				<h2 class="text-uppercase font-weight-bold mb-5">Client testimonials</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4"><i>Filip has a unique combo of skills: design &amp; development. He proactively suggested some great ideas on how to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work with. All All in all great designer-developer with an outstanding sense for client service.</i></p>
				<p class="text-primary font-weight-bold mb-2 text-left">Robert Molnar</p>
				<p class="font-weight-light text-muted text-left">CEO Of Stratolytics</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4">
					I needed someone who can design AND develop a landing page and upload it to my website. Filip did a great work in doing the above. It is pleasure working with Filip, he understands what needs to be done and does it in very quick and efficient way.
					For my next projects for landing pages I would would with him again.
					Thank you Filip!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Maria Davidson</p>
				<p class="font-weight-light text-muted text-left">Justo</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4">
					Filip was AMAZING! The only reason we are ending the contract is because he got too busy with bigger projects. I am sad to loose him as he is awesome. I would definitely hire again and again. If you have the opportunity to work with Filip, you should absolutely do it, he will make you proud!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Liam Shy</p>
				<p class="font-weight-light text-muted text-left">Flight Collective</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4">
					Fillip understood the project, understood my needs and made it happen. Created a really beautiful landing page that is going to work well with my ad campaign.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Andrew Semaan</p>
				<p class="font-weight-light text-muted text-left">Practice Cultivator</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4">
					Whaou ! working with Filip is just GREAT ! Everything is easy and simple. Thanks a lot for your great job, will have more job soon ;)
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Battista Ravane</p>
				<p class="font-weight-light text-muted text-left">USBFactory</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<p class="font-weight-light text-muted testimonial-paragraph text-left mb-4">
					Working with Filip has been a very smooth process. He is quick and clear with communication and works through revisions easily and without any hiccups.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Mike Hutter</p>
				<p class="font-weight-light text-muted text-left">ConvertMore</p>
			</div>
		</div>
	</div>
</section>


<?php

get_footer();