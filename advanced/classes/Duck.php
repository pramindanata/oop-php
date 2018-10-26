<?php
namespace Classes;

require "AbstractAnimal.php";

use Classes\AbstractAnimal;

/**
 * Duck class
 */
class Duck extends AbstractAnimal
{
    /**
     * Describe animal
     *
     * @return void
     */
    public function describe()
    {
        return parent::describe();
    }

    /**
     * Make sound
     *
     * @return void
     */
    public function makeSound()
    {
        echo "Quack quack quack <br />";
    }
}
