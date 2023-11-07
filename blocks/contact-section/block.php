<?php
$heading = block_field('heading', $echo = false);
$description = block_field('description', $echo = false);
$map = block_field('map', $echo = false);
$icon = block_field('icon', $echo = false);
?>

<section class="contact-section space-default">
    <div class="box-map">
        <div class='box-icon'>
            <div class="icon">
                <?php if($icon) {echo wp_get_attachment_image($icon, 'full');} ?>
            </div>
        </div>
        <?php if ($map) {
            echo $map;
        } ?>
    </div>
    
    <?php 
    if ($heading || $description) :
    ?>
    <div class="content">
        <?php if ($heading) { ?>
            <div class="heading"><?= $heading ?></div>
        <?php } ?>
        <?php if ($heading) { ?>
            <div class="description"><?= $description ?></div>
        <?php } ?>
    </div>
    <?php endif; ?>
</section>