<?php

namespace Patterns\Creational\Singleton;

final class Singleton
{
    private static ?self $instance = null;

    private function __construct()
    {
        //
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
        //
    }

    public function __wakeup()
    {
        throw new \Exception('Cannot unserialize Singleton');
    }
}
