<?php
namespace Hasinur\GraphWidget;

/**
 * Installer class
 * 
 * @since 1.0.0
 */
class Install {
    /**
     * Run the installer 
     * 
     * @since 1.0.0
     *
     * @return void
     */
    public function run() {
        $installed = get_option( 'graph_widget_installed' );

        if ( ! $installed ) {
            update_option( 'graph_widget_installed', time() );
        }

        update_option( 'graph_widget_installed', GRAPH_WIDGET_VERSION );
    }
}
