<?php
/* 
====================
	FOOTER
====================
*/
?>
</div> <!-- /.site-content -->

</div><!-- /#main-container -->

<footer class="footer">


    <div class="social-bar">
       <?php /* <a href="" target="_blank">
            get_template_part('images/svg-includes/facebook');
        </a>
        <a href="" target="_blank">
           get_template_part('images/svg-includes/instagram');
        </a>
        <a href="" target="_blank">
          get_template_part('images/svg-includes/twitter');
        </a>*/ ?>

    </div>


    <div class="row bottom-bar">
        <div class="large-6 columns">
            <nav class="footer-nav">
                <ul>
                    <li><a href="/terms-privacy/">Terms & Privacy |</a></li>
                    <li><a href="/contact/">Contact Us |</a></li>
                    <li><a href="/get-inpen/">Stay Updated</a></li>
                </ul>
            </nav>
        </div>
        <div class="large-6 columns">
            <p class="copyright">
                &copy; <?php echo date('Y'); ?>
                <a href="<?php echo esc_url(home_url()); ?>" rel="bookmark">
                    <?php bloginfo('name'); ?>
                </a>
                <span class="rights-reserved"><?php _e('All Rights Reserved', 'amped-theme'); ?></span> | <a
                    href="https://tenthmusedesign.com" target="_blank"> Inspired by Tenth Muse Design</a>
            </p>

        </div>
    </div>

</footer>

<?php wp_footer(); ?>

<?php include_once('images/svg/dist/svg-master.svg'); ?>

</body>
</html>
