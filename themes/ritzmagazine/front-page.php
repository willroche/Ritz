<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<!-- Headline tag -->
<div class="slice h-clearfix">
	<div class="l-col-12 l-content">
		<div class="l-col-12 l-padding l-content t-center">
			<h1>Ritz Magazine</h1>
		</div>
	</div>
</div>
<!-- Headline tag end -->

<div class="slice h-clearfix">
	<div class="l-col-12 l-content infinite-container">
		<?php
			$debut = 0; //The first article to be displayed
		?>
		<?php while(have_posts()) : the_post(); ?>
		<?php
			$myposts = get_posts('numberposts=-1&offset=$debut');
			foreach($myposts as $post) :
				//$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$image = get_field('thumbnail', $post->ID);
		?>	
		<!-- Blog post holder -->
		<div class="l-col-6 l-padding post infinite-item">
			<a class="post-link t-center" href="<?php the_permalink(); ?>">
				<div class="post-img-overlay">
					<img src="<?php echo $image; ?>">
					<div class="post-overlay">
						<span class="post-read-more">Read more</span>
					</div>
				</div>
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('intro_text'); ?></p>
			</a>
		</div>
		<!-- Blog post end -->	
	    <?php endforeach; ?>
		<?php endwhile; ?>
    </div>
</div>     
	
<?php get_footer(); ?>