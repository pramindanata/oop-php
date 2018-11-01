<?php
namespace App\Controller;

use App\Controller\Controller;
use App\Model\Share as ShareModel;

/**
 * Share Controller
 */
class Share extends Controller
{
    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        $viewModel = new ShareModel();
        $this->returnView($viewModel->index(), true);
    }
}