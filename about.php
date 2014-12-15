<?php /*
Template Name: Static 'About' Page
*/ ?>

<?php get_header(); ?>

<div class="secondhead">
	<h2>About Series 8:08</h2>
	<nav>

		<ul><?php wp_list_pages('include=4,6,8&title_li=&sort_column=menu_order' ); ?> </ul>

		<!-- <ul>
			<li><a href="http://localhost/~Erin/wordpress/?page_id=4">History</a></li>
			<li><a href="http://localhost/~Erin/wordpress/?page_id=6">Artistic Mandate</a></li>
			<li><a href="http://localhost/~Erin/wordpress/?page_id=8">Contact</a></li>
			 <li><a href="http://localhost/~Erin/wordpress/?page_id=10">Staff</a></li> 
		</ul> -->
	</nav>
</div>

<article>
	<section class="container history">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>

		<div class="twelve columns offset-by-two">		
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</section>
</article>

<?php get_footer(); ?>