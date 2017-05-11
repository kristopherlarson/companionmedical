<section class="discover base-content section-spacing">

    <div class="row">
        <div class="large-7 large-centered columns text-center ">
            <?php get_template_part('images/svg-includes/circle') ?>
            <h2><?php echo get_field('section_one_heading') ?></h2>
        </div>

        <div class="large-8 large-centered columns">
            <div class="amped-content text-center">
                <?php echo get_field('section_one_text') ?>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="large-9 columns large-centered">

            <div class="row section-spacing item-one">
                <div class="medium-5 columns text-center">
                    <?php $image = get_field('section_two_image'); ?>
                    <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="medium-7 columns amped-content">
                    <h2><?php echo get_field('section_two_heading') ?></h2>
                    <p><?php echo get_field('section_two_text') ?></p>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="large-9 columns large-centered">

            <div class="row item-two">
                <div class="medium-7 columns amped-content mobile-bottom">
                    <h2><?php echo get_field('section_three_heading') ?></h2>
                    <p><?php echo get_field('section_three_text') ?></p>
                </div>
                <div class="medium-5 columns text-center mobile-top">
                    <?php $image = get_field('section_three_image'); ?>
                    <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="large-9 columns large-centered">

            <div class="row section-spacing item-three">
                <div class="medium-4 columns text-center">
                    <?php $image = get_field('section_four_image'); ?>
                    <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="medium-7 large-offset-1 columns amped-content">
                    <h2><?php echo get_field('section_four_heading') ?></h2>
                    <p><?php echo get_field('section_four_text') ?></p>
                </div>
            </div>

        </div>

</section>