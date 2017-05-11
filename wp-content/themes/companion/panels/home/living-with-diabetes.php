<?php
$background_image = get_field('full_screen_image');
?>
<section class="lazyload living-with-diabetes background-cover"
                   data-bgset="<?php echo $background_image['url']?>">
    <div class="content-wrapper base-content">
        <div class="inner-wrap">
            <?php echo the_field('full_screen_content') ?>
        </div>
    </div>
</section>