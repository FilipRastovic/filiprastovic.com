<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package filiprastovic
 */

?>

<article class="mb-5" id="post-<?php the_ID(); ?>">
	<header class="post-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="post-title mb-3">', '</h1>' );
		else :
			the_title( '<h1 class="post-title mb-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif; ?>
	</header><!-- .entry-header -->

	<?php filip_rastovic_post_thumbnail(); ?>

	<div class="post-content mb-3">
		<?php
    if ( is_singular() ) : 
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'filip-rastovic' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );
    else :
      the_excerpt( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'filip-rastovic' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );
    endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'filip-rastovic' ),
			'after'  => '</div>',
		) );
    ?>
    <hr>
  </div><!-- .entry-content -->
  <?php
  if ( 'post' === get_post_type() ) :
			?>
			<div class="post-meta mb-3">
				<?php
				filip_rastovic_posted_on();
				filip_rastovic_posted_by();
				?>
			</div><!-- .entry-meta -->
    <?php endif; ?>

	<!-- <footer class="post-footer">
		<?php filip_rastovic_entry_footer(); ?>
	</footer>.post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
