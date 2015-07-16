<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHimL;

use PHimL\Abstraction\GdLibrary;

class App {
    
    public $width;
    public $height;
    
    public $library;
    
    public function __construct($width, $height)
    {
        $this->library = new GdLibrary();
        
        // $this->level 
        
    }
    
}
