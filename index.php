<?php get_header(); ?>
  
  
	<div id="primary" class="content-area">
		<div id="content" class="site-content">
  
  <!-- WP loop -->
  
    <?php if (is_category( $football ) ) : while ( have_posts() ) : get_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      

    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
		

		</div><!-- #content -->
	</div><!-- #primary -->
 

<?php get_footer(); ?>

