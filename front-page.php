<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-10-16
 * Time: 18:05
 */
get_header(); ?>
<?php if ( have_rows( 'home_slider' ) ): ?>

    <div class="hero-slider">
		<?php while ( have_rows( 'home_slider' ) ):the_row();
			$image       = get_sub_field( 'image' );
			$heading     = get_sub_field( 'heading' );
			$description = get_sub_field( 'description' );
			?>
            <div class="slider__item" style="background: url(<?php echo $image['url'] ?>)">
                <div class="container">
                    <div class="slider__content">
                        <h2><?php echo $heading ?></h2>
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
		<?php endwhile; ?>
    </div>

<?php endif; ?>
<section class="about-block">
    <div class="container">
		<?php
		$images = get_field( 'history_gallery' );
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
        <div class="content-block">
			<?php
			$about = get_field( 'heritage_history' );
			?>
            <h3><?php echo $about['heading']; ?></h3>
            <span class="sub-heading">
                <?php echo $about['sub_heading']; ?>
            </span>
			<?php echo $about['description']; ?>
            <div class="btn-group">
                <a href="/about" class="btn btn-primary">About us</a>
            </div>
        </div>
    </div>
</section>
<?php if ( have_rows( 'focus_block' ) ): ?>
    <section class="focus-block">
        <div class="container">
            <h4><?php echo the_field( 'focus_heading' ); ?></h4>
            <div class="focus">
				<?php while ( have_rows( 'focus_block' ) ):the_row();
					$image       = get_sub_field( 'image' );
					$heading     = get_sub_field( 'heading' );
					$description = get_sub_field( 'description' );
					$link        = get_sub_field( 'link' );
					?>
                    <div class="focus-item clearfix">
                        <img src="<?php echo $image['sizes']['std-image'];; ?>"
                             alt="<?php echo $heading; ?>">

                        <div class="content-block">
                            <h2><?php echo $heading; ?></h2>
                            <p><?php echo $description; ?></p>
                            <a href="<?php echo $link; ?>" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php
$resource  = get_field( 'resources_image_content_block' );
$image     = $resource['image'];
$img       =  aq_resize( $image['url'], 600, 330, true, true, true );
$link =  $resource['link'];
?>
<?php if ( $img || $resource['heading'] ): ?>
<?php endif; ?>
<section id="resources-block" class="c-image-content">
    <div class="container">
        <div class="image"><img src="<?= $img ?>" alt=""></div>
        <div class="content-block">
            <h2> <?= $resource['heading'] ?></h2>
            <p><?= $resource['description'] ?></p>
            <div class="btn-group">
                <a class="btn btn-secondary" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
            </div>
        </div>
    </div>
</section>

<?php
$products = get_field( 'products_image_content_block' );
$image    = $products['image'];
$img      = aq_resize( $image['url'], 600, 330, true, true, true );
$link =  $products['link'];
?>
<?php if ( $img || $products['heading'] ): ?>
<?php endif; ?>
<section id="products-block" class="c-image-content">
    <div class="container">
        <div class="content-block">
            <h2> <?= $products['heading'] ?></h2>
            <p><?= $products['description'] ?></p>
            <div class="btn-group">
                <a class="btn btn-secondary" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
            </div>
        </div>
        <div class="image"><img src="<?= $img ?>" alt=""></div>
    </div>
</section>
<?php get_footer(); ?>
