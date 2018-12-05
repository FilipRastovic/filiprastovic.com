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
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="section-heading">Wordpress Design &amp; Development Solutions</h1>
        <hr class="my-4">
        <p class="mb-5">I'm Filip, a <strong>freelance developer</strong> with an affection for web, user experience and product design. I build websites for companies and individuals. My clients are webpreneurs, agencies and small to mid sizes businesses from all around the globe. Read what my clients have to say about me on my <a href="#">Upwork</a> freelance profile. My hobby is writting, coding and making video games. See my portfolio or check out my resume.</p>
        <div class="text-center">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Portfolio Grid -->
<section class="" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="">Portfolio &amp; Testimonials</h2>
        <p class="text-muted">Projects I have worked on, click for more info</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 portfolio-item">
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
      <div class="col-md-4 portfolio-item">
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
      <div class="col-md-4 portfolio-item">
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
      <div class="col-md-4 portfolio-item">
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
      <div class="col-md-4 portfolio-item">
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
      <div class="col-md-4 portfolio-item">
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

<!-- Clients -->
<section class="clients">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-1">
          <h2 class="text-center">Trusted By</h2> 
      </div>
      <div class="col-6 col-sm-2">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/0.png" alt="">
        </a>
      </div>
      <div class="col-6 col-sm-2">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/think3.jpg" alt="">
        </a>
      </div>
      <div class="col-6 col-sm-2">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/crewdox-1.png" alt="">
        </a>
      </div>
      <div class="col-6 col-sm-2">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/GearLogoVertical.png" alt="">
        </a>
      </div>
      <div class="col-6 col-sm-2">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/header-728x180.png" alt="">
        </a>
      </div>
      <div class="col-6 col-sm-2">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/download.png" alt="">
        </a>
      </div>
    </div>
  </div>
</section> 

<!-- Services -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="">I can help you with</h2>
        <p class=" text-muted">Learn more about my services here</p>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <h4 class="service-heading">Wireframes</h4>
        <hr>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        <div class="text-center mb-4">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Mockups</h4>
        <hr>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        <div class="text-center mb-4">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Responsive Design</h4>
        <hr>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        <div class="text-center mb-4">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Wordpress Integration</h4>
        <hr>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        <div class="text-center mb-4">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Web Consulting</h4>
        <hr>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        <div class="text-center mb-4">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="service-heading">Coding Lessons</h4>
        <hr>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        <div class="text-center mb-4">
          <a href="#" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="read-case-study">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="">Read the case study</h2>
        <p class=" text-muted">Learn more about one of my latest projects</p>
      </div>
    </div>
  </div>
</section>

<section class="latest-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="">Latest posts</h2>
        <p class=" text-muted">Read my blog</p>
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
      <?php
        $args = array( 'numberposts' => '5' );
        $recent_posts = wp_get_recent_posts( $args );

        foreach( $recent_posts as $recent ){
        echo 
        '<li> ' . get_the_post_thumbnail($recent["ID"],'thumbnail') . '
          <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
        </li> ';
        }
        ?>
        </ul>
      
      </div>
    </div>
  </div>
</section>

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Let's Get In Touch!</h2>
        <hr class="my-4">
        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center">
        <i class="fa fa-phone fa-3x mb-3 sr-contact-1"></i>
        <p>123-456-6789</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fa fa-envelope fa-3x mb-3 sr-contact-2"></i>
        <p>
          <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
        </p>
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

<?php

get_footer();