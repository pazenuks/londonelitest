<?php
/**
 * Services Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

?>
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