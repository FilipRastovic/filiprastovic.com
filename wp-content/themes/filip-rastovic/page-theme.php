<?php
/**
 * Template Name: Theme Template
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


<header class="masthead masthead--nfs">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <a class="mb-2" href="https://filiprastovic.github.io/stargazerworkshop-freelancer-landing-page/" target="_BLANK"><img
              class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/img/landing-page-1.jpg" alt="Card image cap"></a>
          <div class="card-header">
            <h6 class="ml-4">Freelancer Landing Page</h6>
          </div>
          <div class="card-body">
            This responsive freelancer landing page template is built with
            <a target="_BLANK" href="https://getbootstrap.com/docs/3.3/">Bootstrap 3</a>
            and <a target="_BLANK" href="https://sass-lang.com/">Sass</a>. It includes a
            <a href="https://gulpjs.com/" target="_BLANK">gulp</a> task runner configuration
            that takes care of compiling .scss and .js partials into a single css/js file,
            easy management of the dependencies and minification. After downloading just run
            'npm install' in the gulp folder and then 'gulp watch' to start watching and compiling
            the scss/js files. More info about the project on its github page.
          </div>
          <div class="card-footer">
            Happy Hacking
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-center">
        <a class="btn-outline theme-action-btn" href="https://filiprastovic.github.io/stargazerworkshop-freelancer-landing-page/"
          target="_BLANK">Live Preview</a>
        <a class="btn-outline theme-action-btn" href="https://github.com/FilipRastovic/stargazerworkshop-freelancer-landing-page"
          target="_blank">View On Github</a>
        <a class="btn-outline theme-action-btn" href="assets/themes/freelancer-landing-page.zip" download>Download
          Source</a>
      </div>
    </div>
  </div>
</header>

<?php

get_footer();