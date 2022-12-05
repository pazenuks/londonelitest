<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$title = str_replace(' ',' <div class="title-divider"></div> ', the_title('','', false));
?>

<?php if ( ! is_front_page() ) : ?>
    <header class="entry-header">
        <div class="header-content">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
<?php elseif ( has_post_thumbnail() ) : ?>
    <header class="entry-header homepage">
        <div class="header-content">
            <h1 class="entry-title"><?= $title; ?></h1>
            <a class="button primary" href="<?= get_field('banner_cta_url'); ?>" ><?= get_field('banner_cta'); ?></a>
        </div>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
<?php endif; ?>