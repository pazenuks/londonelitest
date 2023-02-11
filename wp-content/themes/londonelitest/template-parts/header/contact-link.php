<?php
$contact_url = get_field('contact_us_link_url', 'option');
$contact_link_text = get_field('contact_us_link_text', 'option');
$contact_link_color = get_field('contact_us_link_color');

?>
<div class="contact_link m-hidden">
    <?php if ($contact_url && $contact_link_text): ?>
        <a class="link" style="color:<?= ($contact_link_color) ?: 'black' ?>" href="<?= $contact_url ?>"><?= $contact_link_text ?></a>
    <?php else: ?>
        <a class="link" href="/contact-us">Contact</a>
    <?php endif;?>
</div>
