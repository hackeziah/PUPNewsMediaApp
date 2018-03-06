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

		//added condition
		if ($this->session->has('authAdmin')) {
			$this->response->redirect('admin/dashboard');
		}elseif ($this->session->has('authUser')) {
			$this->response->redirect('user/home');
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
