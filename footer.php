<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omotolani
 */

?>

	</div><!-- #content -->

	<div class="social">
        <a href="#"><span class="milk fb">Facebook</span></a>
        <a href="#"><span class="milk tw">Twitter</span></a>
        <a href="#"><span class="milk in">LinkedIn</span></a>
        <a href="#"><span class="milk sk">Skype</span></a>
        <a href="#"><span class="milk pi">Pinterest</span></a>
        <a href="#"><span class="milk yo">Youtube</span></a>
        <a href="#"><span class="milk tr">Trip Advisor</span></a>
        <a href="#"><span class="milk wh">Whatsapp</span></a>
        <a href="#"><span class="milk sn">Snapchat</span></a>
    </div>
  <a class="chevron" href="#">Up</a>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'omotolani' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'omotolani' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'omotolani' ), 'omotolani', '<a href="http://underscores.me/" rel="designer">Olayinka Ogunwemimo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
