<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->


<?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer default-max-width">
        <?php
        edit_post_link(
            sprintf(
            /* translators: %s: Post title. Only visible to screen readers. */
                esc_html__( 'Edit %s', 'twentytwentyone' ),
                '<span class="screen-reader-text">' . get_the_title() . '</span>'
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
    </footer><!-- .entry-footer -->
<?php endif; ?>

<footer class="site-footer-wrapper">
    <div  id="colophon" class="site-footer">
        <div class="site-name">
            <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php else : ?>
                <?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
                    <?php if ( is_front_page() && ! is_paged() ) : ?>
                        <?php bloginfo( 'name' ); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div><!-- .site-name -->
        <div class="site-info">
            <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
            <?php if ( has_nav_menu( 'footer' ) ) : ?>
                <nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
                    <ul class="footer-navigation-wrapper">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'items_wrap'     => '%3$s',
                                'container'      => false,
                                'depth'          => 1,
                                'link_before'    => '<span>',
                                'link_after'     => '</span>',
                                'fallback_cb'    => false,
                            )
                        );
                        ?>
                    </ul><!-- .footer-navigation-wrapper -->
                </nav><!-- .footer-navigation -->
            <?php endif; ?>
            <?php get_template_part( 'template-parts/header/icons' ); ?>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<?php get_template_part( 'template-parts/content/gallery' ); ?>

</body>
</html>
