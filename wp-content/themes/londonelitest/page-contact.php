<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/content-page' );  ?>

<?php if (get_field('text_section_1')): ?>
<div class="entry-content">
    <div class="contact-wrapper">
        <div class="map">
            <div class="map-iframe-wrapper"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?= get_field('google_map_url'); ?>"></iframe></div>
        </div>
        <div class="contact-details">
            <?= get_field('text_section_1');  ?>
            <div class="contact-icon-with-text">
                <span class="icon phone-filled"></span>
                <a class="bold" href="tel:<?= get_field('phone_number');?>"><?= get_field('phone_number'); ?></a>
            </div>
            <?= get_field('text_section_2');  ?>
            <div class="contact-icon-with-text">
                <span class="icon mail"></span>
                <a class="bold" href="mailto:<?= get_field('email');?>"><?= get_field('email'); ?></a>
            </div>
            <?= get_field('text_section_3');  ?>
            <div class="contact-icon-with-text">
                <span class="icon location"></span>
                <span class="text-green bold"><?= get_field('address'); ?></span>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php  get_footer(); ?>
