<?php


namespace Singleton;
/**
 * 全局配置类
 */
class Config
{
    private $configArr;

    private static $instance = new self();

    private function __construct()
    {
        
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set($key, $value)
    {
        $this->configArr[$key]  = $value;
    }

    public function get($key)
    {
        return $this->configArr[$key];
    }

    public function all()
    {
        return $this->configArr;
    }

    private function __clone()
    {
        
    }
}
