<?php
$heading = block_field('heading', $echo = false);
$description = block_field('description', $echo = false);
$map = block_field('map', $echo = false);
?>

<section class='preview-cms-block-slides-main'>
    <h2>
        <?php
        if ($heading) {
            echo $heading;
        } else {
            echo 'Contact Section';
        }
        ?>
    </h2>
</section>