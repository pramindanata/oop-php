<?php
namespace basic;

/**
 * User Class
 */
class User
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        echo "Constructor called\n";
    }

    /**
     * Register user
     *
     * @return void
     */
    public function register()
    {
        echo "User registered\n";
    }

    /**
     * __destruct
     *
     * @return void
     */
    public function __destruct()
    {
        echo "Desctruction called\n";
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
        $this->authenticate($username, $password);
    }
}
