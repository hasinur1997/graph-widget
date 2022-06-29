<?php
namespace Hasinur\GraphWidget;

use Hasinur\GraphWidget\Data\StaticData;

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
        $this->update_plugin_version();
        $this->setup_graph_data();
    }

    /**
     * Update plugin version
     *
     * @return void
     */
    private function update_plugin_version() {
        $installed = get_option( 'graph_widget_installed' );

        if ( ! $installed ) {
            update_option( 'graph_widget_installed', time() );
        }

        update_option( 'graph_widget_installed', GRAPH_WIDGET_VERSION );
    }

    /**
     * Store graph data on database
     *
     * @return void
     */
    private function setup_graph_data() {
        update_option( 'graph_widget_data', StaticData::get() );
    }
}
