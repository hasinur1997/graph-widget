<?php
/**
 * Task for plugin deactivation
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget;

/**
 * Handles plugin deactivation.
 */
class Deactivate {
	/**
	 * Deactivate constructor.
	 */
	public function __construct() {
		register_deactivation_hook( GRAPH_WIDGET_FILE, [ $this, 'deactivate' ] );
	}

	/**
	 * Deactivate the plugin
	 *
	 * @return void
	 */
	public function deactivate() {
		delete_option( 'graph_widget_data' );
	}
}
