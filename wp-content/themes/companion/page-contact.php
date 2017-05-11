<?php
/* 
====================
	TEMPLATE NAME: Contact
====================
*/
get_header();
?>
<?php get_template_part('templates/page', 'header'); ?>
    <div id="primary" class="content-area">
        <main>


                    <div class="flex-content">
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

            <div id="contact-us" class="row">
                <div class="large-9 columns large-centered">

                    <div class="row section-spacing">
                        <div class="medium-6 large-6 columns base-content">
                            <h4>info@companion-medical.com</h4>

                            <img src="<?php echo THEME_IMAGES; ?>contact/insulin-injector-pens.png" alt="">

                        </div>
                        <aside class="medium-6 large-6 columns base-content" role="complementary">

                            <div class="contact-newsletter">
                                <?php get_template_part('panels/form-contact') ?>
                            </div>
                        </aside>
                    </div>

                </div>
            </div>


        </main>

    </div>
<?php get_template_part('panels/site-router'); ?>
<?php get_footer(); ?>