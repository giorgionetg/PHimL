<?php

class AppTest extends PHPUnit_Framework_TestCase
{

    /**
     * 
     */
    public function testInitialization()
    {
        $phiml = PHimL\App::initApp();
        
        $this->assertInstanceOf('PHimL\App', $phiml);
        
    }
    
    public function testSetLevel()
    {
        $phiml = PHimL\App::initApp();
        $phiml->setLevels();
        
        $this->assertInstanceOf('PHimL\Core\Level', $phiml->levels);
        
    }
    
}
