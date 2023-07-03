<?php

namespace Patterns\Creational\Singleton;

final class Singleton
{
    private string $name = 'Sergei';
    private static ?self $instance = null;

    private function __construct()
    {
        //
    }

    public function getName()
    {
        return $this->name;
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
        throw new \Exception('You cannot unserialize Singleton');
    }
}
