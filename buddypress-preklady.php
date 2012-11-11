<?php
/*
Plugin Name: BuddyPress překlad
Plugin URI: http://wpguru.eu/download/cestina-buddypress/
Description: Plugin, který přídá do vašeho buddypress další jazyky.
Version: 1.2
Author: Expres-Web.cz
Author URI: http://wpguru.eu
Text Domain: bpt

"
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the BuddyPress překlad.
 *
 * @since 1.0
 */
function bpt_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/buddypress-preklad/pomo/' . apply_filters( 'buddypress_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'buddypress', $mofile );
}
add_action( 'bp_loaded', 'bpt_load_textdomain' );
