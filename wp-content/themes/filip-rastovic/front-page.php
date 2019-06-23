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
			<div class="col-md-12">
				<h1>Front-End Development</h1>
				<hr>
				<p class="lead mb-4">I'm Filip, a <strong>freelance front-end developer</strong> based in Serbia. I work with
					companies all around the world helping them
					build better web experiences with a focus on responsive design, performance and accessibility. Check
					out my
					<a href="/portfolio">portfolio</a>, learn about my <a href="/process">process</a>, or get my
					<a href="<?php bloginfo('template_url'); ?>/assets/download/Filip-Rastovic-FrontEnd-Developer-Resume.pdf"
						target="_blank">resume</a>.
				</p>
			</div>
		</div>
	</div>
</header>

<section>
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
			</div>

			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9 img-thumbnail">
					<iframe class="" width="560" height="315" src="https://www.youtube.com/embed/Y7ogCVJYuvE?controls=0"
						frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();