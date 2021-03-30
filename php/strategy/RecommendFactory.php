<?php


namespace Strategy;

use Exception;

class RecommendFactory
{
    public static function getRecommend(int $type)
    {
        if (empty($type)) {
            throw new Exception("没有对应的推荐策略");
        }

        switch ($type) {
            case 1:
                return new ManRecommend();
            case 2:
                return new WomanRecommend();
            default:
                throw new Exception("没有对应的推荐策略");
        }
    }
}
