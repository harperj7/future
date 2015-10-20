<?php

namespace Shapes;

/**
 * Class ClassPyramid
 * Used to calculate the volume of a pyramid based off of the given height, base width and base length
 *
 * @package Shapes
 */
class ClassPyramid
{

    protected $height = 0;
    protected $base_length = 0;
    protected $base_width = 0;
    protected $type;

    /**
     * Specify the type of base the pyramid has. Values accepted: triangle, square, rectangle
     * @param string $type
     */
    function __construct($type) {
        $this->type = strtolower($type);
    }

    /**
     * Set the height of the pyramid
     *
     * @param float|int $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * Set the length of the base of the pyramid
     *
     * @param float|int $length
     */
    public function setBaseLength($length) {
        $this->base_length = $length;
    }

    /**
     * Set the width of the base of the pyramid
     *
     * @param float|int $width
     */
    public function setBaseWidth($width) {
        $this->base_width = $width;
    }

    /**
     * Get the calculated volume of the pyramid, dependant on the type of base it has
     *
     * @return float|int
     */
    public function getVolume() {

        switch ($this->type) {

            case 'triangle':
                $base_area = 0.5 * ($this->base_length * $this->base_width);
                $volume = $base_area * $this->height;
                break;
            case 'rectangle':
                $base_area = ($this->base_length * $this->base_width);
                $volume = $base_area * $this->height;
                break;
            case 'square':
                $base_area = 0;
                if ($this->base_width !== 0) {
                    $base_area = $this->base_width * $this->base_width;
                } elseif ($this->base_length !== 0) {
                    $base_area = $this->base_length * $this->base_length;
                }
                $volume = $base_area * $this->height;
                break;
            default:
                $volume = 0;

        }

        return $volume;
    }

}