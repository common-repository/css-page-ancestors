<?php
/*
Plugin Name: CSS Page Ancestors 
Author URI: http://giannis.in
Description: Add ancestors classes in your body_class to CSS control the anchestors of your page. The printed class names are ancestor-[slug] and ancestor-id-[id]
Version: 0.95
Author: Giannis Giannopoulos
*/
if ( !function_exists( 'add_all_ancestors_in_body_class' ) ) {
function add_all_ancestors_in_body_class( $classes ) {

$class = ''; // empty the class variable
$post= get_the_ID(); // get the id of the current page
$fathers = get_post_ancestors($post); // get his fathers
$fathers = array_reverse($fathers); // reverse the order (so users can overwrite classes for the closest ancestors)

foreach ($fathers as $father) { // for each page
	$class = $class.' ancestor-'.get_post_field( 'post_name',$father); // print the slug as ancestor-[slug]
	$class = $class.' ancestor-id-'.$father; // print the id as ancestor-id-[id]

}  // end foreach

$classes[] = $class; // add to global array of body_class


return $classes; // return the magic :)
}

add_filter( 'body_class', 'add_all_ancestors_in_body_class' ); // adding the filter

} // check if function exists