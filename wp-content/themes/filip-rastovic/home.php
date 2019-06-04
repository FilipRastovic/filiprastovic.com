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
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="section-heading">Blog</h1>
        <hr class="my-4">
        <p class="mb-5">I write about freelance web development &amp; design.</p>
      </div>
    </div>
  </div>
</header>

<section class="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">

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