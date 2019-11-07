<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package filiprastovic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123056545-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-123056545-1');
  </script>

  <!-- Hotjar Tracking Code for https://filiprastovic.com -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:1125088,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/ico.png" />
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/filip.png" />
  <meta property="og:image:width" content="551"/>
  <meta property="og:image:height" content="306"/>
  <meta name="keywords" content="expert,landing,page,design,conversion,rate,optimization,unbounce">
  <meta name="author" content="Filip Rastovic">
  <link rel="image_src" href="<?php bloginfo('template_url'); ?>/assets/img/filip.png" />
  <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/img/filip.png"/>
  <meta name="twitter:url" content="https://filiprastovic.com"/>
  <meta name="google-site-verification" content="mlQnTGLwU-XJVF0iQquG9-LnTinXUVGJmobgYUr4phM" />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500,700,900&display=swap" rel="stylesheet">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg gray-background " id="mainNav">
    <div class="container">
      <a class="navbar-brand font-weight-bold" href="/">

        <?php _e( 'Filip Rastovic', 'filiprastovic' ); ?>
        <br> 
        <small><?php _e( 'CONVERSION CENTERED DESIGN', 'filiprastovic' ); ?></small>
        
        
     </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'navbar-nav ml-auto'
            ));
          ?>
      </div>
    </div>
  </nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="d-none d-sm-block col-lg-6 position-relative">
              <h2 class="font-weight-bold mb-4">
                Am I a good fit for your project?
              </h2>
              <p class="font-weight-light text-muted mb-4">While I welcome inquiries from all types of companies that use Unbounce landing pages, experience has shown I obtain the best result for clients with the following traits...</p>
              <ul class="list-unstyled text-primary font-weight-light">
                <li class="">
                  <i class="fas fa-check mr-2"></i>Have an opportunity to build growth through their marketing plan
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Are running paid advetising
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Recognize their landing pages are a valuable marketing asset
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Value a structured process to ensure great results
                </li>
              </ul>
              <div class="animated-arrow right show-for-xlarge"><div class="chevron"></div><div class="chevron"></div><div class="chevron"></div></div>
            </div>
            <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="2s" data-wow-delay=".1s">
              <form class="shadow rounded" action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
              method="post">
                <div class="text-center mb-4">
                  <p class="h5 font-weight-light text-primary text-center">Schedule <u class="font-weight-bold text-uppercase">your</u> consultation!</p>
                </div>
                <div class="form-row">
                  <div class="form-group required col-md-6">
                    <label class="control-label text-muted" for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" name="FNAME" id="inputFirstName" placeholder="" required>
                  </div>
                    <div class="form-group required col-md-6">
                    <label class="control-label text-muted" for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" name="LNAME" id="inputLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group required pb-3">
                  <label class="control-label text-muted" for="inputEmail">Email Address</label>
                  <input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary btn-xl shadow btn-block">Start Your Consultation</button>
              </form>
            </div>
          </div>
        </div>
		</div>
		</div>
	</div>
</div>

<div class="modal exit-modal fade">
<div class="modal-dialog" role="document">
		<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="d-none d-sm-block col-lg-6 position-relative">
              <h2 class="font-weight-bold mb-4">
                Am I a good fit for your project?
              </h2>
              <p class="font-weight-light text-muted mb-4">While I welcome inquiries from all types of companies that use Unbounce landing pages, experience has shown I obtain the best result for clients with the following traits...</p>
              <ul class="list-unstyled text-primary font-weight-light">
                <li class="">
                  <i class="fas fa-check mr-2"></i>Have an opportunity to build growth through their marketing plan
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Are running paid advetising
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Recognize their landing pages are a valuable marketing asset
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Value a structured process to ensure great results
                </li>
              </ul>
              <div class="animated-arrow right show-for-xlarge"><div class="chevron"></div><div class="chevron"></div><div class="chevron"></div></div>
            </div>
            <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="2s" data-wow-delay=".1s">
              <form class="shadow rounded" action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
              method="post">
                <div class="text-center mb-4">
                  <p class="h5 font-weight-light text-primary text-center">Schedule <u class="font-weight-bold text-uppercase">your</u> consultation!</p>
                </div>
                <div class="form-row">
                  <div class="form-group required col-md-6">
                    <label class="control-label text-muted" for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" name="FNAME" id="inputFirstName" placeholder="" required>
                  </div>
                    <div class="form-group required col-md-6">
                    <label class="control-label text-muted" for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" name="LNAME" id="inputLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group required pb-3">
                  <label class="control-label text-muted" for="inputEmail">Email Address</label>
                  <input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary btn-xl shadow btn-block">Start Your Consultation</button>
              </form>
            </div>
          </div>
        </div>
		</div>
		</div>
	</div>
  </div>
