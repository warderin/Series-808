<?php /*
Template Name: Display Single Category
*/ ?>

<?php get_header(); ?>

	

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="secondhead">
		<h2><?php echo get_the_title( $ID ); ?> </h2>
	</div> 

	<section class="container">

		<div class="programdesc twelve columns offset-by-two">
			<?php the_content(); ?>
		</div>
	<?php endwhile; else: endif; ?>

	</section>

	<section class="container entry">

		<?php 
		$title = get_the_title();
		$cat;
		if ( $title == "Alternative Technique Classes" ) { $cat = "ATC"; }
		elseif ( $title == "Creator Space Residency" ) { $cat = "CSR"; }
		else { $cat == "CPW"; }
		query_posts('category_name='.$cat.'&post_status=publish,future');?>
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
		
		<?php endwhile; else: endif; ?>

	</section>

<?php get_footer(); ?>