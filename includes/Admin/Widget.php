<?php
/**
 * Dashboard widget registration
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget\Admin;

/**
 * Widget class
 */
class Widget {
	/**
	 * Widget class constructor.
	 */
	public function __construct() {
		// Initialize hooks.
		add_action( 'wp_dashboard_setup', [ $this, 'register_dashobard_widget' ] );
	}

	/**
	 * Register dashboard widget
	 *
	 * @return void
	 */
	public function register_dashobard_widget() {
		wp_add_dashboard_widget(
			'graph_widget',
			__( 'Graph Widget', 'graph-widget' ),
			[ $this, 'widget_content' ],
			null,
			null,
			'side',
			'high'
		);
	}

	/**
	 * Render the widget contents
	 *
	 * @return void
	 */
	public function widget_content() {
		echo '<div id="graph-widget"></div>';
	}
}
