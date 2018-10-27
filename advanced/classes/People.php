<?php
namespace Classes;

/**
 * People class
 */
class People
{
    public $person1 = "Mike";
    public $person2 = "Shelly";
    public $person3 = "Jeff";

    protected $person4 = "John";
    private $person5 = "Jen";

    /**
     * Iterate Object
     *
     * @return void
     */
    public function iterateObject()
    {
        foreach ($this as $key => $value) {
            echo "{$key} => {$value} <br />";
        }
    }
}
