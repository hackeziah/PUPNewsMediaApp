<?php

namespace NewsApp\Controllers\User;

use Phalcon\Mvc\Controller;

class ControllerMain extends Controller
{
    public function initialize()
    {
    	$this->tag->setTitle('PUPNewsApp');
        $this->view->setViewsDir($this->view->getViewsDir() . 'user/');
    }

    public function beforeExecuteRoute()
    {
    	// if hindi pa naka login then back to index login
		if (!$this->session->has('auth')) {
			$this->response->redirect('index');
		}
    }
}
