<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta <?php bloginfo( 'charset' ); ?>>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?><?php wp_title('|',true,''); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:url" content="<?php echo site_url( '/' ); ?>" />
<meta property="og:title" content="<?php wp_title('',false,''); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/html/og-image.jpg" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

<link rel="author" href="<?php echo get_stylesheet_directory_uri(); ?>/humans.txt" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"Utilizamos cookies propias y de terceros para mejorar nuestros servicios  y mostrarle publicidad relacionada con sus preferencias mediante el  análisis de sus hábitos de navegación. Si continúa navegando,  consideramos que acepta su uso.","dismiss":"Acepto","learnMore":"Leer más","link":"http://warnermusic.es/politica-de-privacidad/","theme":"dark-top"};
</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '837944149591094');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=837944149591094&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<?php wp_head(); ?>

</head>

<body>

	<header class="header">

    <div class="navigation-wrapper">

      <div class="container">
        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar">
              <span class="sr-only">Desplegar navegación</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo site_url( '/' ); ?>" title="Ir a la portada" class="navbar-brand">
              <img src="<?php echo get_theme_mod( 'site_logo' ) ?>" alt="<?php bloginfo('name'); ?>">
            </a>
          </div>
          <?php
            $menuArgs =array(
              'theme_location'  => 'header-menu', 
              'container_id'    => 'mainNavBar',
              'container_class' => 'collapse navbar-collapse',
              'menu_class'      => 'nav navbar-nav navbar-right',
              'walker'          => new Bootstrap_Walker(),
              'depth'           => 2,
            );
            wp_nav_menu( $menuArgs ); 
          ?>
        </nav>
      </div>
      
    </div><!--navigation-wrapper-->

  </header>
