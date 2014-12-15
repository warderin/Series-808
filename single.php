

	<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<section class="thirdhead">

		<h2>
		<?php 
		$cat = get_the_category( $id );
		$title;
		if ( $cat = "ATC" ) { echo "Alternative Technique Classes"; }
		elseif ( $cat = "CSR" ) { echo "Creator Space Residency"; }
		else { echo "Choreographic Performance Workshop"; }
		?>
		</h2>
	</section>

	<section class="container entry">

	<span class="sixteen columns offset-by-two event-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></span>
	<h3 class="sixteen columns offset-by-two"><?php if (get_post_meta($post->ID, "Artist", true)) { echo get_post_meta($post->ID, "Artist", true); } ?></h3>

	<ul class="four columns offset-by-two meta">
		<?php if (get_post_meta($post->ID, "Location/Timing", true)) { echo get_post_meta($post->ID, "Location/Timing", true); } ?>
	</ul>

	<section class="eight columns">
		<?php the_content(); ?>
	</section>

		<?php endwhile; endif; ?>
	
	</section>

<?php get_footer(); ?>