<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/jquery.stellar.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/waypoints.min.js"></script>



<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js.js"></script>



<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/actions.js"></script>


<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=8511481; 
var sc_invisible=1; 
var sc_security="bdbfc1b1"; 
var sc_https=1; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost +
"statcounter.com/counter/counter.js'></"+"script>");</script>
<noscript><div class="statcounter"><a title="web stats"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/8511481/0/bdbfc1b1/1/"
alt="web stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

</body>
</html>