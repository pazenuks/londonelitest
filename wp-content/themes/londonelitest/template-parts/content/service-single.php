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
        </div>
        <div class="service-arrow">Swipe Right</div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<script>
    function transformScroll(event) {
        if (!event.deltaY) {
            return;
        }
        if (jQuery(window).width() > 767) {
            event.currentTarget.scrollLeft += event.deltaY + event.deltaX;
            event.preventDefault();
            var arrow =  jQuery('.service-arrow');
            if (event.currentTarget.scrollLeft > (parseFloat(jQuery('#horizontal').css('width')) / 2)) {
                arrow.addClass('active');
                arrow.html('Previous Page');
            } else {
                arrow.removeClass('active');
                arrow.html('Swipe Right');
            }
        }
    }

    var element = document.getElementById('horizontal');
    element.addEventListener('wheel', transformScroll);


    jQuery(window).ready(function() {

        jQuery('#horizontal').on('scroll', function(event) {
            transformScroll(event);
        });

        jQuery('.service-arrow').on('click touch', function() {
            var arrow = jQuery(this);
            var panel = jQuery('#horizontal');
            if ( arrow.hasClass('active') ) {
                panel.animate({
                    scrollLeft: 0
                }, 500);
                arrow.html('Swipe Right');
            } else {
                panel.animate({
                    scrollLeft: parseInt(panel.css('width'))
                }, 500);
                arrow.html('Previous Page');
            }
            arrow.toggleClass('active');

        })
    })

</script>

<?php  get_footer(); ?>
