<?php
/**
*   The Carbon Field layouts
*
*   See functions.php for the creation of these fields
*
*   https://carbonfields.net/
*
*   These particular fields created by @author Tyler Akin
*/
$sections = carbon_get_the_post_meta( 'crb_animal_type_fields' );
include(get_template_directory() . '/templates/carbon-fields/component-loop.php');