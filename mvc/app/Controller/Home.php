<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\Home as HomeModel;

/**
 * Home Controller
 */
class Home extends Controller
{
    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        // $viewModel = new HomeModel();
        $this->returnView(null, true);
    }
}