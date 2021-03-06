<?php
/*
Template Name: Over
*/
?>

<?php get_header(); ?>
	
<div class="full-bg-twee">

	<div class="u-gridContainer">


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

	    <div class="u-gridCol8">
	                
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
				</article>
			<?php endwhile; endif; ?>
		</div>

		<div class="u-gridCol4 afspraak-box">
			<div class="content-box-large">
				<p class="content-text">BEL VOOR EEN AFSPRAAK</p>
				<p class="afspraak-nummer">+31(0)76 597 71 70</br>+31(0)6 228 33 373</p>
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/thumb-afspraak.png">									
			</div>

			<p>
				Wanneer u geïnteresseerd bent in 
				onze prachtige bruidsmode, nodigen 
				wij u graag uit om langs te komen in 
				onze winkel in Wernhout. </br>
				<span class="paars-tekst">Wij werken uitsluitend op afspraak</span>
			</p>
		</div>

	  </div>

	</div>

</div>

<?php get_footer(); ?>
