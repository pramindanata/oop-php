<?php
namespace basic;

/**
 * User Class
 */
class User
{
    /**
     * Register user
     *
     * @return void
     */
    public function register()
    {
        echo 'User registered';
    }

    /**
     * Login user
     *
     * @param  String $username
     * @param  String $password
     *
     * @return void
     */
    public function login($username, $password)
    {
        echo 'User login';
    }
}
