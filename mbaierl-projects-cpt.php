<?php
/*
Plugin Name: Projects Custom Post Type by mbaierl
Description: The Divi "Projects" Custom Post Type - in case you move away from Divi but still want to use the Projects.
Author:      Michael Baierl - Einfach Websites
Author URI:  https://mbaierl.com/
Version:     0.1
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: et_builder
Domain Path: /languages

Copyright 2020 Michael Baierl

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

//Exit if direct access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function mbaierl_setup_posttype() {
	if(post_type_exists('project')) return;

	// first load the translations
	load_plugin_textdomain('et_builder', false, 'mbaierl-divi-projects/languages');

	// then load the Divi code
	require_once(__DIR__.'/includes/divi-projects-cpt.php');

	// ... and execute it
	et_pb_register_posttypes();
}

// Divi runs with priority 0
add_action( 'init', 'mbaierl_setup_posttype', 10 );
