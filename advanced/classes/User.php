<?php
namespace Classes;

/**
 * User class
 */
class User
{
    public $username;
    public static $minPassLength = 5;

    /**
     * Validate password
     *
     * @param  String $password
     *
     * @return Boolean
     */
    public static function validatePassword($password)
    {
        if (strlen($password) > self::$minPassLength) {
            return true;
        }
        
        return false;
    }
}
