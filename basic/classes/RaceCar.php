<?php
namespace Classes;

require "Car.php";

use Basic\Car;

/**
 * Race Car Class
 */
class RaceCar extends Car
{
    /**
     * Turn on the nitro
     *
     * @return void
     */
    public function turnOnNitro()
    {
        echo "WHOOOOOSHHH.....<br />";
    }
}
