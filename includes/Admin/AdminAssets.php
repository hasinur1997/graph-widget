<?php
/**
 * Admin assets for managing admin related assets
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget\Admin;

use Hasinur\GraphWidget\Abstracts\Assets;

/**
 * Scripts and Styles Class.
 *
 * @since 1.0.0
 */
class AdminAssets extends Assets {
	/**
	 * AdminAssets Constructor
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
	}

	/**
	 * Register app scripts and styles
	 *
	 * @return void
	 */
	public function enqueue_scripts() {
		$this->register();
		$this->load_scripts();
	}

	/**
	 * Get all registered scripts
	 *
	 * @return array
	 */
	protected function get_scripts() {
		return [
			'main-js' => [
				'src'       => GRAPH_WIDGET_ASSET . '/js/main.js',
				'version'   => $this->get_version(),
				'in_footer' => true,
			],
		];
	}

	/**
	 * Get all styles
	 *
	 * @return array
	 */
	protected function get_styles() {
		return [
			'main-style' => [
				'src'     => GRAPH_WIDGET_ASSET . '/css/main.css',
				'version' => $this->get_version(),
			],
		];
	}

	/**
	 * Loads scripts
	 *
	 * @return void
	 */
	private function load_scripts() {
		wp_enqueue_script( 'main-js' );
		wp_enqueue_style( 'main-style' );
	}
}
