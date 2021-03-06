<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clarity-enhanced
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

  <!-- Hotjar Tracking Code for https://clarity-enhanced.com -->
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
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/ogimg.png" />
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>
  <meta name="keywords" content="expert,landing,page,design,conversion,rate,optimization,unbounce">
  <meta name="author" content="Clarity Enhanced">
  <link rel="image_src" href="<?php bloginfo('template_url'); ?>/assets/img/ogimg.png" />
  <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/img/ogimg.png"/>
  <meta name="twitter:url" content="https://clarity-enhanced.net"/>
  <meta name="google-site-verification" content="mlQnTGLwU-XJVF0iQquG9-LnTinXUVGJmobgYUr4phM" />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500,700,900&display=swap" rel="stylesheet">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css">
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '505024620228652');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=505024620228652&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg gray-background " id="mainNav">
    <div class="container">
      <a class="navbar-brand font-weight-bold text-white" href="/">

        <?php _e( 'Clarity Enhanced', 'clarity-enhanced' ); ?>
        <br> 
        <small><?php _e( 'Conversion Centered', 'clarity-enhanced' ); ?></small>
        
        
     </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'navbar-nav ml-auto',
              'depth'           => 2,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
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
        <!-- <strong class="font-weight-bold">Clarity Enhanced </strong><img class="top-rated" src="/wp-content/themes/filip-rastovic/assets/img/top-rated.png" alt="Top Rated Badge"> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="d-none d-sm-block col-lg-6 position-relative">
              <h2 class="font-weight-bold mb-4 text-white">
                Are we a match?
              </h2>
              <p class="text-white mb-4">While we welcome inquiries from all types of companies that use websites, experience has shown we obtain the best result for clients with the following traits...</p>
              <ul class="list-unstyled text-warning ">
                <li class="">
                  <i class="fas fa-check mr-2"></i>Have an opportunity to build growth through their marketing plan
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Are running paid advetising
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Recognize their websites are a valuable marketing asset
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Value a structured process to ensure great results
                </li>
                <!-- <img class="unbounce-logo" src="/wp-content/themes/filip-rastovic/assets/img/Unbounce-logo-alt.png" alt="Unbounce Logo"> -->
              </ul>
              <div class="animated-arrow right show-for-xlarge"><div class="chevron"></div><div class="chevron"></div><div class="chevron"></div></div>
            </div>
            <div class="col-lg-6">
              <form class="shadow rounded" action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
              method="post">
                <div class="text-center mb-4">
                  <p class="h5  text-dark text-center">Schedule <u class="font-weight-bold text-uppercase text-primary">your</u> consultation!</p>
                </div>
                <div class="form-group required pb-3">
                  <label class="control-label text-muted" for="inputFirstName">Full Name</label>
                  <input type="text" class="form-control" name="FNAME" id="inputFirstName" placeholder="" required>
                </div>
                <div class="form-group required pb-3">
                  <label class="control-label text-muted" for="inputEmail">Email Address</label>
                  <input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="">
                </div>
                <button type="submit" class="btn btn-secondary btn-xl shadow btn-block">Start Your Consultation</button>
                
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
        <!-- <strong class="font-weight-bold">Clarity Enhanced </strong><img class="top-rated" src="/wp-content/themes/filip-rastovic/assets/img/top-rated.png" alt="Top Rated Badge"> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="d-none d-sm-block col-lg-6 position-relative">
              <h2 class="font-weight-bold mb-4">
                Are we a match?
              </h2>
              <p class=" mb-4">While We welcome inquiries from all types of companies that use website, experience has shown We obtain the best result for clients with the following traits...</p>
              <ul class="list-unstyled text-primary ">
                <li class="">
                  <i class="fas fa-check mr-2"></i>Have an opportunity to build growth through their marketing plan
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Are running paid advetising
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Recognize their websites are a valuable marketing asset
                </li>
                <li class="">
                  <i class="fas fa-check mr-2"></i>Value a structured process to ensure great results
                </li>
              </ul>
              <div class="animated-arrow right show-for-xlarge"><div class="chevron"></div><div class="chevron"></div><div class="chevron"></div></div>
            </div>
            <div class="col-lg-6 ">
              <form class="shadow rounded" action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
              method="post">
                <div class="text-center mb-4">
                  <p class="h5  text-primary text-center">Schedule <u class="font-weight-bold text-uppercase text-primary">your</u> consultation!</p>
                </div>
                <div class="form-group required pb-3">
                  <label class="control-label text-muted" for="inputFirstName">Full Name</label>
                  <input type="text" class="form-control" name="FNAME" id="inputFirstName" placeholder="" required>
                </div>
                <div class="form-group required pb-3">
                  <label class="control-label text-muted" for="inputEmail">Email Address</label>
                  <input type="email" class="form-control" name="EMAIL" id="inputEmail" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary btn-xl shadow btn-block">Start Your Consultation</button>
                <p class="mt-3 mb-0 text-center"> <i class="fa fa-phone text-primary"></i> Preffer calling? <a href="tel:381631714561">+381631714561</a> </p>
              </form>
            </div>
          </div>
        </div>
		</div>
		</div>
	</div>
  </div>
