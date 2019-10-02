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
        <small><?php _e( 'Expert landing page design', 'filiprastovic' ); ?></small>
        
        
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