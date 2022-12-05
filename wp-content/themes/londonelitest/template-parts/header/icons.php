<?php
$phone = get_field('phone_number', 'option');
$linkedin = get_field('linkedin_url', 'option');
$facebook = get_field('facebook_url', 'option');
$twitter = get_field('twitter_url', 'option');

?>
<div class="links-block">
    <?php if ($phone): ?>
        <a class="icon phone" href="tel:<?= $phone ?>"></a>
    <?php endif;?>
    <?php if ($linkedin): ?>
        <a class="icon linkedin" href="<?= $linkedin ?>"></a>
    <?php endif;?>
    <?php if ($twitter): ?>
        <a class="icon twitter" href="<?= $twitter ?>"></a>
    <?php endif;?>
    <?php if ($facebook): ?>
        <a class="icon facebook" href="<?= $facebook ?>"></a>
    <?php endif;?>
</div>
