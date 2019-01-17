<?php
/*
Plugin Name:	Tutsplus Section Menus
Plugin URI:		https://github.com/rachelmccollin/tutsplus-plugin-development
Description:	Plugin to accompany tutsplus course on plugin development. Adds a section menu to the sidebar.
Version:		2.2
Author:			Rachel McCollin
Author URI:		https://rachelmccollin.com 
TextDomain:		tutsplus
License:		GPLv2
*/

/***************************************************************************
	Check if the current page is the top level page
***************************************************************************/
function tutsplus_check_top_level_page(){
	
	// check if we're on a page
	if ( is_page() ) {
		
		global $post;
		
		//check if the page has parents
		if ( $post->post_parent ) {
			
			//fetch higher level posts
			$parents = array_reverse( get_post_ancestors( $post->ID ));
			
			// get the top level ancestor
			return $parents[0];
			
		}
		
		return $post->ID;
		
	}
	
}