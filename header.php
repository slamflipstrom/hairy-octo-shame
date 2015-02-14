<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
  
</head>

</head>

<nav>
  
  <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SportsComix</a></div>
  <div class="mobile-menu"><a href="#">Menu</a></div>
  
  <?php 
  
    $defaults = array(
      'container' => false,
      'theme_location' => 'primary-menu',
      'menu_class' => 'mobile-nav'
    );
  
    wp_nav_menu( $defaults );
  
   ?>
  

  <!-- <ul class="mobile-nav">
    <li><a href="#football">FOOTBALL</a></li>
    <li><a href="#basketball">BASKETBALL</a></li>
    <li><a href="#baseball">BASEBALL</a></li>
    <li><a href="#hockey">HOCKEY</a></li>
    <li><a href="#soccer">SOCCER</a></li>
    <li><a href="#golf">GOLF</a></li>
  </ul> -->
</nav>

<body> 
