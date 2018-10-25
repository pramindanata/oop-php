<?php
namespace basic;

/**
 * Aawdawd
 */
class User
{
    /**
     * Register user
     *
     * @return Boolean
     */
    public function register()
    {
        echo 'User registered';
    }

    /**
     * Login user
     *
     * @param String $username
     * @param String $password
     *
     * @return Boolean
     */
    public function login($username, $password)
    {
        echo 'User login';
    }
}

$user = new User();
$user->register();
$user->login();
