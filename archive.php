<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clarity-enhanced
 */

get_header();
?>

<header class="header">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">
			<canvas id="displayCanvas"></canvas>

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Archive</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
				<p class="font-weight-light mb-5">Welcome to our archive
				</p>
				<a href="#see-archive" class="btn btn-secondary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>Learn More</a>
			</div>

		</div>
	</div>
</header>

	<section id="see-archive" class="content-area">
		<main id="main" class="container site-main">

			<div class="row">
				<div class="col-md-8">
				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</div>
				<div class="col-md-4">
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
