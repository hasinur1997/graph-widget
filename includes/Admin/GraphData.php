<?php
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
    public static $OPTION_KEY = 'graph_widget';

    /**
     * Get graph data
     *
     * @return array
     */
    public static function get() {
        $data = get_option( self::$OPTION_KEY );

        return $data;
    }

    /**
     * Update graph data
     *
     * @since 1.0.0
     * 
     * @param array $data
     * @return void
     */
    public static function update( $data ) {
        update_option( self::$OPTION_KEY, $data );
    }
}
