<?php



namespace PHimL\Core;


class Image implements \ArrayAccess {
    
    protected $src;
    
    
    public function offsetGet($offset)
    {
        return $this->src[$offset];
    }
    
    public function offsetSet($offset, \PHimL\Core\Pixel $pixel)
    {
        $this->src[$offset] = $pixel;
    }
    
    public function offsetExists($offset)
    {
        if ($this->src[$offset] instanceof \PHimL\Core\Pixel) {
            return TRUE;
        }
        return FALSE;
    }
    
    public function offsetUnset($offset)
    {
        return;
    }
    
}
