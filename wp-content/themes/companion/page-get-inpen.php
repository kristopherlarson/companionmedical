<?php
/* 
====================
	TEMPLATE NAME: Get InPen
====================
*/
get_header();
?>
<?php get_template_part('templates/page', 'header'); ?>
    <div id="primary" class="content-area">
        <main>

            <div class="row flex-content">
                <div class="large-9 large-centered columns base-content">

                    <div class="heading-svg">
                        <?php get_template_part('images/svg-includes/circle') ?>
                        <h1><?php the_title() ?></h1>
                    </div>

                </div>
            </div>

            <div class="row flex-content">
                <div class="large-9 large-centered columns base-content">

                    <div class="large-font-text">
                        <?php get_template_part('templates/loop', 'page'); ?>
                    </div>

                </div>
            </div>


            <div id="contact-us" class="row section-spacing">
                <div class="medium-6 large-7 columns text-center">
                    <img class="lazyload" data-src="<?php echo THEME_IMAGES; ?>contact/inpen-insulin-delivery-system.png" alt="">
                </div>
                <aside class="medium-6 large-5 columns base-content" role="complementary">
                    <div class="stay-updated">
                        <h2>Stay Updated</h2>
                        <p>Sign up to receive periodic updates via email.</p>
                        <p class="fine-print">(Your information is of the utmost importance to us and always kept confidential. It is never shared.)</p>
                    </div>

                    <div class="contact-newsletter">
                        <?php get_template_part('components/mailchimp/form') ?>
                    </div>
                </aside>
            </div>
        </main>
    </div>
<?php get_template_part('panels/site-router'); ?>
<?php get_footer(); ?>