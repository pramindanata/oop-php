<?php
namespace App;

/**
 * Bootstrap class
 */
class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    /**
     * Constructor
     * 
     * @param Array $request 
     * 
     * @return void
     */
    public function __construct(Array $request)
    {
        $this->request = $request;

        if ($this->request['controller'] === "") {
            $this->controller = "Home";
        } else {
            $this->controller = ucfirst($this->request['controller']);
        }

        if ($this->request['action'] === "") {
            $this->action = "index";
        } else {
            $this->action = $this->request['action'];
        }
    }

    /**
     * Check and create controller
     * 
     * @return void
     */
    public function createController()
    {
        $controllerClass = "App\\Controller\\{$this->controller}";

        if (class_exists($controllerClass)) {
            if (method_exists($controllerClass, $this->action)) {
                return new $controllerClass($this->request, $this->action);
            } else {
                echo "Method does not exists";
                http_response_code(500);

                die();
            }
        } else {
            echo "Controller does not exists";
            http_response_code(500);

            die();
        }
    }
}
