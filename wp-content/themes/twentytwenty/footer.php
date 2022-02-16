<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">

    <div class="section-inner">

        <div class="footer-credits">

            <p class="footer-copyright">&copy;
                <?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </p>

            <!-- Footer Custom Field -->



            <!-- .footer-copyright -->
            <?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

            <p class="powered-by-wordpress">
                <a href='https://wordpress.org/'>
             <?php $custom_opt = get_option( 'my_field', '' );
			 echo $custom_opt; ?>
                </a>
            </p><!-- .powered-by-wordpress -->

        </div><!-- .footer-credits -->

        <a class="to-the-top" href="#site-header">
            <span class="to-the-top-long">
                <?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
            </span><!-- .to-the-top-long -->
            <span class="to-the-top-short">
                <?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
            </span><!-- .to-the-top-short -->
        </a><!-- .to-the-top -->

    </div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
</script>

</body>

</html>