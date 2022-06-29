<?php
namespace Hasinur\GraphWidget\Api\Controllers;

use Hasinur\GraphWidget\Admin\GraphData;
use Hasinur\GraphWidget\Interfaces\ApiInterface;
use WP_REST_Server;

/**
 * Graph controller
 *
 * @since 1.0.0
 */
class Graph extends Base implements ApiInterface {

    /**
     * Graph controller constructor.
     *
     * @return void
     */
    public function __construct() {
        $this->namespace = 'graph-widget/v1';
        $this->rest_base = 'graph';
    }

    /**
     * Registers the routes for the objects of the controller.
     *
     * @return void
     */
    public function register_routes() {
        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base,
            [
                [
                    'methods'             => WP_REST_Server::READABLE,
                    'callback'            => [$this, 'graph_items'],
                    'permission_callback' => [$this, 'admin_permissions_check'],
                    'args'                => [],
                ],
                'schema' => [$this, 'get_item_schema'],
            ]

        );
    }

    /**
     * Get graph data.
     *
     * @return array
     */
    public function graph_items() {
        $data = GraphData::get();

        return rest_ensure_response( $data );
    }
}
