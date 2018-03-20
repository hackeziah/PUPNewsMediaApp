<?php
namespace NewsApp\Controller\Admin;

use Phalcon\Mvc\Controller;

class ControllerMain extends Controller
{
    
    public function initialize()
    {

    	//$this->tag->setTitle('PUPNewsApp');
        $this->view->setViewsDir($this->view->getViewsDir() . 'admin/');
    }

    public function beforeExecuteRoute()
    {
    	// if hindi pa naka login then back to index login
		if (!$this->session->has('auth')) {
			$this->response->redirect('index');
		}
    }
}
