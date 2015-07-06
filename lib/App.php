<?php


namespace PHimL;

class App
{

    static $app = 'PHimL';
    static $release = '0.0.1-dev';
    private static $instance = null;
    
    public $width;
    public $height;
    public $levels;
    
    static function initApp()
    {
        if ( self::$instance == null ) {
            self::$instance = new \PHimL\App();
        }
        
        return self::$instance;
        
    }
    
    public function __construct() {}
    
    public function __clone() {}
    
    public function __wakeup() {}
    
    public function setLevels()
    {
        return $this->levels = new \PHimL\Core\Level();
    }
    
    
}
