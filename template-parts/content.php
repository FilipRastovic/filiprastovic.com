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
  <?php if ( is_singular() ) : ?>
	<header class="post-header">
  <?php else : ?>
  <header class="post-header shadow"> 
  <?php endif; ?>
  <?php filip_rastovic_post_thumbnail(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="post-title mb-3">', '</h1>' );
		else :
			the_title( '<h5 class="post-title pr-3 pl-3 pb-3 mb-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		endif; ?>
	</header><!-- .entry-header -->



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
    endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'filip-rastovic' ),
			'after'  => '</div>',
		) );
    ?>
   
  </div><!-- .entry-content -->
  <?php
  if ( is_singular() ) : 
    if ( 'post' === get_post_type() ) :
        ?>
        <div class="post-meta mb-3">
        <hr>
          <?php
          filip_rastovic_posted_on();
          filip_rastovic_posted_by();
          ?>
        </div><!-- .entry-meta -->
    <?php endif; endif;?>

	<!-- <footer class="post-footer">
		<?php filip_rastovic_entry_footer(); ?>
	</footer>.post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
