<?php /* Template Name: About Us */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/content-page' );  ?>

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
            <a class="link-wrapper">
                <span href="/view-all">View All</span>
            </a>
        </div>
    </div>

<?php endif; ?>
<?php  get_footer(); ?>
