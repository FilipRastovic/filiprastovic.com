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
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        Filip Rastovic
        <!-- <div>Filip Rastovic</div>
        <div class="brand-text">Web Development &amp; Design</div> -->
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Process overview</a>
              <a class="dropdown-item" href="#">Wireframes</a>
              <a class="dropdown-item" href="#">Design Mockups</a>
              <a class="dropdown-item" href="#">Wordpress Theme Development</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Working With Me
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">How I Help You</a>
              <a class="dropdown-item" href="#">My Proposal Process</a>
              <a class="dropdown-item" href="#">Pricing</a>
              <a class="dropdown-item" href="#">About Me</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Case Studies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a id="contact" class="nav-link js-scroll-trigger" href="#">Request Consultation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>