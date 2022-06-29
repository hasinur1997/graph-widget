<?php
/**
 * Graph data class for fetching graph data
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget\Admin;

/**
 * GraphData class.
 *
 * @since 1.0.0
 */
class GraphData {
	/**
	 * Graph data option name.
	 *
	 * @var string
	 */
	public static $option_key = 'graph_widget_data';

	/**
	 * Get graph data
	 *
	 * @return array
	 */
	public static function get() {
		$data = get_option( self::$option_key );

		return $data;
	}

	/**
	 * Update graph data
	 *
	 * @since 1.0.0
	 *
	 * @param array $data graph data.
	 * @return void
	 */
	public static function update( $data ) {
		update_option( self::$option_key, $data );
	}
}
