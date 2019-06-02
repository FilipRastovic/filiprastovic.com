<?php
/**
 * Template Name: Process Template
 *
 *
 * @package filiprastovic
 */

get_header();
?>

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="section-heading">My Process</h1>
        <hr class="my-4">
        <p><?php _e( 'Read about how I create websites!', 'filiprastovic' ); ?></p>
      </div>
    </div>
  </div>
</header>

<!-- Tabs -->
<section class="mb-5" id="tabs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 mb-5">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php _e( 'Research', 'filip-rastovic' ); ?></a></a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php _e( 'Design', 'filip-rastovic' ); ?></a></a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><?php _e( 'Development', 'filip-rastovic' ); ?></a></a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false"><?php _e( 'Wordpress Integration', 'filip-rastovic' ); ?></a></a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0 " id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h2><?php _e( 'Research', 'filip-rastovic' ); ?></h2>
            <p><?php _e( 'The first step is where I learn about your business. I want to find out everything about your 
                business goals, your customers interests, age, behavior and how can your website solve their problems 
                in the optimal way. Then I take a look at the websites of your competitors to establish context and 
                benchmark of what already exists and how can we create something even better on top of it. This step 
                gives us the foundation for moving forward with just the right recommendations for the design and 
                development of your new responsive website. ' , 'filip-rastovic' ); ?>
            </p>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <h2><?php _e( 'Development', 'filip-rastovic' ); ?></h2>
            <p><?php _e( 'Once the designs are finished I get my hands dirty with code. Utilizing the latest HTML3, CSS3, SCSS and SVG 
            techniques I write semantic and maintainable code utilizing the best practices and design patterns. I often use 
            gulp.js as my task runner. We set up a testing url where only you can preview your website and test it for bugs 
            on all different screen sizes and modern web browsers (Firefox, Chrome, Safari, Internet Explorer 9+). I’m also 
            familiar with page builder tools such as Elementor, Divi, Unbounce and Squarespace. ', 'filip-rastovic' ); ?></p>
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            <h2><?php _e( 'Wordpress Integration' , 'filip-rastovic' ); ?></h2>
            <p><?php _e( 'After the static website is complete, I turn it into customizable Wordpress theme utilizing the advanced 
            custom fields plugin.', 'filip-rastovic' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ebook mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mx-auto card text-center">
        <h4>Download my website creation ebook</h4>
        <figure>
          <img src="<?php bloginfo('template_url') ?>/assets/img/ebook.png" alt="" class="img-fluid">
        </figure>
        <form class="mb-2">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email goes here...">
          </div>
          <button type="submit" class="btn btn-primary">Download</button>
        </form>
      </div>
    </div>
  </div>
</section> -->
<?php

get_footer();