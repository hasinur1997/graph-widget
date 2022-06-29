<?php
namespace Hasinur\GraphWidget\Abstracts;

/**
 * BaseManager abstract class
 */
abstract class BaseManager {
    /**
     * Store classes
     *
     * @var array
     */
    protected $classes = [];

    /**
     * BaseManager class constructor
     */
    public function __construct() {
        $this->load_classmap();
        $this->register_classes();
    }

    /**
     * Loads classmap for the manager
     *
     * @return void
     */
    abstract protected function load_classmap();

    /**
     * Register classes and puts it in the container
     *
     * @return void
     */
    public function register_classes() {
        foreach( $this->classes as $key => $class ) {
            $object = new $class();
        }
    }
}
