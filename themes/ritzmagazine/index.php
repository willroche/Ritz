<?php get_header(); ?>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 
		 <h1><?php the_title(); ?></h1>	
		 	<?php the_content(); ?>
			
	 <?php endwhile; else: ?>
	 	<p><?php wp_redirect(get_permalink('507')); ?></p>
	 <?php endif; ?>
     
<?php get_footer(); ?>