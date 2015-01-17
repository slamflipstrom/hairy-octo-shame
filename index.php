<?php get_header(); ?>
  
	<div id="primary" class="content-area">
		<div id="content" class="site-content">
  
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      

    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
		

		</div><!-- #content -->
	</div><!-- #primary -->
 

<?php get_footer(); ?>

