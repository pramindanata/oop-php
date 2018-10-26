<?php
namespace Classes;

/**
 * User Class
 */
class User
{
    private $id = 33;
    private $username;
    private $email;
    private $password;

    /**
     * __construct
     *
     * @param  String $username
     * @param  String $password
     *
     * @return void
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        echo "Constructor called<br />";
    }

    /**
     * __destruct
     *
     * @return void
     */
    public function __destruct()
    {
        echo "Desctruction called<br />";
    }

    /**
     * Register user
     *
     * @return void
     */
    public function register()
    {
        echo "User registered<br />";
    }

    /**
     * Login user
     *
     * @return void
     */
    public function login()
    {
        $this->authenticate();
    }

    /**
     * Authenticate
     *
     * @return void
     */
    private function authenticate()
    {
        echo "{$this->username} is authenticated.<br />";
    }
}
