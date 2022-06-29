<?php
/**
 * Plugin Name:       Graph Widget
 * Plugin URI:        https://github.com/hasinur1997/
 * Description:       A simple plugin for dashboard widget
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hasinur Rahman
 * Author URI:        https://github.com/hasinur1997/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/hasinur1997/
 * Text Domain:       graph-widget
 * Domain Path:       /languages
 */

 /*
 * Copyright (c) 2022 Hasinur Rahman (email: hasinurrahman3@gmail.com). All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */

defined( 'ABSPATH' ) || exit;

require __DIR__ . '/vendor/autoload.php';

/**
 * DashboardWidget class
 */
final class GraphWidget {

    /**
     * Plugin version
     *
     * @var string
     */
    private $version = '1.0.0';

    /**
     * DashboardWidget Constructor
     */
    public function __construct() {
        // Define constant.
        $this->define_constants();

        // Setup plugin.
        new \Hasinur\GraphWidget\Setup();
    }

    /**
     * Define plugin constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'GRAPH_WIDGET_VERSION', $this->version );
        define( 'GRAPH_WIDGET_FILE', __FILE__ );
        define( 'GRAPH_WIDGET_URL', plugins_url( '', GRAPH_WIDGET_FILE ) );
        define( 'GRAPH_WIDGET_ASSET', GRAPH_WIDGET_URL . '/assets' );
        define( 'GRAPH_WIDGET_TEXT_DOMAIN_DIR', dirname( plugin_basename( __FILE__ ) ) . '/languages' );
        define( 'GRAPH_WIDGET_TEXT_INCLUDES', plugins_url( 'includes', GRAPH_WIDGET_FILE ) );
    }

    /**
     * Initializes the GraphWidget class
     * 
     * Checks  for an existing  GraphWidget instance 
     * 
     * and if it doesn't  find one, creates it.
     * 
     *
     * @return GraphWidget
     */
    public static function instance() {
        static $instance = false;
       
        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }
}

/**
 * Return the instance
 *
 * @return GraphWidget
 */
function graph_widget() {
    return GraphWidget::instance();
}

// Kick Off 
graph_widget();
