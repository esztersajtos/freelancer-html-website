<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cegesnyelvtanfolyam
 */
$lablec_szovege = get_field('lablec_szoveg');
?>
<footer id="colophon" class="site-footer">
<div class="ui inverted vertical footer segment" id="contact">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="three wide column">
                    <h4 class="ui inverted header">About</h4>
                    <div class="ui inverted link list">
                        <a class="item" href="#training-slides">Céges tanfolyamok</a>
                        <a class="item" href="#private-classes">Magánórák</a>
                        <a class="item" href="#about-me">Rólam</a>
                        <a class="item" href="#proposal">Ajánlatkérő</a>
                    </div>
                </div>
                <div class="ten wide column">
                    <h4 class="ui inverted header">Kapcsolat</h4>
                    <p><?php echo($lablec_szovege); ?></p>
                </div>
            </div>
        </div>
</div>
<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cegesnyelvtanfolyam' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cegesnyelvtanfolyam' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cegesnyelvtanfolyam' ), 'cegesnyelvtanfolyam', '<a href="http://www.digitalyogis.com">Szabolcs Bokonyi</a>' );
				?>
		</div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</div>
</body>
</html>
