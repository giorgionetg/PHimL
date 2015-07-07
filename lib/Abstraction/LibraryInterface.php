<?php

namespace PHimL\Abstraction;


interface LibraryInterface
{
    public function getImageSize();
    public function setImageResource($path); // Return PHimL\Core\Image instance
    public function getPixelValue($row, $col);
}
