<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(
            array(
                'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
                'after'    => '</nav>',
                /* translators: %: Page number. */
                'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
            )
        );
        ?>


    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<?php if( have_rows('services') ): ?>
    <div class="services">
        <div class="main-block">
            <h2><?= get_field('section_title'); ?></h2>
            <p><?= get_field('section_content'); ?></p>
            <ul class="services-list">
                <?php while ( have_rows('services') ) : the_row(); ?>
                    <li class="service"><a href="<?= the_sub_field('service_link'); ?>"><?= the_sub_field('service_title'); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="view-all-block">
            <a class="link-wrapper"  href="/our-services">
                <span>View All</span>
            </a>
        </div>
    </div>

<?php endif; ?>

<?php
$block_1 = get_field('block_1');
$block_2 = get_field('block_2');
?>

<?php if ($block_2 && $block_1): ?>
<div class="section contact-blocks">
    <div class="contact-wrapper block_1">
        <?php if( $block_1 ): ?>
            <?= $block_1; ?>
        <?php endif; ?>
    </div>
    <div class="contact-wrapper block_2">
        <?php if( $block_2 ): ?>
            <?= $block_2 ?>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php  get_footer(); ?>
