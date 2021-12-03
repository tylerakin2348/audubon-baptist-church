<?php
/* 
* Load the function partials 
*/

require_once( get_template_directory() . 
	'/function-partials/clean-up-default-wp-settings.php');


/* Scripts */
require_once( get_template_directory() . 
	'/function-partials/scripts.php');


/* Layouts */
require_once( get_template_directory() . 
	'/function-partials/carbon-fields/construct-default-layouts.php');
	
require_once( get_template_directory() . 
	'/function-partials/carbon-fields/construct-homepage-layouts.php');
	
require_once( get_template_directory() . 
	'/function-partials/carbon-fields/construct-animal-type-layouts.php');
	
require_once( get_template_directory() . 
	'/function-partials/carbon-fields/construct-single-animal-layouts.php');
	
require_once( get_template_directory() . 
	'/function-partials/carbon-fields/construct-theme-options.php');


/* Custom Post Types */
require_once( get_template_directory() . 
	'/function-partials/custom-post-type/miniature-nubians.php');
	
	/* Custom Post Types */
require_once( get_template_directory() . 
'/function-partials/custom-post-type/sermons.php');

require_once( get_template_directory() . 
	'/function-partials/custom-post-type/great-pyrenees.php');
	
require_once( get_template_directory() . 
	'/function-partials/custom-post-type/for-sale.php');


/* Register Menu */
register_nav_menu('header_menu', 'Header Menu' );