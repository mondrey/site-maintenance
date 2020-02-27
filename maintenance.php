<?php
/**
 * Plugin Name: Site Maintenance
 * Description: Site Maintenance
 * Author: mondrey
 * Version: 1.0
 *
 * Text Domain: site-maintenance
 *
 * Site Maintenance is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with Site Maintenance. If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Activate WordPress Maintenance Mode
function wp_maintenance_mode(){
    if(!current_user_can('edit_themes') || !is_user_logged_in()){
        wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance. We will be back on-line shortly!');
    }
}
add_action('get_header', 'wp_maintenance_mode');