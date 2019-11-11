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
<div class="container-fluid">
	<div class="row d-none d-lg-block">
		<div class="position-absolute col-lg-2 offset-lg-9 u-mt-96">
			<figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-4" src="/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg" alt="Filip Rastovic">
					<figcaption><a class="text-blue" id="haircut" ><div class="text-dark">Hi I'm Filip, a designer. </div>Click to cut my hair!</a></figcaption>
				</figure>
		</div>
	</div>
</div>
<header class="header">
	<div class="container h-100">

		<div class="row h-100">
			<canvas id="displayCanvas">
			
			</canvas>

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Boost Conversion Rates</h1>
				
			</div>

			<div class="col-lg-10 align-self-baseline">
				<p class=" mb-5">
					Optimize your <strong class="font-weight-bold">landing page</strong> utilizing the best practices of <strong class="font-weight-bold">conversion centered design</strong>
				</p>
				<a href="#" data-toggle="modal" data-target="#exampleModal"class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>REQUEST QUOTE</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="/wp-content/themes/filip-rastovic/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>

		</div>
		<div class="row d-block d-lg-none">
		<div class="col-6 offset-5 u-mt-96">
			<figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-4" src="/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg" alt="Filip Rastovic">
					<figcaption><a class="text-blue" id="haircut" ><div class="text-dark">Hi I'm Filip, a designer. </div>Click to cut my hair!</a></figcaption>
				</figure>
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
				<p class="  mb-4">Apply best practices or risk wasting cash on paid advertising that doesn't convert. But it doesn't have to be like that. I can help you: </p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce">
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".3s" data-wow-offset="10"  >
				<div class="circle-icon">
					<div class="icon">1</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Generate more leads</h5>
						<p class=" ">Users are overwhelmed by too much choice. What do I read? Where do I click? Remove distractions and you'll convert more.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
				<div class="circle-icon">
					<div class="icon">2</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Market your brand</h5>
						<p class=" ">Associate your brand with clarity. Users love brands they can understand and leaving a great first impression is crucial.</p>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".5s">
				<div class="circle-icon">
					<div class="icon">3</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Optimize &amp; Grow</h5>
						<p class=" ">Start with a hypothesis and test until you're satisfied with the results. Applying scientific method can help you grow. Leverage Big Data. </p>
					</div>
				</div>
				
			</div>

			<div class="col-lg-12 mb-3 text-center wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<a href="/portfolio" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-info-circle"></i>SEE PORTFOLIO</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="/wp-content/themes/filip-rastovic/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>
		</div>
	</div>
</section>

<section class="page-section pretty-gradient-two" id="recent-work">
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

							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/think3.png" alt="Brand Logo 6">

						</div>
					</div>
			</div>
			<div class="col-lg-4">
				<h2 class="text-uppercase font-weight-bold mb-3">
					Satisfied clients
				</h2>
				<p class="  mb-4">
					My design process has been critical to success of my clients. In partnership with you and your team, I guide you from start to finish through the process of 
					designing and developing a landing page that converts your visitors into leads.
				</p>
				<h5 class="text-uppercase font-weight-bold text-primary mb-3">
					Focus on conversions
				</h5>
				<p class="  mb-5">
					Conversion centered design is a combination of both graphic design and marketing principles that are aware of low attention span the average human has today.
					There is too much content on the web, and the way to capture someone's attention is to leverage the principles of visual design with a strong persuasive copy.
				</p>
				<a href="/case-studies" class="btn btn-primary btn-xl shadow js-scroll-trigger"><i class="fas fa-book"></i>READ CASE STUIDY</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="/wp-content/themes/filip-rastovic/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>


		</div>
	</div>
</section>

<section class="page-section bg-grey bg-help-you">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 self-align-end">
				<h2 class="text-uppercase font-weight-bold mb-5">Landing Page Design Process</h2>
			</div>
			<div class="col-lg-8 align-self-end">
				<div class="accordion" id="accordionExample">
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn font-weight-bold text-uppercase text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span>1. Industry / Competitor Research &amp; Analysis</span><i class="fas fa-chevron-up"></i>
								</button>
							</h2>
							
						</div>
					
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<p class="">Are you aware of your competition? You should be. I make sure to research your PPC keywords and analyse landing pages for your competitors. Breaking them down gives <strong class="font-weight-bold">great insight</strong> that you can use to build something better on top of.</p>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									2. Prototyping and Wireframing<i class="fas fa-chevron-up"></i>
								</button>
								
							</h2>
							
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<p class=" ">Failing to plan is planning to fail. That's why I don't rush into design just yet. Creating a structured user flow of your landing page I help you best construct the narrative of your offer so <strong class="font-weight-bold">users can understand</strong> what it's all about.</p>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									3. Design &amp; Implementation<i class="fas fa-chevron-up"></i>
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<p class=" ">After we have agreed and the wireframe has been approved it's time to apply your brand guidelines into it. We talk about the content in advance: are you going to provide the images and other neccecery media for the landing page or do I have to buy them? We often do one or two revisions during this step.
								After the design has been approved we take it into production and test on both <strong class="font-weight-bold">desktop and mobile screens</strong> afterwards.
							</p>
						</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									4. Testing, enoying and improving the results<i class="fas fa-chevron-up"></i>
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<p class=" ">The best part of the process! Enjoying the results of your high converting landing pages. But it shouldn't end here. We create at least one <strong class="font-weight-bold">new variation</strong> of the landing page to split test against. 
								Did you know that you can get very different results by just changing the color of your primary call to action button? 
							</p>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-section testimonials pretty-gradient">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow animated fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
				<h2 class="text-uppercase font-weight-bold mb-5">What they said about me</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/molnar.jpeg" alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4"><i>Filip has a unique combo of skills: design &amp; development. He proactively suggested some great ideas on how to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work with. All All in all great designer-developer with an outstanding sense for client service.</i></p>
				<p class="text-primary font-weight-bold mb-2 text-left">Robert Molnar</p>
				<p class="  text-left">CEO Of Stratolytics</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/Maria.jpg" alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					I needed someone who can design AND develop a landing page and upload it to my website. Filip did a great work in doing the above. It is pleasure working with Filip, he understands what needs to be done and does it in very quick and efficient way.
					For my next projects for landing pages I would would with him again.
					Thank you Filip!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Maria Davidson</p>
				<p class="  text-left">Justo</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/liam.jpg" alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Filip was AMAZING! The only reason we are ending the contract is because he got too busy with bigger projects. I am sad to loose him as he is awesome. I would definitely hire again and again. If you have the opportunity to work with Filip, you should absolutely do it, he will make you proud!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Liam Shy</p>
				<p class="  text-left">Flight Collective</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/andrew.jpg" alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Fillip understood the project, understood my needs and made it happen. Created a really beautiful landing page that is going to work well with my ad campaign.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Andrew Semaan</p>
				<p class="  text-left">Practice Cultivator</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/battista.jpg" alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Whaou ! Working with Filip is just GREAT ! Everything is easy and simple. Thanks a lot for your great work, we will be booking you again very soon!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Battista Ravane</p>
				<p class="  text-left">USBFactory</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/gari-designer.jpg" alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Working with Filip has been a very smooth process. He is quick and clear with communication and works through revisions easily and without any hiccups.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Mike Hutter</p>
				<p class="  text-left">ConvertMore</p>
			</div>
		</div>
	</div>
</section>


<?php

get_footer();