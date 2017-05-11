<?php
/* 
====================
	PAGE HEADER
====================
*/


	// setups srcset for image
	$id = get_post_thumbnail_id();
	$src = wp_get_attachment_image_src( $id, 'full' );
	$srcset = wp_get_attachment_image_srcset( $id, 'full' );
	$sizes = wp_get_attachment_image_sizes( $id, 'full' );
	$alt = get_post_meta( $id, '_wp_attachment_image_alt', true);

?>


<header class="page-header ratio-image" role="banner">

	<img src="<?php echo esc_attr( $src[0] );?>"
		 srcset="<?php echo esc_attr( $srcset ); ?>"
		 sizes="<?php echo esc_attr( $sizes );?>"
		 alt="<?php echo esc_attr( $alt );?>" />


</header>
