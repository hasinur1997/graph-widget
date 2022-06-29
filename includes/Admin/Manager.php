<?php
namespace Hasinur\GraphWidget\Admin;

use Hasinur\GraphWidget\Abstracts\BaseManager;

/**
 * Admin Manage Class.
 */
class Manager extends BaseManager {

    /**
     * Admin manager constructor.
     * Handles admin initializations.
     *
     * @since 1.0.0
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Load classes for the manager
     *
     * @return void
     */
    protected function load_classmap() {
        $this->classes = [
            'admin_asset' => AdminAssets::class,
            'widget'      => Widget::class,
        ];
    }
    
}
