<?php

require(__DIR__ . "/../vendor/autoload.php");

use Strategy\RecommendFactory;

$recommend = RecommendFactory::getRecommend(2);
echo $recommend->nightRead() . PHP_EOL;

