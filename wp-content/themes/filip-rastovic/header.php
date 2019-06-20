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
  <meta name="description" content="Filip Rastovic - Web Development &amp; Design">
  <meta name="keywords" content="web,design,development,stargazer,studio">
  <meta name="author" content="Filip Rastovic">
  <meta property="og:title" content="Filip Rastovic - Web Development &amp; Design" />
  <meta property="og:url" content="https://filiprastovic.net" />
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/venn.png" />


  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/"><?php _e( 'Filip Rastovic', 'filiprastovic' ); ?></a>
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