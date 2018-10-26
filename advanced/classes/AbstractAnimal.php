<?php
namespace Classes;

/**
 * Animal abstract class
 */
abstract class AbstractAnimal
{
    public $name;
    public $color;

    /**
     * Describe animal
     *
     * @return void
     */
    public function describe()
    {
        echo "{$this->name} is {$this->color} <br />";
    }

    /**
     * Make sound
     *
     * @return void
     */
    abstract public function makeSound();
}
