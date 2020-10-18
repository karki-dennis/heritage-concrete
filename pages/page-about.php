<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-10-17
 * Time: 15:16
 * Template Name: About Us
 */
get_header(); ?>
<?php echo banner(); ?>
<?php
$introBlock = get_field( 'intro_block' );
?>
<section class="intro-block">
    <div class="container">
        <h3 class="section-heading"><?= $introBlock['heading']; ?></h3>
		<?= $introBlock['description']; ?>

    </div>
</section>
<div class="gallery-block">
    <div class="container">
		<?php
		$images = get_field( 'gallery' );
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
<?php get_footer(); ?>
