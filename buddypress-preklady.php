<?php
/*
Plugin Name: BuddyPress překlad
Plugin URI: http://expres-web.cz
Description: Plugin, který přídá češtinu do vašeho BuddyPress.
Version: 2.4
Author: Wick.cz
Author URI: http://expres-web.cz
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
	$mofile = WP_PLUGIN_DIR . '/buddypress-preklad/jazyky/' . apply_filters( 'buddypress_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'buddypress', $mofile );
}
add_action( 'bp_loaded', 'bpt_load_textdomain' );

	// Funkce pro zobrazení widgetu na nástěnce
	function BP_ZobrazWidget(){
		?>
<div class="widget">
			<h1>Novinky</h1>
			<p><img src="http://s-plugins.wordpress.org/podpora-online/assets/banner-772x250.png?rev=637032" alt="Banner" /></p>
			<p>Stáhněte si nový plugin pro získání podpory pro překlady, pluginy, a mnoho dalšího. Dozvíte se vždy o nových překladech a mnoho dalšího. Stáhnout si ho můžete na oficiálních stránkách wordpress.org <a href="http://wordpress.org/extend/plugins/podpora-online/" title="Podpora online" target="_blank">zde</a></p>
		</div>
		<?php
	}
	
	    // Funkce pro vytvoření widgetu na nástěnce
    function BP_VytvorWidget(){
		wp_add_dashboard_widget('widget', 'Poslení novinky na wpguru.eu', 'BP_ZobrazWidget');
	}
	
	// Spuštění funkce pro vytvoření widgetu na nástěnce
	add_action('wp_dashboard_setup', 'BP_VytvorWidget');	
	
