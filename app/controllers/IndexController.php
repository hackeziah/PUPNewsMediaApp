<?php

namespace NewsApp\Controllers;
use NewsApp\Forms\LoginForm;
use NewsApp\Forms\RegistrationForm;


use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function initialize()
	{
		$this->tag->setTitle('Login');

		if ($this->session->has('auth')) {
			$this->response->redirect('admin/index');
		}
	}

	public function indexAction()
	{

		$loginForm = new LoginForm();
		$this->view->loginForm = $loginForm;
	
	}

	public function registrationAction()
	{

		$registerForm= new RegistrationForm();
		$this->view->registerForm = $registerForm;


	}
	
	public function forgotpassAction()
	{
		
	}
		
	
}
