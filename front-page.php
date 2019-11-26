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
				<img class="filipo img-fluid rounded-circle shadow mb-4"
					src="/wp-content/themes/filip-rastovic/assets/img/profilna.jpg" alt="Filip Rastovic">
				<figcaption class="text-white">Hi, I'm Filip, welcome to my website! </figcaption>
			</figure>
		</div>
	</div>
</div>
<header class="header">
	<div class="container h-100">

		<div class="row h-100">
			<canvas id="displayCanvas">

			</canvas>

			<div class="col-lg-8 align-self-end">
				<h1 class="text-uppercase font-weight-bold mb-5 text-white">I help companies solve business problems through visual
					design</h1>

			</div>

			<div class="col-lg-10 align-self-baseline">
				<!-- <p class=" mb-5">
					I'm a designer who helps businesses better communicate ideas with their customers.
				</p> -->
				<a href="#" data-toggle="modal" data-target="#exampleModal"
					class="btn btn-secondary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s"
					data-wow-delay=".2s"><i class="fas fa-info-circle"></i>REQUEST QUOTE</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="/wp-content/themes/filip-rastovic/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>

		</div>
		<div class="row d-block d-lg-none">
			<div class="col-6 offset-5 u-mt-96">
				<figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-4"
						src="/wp-content/themes/filip-rastovic/assets/img/profilna.jpg" alt="Filip Rastovic">
					<figcaption>
						<div class="text-white">Hi, I'm Filip, welcome to my website!</div>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</header>

<section class="page-section big-padding" id="content">
	<div class="container">
		<div class="row justify-content-center mb-5">

			<div class="col-lg-10 align-self-end text-center">
				<h2 class="text-uppercase font-weight-bold mb-3">Your landing pages have a unique selling cycle</h2>
			</div>

			<div class="col-lg-7 align-self-baseline text-center">
				<p class="  mb-4">Apply best practices or risk wasting cash on paid advertising that doesn't convert.
					But it doesn't have to be like that. I can help you: </p>
			</div>

		</div>

		<div class="row justify-content-center animatedParent animateOnce">
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".3s"
				data-wow-offset="10">
				<div class="circle-icon">
					<div class="icon">1</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Generate more leads</h5>
						<p class="text-dark">Users are overwhelmed by too much choice. What do I read? Where do I click? Remove
							distractions and you'll convert more.</p>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
				<div class="circle-icon">
					<div class="icon">2</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Market your brand</h5>
						<p class="text-dark">Associate your brand with clarity. Users love brands they can understand and
							leaving a great first impression is crucial.</p>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-5 wow animated fadeIn" data-wow-duration="3s" data-wow-delay=".5s">
				<div class="circle-icon">
					<div class="icon">3</div>
					<div class="text">
						<h5 class="text-uppercase text-primary mb-3">Optimize &amp; Grow</h5>
						<p class="text-dark">Start with a hypothesis and test until you're satisfied with the results. Applying
							scientific method can help you grow. Leverage Big Data. </p>
					</div>
				</div>

			</div>

			<div class="col-lg-12 mb-3 text-center wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
				<a href="/portfolio" class="btn btn-secondary btn-xl shadow js-scroll-trigger"><i
						class="fas fa-info-circle"></i>SEE PORTFOLIO</a>
				<!-- <img class="ml-1 back-arrow js-scroll-trigger wow animated fadeInRight" data-wow-duration="3s" data-wow-delay=".5s" src="/wp-content/themes/filip-rastovic/assets/img/back-arrow.png" alt="Arrow image pointing to the button"> -->
			</div>
		</div>
	</div>
</section>

<section class="page-section bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 self-align-end">
				<h2 class="text-uppercase font-weight-bold mb-5 text-white">Landing Page Design Process</h2>
			</div>
			<div class="col-lg-8 align-self-end">
				<div class="accordion" id="accordionExample">
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">
						<div class="card-header bg-warning" id="headingOne">
							<h2 class="mb-0">
								<button class="btn font-weight-bold text-uppercase text-dark" type="button"
									data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
									aria-controls="collapseOne">
									<span>1. Strategy</span><i class="fas fa-chevron-up"></i>
								</button>
							</h2>

						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
							data-parent="#accordionExample">
							<div class="card-body">
								<p class="">First we create a <span class="font-weight-bold">strategy</span> and a <span class="font-weight-bold">plan</span>. What are the problems we're trying to
									solve, how are we going to do it and how do we measure success?</p>
							</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">
						<div class="card-header bg-warning" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn font-weight-bold text-uppercase text-dark" type="button"
									data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
									aria-controls="collapseTwo">
									<span>2. Industry / Competitor Research &amp; Analysis</span><i
										class="fas fa-chevron-up"></i>
								</button>
							</h2>

						</div>

						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
							data-parent="#accordionExample">
							<div class="card-body">
								<p class="">Are you aware of your competition? You should be. I make sure to research
									your PPC keywords and analyse landing pages for your competitors. Breaking them down
									gives <strong class="font-weight-bold">great insight</strong> that you can use to
									build something better on top of.</p>
							</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">
						<div class="card-header bg-warning" id="headingThree">
							<h2 class="mb-0">
								<button class="btn font-weight-bold text-uppercase text-dark" type="button"
									data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
									aria-controls="collapseThree">
									<span>3. Content development</span><i class="fas fa-chevron-up"></i>
								</button>
							</h2>

						</div>

						<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
							data-parent="#accordionExample">
							<div class="card-body">
								<p class="">Working with your copywriter I help you structure a compelling story and
									give you advice on other media formats we're going to use for your landing page:
									images, videos, animations and so on.</p>
							</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
						<div class="card-header bg-warning" id="headingFour">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-dark" type="button"
									data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
									aria-controls="collapseFour">
									4. Prototyping and Wireframing<i class="fas fa-chevron-up"></i>
								</button>

							</h2>

						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour"
							data-parent="#accordionExample">
							<div class="card-body">
								<p class=" ">Failing to plan is planning to fail. That's why I don't rush into design
									just yet. Creating a structured user flow of your landing page I help you best
									construct the narrative of your offer so <strong class="font-weight-bold">users can
										understand</strong> what it's all about.</p>
							</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
						<div class="card-header bg-warning" id="headingFive">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-dark" type="button"
									data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
									aria-controls="collapseFive">
									5. Design &amp; Implementation<i class="fas fa-chevron-up"></i>
								</button>
							</h2>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive"
							data-parent="#accordionExample">
							<div class="card-body">
								<p class=" ">After we have agreed and the wireframe has been approved it's time to apply
									your brand guidelines into it. We talk about the content in advance: are you going
									to provide the images and other neccecery media for the landing page or do I have to
									buy them? We often do one or two revisions during this step.
									After the design has been approved we take it into production and test on both
									<strong class="font-weight-bold">desktop and mobile screens</strong> afterwards.
								</p>
							</div>
						</div>
					</div>
					<div class="card shadow wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
						<div class="card-header bg-warning" id="headingSix">
							<h2 class="mb-0">
								<button class="btn collapsed font-weight-bold text-uppercase text-dark" type="button"
									data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
									aria-controls="collapseSix">
									6. Testing, enoying and improving the results<i class="fas fa-chevron-up"></i>
								</button>
							</h2>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix"
							data-parent="#accordionExample">
							<div class="card-body">
								<p class=" ">The best part of the process! Enjoying the results of your high converting
									landing pages. But it shouldn't end here. We create at least one <strong
										class="font-weight-bold">new variation</strong> of the landing page to split
									test against.
									Did you know that you can get very different results by just changing the color of
									your primary call to action button?
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
			<div class="col-lg-6 wow animated fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
				<h2 class="text-uppercase font-weight-bold mb-5">What they said about me</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/molnar.jpeg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="testimonial-paragraph text-left mb-4">Filip has a unique combo of skills: design &amp;
					development. He proactively suggested some great ideas on how to make the website not just
					functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and
					then coded all of it into a superb website. Throughout the process Filip was a charm to work with.
					All All in all great designer-developer with an outstanding sense for client service.</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Robert Molnar</p>
				<p class="  text-left">CEO Of Stratolytics</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/Maria.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					I needed someone who can design AND develop a landing page and upload it to my website. Filip did a
					great work in doing the above. It is pleasure working with Filip, he understands what needs to be
					done and does it in very quick and efficient way.
					For my next projects for landing pages I would would with him again.
					Thank you Filip!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Maria Davidson</p>
				<p class="  text-left">Justo</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/liam.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Filip was AMAZING! The only reason we are ending the contract is because he got too busy with bigger
					projects. I am sad to loose him as he is awesome. I would definitely hire again and again. If you
					have the opportunity to work with Filip, you should absolutely do it, he will make you proud!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Liam Shy</p>
				<p class="  text-left">Flight Collective</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/andrew.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Fillip understood the project, understood my needs and made it happen. Created a really beautiful
					landing page that is going to work well with my ad campaign.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Andrew Semaan</p>
				<p class="  text-left">Practice Cultivator</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/battista.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Whaou ! Working with Filip is just GREAT ! Everything is easy and simple. Thanks a lot for your
					great work, we will be booking you again very soon!
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Battista Ravane</p>
				<p class="  text-left">USBFactory</p>
			</div>
			<div class="col-lg-4 mb-5 wow fadeIn animated" data-wow-duration="1s" data-wow-delay=".1s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
				<img src="/wp-content/themes/filip-rastovic/assets/img/testimonials/gari-designer.jpg"
					alt="Testimonial Person Image" class="testimonial-img">
				<p class="  testimonial-paragraph text-left mb-4">
					Working with Filip has been a very smooth process. He is quick and clear with communication and
					works through revisions easily and without any hiccups.
				</p>
				<p class="text-primary font-weight-bold mb-2 text-left">Mike Hutter</p>
				<p class="  text-left">ConvertMore</p>
			</div>
		</div>
	</div>
</section>


<?php

get_footer();