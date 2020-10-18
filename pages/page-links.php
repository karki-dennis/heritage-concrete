<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-10-17
 * Time: 20:29
 * Template Name: Industry Links
 */
get_header(); ?>
<?php echo banner(); ?>
<section class="link-block">
	<div class="container">
		<?php the_field( 'page_content' ); ?>
	</div>
</section><!-- #main -->
<?php get_footer(); ?>
