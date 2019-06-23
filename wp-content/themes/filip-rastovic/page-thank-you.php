<?php
/**
 * Template Name: Thank you template
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


<header class="header" id="thank-you">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="section-heading">Thank you!</h1>
        <hr class="my-4">
        <p class="mb-5">I'll get to you as soon as possible!</p>
        <p>You can read my blog in the meantime</p>
        <a href="/blog" class="btn btn-primary btn-square">Read Blog</a href="/blog">
      </div>
    </div>
  </div>
</header>

<?php

get_footer();