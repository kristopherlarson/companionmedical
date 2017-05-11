<?php
/* 
====================
	TEMPLATE NAME: Flex Content Full Screen Hero Image
====================
*/
get_header();
?>
<?php get_template_part('templates/page', 'header-full-background'); ?>
    <div id="primary" class="content-area">
        <main>

            <?php get_template_part('panels/flex-content'); ?>

            <?php get_template_part('panels/site-router'); ?>

        </main>
    </div>
<?php get_footer(); ?>