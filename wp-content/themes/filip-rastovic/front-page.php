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

<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 my-auto">
        <div class="header-content mx-auto">
          <h1 class="mb-4">Wordpress Design &amp; Development Solutions</h1>
          <hr>
          <p class="mb-4">I'm Filip, a freelance developer with an affection for web, user experience and product design. I build websites for companies and individuals. My clients are webpreneurs, agencies and small to mid sizes businesses from all around the globe. Read what my clients have to say about me on my <a href="#">Upwork</a> freelance profile. My hobby is writting, coding and making video games. See my portfolio or check out my resume.</p>
          <hr>
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="masthead masthead--reset">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 my-auto">
        <div class="image-container">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/venn.svg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-7 my-auto">
        <div class="header-content mx-auto">
          <h2 class="mb-4">Fellow Freelancer? Read my blog!</h2>
          <hr>
          <p class="mb-4">I write about my experiences working as a freelancer full time. Having started freelancing straight out of collage I've 
            never have to work in a company. That gave me the opportunity to lead a remote lifestyle. If you wish to get notified when I write a new 
            post please sign up to my newsletter.
          </p>
          <hr>
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="section-heading">Portfolio</h2>
        <p class="section-subheading text-muted">Projects I have worked on</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/bonsal-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Threads</h4>
          <p class="text-muted">Illustration</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/customr-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Explore</h4>
          <p class="text-muted">Graphic Design</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/justo-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Finish</h4>
          <p class="text-muted">Identity</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/natours-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Lines</h4>
          <p class="text-muted">Branding</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/solutionbay-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Southwest</h4>
          <p class="text-muted">Website Design</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/wadeLP-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Window</h4>
          <p class="text-muted">Photography</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="section-heading">Services</h2>
        <h3 class="section-subheading text-muted">Companies hire me when.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <h4 class="service-heading">Wireframes</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Mockups</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Responsive Design</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Wordpress Integration</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Web Consulting</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Coding Lessons</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Clients -->
<section class="clients py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-1.png" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-2.png" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-3.png" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-4.png" alt="">
        </a>
      </div>
    </div>
  </div>
</section>

  <!-- Portfolio Modals -->

<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/bonsal-small.png" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Threads</li>
                <li>Category: Illustration</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
                Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/customr-small.png" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Explore</li>
                <li>Category: Graphic Design</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
                Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/justo-small.png" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Finish</li>
                <li>Category: Identity</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
                Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/natours-small.png" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Lines</li>
                <li>Category: Branding</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
                Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/solutionbay-small.png" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Southwest</li>
                <li>Category: Website Design</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
                Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/wadeLP-small.png" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Window</li>
                <li>Category: Photography</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
                Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>