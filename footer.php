<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Heritage_Concrete
 */
?>
<?php if (is_front_page() ): ?>
    <div class="footer-location">
        <div class="footer-map">
			<?php
			$locationOne   = get_field( 'location_one', 'option' );
			$locationTwo   = get_field( 'location_two', 'option' );
			$locationThree = get_field( 'location_three', 'option' );
			$locationFour  = get_field( 'location_four', 'option' );
			if ( $locationOne ): ?>
                <div class="acf-map" data-zoom="16">
                    <div class="marker" data-lat="<?php echo esc_attr( $locationOne['lat'] ); ?>"
                         data-lng="<?php echo esc_attr( $locationOne['lng'] ); ?>"></div>
                    <div class="marker" data-lat="<?php echo esc_attr( $locationTwo['lat'] ); ?>"
                         data-lng="<?php echo esc_attr( $locationTwo['lng'] ); ?>">
                    </div>
                    <div class="marker" data-lat="<?php echo esc_attr( $locationThree['lat'] ); ?>"
                         data-lng="<?php echo esc_attr( $locationThree['lng'] ); ?>">
                    </div>
                    <div class="marker" data-lat="<?php echo esc_attr( $locationFour['lat'] ); ?>"
                         data-lng="<?php echo esc_attr( $locationFour['lng'] ); ?>">
                    </div>
                </div>
			<?php endif; ?>
        </div>
        <div class="footer-address">
            <ul>
                <li>
                    <h4>
                        <svg width="10.361" height="14.305">
                            <use xlink:href="#icon-location"></use>
                        </svg>
						<?php the_field( 'plant_one', 'option' ); ?></h4>
                    <p><?= $locationOne['address']; ?></p>
                </li>
                <li>
                    <h4>
                        <svg width="10.361" height="14.305">
                            <use xlink:href="#icon-location"></use>
                        </svg>
						<?php the_field( 'plant_two', 'option' ); ?></h4>
                    <p><?= $locationTwo['address']; ?></p>
                </li>
                <li>
                    <h4>
                        <svg width="10.361" height="14.305">
                            <use xlink:href="#icon-location"></use>
                        </svg>
						<?php the_field( 'plant_three', 'option' ); ?></h4>
                    <p><?= $locationThree['address']; ?></p>
                </li>
                <li>
                    <h4>
                        <svg width="10.361" height="14.305">
                            <use xlink:href="#icon-location"></use>
                        </svg>
						<?php the_field( 'plant_four', 'option' ); ?></h4>
                    <p><?= $locationFour['address']; ?></p>
                </li>
            </ul>
        </div>
    </div>
<?php endif; ?>
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            Copyright &copy; <?php echo date( 'Y' ); ?> Heritage Concrete. All Rights Reserved.
            <span>270 Presidential Drive, Wilmington, DE 19807</span>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
