<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Heritage_Concrete
 */

get_header();
?>
<?php echo banner(); ?>
    <main id="primary" class="site-main">
        <div class="container">
			<?php the_field( 'page_content' ); ?>
        </div>
    </main><!-- #main -->

<?php
get_footer();
