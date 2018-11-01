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
    protected function returnView(Array $viewModel, Bool $fullView = false)
    {
        $view = __DIR__."\\..\\View\\".get_class($this)."\\{$this->action}.php";

        if ($fullView) {
            require __DIR__."\\..\\Views\\main.php";
        } else {
            require $view;
        }
    }    
}