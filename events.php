<?php /*
Template Name: Display all posts
*/ ?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<div class="secondhead">
		<h2>Upcoming Events</h2>
	</div> 

<section class="container entry">

	<?php
	query_posts('post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article class="post">
	<span class="sixteen columns offset-by-two event-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></span>
	<h3 class="sixteen columns offset-by-two"><?php if (get_post_meta($post->ID, "Artist", true)) { echo get_post_meta($post->ID, "Artist", true); } ?></h3>

	<ul class="four columns offset-by-two meta">
		<?php if (get_post_meta($post->ID, "Location/Timing", true)) { echo get_post_meta($post->ID, "Location/Timing", true); } ?>
	</ul>

	<section class="eight columns">
		<?php the_excerpt(); ?>
	</section>

</article> 
<?php endwhile; else: endif; ?><!-- end of .post -->

		<?php endwhile; endif; ?>
	
	</section>





<?php get_footer(); ?>