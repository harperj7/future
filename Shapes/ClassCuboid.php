<?php

namespace Shapes;

/**
 * Class ClassCuboid
 * Used to calculate the volume of a cuboid based off of the given height, width and length
 *
 * @package Shapes
 */
class ClassCuboid {

    protected $height = 0;
    protected $width = 0;
    protected $length = 0;

    /**
     * Set the height of the cuboid
     *
     * @param float|int $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * Set the width of the cuboid
     *
     * @param float|int $width
     */
    public function setWidth($width) {
        $this->width = $width;
    }

    /**
     * Set the length of the cuboid
     *
     * @param float|int $length
     */
    public function setLength($length) {
        $this->length = $length;
    }

    /**
     * @return int The calculated volume of the cuboid
     */
    public function getVolume() {

        return ($this->length * $this->width * $this->height);
    }

}