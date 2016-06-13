<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0">
	<div id="flap"></div>
	<!-- <a name="our-products"></a>  -->
	<?php if(get_field('billboard')): ?>	
			   <div id="da-slider" class="da-slider">
			     <?php while(the_repeater_field('billboard')): ?>
					<div class="da-slide fourfivelight">
						<h2><?php the_sub_field('product_name');?></h2>
						<?php the_sub_field('product_description');?>
						<a href="#" class="da-link">What's in it?</a>
						<div class="da-img">
						  <img src="<?php the_sub_field('product_image');?>" alt="<?php the_sub_field('product_name');?>" />
						</div>
						<div class="whats-in-it">
							<h4><?php the_sub_field('product_name');?></h4>
							<?php $str = get_sub_field('whats_in_it');
                            	$str = str_replace('<p>', '', $str);
                            	$str = str_replace('</p>', '', $str);
                           		echo $str;?>

						</div>
					</div>
				<?php endwhile; ?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			   </div><!-- end da-slider-->
	<?php endif; ?>	
	
	</div><!--End Slide 1-->

	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="1">
	
	<header id="branding" role="banner">
		<nav id="access" role="navigation">
			<ul class="navigation">
				<li class="home-nav" style="padding-left:0; padding-right:21px;"><img src="<?php bloginfo('stylesheet_directory');?>/img/bonitos-nav.png" alt="Ninos Bonitos Home" data-slide="1" id="logo"></li>
				<li id="home" data-slide="1">Our Products</li>
				<li data-slide="2">Our Mission</li>
				<li data-slide="3">Where to Buy</li>
				<li data-slide="4">Our Founder</li>
				<li data-slide="5">What They're Saying</li>
				<li data-slide="6" id="contact">Contact Us</li>
				<li id="fb">
					<a href="https://www.facebook.com/BonitosProducts" target="_blank">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/fb.png" alt="Bonitos on Facebook">
					</a>
				</li>
				<li id="twitter">
					<a href="http://twitter.com/bonitosproducts" target="_blank">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/twitter.png" alt="Bonitos on Twitter">
					</a>
				</li>
	</ul>
		</nav><!-- #access -->
	</header><!-- #branding -->
	
	<section class="wrapper-780">
	 <section id="our-mision">
		<h1 class="twentyfiveultralight">Our Mission</h1>
		<h3 class="fourfivelight brown"><?php the_field('our_mission');?></h3>
		<?php if(get_field('icons_and_text')): ?>
             <?php while(the_repeater_field('icons_and_text')): ?>
        			<article class="icon-area">
        				<img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('title');?>">
        				<div class="">
        					<h4><?php the_sub_field('title');?></h4>
        					<?php the_sub_field('text');?>
        				</div>
        			</article>                   
              <?php endwhile; ?>
        <?php endif; ?>	
	 </section>
	</section>
	</div><!--slide 2-->
	
	<div class="slide" id="slide3" data-slide="3">
		<section class="texture-with-border">

			<div class="top" id="testimonials"></div>
				<h1>Where to Buy.</h1>	
				<?php the_field('where_to_buy');?>			
			<div class="bottom"></div>
		</section>
	</div><!--slide 3 -->
	
	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<section id="marias-section">
		 <div class="wrapper-780">
			<div class="our-founder-text">
				<h1 class="eighty-eight">Created by a mom with moms in mind.</h1>
				<img src="<?php bloginfo('stylesheet_directory');?>/img/family-photo.png" alt="Family Photo" class="float-right">
				<div><?php the_field('marias_story');?></div>
				<img id="signature" src="<?php bloginfo('stylesheet_directory');?>/img/maria-real-signature.png" alt="Marias Signature">
				<div style="height:1px; width:100%; position:relative; clear:both;"></div>
			</div>
			<img id="maria-ramons-person" src="<?php bloginfo('stylesheet_directory');?>/img/maria-creator-ninos-bonitos.png" alt="Maria, Creator of Ninos Bonitos">
			<div class="clear-both"></div>
		 </div>
		</section>
	
		</div><!--End Slide 4-->



	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0">
		<section class="texture-with-border">
			<div class="top" id="testimonials"></div>
				<h1>What They're Saying.</h1>
				
				<?php if(get_field('testimonials')): ?>
            		<?php while(the_repeater_field('testimonials')): ?>
            			<article class="quote-<?php the_sub_field('color');?>">
            				<div class="testimony">
  	    	    				<?php the_sub_field('text');?>
  	    	    				<div class="tail"></div>
  	    	    			</div>
  	    	    			<div class="said-by"><?php the_sub_field('said_by');?></div>
  	    	    		</article> 	    	 
  	    	      	<?php endwhile; ?>
          		<?php endif; ?>
          
          
				
			<div class="bottom"></div>
		</section>
	</div><!--End Slide 5--><div id="contact-hit"></div>

	
	<div class="slide contact-hit" id="slide6" data-slide="6">
		<section class="wrapper-780">
			<h1>We want to hear from you.</h1>
			<article class="float-left half">
				<h4>Product information and questions</h4>
				<?php the_field('product_information_and_questions');?>
				<h4>Wholesale, Sales & Distribution</h4>
				<?php the_field('wholesale,_sales_&_distribution');?>
			</article>
			<article class="float-right half">
				<h4>Media inquiries &amp; general contact:</h4>
				<?php the_field('media_inquiries_&_general_contact');?>
			</article>
			
			<article class="newsletter">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/join-our-mailing-list-graphic.png" alt="join our mailing list">
				<h5>Join our mailing list!</h5>
				<p class="center-align">You'll receive all sorts of fun newsletters and you'll be<br/>the first to know about our special offers.</p>
				

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://spokehq.us6.list-manage.com/subscribe/post?u=523187f8657195bc898ca5c13&amp;id=55f0adba4e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<div class="mc-field-group">
		<input type="email" value="Enter your email address" name="EMAIL" class="required email" id="mce-EMAIL">
		<input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button2">
	</div>
	<div id="mce-responses" class="clear">
	<div class="response" id="mce-error-response" style="display:none"></div>
	<div class="response" id="mce-success-response" style="display:none"></div>
	</div>
</form>
</div>
<!--OSG tailored to Bonitos Form-->
<em>Your privacy is important to us. Bonitos Products will never sell your information. You may unsubscribe from our list anytime.</em>
			</article>
			
		</section>
		
		<footer class="bottomnav">
			<section class="wrapper-780">
				<ul class="navigation1">
					<li class="home-nav">Home</li>
					<li class="home-nav">Our Products</li>
					<li class="our-mission">Our Mission</li>
					<li class="where-to-buy">Where to Buy</li>
				</ul>
				<ul class="navigation2">
					<li class="our-founder">Our Founder</li>
					<li class="what-theyre-saying">What They're Saying</li>
					<li class="contact-us">Contact Us</li>
				</ul>
				<a href="http://twitter.com/bonitosproducts" target="_blank" id="footer-twitter">
					<img src="<?php bloginfo('stylesheet_directory');?>/img/footer-twitter.png" alt="Follow Bonitos on Twitter">
				</a>

				<a href="https://www.facebook.com/BonitosProducts" target="_blank" id="footer-fb">
					<img src="<?php bloginfo('stylesheet_directory');?>/img/footer-fb.png" alt="Like Bonitos on Facebook">
				</a>
				<div class="clear-both"></div>				
				<em>Copyright &copy;&nbsp;<?php print date("Y"); ?> Bonitos Products LLC. All rights reserved.</em>
			</section>
		</footer>
		
	</div><!-- slide 6 -->
	
<?php get_footer(); ?>