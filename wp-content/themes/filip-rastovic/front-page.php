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
			<div class="col-md-7">
				<h1 class="section-heading text-thin"><?php _e( 'Welcome!' , 'filip-rastovic' ); ?></h1>
				<hr class="">
				<p>I'm Filip, a <strong>freelance front-end developer</strong>. I implement designs into semantic, validated markup and modular/scaleable/modern CSS/SCSS. See my <a href="/portfolio">portfolio</a>, 
				learn about my <a href="/process">process</a>, check out some of my <a href="https://github.com/FilipRastovic" target="_blank">code samples</a>, or get my <a
						href="<?php bloginfo('template_url'); ?>/assets/download/Filip-Rastovic-FrontEnd-Developer-Resume.pdf"
						target="_blank">resume</a>. As a hobby I code sci-fi <a target="_blank" href="http://codepen.io/FilipRastovic">interfaces</a> from movies &amp; cartoons.</p>
			</div>
			<div class="col-md-5 mt-5">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Y7ogCVJYuvE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="side-project">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="text-thin">Connect with me</h4>
				<ul class="">
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
		</div>
	</div>
</section>

<?php

get_footer();