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
    <div id="horizontal" class="entry-content">

        <div class="service-page-wrapper">
            <div class="left-section">
                <div class="left-wrapper">
                    <h1><?= the_title(); ?></h1>
                    <?= the_excerpt() ?>
                </div>
            </div>
            <div class="middle-section">
                <?= get_the_post_thumbnail() ?>
            </div>
            <div class="right-section">
                <div class="right-wrapper">
                <?= the_content(); ?>
            </div>
        </div>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<script>
    function transformScroll(event) {
        if (!event.deltaY) {
            return;
        }

        event.currentTarget.scrollLeft += event.deltaY + event.deltaX;
        event.preventDefault();
    }

    var element = document.getElementById('horizontal');
    element.addEventListener('wheel', transformScroll);
</script>

<?php  get_footer(); ?>
