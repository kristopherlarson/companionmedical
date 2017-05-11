<?php
/* 
====================
	PAGE HEADER
====================
*/

global $post;

$header_image_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'sub-page');

?>


<header class="page-header full-back" role="banner">
	<div class="hero-sub background-cover" style="background-image: url('<?php echo $header_image_large[0]; ?>');">


	</div>
</header>
