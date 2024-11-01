<?php
/*
Plugin Name: Stop ACTA Referendum
Description: When activated, this plugin will put a Stop Acta ribbon on the top right corner of your website. Aktywując ten plugin, dodasz czarną szarfę z napisem Stop Acta w prawym górnym rogu Twojej strony.
Author: activerobot
Version: 2.0
License: GPLv2
Author URI: http://socialcamp.eu
Based on Stop SOPA Ribbon: http://kovshenin.com/wordpress/plugins/stop-sopa-ribbon/

*/

function render_stop_acta_ribbon() {
	$ribbon_url = plugins_url( 'stop-acta-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='stop-acta-ribbon' href='http://www.referendumacta.pl/'><img src='{$ribbon_url}' alt='Stop ACTA' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_stop_acta_ribbon' );
