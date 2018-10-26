<?php
namespace Basic;

/**
 * Car Class
 */
class Car
{
    public $wheels = 4;
    protected $hasRadio = true;

    /**
     * Turn on the engine
     *
     * @return void
     */
    public function turnOnEngine()
    {
        echo "brum bum bum bum.....<br />";
    }

    /**
     * Gas the car
     *
     * @return void
     */
    public function gas()
    {
        echo "Brooom brooom ngeeeeeng...<br />";
    }
}
