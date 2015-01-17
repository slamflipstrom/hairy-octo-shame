<?php

/*
Template Name: Home
*/

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SportsComix</title>
  <meta name="description" content="SportsComix.com, comic strips for sports fans.">
  
  <!--[if IE]><link rel="shortcut icon" href=""<?php echo get_template_directory_uri(); ?>/images/favicon.ico"><![endif]-->

  <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 96x96 pixels in size. -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    
  <!-- Primary Stylesheet and Responsive CSS  --> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>assets/css/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>assets/css/responsive.css" media="screen and (min-width: 320px)" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font-Awesome --> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>assets/fonts/font-awesome/css/font-awesome.min.css"> 
   
  <!-- JS & jQuery libraries --> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    
  <!-- Google Fonts -->

  
</head>

<nav>
  <div class="logo"><a href=".mobile-nav">SportsComix</a></div>
  <div class="mobile-menu"><a href="#">Menu</a></div>
  <ul class="mobile-nav">
    <li><a href="#football">FOOTBALL</a></li>
    <li><a href="#basketball">BASKETBALL</a></li>
    <li><a href="#baseball">BASEBALL</a></li>
    <li><a href="#hockey">HOCKEY</a></li>
    <li><a href="#soccer">SOCCER</a></li>  
    <li><a href="#golf">GOLF</a></li>    
  </ul>
</nav>


<body>  
  
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>


		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
 
  
</body>
</html>