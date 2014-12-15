<!DOCTYPE html>
<html>
	<head>
		<title>Series 808</title>  
		<meta charset="UTF-8">
		<meta name="keywords" content="Dance, Canada, Toronto, Performing Arts">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<style type="text/css">
			@import url("http://series808.ca/assets/skeleton.css");
			@import url("http://series808.ca/assets/secondarystyle.css");
		</style>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:100,400,700' rel='stylesheet' type='text/css'> 
    	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	</head>
	<body>
		<header>

			<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://dl-web.dropbox.com/get/Series%20808/new%20808/images/series.logo.png?_subject_uid=38910814&w=AAD5dz6W04FVAZ9ADBhz0FOnN6VOU33JhGMssSCJr7BzzQ" alt="Series 8:08 Logo"></a></div>

			<nav>
				
				<ul class="topnav">
					<a href="http://series808.ca/home/about"><li>About</li></a>
					<a href="http://series808blog.wordpress.com/"><li>Blog</li></a>
					<li class="dropdown_button">Programs</li>
						<ul class="dropdown_list">
							<li><a href="http://series808.ca/home/alternative-technique-classes">Alternative Technique Classes</a></li>
							<li><a href="http://series808.ca/home/?page_id=16">Creator Space Residency</a></li>
							<li><a href="http://series808.ca/home/?page_id=18">Choreographic Performance Workshops</a></li>
						</ul>
						<script type="text/javascript">							
							$('.dropdown_button').hover(function() {
								$('.dropdown_list').css('display', 'block');
								$('.dropdown_list').hover(function() {
									$('.dropdown_list').css('display', 'block');
								}, function() {
									$('.dropdown_list').css('display', 'none');
								})
							}, function() {
						    $('.dropdown_list').css('display', 'none');
						  }
							);
						</script>
					<a href="http://series808.ca/home/?page_id=8"><li>Contact</li></a>
					<li><a href="https://www.facebook.com/pages/Series-808/205192942890357?sk=wall" target="_blank"><img src="http://series808.ca/Images/facebook.svg" class="icon" alt="facebook" ></a> <a href="#"><img src="http://series808.ca/Images/rss.svg" class="icon" alt="email"></a></li>			
				</ul>
				
			</nav>
		</header>