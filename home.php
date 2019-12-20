<?php
/**
 * Home
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
				<h1 class="text-uppercase font-weight-bold">Read our blog!</h1>
				<hr class="divider my-4">
			</div>

			<div class="col-lg-10 align-self-baseline">
				<!-- <p class="font-weight-light mb-5">I love writing about, business of design and design of business. 
				</p> -->
				<a href="#content" class="btn btn-secondary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>Read blog</a>
			</div>

		</div>
	</div>
</header>

<section class="blog-section pt-5 pb-5" id="content">
  <div class="container">
    <div class="row">
      

      <?php 
   // the query
      $the_query = new WP_Query( array(
          'posts_per_page' => 3
      )); 
        
      if ( $the_query->have_posts() ) :

        /* Start the Loop */
        while ( $the_query->have_posts() ) : ?>

          <div class="col-md-4">

            <?php
              $the_query->the_post();
              /*
              * Include the Post-Type-specific template for the content.
              * If you want to override this in a child theme, then include a file
              * called content-___.php (where ___ is the Post Type name) and that will be used instead.
              */
              get_template_part( 'template-parts/content', get_post_type() );
            ?>
          </div>
        <?php endwhile;

        the_posts_navigation();

        else : get_template_part( 'template-parts/content', 'none' );

        endif;
      ?>
    </div>
  </div>
</section>

<?php

get_footer();