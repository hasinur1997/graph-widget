<?php
namespace Hasinur\GraphWidget;

/**
 * Class Setup
 * 
 * @package GraphWidget
 * 
 * @since 1.0.0
 */
class Setup {
    /**
     * Setup constructor
     */
    public function __construct() {
        // Handles the activation hook.
        new Activate();

        // Handles the deactivation hook.
        new Deactivate();

        // Loads the plugins text domain for translation.
        new TextDomain();

        // Initialize the plugin.
        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );  
    }

    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin() {
        $this->load_classes();
    }

    /**
     * Loads all the classes
     *
     * @return void
     */
    public function load_classes() {
        // Load admin manager.
        if ( is_admin() ) {
            new Admin\Manager();
        }
    }
}
