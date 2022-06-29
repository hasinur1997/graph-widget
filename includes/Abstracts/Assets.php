<?php
/**
 * Assets abstract class
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget\Abstracts;

/**
 * Assets abstract class
 *
 * @since 1.0.0
 */
abstract class Assets {
	/**
	 * Register app scripts and styles
	 *
	 * @return void
	 */
	public function register() {
		$this->register_scripts();
		$this->register_styles();
	}

	/**
	 * Gets version based on script debug
	 *
	 * @return string
	 */
	protected function get_version() {
		return defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ? time() : GRAPH_WIDGET_VERSION;
	}

	/**
	 * Get script suffix based on SCRIPT_DEBUG
	 *
	 * @return string
	 */
	protected function get_suffix() {
		return defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ? '' : '.min';
	}

	/**
	 * Register scripts
	 *
	 * @return void
	 */
	private function register_scripts() {
		$scripts = $this->get_scripts();

		if ( empty( $scripts ) ) {
			return;
		}

		foreach ( $scripts as $handle => $script ) {
			$deps      = isset( $script['deps'] ) ? $script['deps'] : false;
			$in_footer = isset( $script['in_footer'] ) ? $script['in_footer'] : false;
			$version   = isset( $script['version'] ) ? $script['version'] : $this->get_version();

			wp_register_script( $handle, $script['src'], $deps, $version, $in_footer );
		}
	}

	/**
	 * Register styles
	 *
	 * @return void
	 */
	private function register_styles() {
		$styles = $this->get_styles();

		if ( empty( $styles ) ) {
			return;
		}

		foreach ( $styles as $handle => $style ) {
			$deps    = isset( $style['deps'] ) ? $style['deps'] : false;
			$version = isset( $style['version'] ) ? $style['version'] : $this->get_version();

			wp_register_style( $handle, $style['src'], $deps, $version );
		}
	}

	/**
	 * Get all register scripts
	 *
	 * @return array
	 */
	abstract protected function get_scripts();

	/**
	 * Get all register styles
	 *
	 * @return array
	 */
	abstract protected function get_styles();
}
