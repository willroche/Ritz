<?php
/*
Template Name: Article
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!-- Headline tag -->
<div class="slice h-clearfix">
	<div class="l-col-12 l-content">
		<div class="l-col-12 l-padding l-content t-center">
			<h1>Ritz Magazine</h1>
		</div>
	</div>
</div>
<!-- Headline tag end -->
<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar trigger -->
	<div class="sidebar-trigger">
		<div class="sidebar-arrow"></div>
	</div>
	<!-- Sidebar content holder -->
	<div class="sidebar-content">
		<!-- Sidebar blog holder -->
		<div class="sidebar-blog">
			<h3 class="no-mar">you may also like</h3>
			<?php
				for($i = 1 ; $i < 4; $i++)
			    {
					$post_object = get_field('related_articles_'.$i);
					$related_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_object->ID ), 'single-post-thumbnail' );
					setup_postdata( $post_object ); 
			
			?>
				<div class="sidebar-blog-container h-clearfix">
					<div class="sidebar-blog-image">
						<a href="<?php the_permalink($post_object->ID); ?>"><img src="<?php echo $related_image[0]; ?>" rel="<?php the_title($post_object->ID); ?>" /></a>
					</div>
					<div class="sidebar-blog-content">
						<h4><a href="<?php the_permalink($post_object->ID); ?>"><?php echo $post_object->post_title; ?></a></h4>
						<p><?php echo get_the_date('', $post_object->ID); ?></p>
					</div>
				</div>
			<?php		
				}
				wp_reset_postdata();
			?>			
		</div>
		<!-- Sidebar tweet holder -->
		<div class="sidebar-tweet">
			<h3>Latest tweets</h3>
			<a class="twitter-timeline" href="https://twitter.com/theritzlondon" data-widget-id="728248365146877952" width="100%" data-chrome="nofooter noborders noheader noscrollbar transparent" data-tweet-limit="3"></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<!-- Sidebar connect holder -->
		<div class="sidebar-connect">
			<h3 class="no-mar">let’s connect</h3>
			<div class="social-holder">
				<a class="ftr-icon ftr-twitter" target="_blank" href="http://twitter.com/theritzlondon"></a>
				<a class="ftr-icon ftr-facebook" target="_blank" href="http://www.facebook.com/theritzlondon"></a>
				<a class="ftr-icon ftr-google" target="_blank" href="https://plus.google.com/+theritzlondon"></a>
				<a class="ftr-icon ftr-youtube" target="_blank" href="https://www.youtube.com/user/TheRitzLondon"></a>
				<a class="ftr-icon ftr-pinterest" target="_blank" href="http://www.pinterest.com/theritzlondon/"></a>
				<a class="ftr-icon ftr-linkedin" target="_blank" href="http://www.linkedin.com/company/the-ritz-london"></a>
				<a class="ftr-icon ftr-instagram" target="_blank" href="http://instagram.com/theritzlondon"></a>
			</div>
		</div>
	</div>
</div>
<!-- Sidebar end -->
<!-- Remodal container -->
<div class="magnify remodal" data-remodal-id="magnify">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div>
		<img src="<?php echo $image[0]; ?>" style="display:block;"/>
	</div>
</div>

<!-- Scroll to top -->
<a href="#" class="scrollToTop"></a>

<!-- Blog hero slice -->
<div class="slice h-clearfix">
	<div class="blog-hero" style="background-image: url(<?php echo $image[0]; ?>);">
		<!-- Remodal trigger -->
		<a class="i-magnify" href="#magnify"></a>
		<!-- Remodal close -->
		<div class="l-col-6 l-content blog-hero-container">
			<!-- Blog hero content -->
			<div class="blog-hero-border">
				<div class="blog-hero-spacer">
					<div class="blog-hero-content t-center">
						<h2><?php the_title(); ?></h2>
						<div class="blog-hero-hr"></div>
						<p><?php the_time('j M Y'); ?> by <?php the_field('author'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog content slice -->
<div class="slice h-clearfix l-blog">

	<!-- Blog content -->
	<div class="l-col-12 l-content l-padding t-content">
		<div id="breadcrumb-wrapper">
			<h5>
				<a href="http://www.iln.co.uk/theritz">Magazine Home</a><span class="separator separator-home">></span><?php the_title(); ?>
			</h5>
		</div>
		<?php the_content(); ?>
		<h5 class="back-to-home-link">
			<a href="http://www.iln.co.uk/theritz"><span class="separator separator-home">< </span> Magazine Home</a>
		</h5>
	</div>
	<!-- Blog content end -->
	
	<!-- Blog social -->
	<div class="l-col-7 l-content l-padding">
		<div class="blog-social-holder h-clearfix t-center">
			<h5>share this article</h5>
			<ul>
				<!-- Facebook share button / add current URL where http://google.com is -->
				<li><a class="blog-social facebook i-blog-facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID ); ?>"></a></li>
				<!-- Twitter share button / add current URL where http://google.com is and add page title where 'This is awesome!' is -->
				<li><a class="blog-social i-blog-twitter" href="https://twitter.com/share?url=<?php the_permalink( $post->ID );?>" onclick="return !window.open(this.href, 'Twitter', 'width=640,height=300')"></a></li>
				<!-- Pinterest share button / replace URL links throughout -->
				<li><a class="blog-social i-blog-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink( $post->ID );?>&media=<?php echo $image[0]; ?>&description=<?php the_title();?>" count-layout="horizontal"></a></li>
			</ul>
		</div>
	</div>
	<!-- Blog social end -->

	<!-- Blog slider also like -->
	<div class="l-col-12 l-content t-content t-center">
		<div class="blog-carousel-holder h-clearfix">
			<h3>you may also like</h3>
			<div class="blog-carousel">
			<?php
				for($i = 1 ; $i < 4; $i++)
			    {
					$post_object = get_field('related_articles_'.$i);
					$related_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_object->ID ), 'single-post-thumbnail' );
					setup_postdata( $post_object ); 
			
			?>
					<div>
						<a class="post-link t-center" href="<?php the_permalink($post_object->ID); ?>">
							<div class="post-img-overlay">
								<img src="<?php echo $related_image[0]; ?>" rel="<?php the_title($post_object->ID); ?>" />
								<div class="post-overlay">
									<span class="post-read-more">Read more</span>
								</div>
							</div>
						</a>
						<h5><a href="<?php the_permalink($post_object->ID); ?>"><?php echo $post_object->post_title; ?></a></h5>
					</div>
			<?php		
				}
			?>
			<div class="post-img-overlay">
				<img src="<?php echo $image; ?>">
				<div class="post-overlay">
					<span class="post-read-more">Read more</span>
				</div>
			</div>
			</div>
		</div>
		
	</div>
	<!-- Blog content end -->
			
	

</div>
		

<?php endwhile; else: ?>
	<p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>