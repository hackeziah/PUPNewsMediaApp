<?php

namespace NewsApp\Controllers;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function initialize()
	{
		$this->tag->setTitle('Login');

		if ($this->session->has('auth')) {
			$this->response->redirect('dashboard');
		}
	}

	public function indexAction()
	{

	 	

	}
	
	
}
