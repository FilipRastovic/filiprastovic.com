<?php
/**
 * Template Name: Process Template
 *
 *
 * @package filiprastovic
 */

get_header();
?>

<header class="header mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="section-heading">My Process</h1>
				<hr class="my-4">
				<p><?php _e( 'Read about how I create websites!', 'filiprastovic' ); ?></p>
      </div>
      <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/clarity-enhanced.png" alt="" class="img-fluid">
      </div>
		</div>
	</div>
</header>

<!-- Tabs -->
<section class="grey">
	<div class="container">
		<div class="row">
      <div class="col-md-4 text-center mb-5">
        <img class="service-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/web-design.png" alt="Wireframes Image">
        <h3>Wireframes</h3>
        <p>Wireframes are skeletons of every website. We use them to concetualize the layout, how your content will be placed and where. They're essential part for creating a proper information architecture.</p>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img class="service-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/web-design-mockup.png" alt="Mockups Image">
        <h3>Mockups</h3>
        <p>We take the wireframes and apply styling to them, that means adding colors, images, copywriting &amp; all other neccecary media we wish our website to have. I do this in Sketch, Photoshop or Adobe XD.</p>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img class="service-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/responsive.png" alt="Responsive Image">
        <h3>Responsive Design</h3>
        <p>People are surfing the web today more than ever, on their desktops, laptops, tablets &amp; mobile phones. Developing for all these devices is called responsive design.</p>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img class="service-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/wordpress-logo.png" alt="Responsive Image">
        <h3>Wordpress Integration</h3>
        <p>Wordpress is an extremely popular content management system. It allows non developers to edit the website content very easily. The process of turning a static website into an easily editable website is called WP integraiton.</p>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img class="service-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/consulting.png" alt="Consulting Image">
        <h3>Web Consulting</h3>
        <p>I offer web consulting about best practices when it comes to front-end development and design.</p>
      </div>
      <div class="col-md-4 text-center mb-5">
        <img class="service-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/consult.png" alt="Lessons Image">
        <h3>Web Lessons</h3>
        <p>I started giving programming lessons during collage, once my students started programming without my help it made me feel great. That's when I realized I love sharing my knowledge with others.</p>
      </div>
      <hr>
		</div>
	</div>
</section>

<section class="trusted-by">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2><?php _e( 'Trusted by', 'filip-rastovic' ); ?></h2>
      </div>
      <div class="col-4 col-md-2 mb-3"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/0.png" alt=""></div>
      <div class="col-4 col-md-2 mb-3"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/Crewdox-1.png" alt=""></div>
      <div class="col-4 col-md-2 mb-3"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/download.png" alt=""></div>
      <div class="col-4 col-md-2 mb-3"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/GearLogoVertical.png" alt=""></div>
      <div class="col-4 col-md-2 mb-3"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/header-728x180.png" alt=""></div>
      <div class="col-4 col-md-2 mb-3"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/clients/think3.jpg" alt=""></div>
    </div>
  </div>
</section>

<section class="grey">
  <div class="container">
    <div class="row">
    <div class="col-12 col-md-8 mx-auto mb-5">
				<h2><?php _e( 'Research', 'filip-rastovic' ); ?></h2>
				<p><?php _e( 'The first step is where I learn about your business. I want to find out everything about your 
                business goals, your customers interests, age, behavior and how can your website solve their problems 
                in the optimal way. Then I take a look at the websites of your competitors to establish context and 
                benchmark of what already exists and how can we create something even better on top of it. This step 
                gives us the foundation for moving forward with just the right recommendations for the design and 
                development of your new responsive website. ' , 'filip-rastovic' ); ?>
				</p>
				<h2><?php _e( 'Design', 'filip-rastovic' ); ?></h2>
				<p><?php _e( 'Design starts with creating wireframes of your websites; these are simple skeletons of the pages 
            that explain how content should be laid out on the screen. I also create user flows, this is an abstract 
            of at least three personas of your websites visitors. Someone who just seeks information, someone who is 
            context aware but not sure if what you’re offering is the right thing for him and someone who is a ready 
            to talk buyer. We design wireframes so all possible visitor personas can solve their problems easily and 
            not get frustrated or overwhelmed by your website. Once the wireframes are done, we have to style them. 
            This is where we implement colors, photos, shapes and animations to make the website alive. If your brand 
            has a logo we make sure the colors we use harmonize with it and create a beautiful experience for the visitor. 
            We show you designs and adjust them to your liking.', 'filip-rastovic') ?></p>


				<h2><?php _e( 'Development', 'filip-rastovic' ); ?></h2>
				<p><?php _e( 'Once the designs are finished I get my hands dirty with code. Utilizing the latest HTML3, CSS3, SCSS and SVG 
            techniques I write semantic and maintainable code utilizing the best practices and design patterns. I often use 
            gulp.js as my task runner. We set up a testing url where only you can preview your website and test it for bugs 
            on all different screen sizes and modern web browsers (Firefox, Chrome, Safari, Internet Explorer 9+). I’m also 
            familiar with page builder tools such as Elementor, Divi, Unbounce and Squarespace. ', 'filip-rastovic' ); ?>
				</p>
				<h2><?php _e( 'Wordpress Integration' , 'filip-rastovic' ); ?></h2>
				<p><?php _e( 'After the static website is complete, I turn it into customizable Wordpress theme utilizing the advanced 
            custom fields plugin.', 'filip-rastovic' ); ?></p>
				<hr>
			</div>
    </div>
  </div>
</section>

<section class="">
  <div class="container mb-5">
  <div class="row mb-3">
		<div class="col-12 text-center">
			<h2 class="mb-5"><?php _e( 'Technologies I Use', 'filip-rastovic' ); ?></h2>
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/html5.png" alt="html5">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/css3.png" alt="css3">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/js.png" alt="js">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/jquery.png" alt="jquery">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/wordpress.png" alt="wp">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/upwork.png" alt="upwork">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/ai.png" alt="ai">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/xd.png" alt="xd">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/php.png" alt="php">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/ps.png" alt="ps">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/mysql.png" alt="mysql">
		</div>
		<div class="col-2 col-md-1">
			<img class="img-fluid mb-3"
				src="<?php echo get_template_directory_uri() ?>/assets/img/tech-slider/node.png" alt="node">
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<img class="img-fluid rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/aaa.jpg" alt="GulpWorkshop">
		</div>
	</div>
  </div>
</section>

<?php

get_footer();