<?php 
/* 
====================
	FONTS
====================
*/

add_action( 'wp_head', 'amped_fonts', 0, 0 );

function amped_fonts() {

    ?>

    <script>
        WebFontConfig = {
            google : { families: [ 'Raleway:400,400i,600,600i,700,700i' ] },

        };
        (function() {
            var wf = document.createElement( 'script' );
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName( 'script' )[0];
            s.parentNode.insertBefore( wf, s );
        })();
    </script>

    <?php

}