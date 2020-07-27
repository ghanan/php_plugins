<?php
/* Information Header Goes here */
/*
  Plugin Name: Sustituciones en el cuerpo
  Plugin URI: http://antovar.260mb.com
  Description: Plugin para sustituir cadenas en el cuerpo
  Author: Antonio Tovar
  Version: 1.0
  Author URI: http://antovar.260mb.com
*/
// include() or require() any necessary files here...
// include_once('includes/sustituye.php');
// Settings and/or Configuration Details go here...
// Tie into WordPress Hooks and any functions that should run on load.
add_filter('the_content', 'atc_sustituye');

// "Private" internal functions named with a leading underscore
//function _diggthis_get_post_url() { }
// The "Public" functions
function atc_sustituye($input) {
    return str_replace('o', '0', $input);
}
/* EOF */