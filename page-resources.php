<?php
/**
 * Template Name: Resources Template
 *
 *
 * @package clarity-enhanced
 */

get_header();
?>

<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="section-heading">Resources</h1>
        <hr class="my-4">
        <p class="mb-5">This page is dedicated to the content I use to learn and develop efficiently.</p>
      </div>
    </div>
  </div>
</header>

<section class="call-to-action-resources">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-center">
          <div class="card">
            <a class="mb-2" href="#"><img class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/img/landing-page-1.jpg" alt="Card image cap"></a>
            <div class="card-header text-center">
              <h6>Freelancer Landing Page</h6>
            </div>
            <a href="/theme">
              <div class="card-footer">
                Preview &amp; Download
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php

get_footer();