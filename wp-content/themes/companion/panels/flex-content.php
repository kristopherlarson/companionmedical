<div class="flex-content">

    <div class="row">
        <div class="large-9 large-centered columns base-content">

            <div class="heading-svg">
                <?php get_template_part('images/svg-includes/circle') ?>
                <h1><?php the_title() ?></h1>
            </div>

        </div>
    </div>

    <?php // check if the flexible content field has rows of data
    if (have_rows('flex_panel')):

        // loop through the rows of data
        while (have_rows('flex_panel')) : the_row();

            if (get_row_layout() == 'content_editor'): ?>


                <div class="row flex-content-wrap">
                    <div class="large-9 large-centered columns amped-content base-content">

                        <?php // main content boxes

                        the_sub_field('sub_content_editor'); ?>

                    </div>
                </div>


            <?php elseif (get_row_layout() == 'full_screen_image'):

                // background image with text to the right

                $background_image = get_sub_field('banner_image');
                ?>

                <div class="lazyload cta-full-screen-image background-cover"
                     data-bgset="<?php echo $background_image['url'] ?>">
                    <div class="content-wrapper base-content">
                        <div class="inner-wrap">
                            <?php the_sub_field('content_editor'); ?>
                        </div>
                    </div>
                </div>


            <?php elseif (get_row_layout() == 'content_editor_large_font'):

                // special content box with larger text

                ?>


                <div class="row">
                    <div class="large-9 large-centered columns base-content">

                        <div class="large-font-text">
                            <p><?php the_sub_field('large_font_editor'); ?></p>
                        </div>

                    </div>
                </div>


            <?php elseif (get_row_layout() == 'tab_items'): ?>

                <?php if (have_rows('the_tab_items')):

                    // Tab Items
                    ?>

                    <div class="row">
                        <div class="large-9 large-centered columns base-content">

                            <div class="tabs-wrap">
                                <ul class="accordion"
                                    data-responsive-accordion-tabs="tabs small-accordion medium-tabs"
                                    data-deep-link="true" data-multi-expand="true">


                                    <?php

                                    // Set count
                                    $count = 1;

                                    while (have_rows('the_tab_items')) : the_row();

                                        $tab_image = get_sub_field('tab_image');
                                        $active = $count === 1 ? 'is-active' : ''; ?>


                                        <li class="accordion-item<?php echo ' ' . $active; ?>"
                                            data-accordion-item>
                                            <a href="#"
                                               class="accordion-title"><?php the_sub_field('tab_title'); ?></a>
                                            <div class="accordion-content" data-tab-content>
                                                <img src="<?php echo $tab_image['url'] ?>"
                                                     alt="<?php echo $tab_image['alt'] ?>">
                                                <div class="tab-text">
                                                    <h4><?php the_sub_field('tab_title'); ?></h4>
                                                    <?php the_sub_field('tab_content'); ?>
                                                </div>
                                            </div>
                                        </li>

                                        <?php $count++; ?>

                                    <?php endwhile; ?>

                                </ul>
                            </div>

                        </div>
                    </div>

                <?php else :

                    // no rows found

                endif;

                ?>


            <?php elseif (get_row_layout() == 'newsletter_sign'):

                // News Letter
                ?>

                <div id="contact-us" class="newsletter-form section-spacing">
                    <div class="row">
                        <div class="large-10 large-centered columns base-content">

                            <div class="newletter-content">
                                <?php the_sub_field('news_letter_text'); ?>
                            </div>
                            <?php get_template_part('components/mailchimp/form') ?>

                        </div>
                    </div>
                </div>

            <?php endif;

        endwhile;

    else :

        // no layouts found

    endif;

    ?>

</div>