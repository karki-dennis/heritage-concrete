<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-10-17
 * Time: 23:36
 * Template Name: Locations
 */
get_header(); ?>
<?php echo banner(); ?>
<div class="locations-block">
    <div class="container">
        <div class="intro-block">
			<?php the_field( 'intro_content' ) ?>
        </div>
        <div class="locations-map">

			<?php
			$locationOne   = get_field( 'location_one', 'option' );
			$locationTwo   = get_field( 'location_two', 'option' );
			$locationThree = get_field( 'location_three', 'option' );
			$locationFour  = get_field( 'location_four', 'option' );
			if ( $locationOne ): ?>
                <div class="map-wrap">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr( $locationOne['lat'] ); ?>"
                             data-lng="<?php echo esc_attr( $locationOne['lng'] ); ?>"></div>
                    </div>
                    <div class="location-address">
                        <h4>
                            <svg width="10.361" height="14.305">
                                <use xlink:href="#icon-location"></use>
                            </svg>
		                    <?php the_field( 'plant_one', 'option' ); ?></h4>
                        <p><?= $locationOne['address']; ?></p>
                    </div>
                </div>
			<?php endif; ?>
			<?php if ( $locationTwo ): ?>
                <div class="map-wrap">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr( $locationTwo['lat'] ); ?>"
                             data-lng="<?php echo esc_attr( $locationTwo['lng'] ); ?>">
                        </div>
                    </div>
                    <div class="location-address">
                        <h4>
                            <svg width="10.361" height="14.305">
                                <use xlink:href="#icon-location"></use>
                            </svg>
			                <?php the_field( 'plant_two', 'option' ); ?></h4>
                        <p><?= $locationTwo['address']; ?></p>
                    </div>
                </div>
			<?php endif; ?>
			<?php if ( $locationThree ): ?>
                <div class="map-wrap">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr( $locationThree['lat'] ); ?>"
                             data-lng="<?php echo esc_attr( $locationThree['lng'] ); ?>">
                        </div>
                    </div>
                    <div class="location-address">
                        <h4>
                            <svg width="10.361" height="14.305">
                                <use xlink:href="#icon-location"></use>
                            </svg>
			                <?php the_field( 'plant_three', 'option' ); ?></h4>
                        <p><?= $locationThree['address']; ?></p>
                    </div>
                </div>
			<?php endif; ?>
			<?php if ( $locationFour ): ?>
                <div class="map-wrap">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr( $locationFour['lat'] ); ?>"
                             data-lng="<?php echo esc_attr( $locationFour['lng'] ); ?>">
                        </div>
                    </div>
                    <div class="location-address">
                        <h4>
                            <svg width="10.361" height="14.305">
                                <use xlink:href="#icon-location"></use>
                            </svg>
			                <?php the_field( 'plant_four', 'option' ); ?></h4>
                        <p><?= $locationFour['address']; ?></p>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
