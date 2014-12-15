<?php /*
Template Name: Default Basic Page
*/ ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="secondhead">
	<h2><?php echo get_the_title( $ID ); ?> </h2>
</div>

<article>
	<section class="history">
		
			<?php the_content(); ?>
		
	</section>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>