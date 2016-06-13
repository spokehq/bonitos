<?php
/** Template Name: Vert */

get_header(); ?>

		
<ul class="navigation">
		<li data-slide="1">Slide 1</li>
		<li data-slide="2">Slide 2</li>
		<li data-slide="3">Slide 3</li>
		<li data-slide="4">Slide 4</li>
	</ul>



          
	<img class="envatologo" src="<?php bloginfo('stylesheet_directory');?>/img/envatologo.png">
	

	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		
		
		<?php $other = 2; ?>
		
		<?php if(get_field('billboard', $other)): ?>
		<h1>hioahsdifjalkdsjflkajsdlkfj</h1>
	  <div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">	
			   <div id="da-slider" class="da-slider">
			     <?php while(the_repeater_field('billboard', $other)): ?>
					<div class="da-slide">
						<!--<img src="<?php bloginfo('stylesheet_directory');?>/img/bonitos-featured-products.png" alt="Bonitos <?php the_sub_field('product_name');?>"> -->
						<h2><?php the_sub_field('product_name');?></h2>
						<?php the_sub_field('product_description');?>
						<a href="#" class="da-link">What's in it?</a>
						<div class="da-img">
							<img src="<?php the_sub_field('product_image');?>" alt="<?php the_sub_field('product_name');?>" />
						</div>
					</div>
				<?php endwhile; ?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			   </div><!-- end da-slider-->
		</div><!--end vertical parallax-->
	<?php endif; ?>	

		


	</div><!--End Slide 1-->



	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="wrapper">

			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/blur-ball.png" data-stellar-ratio="3" data-stellar-vertical-offset="-55"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/blur-ball-big.png" data-stellar-ratio="1" data-stellar-vertical-offset="-102"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/focus-ball.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/small-ball.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-25"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/blur-ball.png" data-stellar-ratio="3" data-stellar-vertical-offset="-55"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/blur-ball-big.png" data-stellar-ratio="1" data-stellar-vertical-offset="-102"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/focus-ball.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide2/small-ball.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-25"alt="">	

		</div>

		<span class="slideno">Slide 2</span>


	</div><!--End Slide 2-->





	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="wrapper">
		
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide3/freelance.png" data-stellar-ratio="1.4" data-stellar-vertical-offset="-102"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide3/psdtuts.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide3/rockable.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-200"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide3/themeforest.png" data-stellar-ratio="3" data-stellar-vertical-offset="-200"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide3/tutshub.png" data-stellar-ratio="1" data-stellar-vertical-offset="-200"alt="">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/slide3/psdtuts.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-200"alt="">
		</div>

		<span class="slideno">Slide 3</span>


	</div><!--End Slide 3-->






	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0">
		

		<span class="slideno">Slide 4</span>
		<span class="parallaxbg">Use the parallax effects on background <?php bloginfo('stylesheet_directory');?>/img too!</span>

	</div><!--End Slide 4-->


			


<?php get_footer(); ?>