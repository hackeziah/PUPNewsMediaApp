<?php

namespace NewsApp\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize()
    {
    	$this->tag->setTitle('Phalcon Advance');
    }

    public function beforeExecuteRoute()
    {
    	// if hindi pa naka login then back to index login
		if (!$this->session->has('auth')) {
			$this->response->redirect('index');
		}
    }
}
