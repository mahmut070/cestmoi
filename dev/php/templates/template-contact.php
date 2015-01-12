<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="full-bg-twee">
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="Slider-img">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel1.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel2.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel3.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel4.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel5.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel6.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel7.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel8.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel9.png">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/winkel10.png">
						</div>
					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>C'est moi</p>
								<p>Wernhoutseweg 139</p>
								<p>4884 AT Wernhout Noord Brabant</p>
								<p>Email: info@cestmoi-bruidsmode.eu</p>
								<p>Tel: 076.597.71.70</p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

