<section class="testi base-content">

    <div class="row">
        <div class="large-9 columns large-centered">
            <div class="testi-wrap">

                <?php

                if (have_rows('testimonials', 'option')): ?>


                    <?php

                    while (have_rows('testimonials', 'option')) : the_row();

                        $testimonial_title = get_sub_field('title');
                        $testimonial = get_sub_field('the_testimonial');
                        $author = get_sub_field('author');
                        $author_business = get_sub_field('business_name'); ?>

                        <div class="inner-wrap">

                            <h2 class="testi-title"><?php echo $testimonial_title ?></h2>
                            <p class="testi-content"><?php echo $testimonial ?> </p>
                            <p class="testi-author"><?php echo $author ?></p>
                            <p class="testi-author-biz"><?php echo $author_business ?></p>

                        </div>

                    <?php endwhile;

                else :

                // else nothing

                endif;

                ?>


            </div>
        </div>
    </div>

</section>