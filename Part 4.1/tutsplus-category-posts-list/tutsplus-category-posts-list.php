<?php
/*
Plugin Name: 	Tutsplus List Latest Post By Category
Plugin URI: 	https://github.com/rachelmccollin/tutsplus-plugin-development
Description: 	Plugin to accompany tutsplus course on plugin development. Outputs the most recent post in each category with a featured image.
Version: 		4.1
Author: 		Rachel McCollin
Author URI: 	http://rachelmccollin.com
Text Domain: 	tutsplus
License: 		GPLv2
*/

/*********************************************************************************
Enqueue stylesheet
*********************************************************************************/

/***********************************************************************************************
Fetch latest post in up to four catgegories and output them with their featured image
***********************************************************************************************/
function tutsplus_category_post_listing() {
	
	$args = array(
		'orderby' => 'rand',
		'number' => 3
	);
	
	$categories = get_categories( $args );
	
	if ( $categories ) { ?>
		
		<section class="category-posts">
			
			<?php echo '<h2>' . __( 'Latest Posts', 'tutsplus' ) . '</h2>';
				
			foreach( $categories as $category ) {
				
				
				
			}
				
			?>
		</section>
		
	<?php }
	
}