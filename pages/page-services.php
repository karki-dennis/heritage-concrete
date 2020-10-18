<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-10-17
 * Time: 19:46
 * Template Name: Services
 */
get_header(); ?>
<?php echo banner(); ?>
<?php if ( have_rows( 'services' ) ): ?>
    <section class="services-block">
		<?php while ( have_rows( 'services' ) ):the_row(); ?>
            <div class="service__item">
                <div class="container">
                    <h2><?php the_sub_field( 'heading' ); ?></h2>
					<?php the_sub_field( 'description' ); ?>
                    <div class="gallery-block">
						<?php
						$images = get_sub_field( 'gallery' );
						if ( $images ): ?>
                            <ul class="gallery">
								<?php foreach ( $images as $image ):
									$image = aq_resize( $image['url'], 400, 330, true, true, true )
									?>
                                    <li>
                                        <img src="<?php echo $image; ?>" alt="">
                                    </li>
								<?php endforeach; ?>
                            </ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>
		<?php endwhile; ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
