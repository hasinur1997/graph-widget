<?php
namespace Hasinur\GraphWidget\Admin;

/**
 * Widget class
 */
class Widget {
    /**
     * Widget class constructor.
     */
    public function __construct() {
        error_log(print_r("Widget Loaded !", true));
        // Initialize hooks.
        add_action( 'wp_dashboard_setup', [ $this, 'register_dashobard_widget' ] );
    }

    /**
     * Register dashboard widget
     *
     * @return void
     */
    public function register_dashobard_widget() {
        wp_add_dashboard_widget(
            'graph_widget',
            __( 'Graph Widget', 'graph-widget' ),
            [ $this, 'widget_content' ]
        );
    }

    /**
     * Render the widget contents
     *
     * @return void
     */
    public function widget_content() {
        echo '<div id="graph-widget"></div>';
    }
}
