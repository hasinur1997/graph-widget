<?php
namespace Hasinur\GraphWidget;

/**
 * Handles Activation the plugin
 * 
 * @since 1.0.0
 */
class Activate {
    /**
     * Activates the plugin.
     * 
     */
    public function __construct() {
        register_activation_hook( GRAPH_WIDGET_FILE, [ $this, 'activate' ] );    
    }

    /**
     * Activate plugin
     *
     * @return void
     */
    public function activate() {
        $installer = new Install();
        $installer->run();
    }
}
