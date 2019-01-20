<?php

namespace JazzMan\Traits;

/**
 * Trait SingletonTrait.
 */
trait SingletonTrait
{
    /**
     * @var self
     */
    private static $instance;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __wakeup()
    {
    }

    private function __clone()
    {
    }
}
