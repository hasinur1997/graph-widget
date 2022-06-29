<?php
/**
 * Base controller for api
 *
 * @package Hasinur\GraphWidget
 */

namespace Hasinur\GraphWidget\Api\Controllers;

use WP_REST_Controller;

/**
 * Base for GraphWidget Rest Controller
 *
 * @since 1.0.0
 */
class Base extends WP_REST_Controller {

	/**
	 * Permissions check for admin
	 *
	 * @return bool
	 */
	public function admin_permissions_check() {
		return current_user_can( 'manage_options' );
	}
}
