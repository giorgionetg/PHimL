<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHimL\Abstraction;

/**
 * Description of BaseLibrary
 *
 * @author quantum_gtedesco
 */
abstract class BaseLibrary
{
    public function __construct()
    {
        if (gd_info()){
            return true;
        }
        
        return false();
    }
}
