<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-10-17
 * Time: 17:32
 * Template Name: Resources
 */
get_header(); ?>
<?php echo banner(); ?>
<?php if ( have_rows( 'resources' ) ): ?>
    <div class="resources-block">
        <div class="container">
            <h4>Click on the links to view available resources to aid in the specification of concrete products.</h4>
            <ul>
				<?php while ( have_rows( 'resources' ) ):the_row();
					$image = get_sub_field( 'image' );
					$image = aq_resize( $image['url'], 585, 315, true, true, true );
					$link  = get_sub_field( 'link' );
					?>
                    <li>
                        <a href="<?= $link['url']; ?>">
                            <img src="<?= $image; ?>" alt="">
                            <h3><?= $link['title']; ?></h3>
                        </a>
                    </li>
				<?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
