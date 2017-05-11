<?php
/*
====================
	Home Page
====================
*/
get_header();
?>
<main>

    <?php get_template_part('panels/home/main-slider'); ?>

    <?php get_template_part('panels/home/box-nav'); ?>

    <?php get_template_part('panels/home/discovery'); ?>

    <?php get_template_part('panels/home/living-with-diabetes'); ?>

    <?php get_template_part('panels/testimonials-slider'); ?>

    <?php get_template_part('panels/site-router'); ?>

</main>
<?php get_footer(); ?>
