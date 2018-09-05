<?php

namespace JazzMan\Traits;

/**
 * Trait SingletonTrait
 *
 * @package JazzMan\Traits
 */
trait SingletonTrait
{

    private static $instance;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if ( ! self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}