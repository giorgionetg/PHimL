<?php

class AppTest extends PHPUnit_Framework_TestCase
{

    /**
     * 
     */
    public function testInitialization()
    {
        $phiml = new PHimL\App(320, 240);
        
        $this->assertInstanceOf('PHimL\App', $phiml);
        $this->assertInstanceOf('PHiml\Abstraction\GdLibrary', $phiml->library);

    }
    
}
