<?php

if ( $query_result->have_posts() ) {
	while ( $query_result->have_posts() ) :
		$query_result->the_post();
		echo qi_blocks_get_block_list_template_part( 'blocks/product-list', 'layouts/' . $layout, '', $params );
	endwhile; // End of the loop.
} else {
	// Include global posts not found
	qi_blocks_template_part( 'woocommerce', 'templates/parts/posts-not-found' );
}

wp_reset_postdata();
