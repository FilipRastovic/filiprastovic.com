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
	<div class="container">
		<div class="row">
			<div class="col-4 offset-7 col-md-2 offset-md-10 mb-3">
				<figure class="text-center">
					<img class="filipo img-fluid rounded-circle shadow mb-3" src="/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg" alt="Filip Rastovic">
					<figcaption><a id="haircut" >Click to cut my hair!</a></figcaption>

				</figure>
			</div>
			<div class="col-md-12">
				<h1>Freelance Front-End Developer</h1>
				<hr>
				<p class="lead mb-4">I'm Filip, a <strong>freelance front-end developer</strong> based in Serbia. I work with
					companies all around the world helping them
					build better web experiences with a focus on responsive design, performance and accessibility. Check
					out my
					<a href="/portfolio">portfolio</a>, learn about my <a href="/process">process</a>, get my
					<a href="<?php bloginfo('template_url'); ?>/assets/download/Filip-Rastovic-FrontEnd-Developer-Resume.pdf"
						target="_blank">resume</a> or send me an <a href="mailto:filiporastovic@gmail.com" target="_top">email</a>.
				</p>
			</div>
		</div>
	</div>
</header>

<section class="gray-background social">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Connect with me</h2>
				<hr>
				<ul class="mb-5">
					<li class="list-inline-item">
						<a href="http://codepen.io/FilipRastovic" target="_blank">
							<i class="fa fa-codepen"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://twitter.com/FRastovic" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.facebook.com/rorschach.bleji" target="_blank">
							<i class="fa fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.linkedin.com/in/filip-rastovic/" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://dribbble.com/filipo" target="_blank">
							<i class="fa fa-dribbble"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.instagram.com/rastovicfilip/" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://github.com/FilipRastovic" target="_blank">
							<i class="fa fa-github"></i>
						</a>
					</li>
				</ul>

				<i class="fa fa-code"></i>
				<a href="https://codepen.io/FilipRastovic/pen/pXgqKK" target="_blank">See my latest code sample / UI prototype on CodePen</a>

				
			</div>

			<div class="col-md-6 mt-4">
				<div class="embed-responsive embed-responsive-16by9 img-thumbnail">
					<iframe class="" width="560" height="315" src="https://www.youtube.com/embed/Y7ogCVJYuvE?controls=0"
						frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="reviews">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto text-center">
				<h3>Client reviews</h3>
				<hr class="light">
				<h6 class="text-muted">What they've said about me</h6>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 mt-5">
				<p>Filip has a unique combo of skills: design & development. He proactively suggested some great ideas on how to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work with. All All in all great designer-developer with an outstanding sense for client service.</p>
				<hr class="light">
				<span class="text-muted">Robert Molnar, Customr.app</span>
			</div>
			<div class="col-md-6 mt-5">
				<p>I needed someone who can design AND develop a landing page and upload it to my website. Filip did a great work in doing the above. It is pleasure working with Filip, he understands what needs to be done and does it in very quick and efficient way. 
						For my next projects for landing pages I would would with him again. 
						Thank you Filip!</p>
				<hr class="light">
				<span class="text-muted">Maria Smith, Justo.ca</span>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 mt-5">
				<p>Simply awesome experience working with Filip. It's especially difficult to manage a project that requires programming since you have to anticipate the time it takes to debug and make modifications to the project but it was easy working with someone who has the patience and understanding to handle projects like this. Looking forward to working with him again in the future. Thank you!</p>
				<hr class="light">
				<span class="text-muted">Jason Coleman</span>
			</div>
			<div class="col-md-6 mt-5">
				<p>Filip was AMAZING! The only reason we are ending the contract is because he got too busy with bigger projects. I am sad to loose him as he is awesome. I would definitely hire again and again. If you have the opportunity to work with Filip, you should absolutely do it, he will make you proud!</p>
				<hr class="light">
				<span class="text-muted">Liam Shy</span>
			</div>
		</div>
	</div>
</section>

<section class="gray-background lala pl-0 pt-3 pb-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 pl-0"><img class="img-fluid rounded mb-4" src="<?php bloginfo('template_url') ?>/assets/img/lala.jpg" alt="Photo of Filip"></div>
			<div class="col-md-4 my-auto">
				<h4>Some stats:</h4>
				<hr>
				<ul class="ml-3">
					<li>45 Clients</li>
					<li>4 years in bussiness</li>
					<li>Never worked in a real office</li>
					<li>This website was visited by people in 78 countries</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="services">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4 mx-auto text-center">
				<h3>I can help you with</h3>
				<hr class="light">
				<h6 class="text-muted">My skills</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center mb-5">
				<i class="mb-4 fa fa-html5"></i>
				<h4>HTML</h4>
				<hr class="light">
				<p class="ml-1 mr-1">Clean, validated, semantic HTML. I try to write as little markup as possible while trying to convey the meaning behind it.</p>
			</div>
			<div class="col-md-4 text-center mb-5">
				<i class="mb-4 fa fa-css3"></i>
				<h5>CSS</h5>
				<hr class="light">
				<p class="ml-1 mr-1">How would the web look without colors, shapes and layout? That's why I love CSS! Lately I've been using SCSS mostly because it really is CSS with superpowers.</p>
			</div>
			<div class="col-md-4 text-center mb-5">
				<i class="mb-4 fa fa-cogs"></i>
				<h5>JavaScript</h5>
				<hr class="light">
				<p class="ml-1 mr-1">JavaScript, the language of the web, it's responsible for everything going on in your web browser. I love using JS to create drawings!</p>
			</div>
			<div class="col-md-4 text-center mb-5">
				<i class="mb-4 fa fa-mobile"></i>
				<h5>Responsive Design</h5>
				<hr class="light">
				<p class="ml-1 mr-1">We surf the web using devices with different screen sizes. Responsive design is a set of techniques that allow websites to change their layout based on your device's screen.</p>
			</div>
			<div class="col-md-4 text-center mb-5">
				<i class="mb-4 fa fa-wordpress"></i>
				<h5>Wordpress</h5>
				<hr class="light">
				<p class="ml-1 mr-1">Most popular CMS on the planet, Wordpress allows non developers to edit the website content very easily. When I create themes I make sure UX for the admin is amazing as well.</p>
			</div>

			<div class="col-md-4 text-center mb-5">
				<i class="mb-4 fa fa-comments"></i>
				<h5>Consulting</h5>
				<hr class="light">
				<p class="ml-1 mr-1">I offer consulting services to creative bussinesses and individuals that are in need of a stronger online presence.</p>
			</div>
		</div>
	</div>
</section>

<section class="gray-background lala pl-0 pt-3 pb-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 col-lg-4 offset-lg-1 my-auto">
				<h4>Some facts:</h4>
				<hr>
				<ul class="ml-3">
					<li>Talks a lot</li>
					<li>Loves summer, hates winter.</li>
					<li>Drinks fruit smoothies each morning.</li>
					<li>Uses polished photos for marketing purposes.</li>
					<li>Sometimes thinks reality is a computer generated simulation.</li>
					<li>Spent more than 200 days playing a video games during high school.</li>
				</ul>
			</div>
			<div class="col-md-7 col-lg-7 text-right p-0">
				<img class="img-fluid" src="<?php bloginfo('template_url') ?>/assets/img/hunter.jpg" alt="Photo of Filip">
			</div>
		</div>
	</div>
</section>

<section class="trusted-by">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2><?php _e( 'Trusted by', 'filip-rastovic' ); ?></h2>
			</div>
			<div class="col-4 col-md-2 mb-3"><img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/clients/0.png" alt=""></div>
			<div class="col-4 col-md-2 mb-3"><img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/clients/Crewdox-1.png" alt=""></div>
			<div class="col-4 col-md-2 mb-3"><img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/clients/download.png" alt=""></div>
			<div class="col-4 col-md-2 mb-3"><img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/clients/GearLogoVertical.png" alt="">
			</div>
			<div class="col-4 col-md-2 mb-3"><img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/clients/header-728x180.png" alt=""></div>
			<div class="col-4 col-md-2 mb-3"><img class="img-fluid"
					src="<?php echo get_template_directory_uri() ?>/assets/img/clients/think3.jpg" alt=""></div>
		</div>
	</div>
</section>

<?php

get_footer();