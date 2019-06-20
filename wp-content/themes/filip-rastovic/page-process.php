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
<!-- <section class="grey">
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
</section> -->

<section class="grey">
  <div class="container">
    <div class="row">
    <div class="col-12 col-md-8 mx-auto mb-5">
		<h2><?php _e( 'Front-end development', 'filip-rastovic' ); ?></h2>
		<p><?php _e( 'I love working with agencies and their designers and developers. Once a designer finishes his work and uploads it to a tool such as InVision, I take those designs
						and start thinking about best way to code them in HTML,SCSS and JavaScript. I love using Bootstrap (lots of code already written? yay!) or just a tiny piece of it if my clients 
						want something without bootstrap. I try to keep my html as semantic as possible while using as little nodes as possible as well. When it comes to CSS, I love ussing a preprocessor
						and creating my SCSS architecture so it follows common conventions such as BEM or SMACSS, whatever my client preffers. That way SCSS stays modular and easily scaleable.
						There\'s a lot of talk about <strong>mobile first</strong> approach, so I always try to write my SCSS following that path. Once the coding is finished I begin the testing.', 'filip-rastovic' ); ?></p>
		<h2><?php _e( 'Wordpress Integration' , 'filip-rastovic' ); ?></h2>
		<p><?php _e( 'After the static website is complete, my clients often wish the designs to be integrated into their CMS. Wordpress is one of them. Utilizing advanced custom fields plugin I\'m able 
		to create awesome backend user experiences, creating the UI so it matches the front-end side of the website. That way, non developers can edit the website content very easily.'
		, 'filip-rastovic' ); ?></p>
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

<?php

get_footer();