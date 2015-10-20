<?php

namespace Shapes;

/**
 * Class ClassCylinder
 * Used to calculate the volume of a cylinder based off of the given height and radius
 *
 * @package Shapes
 */
class ClassCylinder {

    protected $height = 0;
    protected $radius = 0;
    protected $pi;

    /**
     * Initialise the pi variable to the returned value of the built in PHP pi function
     */
    function __construct() {
        $this->pi = pi();
    }

    /**
     * Set the height of the cylinder
     *
     * @param float|int $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * Set the radius of the cylinder
     *
     * @param float|int $radius
     */
    public function setRadius($radius) {
        $this->radius = $radius;
    }

    /**
     * Get the total volume of the cylinder - based on the set height and radius
     *
     * @return float Volume of the cylinder
     */
    public function getVolume() {

        return (($this->pi * pow($this->radius, 2)) * $this->height);
    }

}