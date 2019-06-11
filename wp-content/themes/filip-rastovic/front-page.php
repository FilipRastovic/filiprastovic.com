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
      <div class="col-md-7 mx-auto">
        <h1 class="section-heading"><small><?php _e( 'Crafting' , 'filip-rastovic' ); ?></small><br><?php _e( 'DELIGHTFUL EXPERIENCES', 'filip-rastovic' ); ?></h1>
        <hr class="">
        <p>I'm Filip, a <strong>freelance front-end developer / designer</strong> with an affection for web, user experience and product design.  I work with companies around the globe helping them build beautiful and functional software with a focus on, UX, responsive design, performance & accessibility. I build, manage & implement design systems, animations & interactions. My hobbies are <a href="/blog">writing</a> , <a href="https://github.com/FilipRastovic" target="_blank">coding</a> and making <a href="http://stargazerstudio.net" target="_blank">video games</a>. See my portfolio or check out my <a href="<?php bloginfo('template_url'); ?>/assets/download/Filip-Rastovic-Resume.pdf" target="_blank">resume</a>.</p>
      </div>
    </div>
  </div>
</header>

<section class="side-project">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mx-auto text-center">
        <ul class="">
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