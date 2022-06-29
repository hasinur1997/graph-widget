<?php
namespace Hasinur\GraphWidget;

/**
 * Class TextDomain
 * 
 * @since 1.0.0
 */
class TextDomain {
    /**
     * TextDomain constructor
     */
    public function __construct() {
        add_action( 'init', [ $this, 'load_text_domain' ] );
    }

    /**
     * Load text domain
     *
     * @return void
     */
    public function load_text_domain() {
        load_plugin_textdomain( 'graph-widget', false, GRAPH_WIDGET_TEXT_DOMAIN_DIR );
    }
}
