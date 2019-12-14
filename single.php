<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package filiprastovic
 */

get_header();
?>

<section class="single-post u-mt-100 u-mb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

			</div>
    </div>
</section>

<?php

get_footer();