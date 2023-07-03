
<?php

use Patterns\Creational\Singleton\Singleton;

require_once 'vendor/autoload.php';

$instance = Singleton::getInstance();
var_dump($instance);

// $instance2 = new Singleton(); // Fatal Error

// $instance2 = clone $instance; // Fatal Error
