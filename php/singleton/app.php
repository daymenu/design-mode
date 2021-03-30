<?php

require(__DIR__ . "/../vendor/autoload.php");

use Singleton\Config;

$config = Config::getInstance();
$config->set("name", "singleton");

$configMore = Config::getInstance();
$configMore->set("name", "singleton more");

var_dump($config->get("name"));