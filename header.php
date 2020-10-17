<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Heritage_Concrete
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none; visibility: hidden">

    <symbol id="icon-location">
        <path d="M5.181 0A5.186 5.186 0 0 0 0 5.181c0 3.545 4.636 8.75 4.834 8.969a.467.467 0 0 0 .694 0c.2-.22 4.834-5.424 4.834-8.969A5.187 5.187 0 0 0 5.181 0zm0 7.787a2.606 2.606 0 1 1 2.606-2.606 2.609 2.609 0 0 1-2.606 2.606z"/>
    </symbol>

</svg>

<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e( 'Skip to content', 'heritage-concrete' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container container--flex">
            <div class="site-branding">
				<?php
				the_custom_logo();
				?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
                <a class="top-phone" href="tel:3473861055">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.983" height="15.016">
                        <path d="M14.591 11.017l-2.1-2.1a1.394 1.394 0 0 0-2.32.524 1.426 1.426 0 0 1-1.646.9 6.462 6.462 0 0 1-3.891-3.892 1.357 1.357 0 0 1 .9-1.646 1.394 1.394 0 0 0 .524-2.32l-2.1-2.1a1.494 1.494 0 0 0-2.021 0L.515 1.805c-1.422 1.5.15 5.463 3.667 8.981s7.483 5.164 8.98 3.667l1.422-1.422a1.5 1.5 0 0 0 .007-2.014z"
                              fill="CurrentColor"/>
                    </svg>
                    <span>(347) 386 – 1055</span></a>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
