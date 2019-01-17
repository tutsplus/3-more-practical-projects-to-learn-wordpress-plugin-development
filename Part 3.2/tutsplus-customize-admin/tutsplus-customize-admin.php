<?php
/*
Plugin Name: 	Tutsplus Customize Admin
Plugin URI: 	https://github.com/rachelmccollin/tutsplus-plugin-development
Description: 	Plugin to accompany tutsplus course on plugin development. Cusomizes the admin screens by removing some dashboard widgets and adding a note to the post editing screen.
Version: 		3.1
Author: 		Rachel McCollin
Author URI: 	http://rachelmccollin.com
Text Domain: 	tutsplus
License: 		GPLv2
*/


/***********************************************************************************************
Edit dashboard widgets
***********************************************************************************************/
function tutsplus_remove_dashboard_widgets() {
	
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side');
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side');
	
}
add_action( 'wp_dashboard_setup', 'tutsplus_remove_dashboard_widgets' );


/***********************************************************************************************
Add a new widget to the dashboard
***********************************************************************************************/
function tutsplus_add_welcome_widget() {
	
	add_meta_box( 'tutsplus_welcome_widget', 'Welcome', 'tutsplus_welcome_widget_callback', 'dashboard', 'side', 'high' );	
	
}
add_action( 'wp_dashboard_setup', 'tutsplus_add_welcome_widget' );

function tutsplus_welcome_widget_callback() { ?>
	
	<p>This content management system lets you edit the pages and posts on your website.</p>
	
	<h4>Editing and adding content</h4>
	
	<p>Your site consists of the following content, which you can access via the menu on the left:</p>
	
	<ul>
		<li><strong>Posts</strong> - blog posts - you can edit these and add more.</li>
		<li><strong>Media</strong> - images and documents which you can upload via the Media menu on the left or within each post or page. Most media is uploaded into a post, page or resource except articles which you upload using the Media page.</li>
		<li><strong>Pages</strong> - static pages which you can edit.</li>
		<li><strong>Comments</strong> - manage comments posted by your members here or in each post's editing screen.
		<li><strong>Products</strong> - everything you sell via this website or via an affiliate link.</li>
	</ul>
	
	<p>On each editing screen there are instructions to help you add and edit content.</p>
	
	<h4>Configuring settings</h4>
	
	<p>There are also a number of screens which let you configure various options. Ones you may sometimes need to use are:</p>
	
	<ul>
		<li><strong>WooCommerce</strong> - here you can amend your shop settings, such as PayPal details, the email notifications sent to customers, shipping, tax and more.</li>
		<li><strong>Appearance</strong> - add new pages to the navigation menu or add widgets to the sidebar or footer. It's unlikely you'll need to use any of these.</li>
		<li><strong>Settings</strong> - here you can change settings for your site such as the way urls are displayed and the size of media. Again it's unlikely you'll need to use this.</li>
	</ul>
	
	<p>At the bottom of the menu to the left, the 'Manuals' link takes you to a set of video guides which will help you learn how to use WordPress.</p>
	
	<p>Below these instructions are some more widgets which give you access to information on purchases made via your e-commerce system, which is called WooCommerce.</p>
	
<?php }
