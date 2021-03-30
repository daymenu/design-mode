<?php

require(__DIR__ . "/../vendor/autoload.php");


$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$strKey = "name";
$strValue = "redis-name";
$redis->setex($strKey, 60, "redis-name");

if ($strValue == $redis->get($strKey)) {
    echo "string test success" . PHP_EOL;
}
