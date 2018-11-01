<?php
namespace App\Controller;

/**
 * Base controller class
 */
abstract class Controller
{
    protected $requesst;
    protected $action;

    /**
     * Constructor
     * 
     * @param Array $request
     * @param String $action
     * 
     * @return void
     */
    public function __construct(Array $request, String $action)
    {
        $this->request = $request;
        $this->action = $action;
    }

    /**
     * Exceute action
     * 
     * @return void
     */
    public function executeAction()
    {
        return $this->{$this->action}();
    }

    /**
     * Return view
     * 
     * @param Array $viewModel
     * @param Boolean $fullView
     * 
     * @return void 
     */
    protected function returnView(Array $viewModel = null, Bool $fullView = false)
    {
        $class = new \ReflectionClass($this);
        $class = strtolower($class->getShortName());
        $view = __DIR__."\\..\\View\\{$class}\\{$this->action}.php";

        if ($fullView) {
            require __DIR__."\\..\\View\\main.php";
        } else {
            require $view;
        }
    }    
}