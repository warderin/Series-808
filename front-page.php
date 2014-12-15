<?php get_header(); ?>

<article>
			<section class="photo">

					<section class="container">
		
						<span class="eleven columns offset-by-six title">Building Canadian Dance</span>
		
		
						<div class="eight columns offset-by-seven bio"><P>Series 8:08 was created to promote the creative development of professional Canadian dance artists; to build a strong sense of artistic community; and to build a knowledgeable, appreciative audience for new dance. </p>

						<div class="but"><a href="http://localhost/~Erin/wordpress/?page_id=4">Learn More</a></div>
					</div>
		
					</section><!-- end of container -->


			</section>

			<section class="newsletter">
				<div class="container">
					<div class="ten columns offset-by-three newslettercont">
						<object type="image/svg+xml" data="http://warder.in/images/inbox.svg">Your browser does not support SVG</object>
						<p>Subscribe to the Series 8:08 newsletter</p>
						<div class="button"><a href="http://eepurl.com/AkaVH">Subscribe Me</a></div>
					</div>
				</div>

			</section>


			<section class="programs">

				<section class="container">

				 	<div class="one-third column">
				 		<h3><a href="http://localhost/~Erin/wordpress/?page_id=14">Alternative Technique Classes</a></h3>
				 		<p>We offer innovative professional development workshops to professional dance artists, taught by established dance professionals. These are opportunities to explore alternative techniques and practices, as well as the creative visions and processes of diverse dance artists.</p>
				 	</div>
				 
				  	<div class="one-third column">
				  		<h3><a href="http://localhost/~Erin/wordpress/?page_id=18">Choreographic Performance Workshop</a></h3>
				  		<p>The Choreographic Performance Workshops or CPWs are showings of short works-in-progress by professional dance artists. Join us on the last Saturday of (almost) every month from September to February to discover Canadian dance in the making.</p>
				  	</div>

				  		<div class="one-third column">
				 		<h3><a href="http://localhost/~Erin/wordpress/?page_id=16">Creator Space Residency</a></h3>
				 		<p>An 8-month residency for two to four selected artists. This is a partnership with Dovehouse Dance Ballroom and two other studios. A small report and an entry for our blog will be required after completion of the residency. The selected choreographers will also have a final showing of their work at the end of our season.</p>
				 	</div>
				
				</section>
			</section>

			<section class="events">
				
				<section class="container">
				
				<div class="eventlist">

					<h4 class="sixteen columns"><a href="http://localhost/~Erin/wordpress/?page_id=22">Upcoming Events</a></h4>

					<?php while ( have_posts() ) : the_post() ?>

						<div class="event">
							<div class="row">
							<span class="sixteen columns event-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></span>
							<h3 class="sixteen columns"><?php if (get_post_meta($post->ID, "Artist", true)) { echo get_post_meta($post->ID, "Artist", true); } ?></h3>
							</div>
							<div class="row eventcontent">
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'eight columns thumbnail')) ?>
					

								<div class="four columns description">
								<?php the_excerpt(); ?> 
								<p><a href="<?php echo get_permalink(); ?>">read more</a></p>
								</div><!-- end of description -->

								<ul class="four columns info">
										<?php if (get_post_meta($post->ID, "Location/Timing", true)) { echo get_post_meta($post->ID, "Location/Timing", true); } ?>
								</ul>

							</div><!-- end of row -->

						</div><!-- end of event -->

						<?php endwhile; ?>

				</div><!-- end of eventlist -->
				</section>

			</section>

		</article>

<?php get_footer(); ?>