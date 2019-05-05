<?php
/**
 * Template Name: About
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
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="section-heading">About Me</h1>
        <hr class="my-4">
        <p class="mb-5">I like technology!</p>
      </div>
    </div>
  </div>
</header>

<section class="about-me-section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 card">
        <h2>Welcome to my website</h2>
        <p>I'm Filip, a freelance developer/designer based in Novi Sad, Serbia.
        As a kid I would
        spend my time making toys, reading
        comics, epic fantasy novels and playing
        video games. During high school, I played
        guitar in the school orchestra, worked on
        technical support and special effects for the
        school theatre and designed bunch of
        animated powerpoint presentations. During
        college I started developing small video
        games as a hobby and began my career as
        a freelancer utilizing everything I’ve learned
        through education and on my own. I’m
        passionate about technology and
        developing creative solutions to whichever
        problem I come across. I’m an avid reader
        and music lover.
        </p>
      </div>
      <div class="col-md-5 offset-md-1">
        <figure>
          <img class="img-fluid radi-4" src="<?php bloginfo('template_url') ?>/assets/img/long-hair.jpg" alt="Filip Rastovic">
        </figure>
      </div>
    </div>
  </div>
</section>



<?php

get_footer();