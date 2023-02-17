<?php
/*Template Name: Services */

query_posts(array(
    'post_type' => 'service',
    'orderby' => array( 'post_date' => 'ASC')
)); ?>


<?php get_header(); ?>

<section class="wp-block-qi-blocks-columns qodef-gutenberg-section qodef--template qodef-col-num--2 qodef-col-layout--50 qodef-content--full-width custom-image-with-text"><div class="qodef-section-background-overlay"></div><div class="qodef-gutenberg-row">
        <div class="wp-block-qi-blocks-column qodef-gutenberg-column image-column">
            <div class="qodef-gutenberg-column-inner">
                <figure class="wp-block-image size-large">
                    <?= get_the_post_thumbnail() ?>
                </figure>
            </div>
        </div>
        <div class="wp-block-qi-blocks-column qodef-gutenberg-column qodef-block-f4a82d86 text-column bg-d-color-tetriary">
            <div class="qodef-gutenberg-column-inner">
                <div class="is-layout-constrained wp-block-group group-page-title">
                    <div class="wp-block-group__inner-container">
                        <h2 class="m-left-minus-50 color-secondary weight-light"><?= get_the_title() ?></h2>
                    </div>
                </div>
                <div class="is-layout-constrained wp-block-group group-text bg-m-color-tetriary">
                    <div class="wp-block-group__inner-container">
                        <?= get_the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

$reverse = false;

while (have_posts()) : the_post(); ?>

    <section class="service-section">
        <div class="service-wrapper <?php if ($reverse): ?> flip<?php endif;?>">
            <div>
                <div class="service-text">
                    <div>
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <?php the_excerpt() ?>
                        <a href="<?php the_permalink() ?>" class="read-more">Read more</a>
                    </div>
                </div>
                <?php
                    $iconUrl = get_field('service_icon');

                    if ($iconUrl):
                ?>
                    <img class="service-icon" src="<?= get_field('service_icon'); ?>" alt="<?php the_title() ?> icon"/>
                <?php endif; ?>
            </div>
            <div class="service-image">
                <div class="rect-img-wrapper">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
        if ($reverse) {
            $reverse = false;
        } else {
            $reverse = true;
        }
    ?>
<?php endwhile; ?>


<?php get_footer(); ?>

