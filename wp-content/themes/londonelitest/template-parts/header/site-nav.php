<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
        <div class="menu-button-container">
            <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open">
				</span>
                <span class="dropdown-icon close">
                    <?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close', 40); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
            </button><!-- #primary-mobile-menu -->

        </div><!-- .menu-button-container -->
        <?php

        $widgets = load_template_part( 'template-parts/header/mobile-menu-widgets' );

        $contact_url = get_field('contact_us_link_url', 'option');
        $contact_link_text = get_field('contact_us_link_text', 'option');
        $contact_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page d-hidden"><a href="' . $contact_url .'">' . $contact_link_text . '</a></li>';
        wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'menu_class'      => 'menu-wrapper',
                'container_class' => 'primary-menu-container',
                'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s ' . $contact_link . '</ul>' . $widgets,
                'fallback_cb'     => false,
            )
        );
        ?>

    </nav><!-- #site-navigation -->
<?php
endif;
