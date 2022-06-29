<?php
/**
 * Api manager for managing all neccesary action
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget\Api;

use Hasinur\GraphWidget\Abstracts\BaseManager;
use Hasinur\GraphWidget\Api\Controllers\Graph;

/**
 * API Manager Class.
 *
 * @since 1.0.0
 */
class Manager {
	/**
	 * All API Class
	 *
	 * @var array
	 */
	protected $classes = [];

	/**
	 * Api Manager Constructor
	 */
	public function __construct() {
		$this->classes = [
			Graph::class,
		];

		add_action( 'rest_api_init', [ $this, 'init_api' ] );
	}

	/**
	 * Register APIs.
	 *
	 * @return void
	 */
	public function init_api() {
		foreach ( $this->classes as $class ) {
			$object = new $class();
			$object->register_routes();
		}
	}
}
