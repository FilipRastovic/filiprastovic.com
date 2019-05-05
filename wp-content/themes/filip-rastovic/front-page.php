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
      <div class="col-md-7 card mb-5--mobile">
        <h1 class="section-heading"><small><?php _e( 'Crafting' , 'filip-rastovic' ); ?></small><br><?php _e( 'DELIGHTFUL EXPERIENCES', 'filip-rastovic' ); ?></h1>
        <hr class="">
        <p class="large">I'm Filip, a <strong>freelance front-end developer</strong> with an affection for web, user experience and product design. I work <strong>remotely</strong> with companies around the globe helping them build beautiful and functional software with a focus on UX, responsive design, performance &amp; accessibility. I implement design systems, animations &amp; interactions. My hobbies are <a href="/blog" target="_blank">writing</a> , <a href="https://github.com/FilipRastovic" target="_blank">coding</a> and making <a href="http://stargazerstudio.net" target="_blank">video games</a>. See my portfolio or check out my <a href="<?php bloginfo('template_url'); ?>/assets/download/Filip_Rastovic_Resume.pdf" target="_blank">resume</a>.</p>
      </div>
      <div class="col-md-4 offset-md-1 card mb-5--mobile text-center">
        <?php get_template_part( 'template-parts/newsletter-social' ); ?>
      </div>
    </div>
  </div>
</header>

<section class="read-my-blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 card">
        <div class="row">
          <div class="col-lg-9">
            <h2>Read my blog</h2>
            <ul class="latest-posts-list">
                <?php
                  $recent_posts = wp_get_recent_posts( array(
                    'numberposts' => '3',
                    'post_status' =>'publish',
                  ) );

                  foreach( $recent_posts as $recent ) {

                  echo 

                  '<li> ' . get_the_post_thumbnail( $recent["ID"],'thumbnail') . '
                    <a href="' . get_permalink( $recent["ID"] ) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
                  </li> ';

                  }
                ?>
              </ul>
          </div>
          <div class="col-lg-3 justify-content-center align-self-center text-center">
            <a href="/blog" class="btn btn-secondary btn-square">Read Blog</a href="/blog">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="companies">
  <div class="container">
    <div class="row row-eq-height">
      <div class="col-md-6 mb-3">
        <div class="card card--projects text-center">
          <h5>Side project - Video Game</h5>
          <h2>Trial &amp; Terror</h2>
          <hr>
          <div class="embed-responsive embed-responsive-16by9 mb-4">
              <iframe src="https://www.youtube.com/embed/IBT5_B90JJg?controls=0" class="embed-responsive-item" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="text-center">
            <a href="https://newgrounds.com/portal/view/713592" target="_BLANK" class="btn btn-secondary btn-small">Play</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="card text-center">
          <h5>Side Project - Website Design Goodies <strong>Coming Soon</strong></h5>
          <h2>Clarity Enhanced</h2>
          <hr>
          <figure>
              <img class="img-fluid" src="<?php bloginfo('template_url') ?>/assets/img/clarity-enhanced.png" alt="Photo">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();