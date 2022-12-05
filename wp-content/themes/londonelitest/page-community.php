<?php /* Template Name: Community */

get_header(); ?>


<?php get_template_part( 'template-parts/content/content-page' );  ?>

<?php if( have_rows('tenants') ): ?>
    <div class="tenants">
        <?php while ( have_rows('tenants') ) : the_row(); ?>
            <div class="tenant">
                <img src="<?php the_sub_field('logo'); ?>"/>
                <div class="caption">
                    <?php the_sub_field('caption'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php  get_footer(); ?>