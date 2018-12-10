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
      <div class="col-md-8">
        <h1 class="section-heading">Wordpress Design &amp; Development Solutions</h1>
        <hr class="my-4">
        <p class="mb-5">I'm Filip, a <strong>freelance developer</strong> with an affection for web, user experience
          and product design. I work with companies around the globe helping them build beautiful and functional
          websites with a focus on responsive design, performance &amp; accessibility. My hobby is writting, coding and
          making video games. See my portfolio or check out my resume.</p>
        <a id="cta-portfolio" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
      </div>
      <div class="col-md-4">
        <img class="img-fluid mt-5" src="<?php bloginfo('template_url'); ?>/assets/img/venn.png" alt="">
      </div>
    </div>
  </div>
</header>

<!-- Portfolio Grid -->
<section class="grey-bordered" id="portfolio">
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
          <h4>Bonsall Pool &amp; Spa</h4>
          <p class="text-muted">Development &amp; Maintenance</p>
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
          <h4>Customr.app</h4>
          <p class="text-muted">Design &amp; Development</p>
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
          <h4>Justo.ca</h4>
          <p class="text-muted">Design &amp; Development</p>
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
          <h4>Natours</h4>
          <p class="text-muted">Development</p>
        </div>
      </div>
      <div class="col-md-4 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/solutionbay-small.png"
            alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Solutionbay</h4>
          <p class="text-muted">UX Design</p>
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
          <h4>Wade</h4>
          <p class="text-muted">Design &amp; Development</p>
        </div>
      </div>
      <div class="col-md-4 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/partek-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Partekk</h4>
          <p class="text-muted">Development</p>
        </div>
      </div>
      <div class="col-md-4 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/sales4u-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Sales4u</h4>
          <p class="text-muted">Development</p>
        </div>
      </div>
      <div class="col-md-4 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/synico-small.png" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Synico</h4>
          <p class="text-muted">Development &amp; Maintenance</p>
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
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/0.png" alt="">
      </div>
      <div class="col-6 col-sm-2">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/think3.jpg"
          alt="">
      </div>
      <div class="col-6 col-sm-2">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/crewdox-1.png"
          alt="">
      </div>
      <div class="col-6 col-sm-2">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/GearLogoVertical.png"
          alt="">
      </div>
      <div class="col-6 col-sm-2">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/header-728x180.png"
          alt="">
      </div>
      <div class="col-6 col-sm-2">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/clients/download.png"
          alt="">
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="grey-bordered">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2>Client reviews</h2>
        <p class="text-muted">They've said about me</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5">
        <p>Filip has a unique combo of skills: design & development. He proactively suggested some great ideas on how
          to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based
          on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work
          with. All All in all great designer-developer with an outstanding sense for client service.</p>
        <p><strong>Robert Molnar - Customr.app</strong></p>
        <hr>
      </div>
      <div class="col-md-6 mb-5">
        <p>Simply awesome experience working with Filip. It's especially difficult to manage a project that requires
          programming since you have to anticipate the time it takes to debug and make modifications to the project but
          it was easy working with someone who has the patience and understanding to handle projects like this. Looking
          forward to working with him again in the future. Thank you!</p>
        <p><strong>Jason Coleman</strong></p>
        <hr>
      </div>
      <div class="col-md-6 mb-5">
        <p>"I needed someone who can design AND develop a landing page and upload it to my website. Filip did a great
          work in doing the above. It is pleasure working with Filip, he understands what needs to be done and does it
          in very quick and efficient way. For my next projects for landing pages I would would with him again. Thank
          you Filip!</p>
        <p><strong>Maria - Justo.ca</strong></p>
        <hr>
      </div>
      <div class="col-md-6 mb-5">
        <p>Filip was AMAZING! The only reason we are ending the contract is because he got too busy with bigger
          projects. I am sad to loose him as he is awesome. I would definitely hire again and again. If you have the
          opportunity to work with Filip, you should absolutely do it, he will make you proud!</p>
        <p><strong>Liam Shy</strong></p>
        <hr>
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
        <p class="text-muted">Learn more about my services here</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5">
        <h4 class="service-heading">Wireframes</h4>
        <hr>
        <p class="">Wireframes are skeletons of a website. They're an essential component of a well thought out
          information architecture of your website. Website creation process ussually starts here.</p>
      </div>
      <div class="col-md-6 mb-5">
        <h4 class="service-heading">Design Mockups</h4>
        <hr>
        <p class="">I like my style clean and elegant, but when I'm designing for my cleints I try to create something
          that best describes who they are while staying consistent with their brand design guidelines.</p>
      </div>
      <div class="col-md-6 mb-5">
        <h4 class="service-heading">Responsive Design</h4>
        <hr>
        <p class="">Mobile first is the new aproach when designing and developing a website. People seach the web using
          small, touch screen devices now more than ever. That's why making sure the website works across all screen
          sizes is crucial.</p>
      </div>
      <div class="col-md-6 mb-5">
        <h4 class="service-heading">Wordpress Integration</h4>
        <hr>
        <p class="">Wordpress allows non developers to easily change the content and look and feel of their website. It
          powers more than 25% of the websites on the planet and has a huge community behind it.</p>
      </div>
      <div class="col-md-6 mb-5">
        <h4 class="service-heading">Web Consulting</h4>
        <hr>
        <p class="">I offer consultation to individuals and companies about best practices when it comes to web design
          and development. Sources I learn from are big tech magazines, blogs, courses and lectures from best
          universities. </p>
      </div>
      <div class="col-md-6 mb-5">
        <h4 class="service-heading">Development Lessons</h4>
        <hr>
        <p class="">You can contact me for individual web development lessons. I love sharing my love of technology and
          seeing progress in my students. Skype / Google Hangout screenshare is how I teach</p>
      </div>
      <div class="col-md-12 text-center">
        <a href="/request-consultation" class="btn btn-full btn-xl js-scroll-trigger">Request a quote</a>
      </div>
    </div>
  </div>
</section>

<section class="tech">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="text-center mb-2">Tools I Use</h2>
        <p class="text-muted mb-5">I like utilizing the cutting edge technologies</p>
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/ai.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/css3.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/html5.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/jquery.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/js.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/mysql.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/node.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/php.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/ps.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/upwork.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/wordpress.png"
          alt="">
      </div>
      <div class="col-4 col-sm-1">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/tech-slider/xd.png"
          alt="">
      </div>
    </div>
  </div>
</section>

<section class="read-case-study grey-bordered">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="">Read the case study</h2>
        <p class=" text-muted">Learn more about one of my latest projects</p>
      </div>
      <div class="col-md-6">
        <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/customr-small.png"
          alt="">
      </div>
      <div class="col-md-6">
        <h4>Customr.app</h4>
        <p>Customr.app is a Budapest based AI analytics startup that's developing an app that helps decision makers
          make better decisions. I was responsible for wireframing the website, coming up with a modern design and
          implementing it into a fully functional and customizable Wordpress theme.</p>
        <a href="/case-studies" class="btn btn-full btn-xl js-scroll-trigger">View More</a>
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

<section class="contact grey-bordered">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Let's Get In Touch!</h2>
        <hr class="my-4">
        <p class="mb-5">If you would like to get in touch with me click the button bellow and fill out my contact form,
          I'll get in touch with you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <a href="/request-consultation" class="btn btn-full btn-xl js-scroll-trigger">Learn More!</a>
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
              <h2 class="text-uppercase">Bonsall Pool &amp; Spa</h2>
              <p class="item-intro text-muted">Development &amp; Maintenance.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/bonsal-small.png"
                alt="">
              <p>While working for a Pittsburgh based digital advertising startup Thinkcube.Solutions I maintained the
                Bonsall Pool &amp; Spa website infrastructure and was responsible for adding new features to improve
                their marketing campaign</p>
              <p>Client review: <i>Filip was a great help to us in scaling the agency. For the duration of the contract
                  he performed very well. We would gladly re-hire him for future projects.</i> </p>
              <ul class="list-inline">
                <li>Year: 2018</li>
                <li>Client: Thinkcube.Solutions</li>
                <li>Category: Development</li>
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
              <h2 class="text-uppercase">Customr.app</h2>
              <p class="item-intro text-muted">Design &amp; Development.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/customr-small.png"
                alt="">
              <p>Customr.app is a Budapest based AI analytics startup that's developing an app that helps decision
                makers make better decisions. I was responsible for wireframing the website, coming up with a modern
                design and implementing it into a fully functional and customizable Wordpress theme.</p>
              <ul class="list-inline">
                <li>Date: September 2018</li>
                <li>Client: Customr.app</li>
                <li>Category: Design &amp; Development</li>
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
              <h2 class="text-uppercase">Justo.ca</h2>
              <p class="item-intro text-muted">Design &amp; Development.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/justo-small.png"
                alt="">
              <p>Justo.ca is a Toronto based startup that is reshaping the real estate industry. I was responsible for
                design and development of two landing pages they required for their marketing campaign as well as
                implementing a custom cost savings calculator to help their visitors easily understand how much they
                would save by choosing Justo.</p>
              <ul class="list-inline">
                <li>Date: November 2018</li>
                <li>Client: Justo.ca</li>
                <li>Category: Design &amp; Development</li>
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
              <h2 class="text-uppercase">Natours</h2>
              <p class="item-intro text-muted">Development.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/natours-small.png"
                alt="">
              <p>I was responsible to the implementation of Natours landing page from a given designs. My focus was on
                responsiv design, performance and accessibility following the latest development standards.</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Natours</li>
                <li>Category: Development</li>
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
              <h2 class="text-uppercase">Solutionbay</h2>
              <p class="item-intro text-muted">UX Design.</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/solutionbay-small.png"
                alt="">
              <p>Solutionbay is a Wiki-How / Quora alike website that offers solution to problems users search for. I
                was responsible in coming up with the most intuitive user flows that would allow their users to easily
                navigate the website.</p>
              <ul class="list-inline">
                <li>Date: 2016</li>
                <li>Client: Solutionbay</li>
                <li>Category: UX Design</li>
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
              <h2 class="text-uppercase">Wade</h2>
              <p class="item-intro text-muted">Design &amp; Development</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/wadeLP-small.png"
                alt="">
              <p>While working for a Pittsburgh based digital advertising startup Thinkcube.Solutions I designed and
                developed a landing page for one of their clients, Wade. The landing page is optimized for conversions
                and has all the persuasive elements backed up by the science of Influence.</p>
              <ul class="list-inline">
                <li>Date: January 2018</li>
                <li>Client: Thinkcube.Solutions</li>
                <li>Category: Design &amp; Development</li>
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

<!-- Modal 7 -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Partekk</h2>
              <p class="item-intro text-muted">Development</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/partek-small.png"
                alt="">
              <p>Partekk Learning Solutions is a Swiss e-learning company that needed new features implemented to their
                Wordpress website. I integrated form validations into all of their contact forms, wrote few url
                processing functions in PHP to make Zapier work with their website and optimized the code.</p>
              <ul class="list-inline">
                <li>Date: September 2017</li>
                <li>Client: Partekk</li>
                <li>Category: Development</li>
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

<!-- Modal 8 -->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Sales4u</h2>
              <p class="item-intro text-muted">Development</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/sales4u-small.png"
                alt="">
              <p>Sales4u is a remote growth hacking agency, my job there was to implement new features into the
                websites of their clients and code landing pages from the given designs.</p>
              <ul class="list-inline">
                <li>Date: 2017</li>
                <li>Client: Sales4u</li>
                <li>Category: Development</li>
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

<!-- Modal 9 -->
<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Synico</h2>
              <p class="item-intro text-muted">Development &amp; Maintenance</p>
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/synico-small.png"
                alt="">
              <p>I was helping Synico team develop and maintain multiple Wordpress websites they have built for their
                clients.</p>
              <ul class="list-inline">
                <li>Date: 2017</li>
                <li>Client: Synico</li>
                <li>Category: Development &amp; Maintenance</li>
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