<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\User as UserModel;

/**
 * User Controller
 */
class User extends Controller
{
    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        $viewModel = new ShareModel();
        $this->returnView($viewModel->index());
    }
}