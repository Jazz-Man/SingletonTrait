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
     * @param null|mixed ...$props
     *
     * @return self
     */
    public static function getInstance(...$props)
    {
        if (null === self::$instance) {
            self::$instance = new self(...$props);
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
