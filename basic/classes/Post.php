<?php
namespace Classes;

/**
 * Post Class
 */
class Post
{
    private $name;

    /**
     * Check if private propery is set.
     *
     * @param  String $name
     *
     * @return void
     */
    public function __isset($name)
    {
        echo "Is {$name} set: ";
        
        return isset($this->name);
    }

    /**
     * Object getter. Get private property.
     *
     * @param  mixed $name
     *
     * @return void
     */
    public function __get($name)
    {
        echo "Getting {$name}: <strong>{$this->name}</strong><br />";
    }

    /**
     * Object setter. Set private property.
     *
     * @param  String $name
     * @param  String $value
     *
     * @return void
     */
    public function __set($name, $value)
    {
        $this->name = $value;
        
        echo "Setting {$name} to <strong>{$value}</strong><br />";
    }
}
