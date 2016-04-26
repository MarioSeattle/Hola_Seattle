<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _hola
 */

?>

	</div><!-- #content -->
</div><!-- #page -->
</div><!-- .container -->
<div class="container">
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'myfirstheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'myfirstheme' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( esc_html__( 'Design by Mario Gomez', 'SSH' ), 'SSH', '<a href="" rel="designer">Mario Gomez</a>' ); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>
