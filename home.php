<?php
/**
 * Home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package filiprastovic
 */

get_header();
?>

<header class="header">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Read my blog!</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
				<p class="font-weight-light text-uppercase mb-5">I love writing about freelancing, design and web development. 
				</p>
				<a href="#content" class="btn btn-primary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>Read blog</a>
			</div>

		</div>
	</div>
</header>

<section class="blog-section" id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mx-auto">

        <?php
      if ( have_posts() ) :

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
    </div>
  </div>
</section>

<?php

get_footer();